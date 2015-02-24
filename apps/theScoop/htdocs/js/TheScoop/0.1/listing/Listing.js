TheScoop.Listing = base2.Base.extend({
	
	name				: "Listing",
	modelId				: "",
	categoryList		: null,
	currentModel		: null,
	currentListItem		: null,
	
	constructor : function(modelId, categoryList, currentModel) {
		
		console.log(this.name + ".constructor");
		
		this.modelId = modelId;
		
		this.categoryList = categoryList;
		console.log(this.categoryList);
		this.currentModel = currentModel;
		console.log(this.currentModel);
		
		this.scrollToTop( );
		$("#viewList #list").html(this.createHtml( ));
		
	},
	
	createHtml : function( ) {
		
		console.log(this.name + ".createHtml");
		var html = '';
		html += this.createHeader( );
		html += this.createList( );
		return html;
		
	},
	
	createHeader : function( ) {
		
		console.log(this.name + ".createHeader");
		
		var html = '';
		
		//html += '<div id="header" class="innerShadow">';
		html += '<div id="header">';
		
		html += '<img class="categoryImage" src="';
		html += this.categoryList.smallImageURL;
		html += '" />';
		
		html += '<h3>';
		html += (this.currentModel.json.list.title) ? this.currentModel.json.list.title : this.currentModel.json.list.category;
		html += '</h3>';
		
		html += '<p>';
		html += this.currentModel.json.list.description;		
		html += '</p>';
		
		html += '</div>';
		
		return html;
		
	},
	
	createHref : function(itemId) {
		//console.log(this.name + ".createHref: itemId = " + itemId);
		var href = '#!/viewList/' + this.modelId;
		if(itemId) href += '/' + itemId;
		return href;
	},
	
	createLink : function(item, html) {
		return '<a class="link' + this.modelId + item.id + '" href="' + this.createHref(this.modelId + item.id) + '">' + html + '</a>';
	},
	
	createList : function( ) {
		
		console.log(this.name + ".createList");
		
		var html = '';
		
		html += '<ul>';
		
		var itemHtml = "";
		var item;
		
		for(var i = 0; i < this.currentModel.json.list.items.length; i++) {
			
			var className = (i == 0) ? "first" : "";
			className += " init";
			
			item = this.currentModel.json.list.items[i];
			
			itemHtml = '';
			
			itemHtml += '<li id="' + this.modelId + item.id + '" class="' + className + '">';
			itemHtml += this.createListItem(item);
			itemHtml += '</li>';
			
			itemHtml = this.createLink(item, itemHtml);
			
			//console.log(itemHtml);
			
			html += itemHtml;
			
		}
		
		html += '</ul>';
		
		return html;
		
	},
	
	createListItem : function(item) {
		
		//console.log(this.name + ".createListItem");
		
		var html = '';
		if(item.title) {
			html += '<h4>' + item.title + '</h4>';
		}
		html += this.createListItemCtnt(item);
		return html;
		
	},
	
	createListItemCtnt : function(item) {
		
		//console.log(this.name + ".createListItemCtnt");
		
		var html = '';
		
		html += '<div class="ctntOpened">';

		html += this.createAddresses(item);
		html += this.createDescription(item);
		html += this.createReview(item);
		html += this.createSocialTools(item);
		
		html += '</div>';
				
		return html;
		
	},
	
	createSocialTools : function(item) {
		
		var html = '';
		html += '<div class="socialCtnt"></div>';
		html += '<div class="clear"><!-- --></div>';
		return html;
		
	},
	
	initSocialTools : function(itemId) {
		
		if($("#list .current .socialCtnt").html( ) != "") return;
		
		var item;
		for(var i = 0; i < this.currentModel.json.list.items.length; i++) {
			item = this.currentModel.json.list.items[i];
			if(itemId == this.modelId + item.id) break;
		}
		
		var html = '';
		var href = escape(document.location.origin + "/" + this.createHref(this.modelId + item.id));
		//html += '<fb:like href="' + href + '" show_faces="true" width="210" font=""></fb:like>';
		html += '<iframe src="http://www.facebook.com/plugins/like.php?href=' + href + '&amp;layout=standard&amp;show_faces=true&amp;width=210&amp;action=like&amp;font&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:210px; height:80px;" allowTransparency="true"></iframe>';
		html += '<div class="twitterCtnt">';
		html += '<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal"></a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>';
		html += '</div>';
		html += '<div class="clear"><!-- --></div>';
		//return html;
		
		$("#list .current .socialCtnt").html(html);
		
	},
	
	createAddresses : function(item) {
		
		var html = '';
	
		for(var i in item.addresses) {
			
			if(item.addresses.length > 1 && i == 0) {
				html += '<hr />';
			}
			
			if(item.addresses[i].street || item.addresses[i].crossstreet) { 
				html += '<p>' + item.addresses[i].street + ' ' + item.addresses[i].crossstreet + '</p>';
			}
			
			if(item.addresses[i].city || item.addresses[i].state || item.addresses[i].zip) {
				html += '<p>';
			}

			if(item.addresses[i].city) {
				html += item.addresses[i].city;
			}
			
			if(item.addresses[i].state) {
				html += ', ' + item.addresses[i].state;
			}
			
			if(item.addresses[i].zip) {
				html += ' ' + item.addresses[i].zip;
			}

			if(item.addresses[i].city || item.addresses[i].state || item.addresses[i].zip) {
				html += '</p>';
			}
			
			if(item.addresses[i].phonenumber) {
				html += '<p>' + item.addresses[i].phonenumber + '</p>';
			}
			
			if(item.addresses[i].website) {
				html += '<p><a target="_blank" href="http://' + item.addresses[i].website + '">' + item.addresses[i].website + '</a></p>';
			}
			
			html += '<hr />';
			
		}
		
		return html;
		
	},
	
	createDescription : function(item) {
		
		var html = '';
		if(item["description"]) {
			
			html += '<blockquote>';
			html += '<p>' + item["description"] + '</p>';
			if(item["author"]) {
				html += '<p class="author">&mdash; ' + item["author"] + '</p>';
			}
			html += '</blockquote>';
			html += '<hr />';
			
		}
		return html;
		
	},
	
	createReview : function(item) {
		
		var html = '';
		if(item["article"] && item["article"]["url"]) {
			html += '<p class="article"><a target="_blank" href="' + item["article"]["url"] + '">' + item["article"]["title"] + '</p>';
			html += '<hr />';
		}
		return html;
		
	},
	
	setCurrentItem : function(currentListing, newListing) {
		
		console.log(this.name + ".setCurrentItem");
		
		//var className = "current currentHighlight innerShadow";
		var className = "current innerShadow";
		
		if(currentListing) {
			$(".link" + currentListing).attr("href", this.createHref(currentListing));
			$("#" + currentListing).removeClass(className);
		}
		
		if(newListing) {
			
			$(".link" + newListing).attr("href", this.createHref(''));
			$("#" + newListing).addClass(className);
			//$("#" + newListing).removeClass("currentHighlight", 1000);
			this.initSocialTools(newListing);
			this.scrollToCurrent( );
			this.currentListItem = newListing;
			
		}
		
	},
	
	scrollToCurrent : function( ) {
		
		console.log(this.name + ".scrollToCurrent");
		
		if($("#list .current").length) {
			
			var scrollHeight = $("#list").height( );
			var scrollTop = $("#list").scrollTop( );
			var currentTop = $("#list .current").position( ).top;
			var currentHeight = $("#list .current").height( );

			console.log(currentTop + " + " + scrollTop  + " < " + scrollTop + " || " + currentTop + " + " + currentHeight + " > " + scrollTop + " + " + scrollHeight)
			console.log((currentTop + scrollTop) + " < " + scrollTop + " || " + currentTop + " + " + currentHeight + " > " + (scrollTop + scrollHeight))
			console.log(((currentTop + scrollTop) < scrollTop) + " || " + (currentTop + currentHeight > scrollTop + scrollHeight))

			if((currentTop + scrollTop) < scrollTop || (currentTop) > (scrollTop + scrollHeight)) {
				$("#list").scrollTo(".current", "200");
				return true;
			}
			
		}
		
		return false;
		
	},
	
	scrollToTop : function( ) {
		console.log(this.name + ".scrollToTop");
		$("#list").scrollTop(0)
	}
	
});