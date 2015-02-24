TheScoop.ControllerModels = TheScoop.Controller.extend({
	
	categoryUrl			: 'http://mobile.nytimes.com/iphone/scoop/category/newcategorylist.json',
	
	modelsIds			: new Array( ),
	modelsUrls			: new Array( ),
	modelsNumber 		: 0,
	
	modelCategoryList	: null,
	modelLists			: new Array( ),
	
	constructor : function( ) {
		
		//console.log("ControllerModels.constructor");
		
		var that = this;
		
		$.subscribe("/controllerModels/failedCategoryList", function( ) {
			//console.log("ControllerModels.constructor /controllerModels/failedCategoryList");
			that.failedCategoryList( );
		});
		
		$.subscribe("/controllerModels/processSuccessCategoryList", function( ) {
			//console.log("ControllerModels.constructor /controllerModels/processSuccessCategoryList");
			that.processSuccessCategoryList( );
		});
		
		$.subscribe("/controllerModels/failedModelList", function(feedId) {
			//console.log("ControllerModels.constructor /controllerModels/failedModelList");
			that.failedModelList(feedId);
		});
		
		$.subscribe("/controllerModels/processSuccessModelList", function(feedId) {
			//console.log("ControllerModels.constructor /controllerModels/processSuccessModelList");
			that.processSuccessModelList(feedId);
		});
		
		this.modelCategoryList = new TheScoop.ModelCategoryList(this.categoryUrl);
		this.modelCategoryList.init( );
		
	},
	
	getModelsIds : function( ) {
		return this.modelsIds;
	},
	
	getModelsList : function(id) {
		return this.modelLists[id];
	},
	
	getModelCategoryList : function( ) {
		return this.modelCategoryList;
	},
	
	removeInvalidFeed : function(modelId) {
		
		//console.log("ControllerModels.removeInvalidFeed");
		delete this.modelsIds[modelId];
		delete this.modelsUrls[modelId];
		
	},
	
	failedCategoryList : function( ) {
		
		//console.log("ControllerModels.failedCategoryList");
		$.publish("/viewMessage/updateMessage", ["Failed to load categories"]);
		
	},
	
	processSuccessCategoryList : function( ) {
		
		//console.log("ControllerModels.processSuccessCategoryList");
		
		$.publish("/viewMessage/updateMessage", ["Categories loaded"]);
		
		var modelId;
		var feedUrl;
		
		//console.log(this.modelCategoryList);
		
		for(var i = 0; i < this.modelCategoryList.json["categories"].length; i++) {

			modelId = this.modelCategoryList.json["categories"][i]["uniqueID"];
			feedUrl = this.modelCategoryList.json["categories"][i]["feedURL"];
			
			//console.log("ControllerModels.receivedCategoryList: uniqueId = " + modelId);
			//console.log("ControllerModels.receivedCategoryList: feedURL = " + feedUrl);
			
			this.modelsIds.push(modelId);
			this.modelsUrls[modelId] = feedUrl;
			
		}
		
		//console.log("ControllerModels.processSuccessCategoryList: number of feeds = " + this.modelsIds.length);
		
		$.publish("/viewMessage/updateMessage", ["Loading data (0 / " + this.modelsIds.length + ")..."]);
		
		for(var i = 0; i < this.modelsIds.length; i++) {
			
			modelId = this.modelsIds[i];
			feedUrl = this.modelsUrls[modelId];
			
			//console.log("ControllerModels.receivedCategoryList: uniqueId = " + modelId);
			//console.log("ControllerModels.receivedCategoryList: feedURL = " + feedUrl);
			
			this.modelLists[modelId] = new TheScoop.ModelList(modelId, feedUrl);
			this.modelLists[modelId].init( );
			
		}
		
	},
	
	failedModelList : function(modelId) {
		
		//console.log("ControllerModels.failedModelList: feedId = " + modelId);
		this.removeInvalidFeed( );
		this.checkModelTotal( );
		
	},
	
	processSuccessModelList : function(modelId) {
		
		//console.log("ControllerModels.processSuccessModelList: feedId = " + modelId);
		this.modelsNumber++;
		this.checkModelTotal( );
		
	},
	
	checkModelTotal : function( ) {
		
		//console.log("ControllerModels.checkModelTotal");
		
		$.publish("/viewMessage/updateMessage", ["Loading data (" + this.modelsNumber + " / " + this.modelsIds.length + ")..."]);
		
		if(this.modelsNumber == 0 && this.modelsIds.length == 0) {
			$.publish("/viewMessage/updateMessage", ["Failed to load any lists"]);
		} else if(this.modelsNumber == this.modelsIds.length) {
			//console.log("ControllerModels.checkModelTotal: /controllerTheScoop/dataLoaded");
			$.publish("/controllerTheScoop/dataLoaded");
		}
		
	}
	
});