<?php

function normaliza ($string){
    $a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
    $b = 'AAAAAAACEEEEIIIIDNOOOOOOUUUUYbsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
    $string = utf8_decode($string);    
    $string = strtr($string, utf8_decode($a), $b);
    return utf8_encode($string);
}

if ($_REQUEST['wl']) {
	$db = mysql_connect("localhost","bart","b@rt");
	mysql_select_db("designdev",$db);
	
	mysql_query("REPLACE wine SET 
		slug='".$_REQUEST['wl']['slug']."' , 
		
		articleurl='".mysql_real_escape_string($_REQUEST['wl']['articleurl'])."' ,
		header='".mysql_real_escape_string($_REQUEST['wl']['header'])."' , 
		deck='".mysql_real_escape_string($_REQUEST['wl']['deck'])."' ,
		description='".mysql_real_escape_string($_REQUEST['wl']['description'])."' , 
		coordinator='".mysql_real_escape_string($_REQUEST['wl']['coordinator'])."' ,
		
		shortname1='".mysql_real_escape_string($_REQUEST['wl']['shortname1'])."' , 
		fullname1='".mysql_real_escape_string($_REQUEST['wl']['fullname1'])."' , 
		desc1='".mysql_real_escape_string($_REQUEST['wl']['desc1'])."' , 
		photo1='".$_REQUEST['wl']['photo1']."' , 
		credit1='".mysql_real_escape_string($_REQUEST['wl']['credit1'])."' , 
		dist1='".mysql_real_escape_string($_REQUEST['wl']['dist1'])."' , 
		disturl1='".$_REQUEST['wl']['disturl1']."' , 
		look1='".mysql_real_escape_string($_REQUEST['wl']['look1'])."' , 
		lookurl1='".$_REQUEST['wl']['lookurl1']."' , 
		
		rating1='".mysql_real_escape_string($_REQUEST['wl']['rating1'])."' , 
		price1='".$_REQUEST['wl']['price1']."' , 
		proof1='".mysql_real_escape_string($_REQUEST['wl']['proof1'])."' , 
		bestvalue1='".mysql_real_escape_string($_REQUEST['wl']['bestvalue1'])."' , 
		volume1='".$_REQUEST['wl']['volume1']."' ,
		
		shortname2='".mysql_real_escape_string($_REQUEST['wl']['shortname2'])."' , 
		fullname2='".mysql_real_escape_string($_REQUEST['wl']['fullname2'])."' , 
		desc2='".mysql_real_escape_string($_REQUEST['wl']['desc2'])."' , 
		photo2='".$_REQUEST['wl']['photo2']."' , 
		credit2='".mysql_real_escape_string($_REQUEST['wl']['credit2'])."' , 
		dist2='".mysql_real_escape_string($_REQUEST['wl']['dist2'])."' , 
		disturl2='".$_REQUEST['wl']['disturl2']."' , 
		look2='".mysql_real_escape_string($_REQUEST['wl']['look2'])."' , 
		lookurl2='".$_REQUEST['wl']['lookurl2']."' , 
		rating2='".mysql_real_escape_string($_REQUEST['wl']['rating2'])."' , 
		price2='".$_REQUEST['wl']['price2']."' , 
		proof2='".mysql_real_escape_string($_REQUEST['wl']['proof2'])."' , 
		bestvalue2='".mysql_real_escape_string($_REQUEST['wl']['bestvalue2'])."' , 
		volume2='".$_REQUEST['wl']['volume2']."' ,
		
		shortname3='".mysql_real_escape_string($_REQUEST['wl']['shortname3'])."' , 
		fullname3='".mysql_real_escape_string($_REQUEST['wl']['fullname3'])."' , 
		desc3='".mysql_real_escape_string($_REQUEST['wl']['desc3'])."' , 
		photo3='".$_REQUEST['wl']['photo3']."' , 
		credit3='".mysql_real_escape_string($_REQUEST['wl']['credit3'])."' , 
		dist3='".mysql_real_escape_string($_REQUEST['wl']['dist3'])."' , 
		disturl3='".$_REQUEST['wl']['disturl3']."' , 
		look3='".mysql_real_escape_string($_REQUEST['wl']['look3'])."' , 
		lookurl3='".$_REQUEST['wl']['lookurl3']."' , 
		rating3='".mysql_real_escape_string($_REQUEST['wl']['rating3'])."' , 
		price3='".$_REQUEST['wl']['price3']."' , 
		proof3='".mysql_real_escape_string($_REQUEST['wl']['proof3'])."' , 
		bestvalue3='".mysql_real_escape_string($_REQUEST['wl']['bestvalue3'])."' , 
		volume3='".$_REQUEST['wl']['volume3']."' ,
		
		shortname4='".mysql_real_escape_string($_REQUEST['wl']['shortname4'])."' , 
		fullname4='".mysql_real_escape_string($_REQUEST['wl']['fullname4'])."' , 
		desc4='".mysql_real_escape_string($_REQUEST['wl']['desc4'])."' , 
		photo4='".$_REQUEST['wl']['photo4']."' , 
		credit4='".mysql_real_escape_string($_REQUEST['wl']['credit4'])."' , 
		dist4='".mysql_real_escape_string($_REQUEST['wl']['dist4'])."' , 
		disturl4='".$_REQUEST['wl']['disturl4']."' , 
		look4='".mysql_real_escape_string($_REQUEST['wl']['look4'])."' , 
		lookurl4='".$_REQUEST['wl']['lookurl4']."' , 
		rating4='".mysql_real_escape_string($_REQUEST['wl']['rating4'])."' , 
		price4='".$_REQUEST['wl']['price4']."' , 
		proof4='".mysql_real_escape_string($_REQUEST['wl']['proof4'])."' , 
		bestvalue4='".mysql_real_escape_string($_REQUEST['wl']['bestvalue4'])."' , 
		volume4='".$_REQUEST['wl']['volume4']."' ,
		
		shortname5='".mysql_real_escape_string($_REQUEST['wl']['shortname5'])."' , 
		fullname5='".mysql_real_escape_string($_REQUEST['wl']['fullname5'])."' , 
		desc5='".mysql_real_escape_string($_REQUEST['wl']['desc5'])."' , 
		photo5='".$_REQUEST['wl']['photo5']."' , 
		credit5='".mysql_real_escape_string($_REQUEST['wl']['credit5'])."' , 
		dist5='".mysql_real_escape_string($_REQUEST['wl']['dist5'])."' , 
		disturl5='".$_REQUEST['wl']['disturl5']."' , 
		look5='".mysql_real_escape_string($_REQUEST['wl']['look5'])."' , 
		lookurl5='".$_REQUEST['wl']['lookurl5']."' , 
		rating5='".mysql_real_escape_string($_REQUEST['wl']['rating5'])."' , 
		price5='".$_REQUEST['wl']['price5']."' , 
		proof5='".mysql_real_escape_string($_REQUEST['wl']['proof5'])."' , 
		bestvalue5='".mysql_real_escape_string($_REQUEST['wl']['bestvalue5'])."' ,
		volume5='".$_REQUEST['wl']['volume5']."' ,
		
		shortname6='".mysql_real_escape_string($_REQUEST['wl']['shortname6'])."' , 
		fullname6='".mysql_real_escape_string($_REQUEST['wl']['fullname6'])."' , 
		desc6='".mysql_real_escape_string($_REQUEST['wl']['desc6'])."' , 
		photo6='".$_REQUEST['wl']['photo6']."' , 
		credit6='".mysql_real_escape_string($_REQUEST['wl']['credit6'])."' , 
		dist6='".mysql_real_escape_string($_REQUEST['wl']['dist6'])."' , 
		disturl6='".$_REQUEST['wl']['disturl6']."' , 
		look6='".mysql_real_escape_string($_REQUEST['wl']['look6'])."' , 
		lookurl6='".$_REQUEST['wl']['lookurl6']."' , 
		rating6='".mysql_real_escape_string($_REQUEST['wl']['rating6'])."' , 
		price6='".$_REQUEST['wl']['price6']."' , 
		proof6='".mysql_real_escape_string($_REQUEST['wl']['proof6'])."' , 
		bestvalue6='".mysql_real_escape_string($_REQUEST['wl']['bestvalue6'])."' , 
		volume6='".$_REQUEST['wl']['volume6']."' ,
		
		shortname7='".mysql_real_escape_string($_REQUEST['wl']['shortname7'])."' , 
		fullname7='".mysql_real_escape_string($_REQUEST['wl']['fullname7'])."' , 
		desc7='".mysql_real_escape_string($_REQUEST['wl']['desc7'])."' , 
		photo7='".$_REQUEST['wl']['photo7']."' , 
		credit7='".mysql_real_escape_string($_REQUEST['wl']['credit7'])."' , 
		dist7='".mysql_real_escape_string($_REQUEST['wl']['dist7'])."' , 
		disturl7='".$_REQUEST['wl']['disturl7']."' , 
		look7='".mysql_real_escape_string($_REQUEST['wl']['look7'])."' , 
		lookurl7='".$_REQUEST['wl']['lookurl7']."' , 
		rating7='".mysql_real_escape_string($_REQUEST['wl']['rating7'])."' , 
		price7='".$_REQUEST['wl']['price7']."' , 
		proof7='".mysql_real_escape_string($_REQUEST['wl']['proof7'])."' , 
		bestvalue7='".mysql_real_escape_string($_REQUEST['wl']['bestvalue7'])."' , 
		volume7='".$_REQUEST['wl']['volume7']."' ,
		
		shortname8='".mysql_real_escape_string($_REQUEST['wl']['shortname8'])."' , 
		fullname8='".mysql_real_escape_string($_REQUEST['wl']['fullname8'])."' , 
		desc8='".mysql_real_escape_string($_REQUEST['wl']['desc8'])."' , 
		photo8='".$_REQUEST['wl']['photo8']."' , 
		credit8='".mysql_real_escape_string($_REQUEST['wl']['credit8'])."' , 
		dist8='".mysql_real_escape_string($_REQUEST['wl']['dist8'])."' , 
		disturl8='".$_REQUEST['wl']['disturl8']."' , 
		look8='".mysql_real_escape_string($_REQUEST['wl']['look8'])."' , 
		lookurl8='".$_REQUEST['wl']['lookurl8']."' , 
		rating8='".mysql_real_escape_string($_REQUEST['wl']['rating8'])."' , 
		price8='".$_REQUEST['wl']['price8']."' , 
		proof8='".mysql_real_escape_string($_REQUEST['wl']['proof8'])."' , 
		bestvalue8='".mysql_real_escape_string($_REQUEST['wl']['bestvalue8'])."' , 
		volume8='".$_REQUEST['wl']['volume8']."' ,
		
		
		shortname9='".mysql_real_escape_string($_REQUEST['wl']['shortname9'])."' , 
		fullname9='".mysql_real_escape_string($_REQUEST['wl']['fullname9'])."' , 
		desc9='".mysql_real_escape_string($_REQUEST['wl']['desc9'])."' , 
		photo9='".$_REQUEST['wl']['photo9']."' , 
		credit9='".mysql_real_escape_string($_REQUEST['wl']['credit9'])."' , 
		dist9='".mysql_real_escape_string($_REQUEST['wl']['dist9'])."' , 
		disturl9='".$_REQUEST['wl']['disturl9']."' , 
		look9='".mysql_real_escape_string($_REQUEST['wl']['look9'])."' , 
		lookurl9='".$_REQUEST['wl']['lookurl9']."' , 
		rating9='".mysql_real_escape_string($_REQUEST['wl']['rating9'])."' , 
		price9='".$_REQUEST['wl']['price9']."' , 
		proof9='".mysql_real_escape_string($_REQUEST['wl']['proof9'])."' , 
		bestvalue9='".mysql_real_escape_string($_REQUEST['wl']['bestvalue9'])."' , 
		volume9='".$_REQUEST['wl']['volume9']."' ,
		
		shortname10='".mysql_real_escape_string($_REQUEST['wl']['shortname10'])."' , 
		fullname10='".mysql_real_escape_string($_REQUEST['wl']['fullname10'])."' , 
		desc10='".mysql_real_escape_string($_REQUEST['wl']['desc10'])."' , 
		photo10='".$_REQUEST['wl']['photo10']."' , 
		credit10='".mysql_real_escape_string($_REQUEST['wl']['credit10'])."' , 
		dist10='".mysql_real_escape_string($_REQUEST['wl']['dist10'])."' , 
		disturl10='".$_REQUEST['wl']['disturl10']."' , 
		look10='".mysql_real_escape_string($_REQUEST['wl']['look10'])."' , 
		lookurl10='".$_REQUEST['wl']['lookurl10']."',
		
		rating10='".mysql_real_escape_string($_REQUEST['wl']['rating10'])."' , 
		price10='".$_REQUEST['wl']['price10']."' , 
		proof10='".mysql_real_escape_string($_REQUEST['wl']['proof10'])."' , 
		bestvalue10='".mysql_real_escape_string($_REQUEST['wl']['bestvalue10'])."' , 
		volume10='".$_REQUEST['wl']['volume10']."'
	
	") or die(mysql_error());
	
	header("Location: ./show.php?slug=" . $_REQUEST['wl']['slug'] );  
	
  // require_once 'mm.php';
  // $mm = new Mm();
  // include_once('view/show.php');
}

if(!$_POST && $_GET['slug']) { ?>



	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	  "http://www.w3.org/TR/html4/loose.dtd">

	<html>
	<head>
	  <title><? echo $_GET['slug']; ?> - NYTimes.com Wine List Tool</title>
	  <link rel="stylesheet" href="/apps/wine/css/wine.css" type="text/css" media="screen" title="no title" charset="utf-8">
	
	
		<meta  http-equiv="Content-Type" content="text/html; charset=utf-8">
		


<script src="http://graphics8.nytimes.com/js/common.js" type="text/javascript"></script>
<script src="http://graphics8.nytimes.com/js/article/articleShare.js" type="text/javascript"></script>
<script src="http://graphics8.nytimes.com/js/Tacoda_AMS_DDC_Header.js" type="text/javascript"></script>
<script src="http://graphics8.nytimes.com/js/fileit.js"></script>
<script type="text/javascript" language="JavaScript" src="http://graphics8.nytimes.com/js/common/screen/DropDown.js"></script>
<script type="text/javascript" language="JavaScript" src="http://graphics8.nytimes.com/js/common/screen/modifyNavigationDisplay.js"></script>
<script type="text/javascript" language="JavaScript" src="http://graphics8.nytimes.com/js/common/screen/altClickToSearch.js"></script>
<script type="text/javascript" language="JavaScript" src="http://graphics8.nytimes.com/js/util/tooltip.js"></script>
	</head>

	<body>

	  <div id="page">
	    <div id="header">
	      <h1><a href="./">NYTimes.com Wine List Tool</a></h1>
	    </div>
	    <div id="main">
<? /* ?>
			<a href="javascript:;" onclick="submitText(); return false;">Test Text</a>
			<div id="textStatus"></div><br>
			
<script type="text/javascript" charset="utf-8">
	// function submitText() {
	// 	var url = "http://s.nyt.com/s2mProxy.php";
	// 	var urlVars = new Object();
	// 
	// 	// consistent vars
	// 	urlVars.service_id = "56";
	// 	urlVars.type = "text";
	// 	urlVars.output = "xml";
	// 
	// 	// custom vars
	// 	urlVars.report = "test1_rep";
	// 	urlVars.keyword = "test2_key";
	// 	urlVars.number = "7183890179";
	// 
	// 	urlVars.mesg1 = "test3_mesg"; // <------------------------------- this should create message pages as needed
	// 
	// 	var fullURL = "";
	// 
	// 
	// 	for (a in urlVars) {
	// 	
	// 		fullURL += a + "=" + escape(urlVars[a]) + "&";
	// 	}
	// 
	// 	// take off last ampersand
	// 	var pars = fullURL.slice(0,-1);
	// 
	// 	alert("TEST:" + pars);
	// 
	// 
	// 	var request	= new Ajax.Request(url, {method: 'get', parameters: pars, onComplete: showDetails_onComplete});
	// 	
	// }
	
	
	var xmlhttp;
	function loadXMLDoc(url) {
		xmlhttp=null;
		if (window.XMLHttpRequest) {
			// code for Firefox, Opera, IE7, etc.
		  	xmlhttp=new XMLHttpRequest();
		} else if (window.ActiveXObject) {
			// code for IE6, IE5
		  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		if (xmlhttp!=null) {
		  xmlhttp.onreadystatechange=state_Change;
		  xmlhttp.open("GET",url,true);
		  xmlhttp.send(null);
		} else {
		  alert("Your browser does not support XMLHTTP.");
		}
	}

	function state_Change() {
		if (xmlhttp.readyState==4) {
			// 4 = "loaded"
		  	if (xmlhttp.status==200) {
				// 200 = "OK"
			    document.getElementById('textStatus').innerHTML = document.getElementById('textStatus').innerHTML + xmlhttp.responseText + "(did OK)";
			} else {
				document.getElementById('textStatus').innerHTML = document.getElementById('textStatus').innerHTML + "Problem retrieving data" + xmlhttp.statusText + "(not OK)";
			}
		} else {
			document.getElementById('textStatus').innerHTML = document.getElementById('textStatus').innerHTML + " [readyState:" + xmlhttp.readyState + "";
		}
	}
	
	document.getElementById('textStatus').innerHTML = " . . . "

	function submitText() {
		var url = "http://s.nyt.com/s2mProxy.php?";
		var urlVars = new Object();
	
		// consistent vars
		urlVars.service_id = "56";
		urlVars.type = "text";
		urlVars.output = "xml";
	
		// custom vars
		urlVars.report = "test1_rep";
		urlVars.keyword = "test2_key";
		urlVars.number = "7183890179";
	
		urlVars.mesg1 = "test5_mesg"; // <------------------------------- this should create message pages as needed
	
		var fullURL = "";
	
	
		for (a in urlVars) {
		
			fullURL += a + "=" + escape(urlVars[a]) + "&";
		}
	
		// take off last ampersand
		var pars = fullURL.slice(0,-1);

		url = url + pars;
		
		loadXMLDoc(url);
		
		
		
			
	}


	
	// function showDetails_onComplete(textResponse) {
	// 	alert("TEXT RESPONSE: " + textResponse);
	// }
	
	
</script>
*/ ?>

	          <table class="tool">
				<tr>
					<td class="label">
						<b>View Saved List: </b>					
					</td>
					<td>
						<select name="loadSlug" id="loadSlug" onchange="window.location='./show.php?slug='+this[this.selectedIndex].value" style="width:150px">
							<?
								$db = mysql_connect("localhost","bart","b@rt");
								mysql_select_db("designdev",$db);

								$result = mysql_query("select slug from wine ORDER BY slug DESC") or die("<br>WL Error - Dropdown:".mysql_error());
								while ($row = mysql_fetch_object($result)) {
									if(strlen($row->slug) >= 1) {
										echo '<option value="'.$row->slug.'"';
										
										if($_GET['slug'] == $row->slug) {
											echo ' selected="selected"';
										}
										
										echo '>'.$row->slug.'</option>';
									}
								}

								if($_GET['slug']) {
									$slugResult = mysql_query("select * from wine WHERE slug='".$_GET['slug']."'") or die("<br>WL Error - Saved List:".mysql_error());
									while ($slugRow = mysql_fetch_object($slugResult)) {
										$saved['slug'] = $slugRow -> slug;
										$saved['articleurl'] = $slugRow -> articleurl;
										$saved['header'] = $slugRow -> header;
										$saved['deck'] = $slugRow -> deck;
										$saved['description'] = $slugRow -> description;										
										$saved['coordinator'] = $slugRow -> coordinator;

										$saved['shortname1'] = $slugRow -> shortname1;
										$saved['fullname1'] = $slugRow -> fullname1;
										$saved['desc1'] = $slugRow -> desc1;
										$saved['photo1'] = $slugRow -> photo1;
										$saved['credit1'] = $slugRow -> credit1;
										$saved['dist1'] = $slugRow -> dist1;
										$saved['disturl1'] = $slugRow -> disturl1;
										$saved['look1'] = $slugRow -> look1;
										$saved['lookurl1'] = $slugRow -> lookurl1;	
										$saved['rating1'] = $slugRow -> rating1;	
										$saved['price1'] = $slugRow -> price1;	
										$saved['proof1'] = $slugRow -> proof1;	
										$saved['volume1'] = $slugRow -> volume1;
										$saved['bestvalue1'] = $slugRow -> bestvalue1;
										
										

										$saved['shortname2'] = $slugRow -> shortname2;
										$saved['fullname2'] = $slugRow -> fullname2;
										$saved['desc2'] = $slugRow -> desc2;
										$saved['photo2'] = $slugRow -> photo2;
										$saved['credit2'] = $slugRow -> credit2;
										$saved['dist2'] = $slugRow -> dist2;
										$saved['disturl2'] = $slugRow -> disturl2;
										$saved['look2'] = $slugRow -> look2;
										$saved['lookurl2'] = $slugRow -> lookurl2;	
										$saved['rating2'] = $slugRow -> rating2;	
										$saved['price2'] = $slugRow -> price2;	
										$saved['proof2'] = $slugRow -> proof2;	
										$saved['volume2'] = $slugRow -> volume2;
										$saved['bestvalue2'] = $slugRow -> bestvalue2;	
										

										$saved['shortname3'] = $slugRow -> shortname3;
										$saved['fullname3'] = $slugRow -> fullname3;
										$saved['desc3'] = $slugRow -> desc3;
										$saved['photo3'] = $slugRow -> photo3;
										$saved['credit3'] = $slugRow -> credit3;
										$saved['dist3'] = $slugRow -> dist3;
										$saved['disturl3'] = $slugRow -> disturl3;
										$saved['look3'] = $slugRow -> look3;
										$saved['lookurl3'] = $slugRow -> lookurl3;	
										$saved['rating3'] = $slugRow -> rating3;	
										$saved['price3'] = $slugRow -> price3;	
										$saved['proof3'] = $slugRow -> proof3;	
										$saved['volume3'] = $slugRow -> volume3;
										$saved['bestvalue3'] = $slugRow -> bestvalue3;

										$saved['shortname4'] = $slugRow -> shortname4;
										$saved['fullname4'] = $slugRow -> fullname4;
										$saved['desc4'] = $slugRow -> desc4;
										$saved['photo4'] = $slugRow -> photo4;
										$saved['credit4'] = $slugRow -> credit4;
										$saved['dist4'] = $slugRow -> dist4;
										$saved['disturl4'] = $slugRow -> disturl4;
										$saved['look4'] = $slugRow -> look4;
										$saved['lookurl4'] = $slugRow -> lookurl4;	
										$saved['rating4'] = $slugRow -> rating4;	
										$saved['price4'] = $slugRow -> price4;	
										$saved['proof4'] = $slugRow -> proof4;	
										$saved['volume4'] = $slugRow -> volume4;
										$saved['bestvalue4'] = $slugRow -> bestvalue4;

										$saved['shortname5'] = $slugRow -> shortname5;
										$saved['fullname5'] = $slugRow -> fullname5;
										$saved['desc5'] = $slugRow -> desc5;
										$saved['photo5'] = $slugRow -> photo5;
										$saved['credit5'] = $slugRow -> credit5;
										$saved['dist5'] = $slugRow -> dist5;
										$saved['disturl5'] = $slugRow -> disturl5;
										$saved['look5'] = $slugRow -> look5;
										$saved['lookurl5'] = $slugRow -> lookurl5;	
										$saved['rating5'] = $slugRow -> rating5;	
										$saved['price5'] = $slugRow -> price5;	
										$saved['proof5'] = $slugRow -> proof5;	
										$saved['volume5'] = $slugRow -> volume5;
										$saved['bestvalue5'] = $slugRow -> bestvalue5;

										$saved['shortname6'] = $slugRow -> shortname6;
										$saved['fullname6'] = $slugRow -> fullname6;
										$saved['desc6'] = $slugRow -> desc6;
										$saved['photo6'] = $slugRow -> photo6;
										$saved['credit6'] = $slugRow -> credit6;
										$saved['dist6'] = $slugRow -> dist6;
										$saved['disturl6'] = $slugRow -> disturl6;
										$saved['look6'] = $slugRow -> look6;
										$saved['lookurl6'] = $slugRow -> lookurl6;	
										$saved['rating6'] = $slugRow -> rating6;	
										$saved['price6'] = $slugRow -> price6;	
										$saved['proof6'] = $slugRow -> proof6;	
										$saved['volume6'] = $slugRow -> volume6;
										$saved['bestvalue6'] = $slugRow -> bestvalue6;

										$saved['shortname7'] = $slugRow -> shortname7;
										$saved['fullname7'] = $slugRow -> fullname7;
										$saved['desc7'] = $slugRow -> desc7;
										$saved['photo7'] = $slugRow -> photo7;
										$saved['credit7'] = $slugRow -> credit7;
										$saved['dist7'] = $slugRow -> dist7;
										$saved['disturl7'] = $slugRow -> disturl7;
										$saved['look7'] = $slugRow -> look7;
										$saved['lookurl7'] = $slugRow -> lookurl7;	
										$saved['rating7'] = $slugRow -> rating7;	
										$saved['price7'] = $slugRow -> price7;	
										$saved['proof7'] = $slugRow -> proof7;	
										$saved['volume7'] = $slugRow -> volume7;
										$saved['bestvalue7'] = $slugRow -> bestvalue7;

										$saved['shortname8'] = $slugRow -> shortname8;
										$saved['fullname8'] = $slugRow -> fullname8;
										$saved['desc8'] = $slugRow -> desc8;
										$saved['photo8'] = $slugRow -> photo8;
										$saved['credit8'] = $slugRow -> credit8;
										$saved['dist8'] = $slugRow -> dist8;
										$saved['disturl8'] = $slugRow -> disturl8;
										$saved['look8'] = $slugRow -> look8;
										$saved['lookurl8'] = $slugRow -> lookurl8;	
										$saved['rating8'] = $slugRow -> rating8;	
										$saved['price8'] = $slugRow -> price8;	
										$saved['proof8'] = $slugRow -> proof8;	
										$saved['volume8'] = $slugRow -> volume8;
										$saved['bestvalue8'] = $slugRow -> bestvalue8;

										$saved['shortname9'] = $slugRow -> shortname9;
										$saved['fullname9'] = $slugRow -> fullname9;
										$saved['desc9'] = $slugRow -> desc9;
										$saved['photo9'] = $slugRow -> photo9;
										$saved['credit9'] = $slugRow -> credit9;
										$saved['dist9'] = $slugRow -> dist9;
										$saved['disturl9'] = $slugRow -> disturl9;
										$saved['look9'] = $slugRow -> look9;
										$saved['lookurl9'] = $slugRow -> lookurl9;	
										$saved['rating9'] = $slugRow -> rating9;	
										$saved['price9'] = $slugRow -> price9;	
										$saved['proof9'] = $slugRow -> proof9;	
										$saved['volume9'] = $slugRow -> volume9;
										$saved['bestvalue9'] = $slugRow -> bestvalue9;

										$saved['shortname10'] = $slugRow -> shortname10;
										$saved['fullname10'] = $slugRow -> fullname10;
										$saved['desc10'] = $slugRow -> desc10;
										$saved['photo10'] = $slugRow -> photo10;
										$saved['credit10'] = $slugRow -> credit10;
										$saved['dist10'] = $slugRow -> dist10;
										$saved['disturl10'] = $slugRow -> disturl10;
										$saved['look10'] = $slugRow -> look10;
										$saved['lookurl10'] = $slugRow -> lookurl10;	
										$saved['rating10'] = $slugRow -> rating10;	
										$saved['price10'] = $slugRow -> price10;	
										$saved['proof10'] = $slugRow -> proof10;	
										$saved['volume10'] = $slugRow -> volume10;
										$saved['bestvalue10'] = $slugRow -> bestvalue10;						

									}
								}

							?>


						</select><br>
					</td>


				</tr>
			</table>

&nbsp;&nbsp;<a href="./?slug=<? echo $saved['slug']; ?>">&laquo; Edit This List</a><br>

<br clear="all">

<div id="articleInline" class="inlineLeft">
<div id="inlineBox">

<? ob_start();
?>
<div class="sectionPromo inlineWine">
<script type='text/javascript' src='http://graphics8.nytimes.com/packages/js/multimedia/swfobject.js'></script>
<script type='text/javascript' src='http://graphics8.nytimes.com/packages/js/multimedia/swfaddress2.js'></script>
<script src="http://graphics8.nytimes.com/js/app/lib/prototype/1.6.0.2/prototype.js" type="text/javascript" ></script>
<script src="http://graphics8.nytimes.com/js/app/lib/scriptaculous/1.8.1/effects.js" type="text/javascript"></script>
<script type="text/javascript" src="<? // http://graphics8.nytimes.com/packages/js/dining/wine/ ?>./js/accordion.js"></script>
<style type="text/css" media="screen"> @import	url(http://graphics8.nytimes.com/packages/css/dining/wine/wine_inline.css); </style>
<? // <style type="text/css" media="screen"> @import	url(./wine_inline.css); </style> ?>


<h3 class="promo"><? echo $saved['header'] ?></h3>

<div class="story">
<h4 class="deck"><? echo $saved['deck'] ?></h4>
<p class="summary"><? echo $saved['description'] ?></p>	
</div>

<ul id="wineList"><? for ($w=1; $w<=10; $w++) { 
	if($saved['shortname'.$w]) { ?><li class="<? if($saved['bestvalue'.$w]=="1") { $didBestvalue="1"; echo "bestvalue"; } ?><? if($w==10) { echo ' last'; } ?>">
<a class="accordion_toggle" href="javascript:;"> <em><? echo $w; ?>.</em> <? echo $saved['shortname'.$w]; ?></a>

<div class="accordion_content"><div class="textForm" id="textForm<? echo $w; ?>">
<a class="closeText" onclick="this.parentNode.style.display='none';"></a>	
<a class="whatsThis" href="/ref/realestate/mobile_faq.html" target="_blank">What's This?</a>

<h4>Send&nbsp;a&nbsp;Reminder</h4>
<?
	$textMessage = $saved['fullname'.$w]." ".$saved['rating'.$w];
	
	if($saved['bestvalue'.$w]=="1") { $textMessage .= " (Best Value)"; }
	
	if( strlen($saved['price'.$w]) >=1 || strlen($saved['volume'.$w]) >=1 || strlen($saved['proof'.$w]) >=1 ) { 	
			$textMessage .= "\\n";
		
		 if( strlen($saved['price'.$w]) >=1 ) { $textMessage .= "$".$saved['price'.$w];  } 
		 			if( strlen($saved['volume'.$w]) || strlen($saved['proof'.$w])) { $textMessage .= ", ";  } 
		 if( strlen($saved['volume'.$w]) >=1 ) {  $textMessage .= $saved['volume'.$w];  } 
		 			if( strlen($saved['volume'.$w]) && strlen($saved['proof'.$w])) { $textMessage .= ", ";  } 			
		 if( strlen($saved['proof'.$w]) >=1 ) {  $textMessage .= "alc.". $saved['proof'.$w]."% vol"; } 
	}

	$textMessage = str_replace("\n","\\n",$textMessage);
	$textMessage = str_replace("½","1/2",$textMessage);
	
	// // Array of characters to be replaced
	// $search = array('é','î','è'); // etc.
	// 
	// // Array of characters to replace them with
	// $replace = array('e','i','e'); // etc.
	// 
	// // Search for forgien characters, and replace them
	// $textMessage = str_replace($search, $replace, $textMessage);

		$textMessage = normaliza($textMessage);

?>	

<div id='embedWine<? echo $w; ?>' class='NYTFlashEmbed' style='visibility:hidden;'>This feature requires the latest version of <a href='http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash' target='_blank'>Flash</a>.
</div>
<script type='text/javascript' charset="ISO-8859-1">
var so = new SWFObject('http://graphics8.nytimes.com/packages/html/dining/wine/textwine.swf','nytSWF',171,337,9,'#ffffef');
so.addParam('allowScriptAccess','always');
so.addParam('wmode','transparent');
so.addVariable('wineMessage',"NYTWine: <? echo $textMessage; ?> \nMore: http://mobile.nytimes.com/section?s=73");
so.write('embedWine<? echo $w; ?>');

if(SWFAddress.getValue() != "" && SWFAddress.getValue() != null && SWFAddress.getValue() != "/") SWFAddress.setValue('');
</script>
<style>#embedWine<? echo $w; ?>{visibility:visible !important;}</style>
</div>
	
<? if( strlen($saved['fullname'.$w]) >=1 ) { ?><h4><? echo $saved['fullname'.$w]; ?><? 
	
		if( strlen($saved['rating'.$w]) >=1 ) { ?>
&nbsp;<a href="javascript:;" onmouseout="tooltip.rollout();" onmouseover="tooltip.show(this,starTooltip);" onclick="return false;"><? echo $saved['rating'.$w]; ?></a><? } ?></h4><? } ?>	
	
<? if( strlen($saved['price'.$w]) >=1 || strlen($saved['volume'.$w]) >=1 || strlen($saved['proof'.$w]) >=1 ) { ?>

<h6><? if( strlen($saved['price'.$w]) >=1 ) { ?>$<? echo $saved['price'.$w]; ?><? } ?>
<? 			if( strlen($saved['volume'.$w]) || strlen($saved['proof'.$w])) { ?>, <? } ?>
<? if( strlen($saved['volume'.$w]) >=1 ) { ?><? echo $saved['volume'.$w]; ?><? } ?>
<? 			if( strlen($saved['volume'.$w]) && strlen($saved['proof'.$w])) { ?>, <? } ?>			
<? if( strlen($saved['proof'.$w]) >=1 ) { ?> alc. <? echo $saved['proof'.$w]; ?>% vol.<? } ?>
</h6>	
<? } ?>
<? if( strlen($saved['desc'.$w]) >=1 ) { ?><p><? echo $saved['desc'.$w]; ?></p><? } ?>		
<? if( strlen($saved['photo'.$w]) >=8 ) { ?>
<div class="image">
	<img border="0" alt="" src="<? echo $saved['photo'.$w]; ?>">
	<? if( strlen($saved['credit'.$w]) >=1 ) { ?><div class="credit"><? echo $saved['credit'.$w]; ?></div><? } ?>	
</div>
<? } ?>
<? if( strlen($saved['dist'.$w]) >=1 ) { ?>
<p>Importer: <? if( strlen($saved['disturl'.$w]) >=12 ) { ?><a href="<? echo $saved['disturl'.$w]; ?>"><? } ?><? echo $saved['dist'.$w]; ?><? if( strlen($saved['disturl'.$w]) >=12 ) { ?></a><? } ?></p>
<? } ?><? if( strlen($saved['look'.$w]) >=1 ) { ?><p>Look for this wine on: <a href="<? echo $saved['lookurl'.$w]; ?>"><? echo $saved['look'.$w]; ?></a></p><? } ?>			

<ul class="wineTools"><li class="email">
<a onclick="s_code_linktrack('Article-Tool-Email');" 
href="mailto:?subject=<? echo $saved['header']; ?>: <? echo $saved['deck']; ?>&body=The New York Times | Dining | February 18, 2009%0A%0A<? echo $saved['header']; ?>: <? echo $saved['deck']; ?>%0A%0A--%0A%0A<?


		 echo $w.". ".$saved['fullname'.$w]." ".$saved['rating'.$w];
		
		if($saved['bestvalue'.$w]=="1") { echo "%0A(Best Value)"; }
		
		if( strlen($saved['price'.$w]) >=1 || strlen($saved['volume'.$w]) >=1 || strlen($saved['proof'.$w]) >=1 ) { 	
				echo "%0A";
			
			 if( strlen($saved['price'.$w]) >=1 ) { echo "$".$saved['price'.$w];  } 
			 			if( strlen($saved['volume'.$w]) || strlen($saved['proof'.$w])) { echo ", ";  } 
			 if( strlen($saved['volume'.$w]) >=1 ) {  echo $saved['volume'.$w];  } 
			 			if( strlen($saved['volume'.$w]) && strlen($saved['proof'.$w])) { echo ", ";  } 			
			 if( strlen($saved['proof'.$w]) >=1 ) {  echo "alc.". $saved['proof'.$w]."% vol"; } 
		}
		
		if( strlen($saved['desc'.$w]) >=1 ) { echo "%0A%0A".$saved['desc'.$w]; }
	
		if( strlen($saved['dist'.$w]) >=1 ) {
			echo "%0A%0A".$saved['dist'.$w]."%0A".$saved['disturl'.$w];
		}
			

		 echo "%0A";


?>%0A--%0A%0AFor the complete list of wines and to read the whole article, go to:%0A<? echo $saved['articleurl']; ?>%0A ">E-Mail This Wine</a>
</li><li class="mobile last"><a href="javascript:;" onclick="if(document.getElementById('toolTip')) { document.getElementById('toolTip').style.display='none'; } document.getElementById('textForm<? echo $w; ?>').style.display='block';">Send to Mobile</a></li></ul>
</div>
</li><? 

	}
} ?></ul>

<a class="email" href="mailto:?subject=<? echo $saved['header']; ?>: <? echo $saved['deck']; ?>&body=The New York Times | Dining | February 18, 2009%0A%0A<? echo $saved['header']; ?>: <? echo $saved['deck']; ?>%0A%0A<? echo $saved['description']; ?>%0A%0A<?

for ($w=1; $w<=10; $w++) { 
	if($saved['shortname'.$w]) {
		 echo $w.". ".$saved['shortname'.$w];

			if($saved['bestvalue'.$w]=="1") { echo " **Best Value**"; }

		 echo "%0A";
	}
}

?>%0AFor more information about these wines and to read the whole article, go to:%0A<? echo $saved['articleurl']; ?>%0A ">E-Mail This List</a>

<? if( strlen($saved['coordinator']) >=1 ) { ?><div class="coordinator">Tasting Coordinator: <? echo $saved['coordinator']; ?></div><? } ?>
<div class="bestvalueKey">Best Value</div>

</div>
<script type="text/javascript">
Event.observe(window, 'load', loadAccordions, false);

// Set up all accordions
function loadAccordions() {
	var bottomAccordion = new accordion('wineList');
}

var verticalAccordions = $$('.accordion_toggle');
verticalAccordions.each(function(accordion) {
	$(accordion.next(0)).setStyle({
		height: '0px'
	});
});

var starTooltip = "<b>What the Stars Mean</b><br>Ratings, from zero to four stars, reflect the panel’s reaction to the wines, which were tasted with names and vintages concealed. The wines represent a selection generally available in shops and at Internet sites that specialize in Burgandy wines. Prices are those paid in shops in the New York region.";
</script>

<?
$wineHTML=ob_get_contents();
ob_end_clean();

echo $wineHTML;
?>  


</div>
</div>



<textarea rows="40" cols="60" style="width:500px"><? echo $wineHTML; ?></textarea>


<br clear="all"><br /><br /><br />







			    </div> <!--main-->        
			    </div> <!--page-->
			</body>
			</html>


<? } ?>