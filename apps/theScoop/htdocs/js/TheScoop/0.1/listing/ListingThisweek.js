TheScoop.ListingThisweek = TheScoop.Listing.extend({
	
	name				: "ListingThisweek",
	modelId				: "",
	categoryList		: null,
	currentModel		: null,
	
	createListItem : function(item) {
		
		//console.log(this.name + ".createListItem");
		
		var html = '';
		if(item["top-info"]) {
			html += '<p>' + item["top-info"] + '</p>';
		}
		if(item.title) {
			html += '<h4>' + item.title + '</h4>';
		}
		if(item["extra-info"]) {
			html += '<p>' + item["extra-info"] + '</p>';
		}
		for(var i in item.addresses) {
			if(item.addresses[i].neighborhood) {
				html += '<p>' + item.addresses[i].neighborhood + '</p>'
			}
		}
		
		html += this.createListItemCtnt(item);
				
		return html;
		
	},
	
});