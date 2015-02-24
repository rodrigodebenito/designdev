TheScoop.ControllerTheScoop = TheScoop.Controller.extend({
	
	feedsIds		: new Array( ),
	feedsUrls		: new Array( ),
	feedsReceived 	: 0,
	views			: new Array( ),
	viewCurrent		: null,
	startView		: "viewHome",
	
	constructor : function( ) {
		
		console.log("ControllerTheScoop.constructor");
		
		var frag = $.param.fragment( );
		console.log("ControllerTheScoop.constructor: frag = " + frag);
		
		frag = frag.substring(2, frag.length);
		console.log("ControllerTheScoop.constructor: frag = " + frag);
		
		if(frag != "" && frag != undefined) {
			var fragPiece = $.getFragPiece(1);
			console.log("ControllerTheScoop.constructor: fragPiece = " + fragPiece);
			var viewObjectName = this.fragmentToOjectName(fragPiece);
			if(TheScoop[viewObjectName]) this.startView = frag;
		}
		console.log("ControllerTheScoop.constructor: this.startView = " + this.startView);
		
		this.updateHash("");
		this.createView("ViewMessage");
		
		var that = this;
		$(window).bind('hashchange', function(e) {
			that.onHashChange( );
		});
		
		$.subscribe("/controllerTheScoop/dataLoaded", function( ) {
			console.log("ControllerTheScoop.constructor /controllerTheScoop/dataLoaded");
			that.dataLoaded( );
		});
		/*
		$.subscribe("/controllerTheScoop", function(frag) {
			console.log("ControllerTheScoop.constructor /controllerTheScoop/updateHash");
			that.updateHash(frag);
		});
		*/
		if(this.checkRequirements( )) {
			TheScoop.controllerModels = new TheScoop.ControllerModels( );
		}
		
	},
	
	fragmentToOjectName : function(frag) {
		return frag.charAt(0).toUpperCase( ) + frag.slice(1);
	},
	
	checkRequirements : function( ) {
	
		if(Modernizr.localstorage == false) {
			$.publish("/viewMessage/updateMessage", ["Unfortunately, you will need to update your browser to run this application."]);
			return false;
		} else {
			return true;
		}
		
	},
	
	updateHash : function(frag) {
		if(frag != "") frag = "!/" + frag;
		window.location.hash = frag;
		/* this.updateView( ); */
	},
	
	onHashChange : function( ) {
		
		console.log("ControllerTheScoop.onHashChange");
		this.updateView( );
		
	},
	
	updateView : function( ) {

		var fragView = $.getFragPiece(1);
		console.log("ControllerTheScoop.updateView: fragView = " + fragView);

		if(fragView != undefined) {

			if(this.views[fragView]) {

				console.log("ControllerTheScoop.updateView: this.views[" + fragView + "].show( )");
				this.displayView(this.views[fragView]);

			} else {

				var viewObjectName = this.fragmentToOjectName(fragView);
				console.log("ControllerTheScoop.updateView: viewObjectName = " + viewObjectName);
				if(TheScoop[viewObjectName]) this.createView(viewObjectName);

			}

		}

		var fragModel = $.getFragPiece(2);
		console.log("ControllerTheScoop.updateView: fragModel = " + fragModel);
		if(fragModel != undefined) {
			if(this.viewCurrent && this.viewCurrent.setCurrentModel) {
				this.viewCurrent.setCurrentModel(fragModel);
			}
		}
		
		var fragListing = $.getFragPiece(3);
		console.log("ControllerTheScoop.updateView: fragListing = " + fragListing);
		if(fragListing != undefined) {
			if(this.viewCurrent && this.viewCurrent.setCurrentModel) {
				this.viewCurrent.setCurrentListing(fragListing);
			}
		} else {
			if(this.viewCurrent && this.viewCurrent.setCurrentModel) {
				this.viewCurrent.displayAllCurrentListing( );
			}
		}

	},
	
	createView : function(viewObjectName) {
		
		console.log("ControllerTheScoop.createView: viewObjectName = " + viewObjectName);
			
		if(TheScoop[viewObjectName]) {
			
			var view = new TheScoop[viewObjectName]( );
			this.views[view.id] = view;
			this.displayView(view);
			
		}
		
	},
	
	displayView : function(view) {
		
		console.log("ControllerTheScoop.createView: displayView = " + view.id);
		if(this.viewCurrent == view) return;
		
		if(this.viewCurrent != null) {
			
			console.log("ControllerTheScoop.createView: this.viewCurrent != null");
			this.viewCurrent.hide(function( ) {
				view.show( );
			});
			
		} else {
			view.show( );
		}
		
		this.viewCurrent = view;
		
	},
	
	dataLoaded : function( ) {
		
		console.log("ControllerTheScoop.dataLoaded");
		window.location.hash = "!/" + this.startView;
		
	}
	
});