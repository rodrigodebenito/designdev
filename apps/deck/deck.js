window.onload = function (){
  NYTDPresentation.initialize();
}
NYTDPresentation = function(){
  if(!window.location.hash){var current_page = 0;}
  else {
    var hash = window.location.hash.substr(1);
    var current_page = parseInt(hash) - 1;
  }
  if(deck_title){document.title = deck_title;}
  var current_title = document.title;
  var PAGES = deck_data;

	return {
    initialize: function(){
      document.getElementById('chevron').onclick = function (){
        return NYTDPresentation.resize_me();
      };
      document.onkeyup = function(e){
        return NYTDPresentation.keyboard_shortcuts(e);
      };
      document.getElementById('prevNav').onclick = function(){
        return NYTDPresentation.prev_page();
      };
      document.getElementById('nextNav').onclick = function(){
        return NYTDPresentation.next_page();
      };
			document.getElementById('total_pages').innerHTML  = PAGES.length;
			if(current_page > PAGES.length){current_page = 0;}
			NYTDPresentation.load_page();
    },
		load_page: function(){
			var page = PAGES[current_page];
			document.getElementById('page_num').innerHTML	= current_page + 1;
			document.getElementById('hedline').innerHTML = page['hed'];
			document.getElementById('article_frame').src = page['url'];
			if(page['bullets']){NYTDPresentation.create_bullets(page['bullets']);}
			document.title = current_title + " - " + page['url'];
			window.location.hash = current_page + 1;
		},
		create_bullets: function(bullets){
			var list = document.getElementById('bullets');
			list.innerHTML = "";
			if(bullets){
				for (var i=0;(bullet = bullets[i]);i++){
					list.innerHTML += "<li>" + bullet + "</li>";
				}
			}
		},
		next_page: function(){
			if(current_page + 1 < PAGES.length){current_page += 1;}
			else{current_page = 0;}
			NYTDPresentation.load_page();
      // window.location.reload();
      return false;
		},
		prev_page: function(){
			if(current_page != 0){current_page -= 1;}
			else{current_page = PAGES.length - 1;}
			NYTDPresentation.load_page();
      // window.location.reload();
			return false;
		},
		resize_me: function(){
		  var o = document.getElementById('overlay');
    	var ch = document.getElementById('chevron');
		  o.style.height = ( o.style.height != "20px" ? "20px" : "auto");
      ch.className = (ch.className != "toggled" ? "toggled" : "");
      return false;
		},
    keyboard_shortcuts: function(e){
      var evt =  e || window.event; var c = evt.which || evt.keyCode;
      if (c == 74 || c == 37 || c == 63234) {
        return NYTDPresentation.prev_page();
      }
      if (c == 75 || c == 39 || c == 63235){
        return NYTDPresentation.next_page();
      }
      if (c == 77){return NYTDPresentation.resize_me();}
    }
	}
}();