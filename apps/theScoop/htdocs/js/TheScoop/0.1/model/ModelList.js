TheScoop.ModelList = TheScoop.Model.extend({

	constructor : function(id, url) {
		
		this.name				= id;
		this.localStorageKey	= id;
		this.url				= url;
		
		//console.log(this.name + ".constructor");
		//console.log(this.name + ".constructor id = " + id);
		//console.log(this.name + ".constructor url = " + url);
		this.base( );
		
	},
	
	loadFailed : function ( ) {
		
		//console.log(this.name + ".loadFailed");
		$.publish("/controllerModels/failedModelList");
	},
	
	processSuccess : function( ) {
		
		//console.log(this.name + ".processSuccess");
		
		this.correctData( );
		$.publish("/controllerModels/processSuccessModelList", [this.localStorageKey]);
		
	},
	
	correctData : function( ) {
		
		//console.log(this.name + ".correctData");
		
		//this.json.list.category = "";
		//this.json.list.title = "";
		
		if(this.name == "restaurants") {
			
		} else if(this.name == "bars") {
			
		} else if(this.name == "coffeeshops") {
			
		} else if(this.name == "thisweek") {
			
		} else if(this.name == "timeless") {
			this.json.list.category = "Only in N.Y.";
		} else if(this.name == "daytrips") {
			
		} else if(this.name == "househome") {
			this.json.list.category = "Home Furnishings";
		} else if(this.name == "shopping") {
			
		}
		
	}

});