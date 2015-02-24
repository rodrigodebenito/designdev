TheScoop.ViewMessage = TheScoop.View.extend({
	
	name		: "ViewMessage",
	id			: "viewMessage",
	
	constructor : function( ) {
		
		console.log(this.name + ".constructor");
		
		this.base( );
		
		var that = this;
		$.subscribe("/viewMessage/updateMessage", function(msg) {
			that.onUpdateMessage(msg);
		});
		
	},
	
	onUpdateMessage : function(msg) {
		
		console.log(this.name + ".onUpdateMessage: " + msg);
		$("#" + this.id + " #message").html(msg);
		
	},
	
	createHtml : function( ) {
		
		var html = '';
		html += '<table height="100%" width="100%">';
		html += '<tr>';
		html += '<td>';
		html += '<h1 class="theScoop">The Scoop</h1>';
		html += '<p id="message"></p>';
		html += '</td>';
		html += '</tr>';
		html += '</table>';
		return html;
		
	}
	
});