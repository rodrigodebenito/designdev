TheScoop.ListingDaytrips = TheScoop.ListingSimple.extend({
	
	name				: "ListingSimple",
	modelId				: "",
	categoryList		: null,
	currentModel		: null,
	
	createListItem : function(item) {
		
		//console.log(this.name + ".createListItem");
		
		var html = '';
		html += '<h4>' + item.title + '</h4>';
		
		html += '<div class="ctntClosed">';
		for(var i in item.addresses) {
			html += '<p>' + item.addresses[i].venue + '</p>';
		}
		html += '</div>';
		
		html += this.createListItemCtnt(item);
				
		return html;
		
	},
	
});