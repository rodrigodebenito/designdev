<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
  "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
  <title>NYTimes.com Marketing Module Generator</title>
  <link rel="stylesheet" href="/apps/mm_generator/css/newsletter_landing_generator.css" type="text/css" media="screen" title="no title" charset="utf-8">
  <style type="text/css">
  @import url(scripts/mooRainbow.css);
  </style>
<script src="scripts/mootools.js" type="text/javascript"></script>
<script src="scripts/mooRainbow.js" type="text/javascript"></script>

<script type="text/javascript">
window.addEvent('domready', function() {
	var r = new MooRainbow('myRainbow', {
		'startColor': [255, 0, 0],
		'onChange': function(color) {
			$('myInput').value = color.hex;
		}
	});
});
</script>

</head>

<body>
    
  <div id="page">
    <div id="header">
      <h1><a href="index.php">NYTimes.com Marketing Module Generator</a></h1>
      <br><a href="index190.php"><label>or Newsletter Version</label></a>
    </div>
    <div id="main">
    
        <form action="generated_page.php" method="post" accept-charset="utf-8">
          <table> <? /* ?>
          	<tr class="doubleTop">
	            <td><label>Module Type</label></td>
	            <td colspan="2">
	            	<SELECT name="mm[moduletype]" onchange="if(this.options[this.selectedIndex].value == 'testa') { document.getElementById('headsize').value='22'; document.getElementById('myInput').value='#3a3a3a'; document.getElementById('link3').style.visibility='hidden'; } else { document.getElementById('link3').style.visibility='visible'; }">
					<option VALUE="normal">Normal</option>
					<option VALUE="testa">Test A</option>
					</SELECT>

	            </td>
	          </tr>
			<tr class="doubleTop"><? */ ?>
			
			<tr>
				<td><label>Edition</label></td>
				<td colspan="2">
				
					<input type="radio" name="mm[edition]" value="us" checked="checked">U.S. &nbsp; 
					<input type="radio" name="mm[edition]" value="global">Global
				</td>
			
			</tr>
			
			
			<tr>
            <td><label>Vertical</label></td>
            <td colspan="2">
            	<SELECT name="mm[vertical]">
				<OPTION VALUE="">Choose a Vertical...
				<OPTION VALUE="arts">Arts
				<OPTION VALUE="autos">Autos
				<OPTION VALUE="business">Business
				<OPTION VALUE="health">Health
				<OPTION VALUE="jobs">Jobs
				<OPTION VALUE="general">General News
				<OPTION VALUE="greathomes">Great Homes
				<OPTION VALUE="movies">Movies
				<OPTION VALUE="mobile">Mobile
				<OPTION VALUE="opinion">Opinion
				<OPTION VALUE="politics">Politics
				<OPTION VALUE="realestate">Real Estate
				<OPTION VALUE="sports">Sports
				<OPTION VALUE="style">Style
				<OPTION VALUE="tech">Tech
				<OPTION VALUE="theater">Theater
				<OPTION VALUE="timespeople">Times People
				<OPTION VALUE="travel">Travel
				<OPTION VALUE="video">Video
				<OPTION VALUE="tmagazine">T Magazine
				<OPTION VALUE="magazine">NYT Magazine
				</SELECT>
				
            </td>
          </tr>
          <tr>
            <td><label>Date</label></td>
            <td colspan="2">
                <SELECT name="mm[month]">
				<OPTION VALUE="">Month
				<OPTION VALUE="01"<? if(date('m')=='01') { echo ' selected="selected"'; } ?>>January
				<OPTION VALUE="02"<? if(date('m')=='02') { echo ' selected="selected"'; } ?>>February
				<OPTION VALUE="03"<? if(date('m')=='03') { echo ' selected="selected"'; } ?>>March
				<OPTION VALUE="04"<? if(date('m')=='04') { echo ' selected="selected"'; } ?>>April
				<OPTION VALUE="05"<? if(date('m')=='05') { echo ' selected="selected"'; } ?>>May
				<OPTION VALUE="06"<? if(date('m')=='06') { echo ' selected="selected"'; } ?>>June
				<OPTION VALUE="07"<? if(date('m')=='07') { echo ' selected="selected"'; } ?>>July
				<OPTION VALUE="08"<? if(date('m')=='08') { echo ' selected="selected"'; } ?>>August
				<OPTION VALUE="09"<? if(date('m')=='09') { echo ' selected="selected"'; } ?>>September
				<OPTION VALUE="10"<? if(date('m')=='10') { echo ' selected="selected"'; } ?>>October
				<OPTION VALUE="11"<? if(date('m')=='11') { echo ' selected="selected"'; } ?>>November
				<OPTION VALUE="12"<? if(date('m')=='12') { echo ' selected="selected"'; } ?>>December
				</SELECT>
                <SELECT name="mm[day]">
				<OPTION VALUE="">Day
				<OPTION VALUE="01"<? if(date('d')=='01') { echo ' selected="selected"'; } ?>>01
				<OPTION VALUE="02"<? if(date('d')=='02') { echo ' selected="selected"'; } ?>>02
				<OPTION VALUE="03"<? if(date('d')=='03') { echo ' selected="selected"'; } ?>>03
				<OPTION VALUE="04"<? if(date('d')=='04') { echo ' selected="selected"'; } ?>>04
				<OPTION VALUE="05"<? if(date('d')=='05') { echo ' selected="selected"'; } ?>>05
				<OPTION VALUE="06"<? if(date('d')=='06') { echo ' selected="selected"'; } ?>>06
				<OPTION VALUE="07"<? if(date('d')=='07') { echo ' selected="selected"'; } ?>>07
				<OPTION VALUE="08"<? if(date('d')=='08') { echo ' selected="selected"'; } ?>>08
				<OPTION VALUE="09"<? if(date('d')=='09') { echo ' selected="selected"'; } ?>>09
				<OPTION VALUE="10"<? if(date('d')=='10') { echo ' selected="selected"'; } ?>>10
				<OPTION VALUE="11"<? if(date('d')=='11') { echo ' selected="selected"'; } ?>>11
				<OPTION VALUE="12"<? if(date('d')=='12') { echo ' selected="selected"'; } ?>>12
				<OPTION VALUE="13"<? if(date('d')=='13') { echo ' selected="selected"'; } ?>>13
				<OPTION VALUE="14"<? if(date('d')=='14') { echo ' selected="selected"'; } ?>>14
				<OPTION VALUE="15"<? if(date('d')=='15') { echo ' selected="selected"'; } ?>>15
				<OPTION VALUE="16"<? if(date('d')=='16') { echo ' selected="selected"'; } ?>>16
				<OPTION VALUE="17"<? if(date('d')=='17') { echo ' selected="selected"'; } ?>>17
				<OPTION VALUE="18"<? if(date('d')=='18') { echo ' selected="selected"'; } ?>>18
				<OPTION VALUE="19"<? if(date('d')=='19') { echo ' selected="selected"'; } ?>>19
				<OPTION VALUE="20"<? if(date('d')=='20') { echo ' selected="selected"'; } ?>>20
				<OPTION VALUE="21"<? if(date('d')=='21') { echo ' selected="selected"'; } ?>>21
				<OPTION VALUE="22"<? if(date('d')=='22') { echo ' selected="selected"'; } ?>>22
				<OPTION VALUE="23"<? if(date('d')=='23') { echo ' selected="selected"'; } ?>>23
				<OPTION VALUE="24"<? if(date('d')=='24') { echo ' selected="selected"'; } ?>>24
				<OPTION VALUE="25"<? if(date('d')=='25') { echo ' selected="selected"'; } ?>>25
				<OPTION VALUE="26"<? if(date('d')=='26') { echo ' selected="selected"'; } ?>>26
				<OPTION VALUE="27"<? if(date('d')=='27') { echo ' selected="selected"'; } ?>>27
				<OPTION VALUE="28"<? if(date('d')=='28') { echo ' selected="selected"'; } ?>>28
				<OPTION VALUE="29"<? if(date('d')=='29') { echo ' selected="selected"'; } ?>>29
				<OPTION VALUE="30"<? if(date('d')=='30') { echo ' selected="selected"'; } ?>>30
				<OPTION VALUE="31"<? if(date('d')=='31') { echo ' selected="selected"'; } ?>>31
				</SELECT>
				<SELECT name="mm[year]">
				<OPTION VALUE="">Year
				<OPTION VALUE="08"<? if(date('y')=='08') { echo ' selected="selected"'; } ?>>2008
				<OPTION VALUE="09"<? if(date('y')=='09') { echo ' selected="selected"'; } ?>>2009
				<OPTION VALUE="10"<? if(date('y')=='10') { echo ' selected="selected"'; } ?>>2010
				<OPTION VALUE="11"<? if(date('y')=='11') { echo ' selected="selected"'; } ?>>2011
				<OPTION VALUE="12"<? if(date('y')=='12') { echo ' selected="selected"'; } ?>>2012

				</SELECT>
			</td>
			</tr>
          
        
          <tr>
            <td><label>Photo &amp; Headline Link*</label></td>
            <td><input type="text" value="http://" onfocus="if(this.value=='http://') { this.value=''; }" onblur="if(this.value=='') { this.value='http://'; }" name="mm[headurl]"></td>
            <td><input type="text" value="Text" onfocus="if(this.value=='Text') { this.value=''; }" onblur="if(this.value=='') { this.value='Text'; }" name="mm[head]"></td>
          </tr>
          <tr>
            <td><label>Link 1*</label></td>
            <td><input type="text" value="http://" onfocus="if(this.value=='http://') { this.value=''; }" onblur="if(this.value=='') { this.value='http://'; }" name="mm[l1url]"></td>
            <td><input type="text" value="Text" onfocus="if(this.value=='Text') { this.value=''; }" onblur="if(this.value=='') { this.value='Text'; }" name="mm[l1]"></td>
          </tr>      
          <tr>
            <td><label>Link 2*</label></td>
            <td><input type="text" value="http://" onfocus="if(this.value=='http://') { this.value=''; }" onblur="if(this.value=='') { this.value='http://'; }" name="mm[l2url]"></td>
            <td><input type="text" value="Text" onfocus="if(this.value=='Text') { this.value=''; }" onblur="if(this.value=='') { this.value='Text'; }" name="mm[l2]"></td>
          </tr><? /* ?>
          <tr id="link3">
            <td><label>Link 3*</label></td>
            <td><input type="text" value="http://" onfocus="if(this.value=='http://') { this.value=''; }" onblur="if(this.value=='') { this.value='http://'; }" name="mm[l3url]"></td>
            <td><input type="text" value="Text" onfocus="if(this.value=='Text') { this.value=''; }" onblur="if(this.value=='') { this.value='Text'; }" name="mm[l3]"></td>
          </tr> */ ?>
          <tr>
            <td><label>Headline Specs</label></td>
            <td>Font Size: <input type="text" value="22" id="headsize" name="mm[headsize]" style="width:30px;" size="5">px &nbsp; &nbsp; &nbsp; Color: 
<input type="text" value="#ff0000" name="mm[headcolor]" id="myInput" style="width:100px;" size="5"> <img id="myRainbow" src="scripts/images/rainbow.png" alt="[r]" width="16" height="16" /> </td>
            <td> </td>
          </tr>
          </table>  
                  
          <div><br><input type="hidden" name="mm[moduletype]" value="testa">
            <input type="submit" value="Generate Marketing Module">
          </div>
        </form>
        <br><br>
        
            
      <div class="box">
        <h2>Tips</h2>
        * Copy links before the <b>WT.mc_id=...</b> part of the URL.
      </div>
      
    </div> <!--main-->        
    </div> <!--page-->
</body>
</html>
