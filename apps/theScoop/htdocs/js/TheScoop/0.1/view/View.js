TheScoop.View = base2.Base.extend({
	
	name			: "View",
	id				: "view",
	cssClass		: "view",
	htmlClass		: "",
	fadeSpeed		: 400,
	fragment		: "",
	displayed		: false,
	appendTarget	: "#container",
	
	onShowCompleteCallback	: function ( ) { },
	onHideCompleteCallback	: function ( ) { },
	
	constructor : function( ) {
		
		console.log("View.constructor");
		
		if(this.cssClass != this.id)
			this.cssClass = this.cssClass + " " + this.id;
			
		this.htmlClass = "html" + this.name;
		
		var html = this.createView( );
		$(innerShiv(html, false)).appendTo(this.appendTarget);
		this.createComplete( );
		
	},
	
	createView : function ( ) {
		
		console.log("View.createView");
		
		var html = '';
		html += '';
		html += '<div id="' + this.id + '" class="' + this.cssClass + '">';
		html += this.createHtml( );
		html += '</div>';
		return html;
		
	},
	
	createHtml : function( ) {
		
		console.log("View.createHtml");
		return "";
		
	},
	
	createComplete : function( ) {
		console.log("View.createHtml");
	},
	
	show : function(callback) {
		
		console.log(this.id + ".show");
		
		if(this.displayed == false) {
			
			this.displayed = true;
			
			$("html").addClass(this.htmlClass);
			
			/*
			if(this.fragment && $.param.fragment( ).split("/")[1] != this.fragment.split("/")[1]) {
				window.location.hash = "!/" + this.fragment;
			}
			*/
		
			$("#" + this.id).data("that", this);
		
			if(typeof callback == "function") {
				this.onShowCompleteCallback = callback;
			} else {
				this.onShowCompleteCallback = function ( ) { };
			}
		
			$("#" + this.id)
				.fadeTo(0, 0)
				.css("display", "block")
				.fadeTo(this.fadeSpeed, 1, this.onShowComplete);
		
		}
		
	},
	
	onShowComplete : function( ) {
		
		console.log(this.id + ".onShowComplete");
		
		var that = $(this).data("that");
		that.onShowCompleteCallback( );
		
	},
	
	hide : function(callback) {
		
		console.log(this.id + ".hide");
		
		if(this.displayed == true) {
			
			this.displayed = false;
			
			$("#" + this.id).data("that", this);
		
			if(typeof callback == "function") {
				this.onHideCompleteCallback = callback;
			} else {
				this.onHideCompleteCallback = function ( ) { };
			}
		
			$("#" + this.id).fadeTo(this.fadeSpeed, 0, this.onHideComplete);
		
		}
		
	},
	
	onHideComplete : function( ) {
		
		console.log(this.id + ".onHideComplete");
		$("html").removeClass(this.htmlClass);
		$(this).css("display", "none");
		var that = $(this).data("that");
		that.onHideCompleteCallback( );
		
	}

});