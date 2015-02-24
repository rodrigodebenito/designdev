TheScoop.ModelCategoryList = TheScoop.Model.extend({

	name			: "ModelCategoryList",
	localStorageKey	: "categoryData",

	constructor : function(url) {

		//console.log(this.name + ".constructor");
		//console.log(this.name + ".constructor: url = " + url);
		this.url = url;
		this.base( );
		
	},
	
	loadDataMessage : function( ) {
		
		//console.log(this.name + ".loadDataMessage");
		return "Loading category list...";
		
	},
	
	loadFailed : function ( ) {
		
		//console.log(this.name + ".loadFailed");
		$.publish("/controllerModels/failedCategoryList");
		
	},
	
	processSuccess : function( ) {
		
		//console.log(this.name + ".processSuccess");
		$.publish("/controllerModels/processSuccessCategoryList");
		
	}
	

});	