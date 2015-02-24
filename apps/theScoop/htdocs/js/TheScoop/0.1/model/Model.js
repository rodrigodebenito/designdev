TheScoop.Model = base2.Base.extend({
	
	jsonGetter		: "./php/json.php?url=",
	name			: "Model",
	data			: "",
	json			: null,
	localStorageKey	: null,
	url				: null,
	
	constructor : function( ) {
		
		//console.log("Model.constructor");
		
	},
	
	init : function( ) {
		
		var loadTimeStamp = localStorage.getItem(this.localStorageKey + "TimeStamp");
		var nowTimeStamp = new Date( ).getTime( );
		
		//console.log(this.localStorageKey + "TimeStamp = " + loadTimeStamp);
		
		//if(true) {
		if(nowTimeStamp - loadTimeStamp > 1000 * 60 * 60) {
		
			if(this.localStorageKey && this.url) {
				this.loadData( );
			} else {
				//console.log(this.name + ".loadData: localStorageKey is null");
			}
			
		} else {
			
			this.processData( );
			
		}
		
	},
	
	loadDataMessage : function( ) {
		
		//console.log("Model.loadDataMessage");
		return "Loading data...";
	},
	
	loadData : function( ) {
		
		//console.log(this.name + ".loadData: url = " + this.url);
		$.publish("/viewMessage/updateMessage", [this.loadDataMessage( )]);
		
		var that = this;
		$.ajax(
			{
				url: this.jsonGetter + this.url,
				context: this,
				dataType: "text"
			}
		)
		.success(function (data) { that.loadSuccess(data); })
		.error(function ( ) { that.loadFailed( ); })
		
	},
	
	loadFailed : function ( ) {
		//console.log(this.name + ".loadFailed");
	},
	
	loadSuccess : function (data) {
		
		//console.log(this.name + ".loadSuccess");
		localStorage.setItem(this.localStorageKey, data);
		
		var timeStamp = new Date( ).getTime( );
		localStorage.setItem(this.localStorageKey + "TimeStamp", timeStamp);
		
		this.processData( );
		
	},
	
	processData : function( ) {
		
		//console.log(this.name + ".processData");
		
		this.data = localStorage.getItem(this.localStorageKey);
		////console.log(this.name + ".loadData: data follows");
		////console.log(this.data);
		
		if(this.data && this.data != "") {
			
			try {

				this.json = $.parseJSON(this.data);
				
				//console.log(this.name + ".loadData: json follows");
				//console.log(this.json);
				
			} catch(err) {
				
				$.publish("/viewMessage/updateMessage", [this.localStorageKey + " is invalid JSON"]);
				
				//console.log("*********************************");
				//console.log("*********************************");
				//console.log("*********************************");
				//console.log(this.localStorageKey + " is invalid JSON");
				//console.log("*********************************");
				//console.log("*********************************");
				//console.log("*********************************");
				
				$.publish("/controller/removeInvalidFeed", [this.localStorageKey]);
				
			}
			
			if(this.json) {
				this.processSuccess( );
			}
			
		} else {
			
			//console.log(this.name + ".loadData: data error");
			
		}
		
	},
	
	processSuccess : function( ) {
		//console.log("Model.processSuccess");
	}

});