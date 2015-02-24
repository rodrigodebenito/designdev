// Get navbar height to calculate body padding-top:

	$(document).ready(function(){
	
		var navbarHeight = $(".navbar").height() + 20;
		
		$(window).resize(function() {
			navbarHeight = $(".navbar").height() + 20;
			$("body").css({'padding-top': navbarHeight});
		});

		$("body").css({'padding-top': navbarHeight});
		
	});
	
	

// keyboard shortcuts!

	$(document).ready(function() {
		
		$("body").keydown(function (event) {
			if (event.keyCode == 37) {	// left arrow
				var current_url = window.location.href; 
				window.location.href = window.location.href.replace( /[\?#].*|$/, "?pg=" + $prevpage );
			}
		});
		
		$("body").keydown(function (event) {
			if (event.keyCode == 39) {	// right arrow
				var current_url = window.location.href; 
				window.location.href = window.location.href.replace( /[\?#].*|$/, "?pg=" + $nextpage );
			}
		});
		
	});


// TouchSwipe.js

	$(document).ready(function() {
		
		//Enable swiping...
		$("section img").swipe({
			//Generic swipe handler for all directions
			swipe: function(event, direction, distance, duration, fingerCount) {
				
				if (direction == "left") {
					var current_url = window.location.href; 
					window.location.href = window.location.href.replace( /[\?#].*|$/, "?pg=" + $prevpage );
				}
				
				if (direction == "right") {
					var current_url = window.location.href; 
					window.location.href = window.location.href.replace( /[\?#].*|$/, "?pg=" + $nextpage );
				}
				
			},
			//Default is 75px, set to 0 for demo so any distance triggers swipe
			threshold: 0
		});
		
	});