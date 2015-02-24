TheScoop.ListingRestaurants = TheScoop.Listing.extend({
	
	name				: "ListingRestaurants",
	modelId				: "",
	categoryList		: null,
	currentModel		: null,
	
	calculatePrice : function(_price) {
		_price = parseInt(_price);
		var price = "";
		for(var i = 0; i < _price; i++) {
			price += "$";
		}
		return price;
	},
	
	createListItem : function(item) {
		
		//console.log(this.name + ".createListItem");
		
		var price = this.calculatePrice(item.price);
		
		var html = '';
		html += '<h4>' + item.title + '</h4>';
		
		html += '<div class="ctntClosed">';
		
		if(item["extra-info"] || price) {
			html += '<p>';
		}
		
		if(item["extra-info"]) {
			html += item["extra-info"];
		}
		
		if(item["extra-info"] && price) {
			html += ', ';
		}
		
		if(price) {
			html += price;
		}
		
		if(item["extra-info"] || price) {
			html += '</p>';
		}
		
		for(var i in item.addresses) {
		
			html += '<p>' + item.addresses[i].neighborhood + '</p>';
		
		}
		
		html += '</div>';
		
		html += this.createListItemCtnt(item);
				
		return html;
		
	},
	
	createListItemCtnt : function(item) {
		
		//console.log(this.name + ".createListItemCtnt");
		
		var price = this.calculatePrice(item.price);
		
		var html = '';
		
		html += '<div class="ctntOpened">';
		
		if(item["extra-info"] || price) {
			html += '<p>';
		}

		if(item["extra-info"]) {
			html += item["extra-info"];
		}

		if(item["extra-info"] && price) {
			html += ', ';
		}

		if(price) {
			html += price;
		}

		if(item["extra-info"] || price) {
			html += '</p>';
		}
		

		html += this.createAddresses(item);
		html += this.createDescription(item);
		html += this.createReview(item);
		html += this.createSocialTools(item);
		
		html += '</div>';
				
		return html;
		
	},
	
});