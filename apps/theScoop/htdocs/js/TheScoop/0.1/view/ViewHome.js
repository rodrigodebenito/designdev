TheScoop.ViewHome = TheScoop.View.extend({
	
	name				: "ViewHome",
	id					: "viewHome",
	categoryListJson	: null,
	models				: [ ],
	fragment			: "viewHome",
	
	constructor : function( ) {
		
		console.log(this.name + ".constructor");
		this.base( );
		
	},
	
	createHtml : function( ) {
		
		console.log(this.name + ".createHtml");
		
		var html = '';
		html += '<header>';
		html += '<h1 class="theScoop">The Scoop</h1>';
		html += '<h2 class="anInsideGuide">An Inside Guide to New York by The New York Times</h2>';
		html += '</header>';
		html += '<div class="navWrapper">';
		html += '<nav>';
		html += this.createNavigation( );
		html += '</nav>';
		html += '</div>';
		return html;
		
	},
	
	createNavigation : function( ) {
		
		console.log(this.name + ".createNavigation");
		this.modelsIds = TheScoop.controllerModels.getModelsIds( );
		
		var className;
		var uniqueId;
		var html = '';
		
		html += '<ul>';
		
		var limit = 3;
		var modelNumber = 0;
		
		for(var i = 0; i < this.modelsIds.length; i++) {
			
			uniqueId	= this.modelsIds[i];
			modelList	= TheScoop.controllerModels.getModelsList([uniqueId]);
			
			if(modelList.json) {
			
				className = (modelNumber % limit == limit - 1) ? "round last" : "round";
			
				html += '<a href="#!/viewList/' + uniqueId + '">';
				html += '<li id="' + uniqueId + '" class="' + className + '">';
				html += '<div><img src="./img/icons/' + uniqueId + '.png" /></div>';
				html += '<p>' + modelList.json.list.category + '</p>';
				html += '</li>';
				html += '</a>';
				
				modelNumber++;
			
			}
			
	    }
		html += '<div class="clear"></div>';
		html += '</ul>';
		return html;
		
	}
	
});