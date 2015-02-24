TheScoop.Map = base2.Base.extend({
	
	name				: "Map",
	map					: null,
	centerLatLng		: null,
	mapOptions			: null,
	mapStyle			: null,
	styledMapOptions	: null,
	NYTMapType			: null,
	myMapTypeId			: 'NYTMap',
	markersArray		: [ ],
	currentModel		: null,
	modelId				: '',
	currentMarker		: null,
	latLngBounds		: null,
	zoom				: null,
	
	constructor : function( ) {

		console.log(this.name + ".constructor");
		this.centerLatLng = new google.maps.LatLng(40.75639438038813, -73.99014919996262);
		this.latLngBounds = new google.maps.LatLngBounds( );

	},
	
	init : function( ) {

		console.log(this.name + ".init");
		
		this.mapOptions = {
			zoom: 14,
			center: this.centerLatLng,
		    mapTypeControlOptions: {
				//mapTypeIds: [google.maps.MapTypeId.ROADMAP, this.myMapTypeId]
				mapTypeIds: [ ]
		    },
		    mapTypeId: this.myMapTypeId
	    };
	
		this.styledMapOptions = {
			name: "NYT"
		};
	
		this.mapStyle = [
		{
		  featureType: "road.local",
		  elementType: "geometry",
		  stylers: [
		    { saturation: -73 },
		    { lightness: 33 },
		    { gamma: 0.8 },
		    { visibility: "simplified" }
		  ]
		},{
		  featureType: "road.arterial",
		  elementType: "geometry",
		  stylers: [
		    { saturation: -91 },
		    { gamma: 0.8 },
		    { visibility: "simplified" },
		    { lightness: 100 }
		  ]
		},{
		  featureType: "road.arterial",
		  elementType: "labels",
		  stylers: [
		    { saturation: -100 },
		    { gamma: 8 },
		    { visibility: "on" },
		    { lightness: 0 }
		  ]
		},{
		  featureType: "all",
		  elementType: "all",
		  stylers: [
		    { lightness: 33 },
		    { gamma: 0.8 },
		    { saturation: -61 }
		  ]
		},{
		  featureType: "road.highway",
		  elementType: "geometry",
		  stylers: [
		    { visibility: "simplified" },
		    { saturation: -91 },
		    { gamma: 0.8 },
		    { lightness: 94 }
		  ]
		},{
		  featureType: "road.highway",
		  elementType: "labels",
		  stylers: [
		    { hue: "#00b2ff" },
		    { invert_lightness: true },
		    { lightness: 27 },
		    { gamma: 1.9 },
		    { visibility: "off" }
		  ]
		},{
		  featureType: "landscape.man_made",
		  elementType: "geometry",
		  stylers: [
		    { visibility: "simplified" },
		    { gamma: 0.76 }
		  ]
		}
		];
		
		this.map = new google.maps.Map(document.getElementById("map"), this.mapOptions);
		
		/*
		console.log(this.mapStyle);
		console.log(this.styledMapOptions);
		*/
		
		this.NYTMapType = new google.maps.StyledMapType(this.mapStyle, this.styledMapOptions);
		
		/*
		console.log(this.myMapTypeId);
		console.log(this.NYTMapType);
		*/
		
		this.map.mapTypes.set(this.myMapTypeId, this.NYTMapType);
		
		if(this.map) this.map.fitBounds(this.latLngBounds);		
		
		/* UNCOMMENT AFTER MULTIARRAY
		if(this.currentMarker == null) this.showMarkers( );
		else this.showMarker(this.currentMarkerId);
		*/
		this.showMarkers( );
		
	},
	
	// Removes the overlays from the map, but keeps them in the array
	clearMarkers : function( ) {
		console.log(this.name + ".clearMarkers");
		if(this.markersArray) {
			for(var itemId in this.markersArray) {
				for(var i in this.markersArray[itemId]) {
					this.markersArray[itemId][i].setMap(null);
				}
			}
			this.currentMarker = null;
			this.currentMarkerId = "";
		}
		console.log(this.name + ".clearMarkers end");
	},
	
	// Deletes all markers in the array by removing references to them
	deleteMarkers : function( ) {
		
		console.log(this.name + ".deleteMarkers");
		
		if(this.markersArray) {
			for(var itemId in this.markersArray) {
				for(var i in this.markersArray[itemId]) {
					this.markersArray[itemId][i].setMap(null);
				}
			}
			this.markersArray = [ ];
			this.currentMarker = null;
			this.currentMarkerId = "";
			this.latLngBounds = new google.maps.LatLngBounds( );
		}
		
	},
	
	setMarkerEvents : function(currentMarker, modelId, itemId) {
		google.maps.event.clearInstanceListeners(currentMarker);
		google.maps.event.addListener(currentMarker, 'click', function( ) {
			window.location.hash = '#!/viewList/' + modelId + '/' + itemId;
		});		
	},
	
	// Shows one overlays currently in the array
	showMarker : function(itemId) {
		
		console.log(this.name + ".showMarker: itemId = " + itemId);
		
		if(this.markersArray[itemId]) {
			
			this.clearMarkers( );
			var localBounds = new google.maps.LatLngBounds( );
			
			for(var i in this.markersArray[itemId]) {
				
				this.currentMarker = this.markersArray[itemId][i];
				this.currentMarkerId = itemId;
			
				var modelId = this.modelId;
				var frag = this.currentMarker.fragment;
			
				google.maps.event.clearInstanceListeners(this.currentMarker);
				google.maps.event.addListener(this.currentMarker, 'click', function( ) {
					window.location.hash = '#!/viewList/' + modelId
				});
			
				this.currentMarker.setMap(this.map);
				localBounds.extend(this.currentMarker.getPosition( ));
				
			}
			
			if(this.markersArray[itemId].length == 1) {
				this.centerLatLng = this.currentMarker.getPosition( );
				if(this.map) this.map.panTo(this.centerLatLng);
			} else {
				if(this.map) this.map.panTo(localBounds.getCenter( ));
			}
			
		}
		
	},
	
	// Shows any overlays currently in the array
	showMarkers : function( ) {
		
		console.log(this.name + ".showMarkers");
		
		if(this.markersArray && this.map) {
			
			for(var itemId in this.markersArray) {
				
				for(var i in this.markersArray[itemId]) {
				
					this.currentMarker = this.markersArray[itemId][i];
				
					var modelId = this.modelId;
				
					(function(currentMarker, modelId, itemId){
						google.maps.event.clearInstanceListeners(currentMarker);
						google.maps.event.addListener(currentMarker, 'click', function( ) {
							window.location.hash = '#!/viewList/' + modelId + '/' + itemId;
						});
					})(this.currentMarker, modelId, itemId);
				
					this.currentMarker.setMap(this.map);
				
				}

			}
			
			this.currentMarker = null;
			this.currentMarkerId = "";
			
		}
		
	},
	
	addMarker : function(item) {
		
		var marker;
		var arr = [ ];
		
		for(var i in item.addresses) {
		
			var modelId = this.modelId;
			
			var lat = parseFloat(item.addresses[i].latitude);
			var lng = parseFloat(item.addresses[i].longitude);
			
			if(lat && lng) {
				var markerPosition = new google.maps.LatLng(lat, lng);
			} else continue;
		
			marker = new google.maps.Marker({
				position: markerPosition,
				map: this.map
			});

			google.maps.event.addListener(marker, 'click', function( ) {
				window.location.hash = '#!/viewList/' + modelId + '/' + modelId + item.id;
			});
			
			this.latLngBounds.extend(markerPosition);
			arr.push(marker);
		
		}
		
		this.markersArray[modelId + item.id] = arr;
		
	},
	
	displayList : function(modelId, currentModel) {
		
		console.log(this.name + ".displayList");
		
		this.modelId = modelId;
		this.currentModel = currentModel;
		this.deleteMarkers( );
		
		var item;
		
		for(var i = 0; i < this.currentModel.json.list.items.length; i++) {
			this.addMarker(this.currentModel.json.list.items[i]);
		}
		
		this.showMarkers( );
		if(this.map) this.map.fitBounds(this.latLngBounds);
		
	}
	
});