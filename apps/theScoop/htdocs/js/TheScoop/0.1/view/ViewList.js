TheScoop.ViewList = TheScoop.View.extend({
	
	name				: "ViewList",
	id					: "viewList",
	categoryList		: null,
	models				: [ ],
	modelId				: "",
	currentModel		: null,
	fragment			: "viewList",
	map					: null,
	modelCategoryList	: null,
	currentListItem		: null,
	listing				: null,
	
	constructor : function( ) {
		
		console.log(this.name + ".constructor");
		this.base( );
		this.modelCategoryList = TheScoop.controllerModels.getModelCategoryList( );
		this.setCurrentModel( );
		this.map = new TheScoop.Map( );
		
	},
	
	onShowComplete : function( ) {
		
		console.log(this.id + ".onShowComplete");
		
		var that = $(this).data("that");
		that.onShowCompleteCallback( );
		that.map.init( );
		that.listing.scrollToCurrent( );
		
	},
	
	setCurrentModel : function(modelId) {
		
		var oldModelId = this.modelId;
		this.modelId = modelId;
		
		console.log(this.id + ".setCurrentModel: modelId = " + this.modelId);
		
		if(this.modelId != undefined && this.modelId != oldModelId) {
			
			console.log(this.id + ".setCurrentModel: A");

			$("#viewList nav li.active").removeClass("active");			
			$("#viewList #" + this.modelId).addClass("active");
			
			this.currentModel = TheScoop.controllerModels.getModelsList(this.modelId);
			
			for(var i = 0; i < this.modelCategoryList.json["categories"].length; i++) {
				if(this.modelCategoryList.json["categories"][i]["uniqueID"] == this.modelId) {
					this.categoryList = this.modelCategoryList.json["categories"][i];
					break;
				}
			}
			
			if(this.modelId != oldModelId) {
				this.createList( );
			}
			
		} else if (this.modelId == oldModelId) {
			
			console.log(this.id + ".setCurrentModel: B");
			//this.displayAllCurrentListing( );
			
		}
		
	},
	
	createHtml : function( ) {
		
		console.log(this.name + ".createHtml");
		
		var html = '';
		html += '<header>';
		html += '<a href="#!/viewHome"><h1 class="theScoop_small">The Scoop</h1></a>';
		html += '<h2 class="anInsideGuide">An Inside Guide to New York by The New York Times</h2>';
		html += '</header>';
		html += '<nav>';
		html += this.createNavigation( );
		html += '</nav>';
		html += '<div id="list"></div>';
		html += '<div id="map"></div>';
		html += this.createFooter( );
		return html;
		
	},
	
	createFooter : function( ) {
		
		var html = '';
		
		html += '<footer>';
		html += '<ul>';
		html += '<li><a href="http://itunes.apple.com/us/app/nytimes-the-scoop/id374981318?mt=8">iPhone app</a></li>';
		html += '<li><a href="http://www.facebook.com/nytscoop" class="facebook">Like us</a></li>';
		html += '<li><a href="http://twitter.com/TheScoopNYC" class="twitter">Follow us</a></li>';
		html += '<li><a href="mailto:thescoop.nyc@nytimes.com">Send feedback</a></li>';
		html += '<li><a href="http://www.nytimes.com/content/help/rights/privacy/highlights/privacy-highlights.html">Privacy Policy</a></li>';
		html += '<li class="nyt"><a href="http://www.nytimes.com">&copy; 2011 The New York Times</a></li>';
		html += '</ul>';
		html += '</footer>';
		
		return html;
		
	},
	
	createNavigation : function( ) {
		
		console.log(this.name + ".createNavigation");
		this.modelsIds = TheScoop.controllerModels.getModelsIds( );
		
		var className;
		var modelId;
		var html = '';
		
		html += '<ul>';
		
		for(var i = 0; i < this.modelsIds.length; i++) {
			
			modelId		= this.modelsIds[i];
			modelList	= TheScoop.controllerModels.getModelsList(modelId);
		
			if(modelList.json) {
				
				html += '<a id="link' + modelId + '" href="#!/viewList/' + modelId + '">';
				html += '<li id="' + modelId + '">';
				html += '<p>' + modelList.json.list.category + '</p>';
				html += '</li>';
				html += '</a>';
		
			}
		
	    }
		html += '<div class="clear"></div>';
		html += '</ul>';
		return html;
		
	},
	
	createList : function( ) {
		
		console.log(this.name + ".createList");
		console.log(this.name + ".createList: this.modelId = " + this.modelId);
				
		var listingName = "Listing" + this.modelId.charAt(0).toUpperCase( ) + this.modelId.slice(1);
		
		console.log(this.name + ".createList: listingName = " + listingName);
		
		if(TheScoop[listingName]) {
			this.listing = new TheScoop[listingName](this.modelId, this.categoryList, this.currentModel);
		} else {
			this.listing = new TheScoop.Listing(this.modelId, this.categoryList, this.currentModel);
		}
		
		this.map.displayList(this.modelId, this.currentModel);
		
	},
	
	setCurrentListing : function(newListItem) {
		
		console.log(this.name + ".setCurrentListing: newListItem = " + newListItem);
		
		if(newListItem) {
		
			this.listing.setCurrentItem(this.currentListItem, newListItem);
			this.currentListItem = newListItem;
			this.map.showMarker(newListItem);
		
		}
		
	},
	
	displayAllCurrentListing : function( ) {
		
		console.log(this.name + ".displayAllCurrentListing");
		
		this.listing.setCurrentItem(this.currentListItem, null);
		this.currentListItem = null;
		this.map.showMarkers( );
		
	}
	
});