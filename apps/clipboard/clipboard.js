//<![CDATA[
window.addEvent('domready', function() {

	function sendtoclipboard(s,el)	{
		if( window.clipboardData && clipboardData.setData )	{
			clipboardData.setData("text", s);
		} else {
			ffcopy(el);
		}
	}
	
	function ffcopy(inElement) {
	  if (inElement.createTextRange) {
		var range = inElement.createTextRange();
		if (range && BodyLoaded==1)
		  range.execCommand('Copy');
	  } else {
		var flashcopier = 'flashcopier';
		if(!document.getElementById(flashcopier)) {
		  var divholder = document.createElement('div');
		  divholder.id = flashcopier;
		  document.body.appendChild(divholder);
		}
		document.getElementById(flashcopier).innerHTML = '';
		var divinfo = '<embed src="/_clipboard.swf" FlashVars="clipboard='+encodeURIComponent(inElement.value)+'" width="0" height="0" type="application/x-shockwave-flash"></embed>';
		document.getElementById(flashcopier).innerHTML = divinfo;
	  }
	}	
	
	$('copyBtn').addEvent('click',function() {
		var el = $('copyMe');
		el.select();
		var t = el.getText();
		sendtoclipboard(t,el);
	});
	
});
//]]>