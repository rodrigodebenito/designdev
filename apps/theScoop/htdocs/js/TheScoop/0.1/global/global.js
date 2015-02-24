$.getFragPiece = function(i) {
	return $.param.fragment( ).split("/")[i];
}

var TheScoop = TheScoop || { };

$(document).ready(function( ) {
	var theScoop = new TheScoop.ControllerTheScoop( );
});