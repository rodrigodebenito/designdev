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
	
	mysql_query("REPLACE resales SET 
		slug='".$_REQUEST['wl']['slug']."' , 
		
		reg1content='".mysql_real_escape_string($_REQUEST['wl']['reg1content'])."' ,
		reg1image='".mysql_real_escape_string($_REQUEST['wl']['reg1image'])."' , 
		reg1imagepos='".mysql_real_escape_string($_REQUEST['wl']['reg1imagepos'])."' ,
		
		reg2content='".mysql_real_escape_string($_REQUEST['wl']['reg2content'])."' ,
		reg2image='".mysql_real_escape_string($_REQUEST['wl']['reg2image'])."' , 
		reg2imagepos='".mysql_real_escape_string($_REQUEST['wl']['reg2imagepos'])."' ,
		
		reg3content='".mysql_real_escape_string($_REQUEST['wl']['reg3content'])."' ,
		reg3image='".mysql_real_escape_string($_REQUEST['wl']['reg3image'])."' , 
		reg3imagepos='".mysql_real_escape_string($_REQUEST['wl']['reg3imagepos'])."' ,
		
		reg4content='".mysql_real_escape_string($_REQUEST['wl']['reg4content'])."' ,
		reg4image='".mysql_real_escape_string($_REQUEST['wl']['reg4image'])."' , 
		reg4imagepos='".mysql_real_escape_string($_REQUEST['wl']['reg4imagepos'])."' ,
		
		reg5content='".mysql_real_escape_string($_REQUEST['wl']['reg5content'])."' ,
		reg5image='".mysql_real_escape_string($_REQUEST['wl']['reg5image'])."' , 
		reg5imagepos='".mysql_real_escape_string($_REQUEST['wl']['reg5imagepos'])."' ,
		
		reg6content='".mysql_real_escape_string($_REQUEST['wl']['reg6content'])."' ,
		reg6image='".mysql_real_escape_string($_REQUEST['wl']['reg6image'])."' , 
		reg6imagepos='".mysql_real_escape_string($_REQUEST['wl']['reg6imagepos'])."' ,
		
		reg7content='".mysql_real_escape_string($_REQUEST['wl']['reg7content'])."' ,
		reg7image='".mysql_real_escape_string($_REQUEST['wl']['reg7image'])."' , 
		reg7imagepos='".mysql_real_escape_string($_REQUEST['wl']['reg7imagepos'])."'
	
	") or die(mysql_error());
	
	header("Location: ./show.php?slug=" . $_REQUEST['wl']['slug'] );  
	
  // require_once 'mm.php';
  // $mm = new Mm();
  // include_once('view/show.php');
}

if(!$_POST && $_GET['slug']) { ?>










<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>



 






<script type="text/javascript" charset="utf-8">
	window.TimesPeople = 'off';
</script>



<script src="http://sgraphics.prvt.nytimes.com/js/common.js" type="text/javascript"></script>
<script src="http://sgraphics.prvt.nytimes.com/js/article/articleShare.js" type="text/javascript"></script>
<script src="http://sgraphics.prvt.nytimes.com/js/Tacoda_AMS_DDC_Header.js" type="text/javascript"></script>
<script src="http://sgraphics.prvt.nytimes.com/js/fileit.js"></script>
<script type="text/javascript" language="JavaScript" src="http://sgraphics.prvt.nytimes.com/js/common/screen/DropDown.js"></script>
<script type="text/javascript" language="JavaScript" src="http://sgraphics.prvt.nytimes.com/js/common/screen/modifyNavigationDisplay.js"></script>
<script type="text/javascript" language="JavaScript" src="http://sgraphics.prvt.nytimes.com/js/common/screen/altClickToSearch.js"></script>
<script type="text/javascript" language="JavaScript" src="http://sgraphics.prvt.nytimes.com/js/util/tooltip.js"></script>

<LINK rel="stylesheet" type="text/css" href="http://sgraphics.prvt.nytimes.com/css/common/global.css" />
<style type="text/css">
			@import url(http://sgraphics.prvt.nytimes.com/css/common/screen/article.css);
			@import url(http://sgraphics.prvt.nytimes.com/css/section/realestate/screen/article.css);
		</style>
<!--[if IE 7]>
		<style type="text/css">
			@import url(http://sgraphics.prvt.nytimes.com/css/common/screen/ie7.css); 
			
		</style>
		<![endif]-->


<title>Real Estate Sales Test Kicker - Real Estate Sales Test Page Title - NYTimes.com</title>
<meta  name="description" content="Real Estate Sales Test Summary">

<meta  name="keywords" content="">

<meta  name="misspelling" content="">

<meta  http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<meta  name="ROBOTS" content="NOARCHIVE">

<meta  name="DISPLAYDATE" content="May 17, 2009">

<meta  name="hdl" content="Real Estate Sales Test Headline">

<meta  name="byl" content="">

<meta  name="lp" content="Real Estate Sales Test Summary">

<meta  name="cre" content="The New York Times">

<meta  name="edt" content="The New York Times on the Web">

<meta  name="pdate" content="20090517">

<meta  name="ttl" content="">
 
<meta  name="virtloc" content="">

<meta  name="des" content="">

<meta  name="per" content="">

<meta  name="org" content="">

<meta  name="geo" content="">

<meta  name="ticker" content="">

<meta  name="dat" content="May 17, 2009">

<meta  name="tom" content="News">

<meta  name="cat" content="">

<meta  name="col" content="Real Estate Sales Test Kicker">

<meta  name="dsk" content="Real Estate">

<meta  name="articleid" content="1226519877114">

<meta  name="CG" content="realestate"/>

<meta  name="SCG" content=""/>

<meta  name="PT" content="Article"/>

<meta  name="PST" content=""/>

<meta  name="hdr_img" content="/images/article/header/sect_realestate.gif">

<meta  name="thumbnail" content=""/>

<meta  name="thumbnail_height" content=""/>

<meta  name="thumbnail_width" content=""/>







<meta  NAME="ARTICLE_TEMPLATE_VERSION" CONTENT="600">

<meta  name="sec" content="">

<meta  name="pg" content="">

<link rel="canonical" href="http://swww.nytimes.com/2009/05/17/realestate/bart_re_sales.html" />

<script type="text/JavaScript">
	var google_hints = "";
	var google_ad_channel = "ar_realestate";
</script>

<LINK rel="alternate" media="handheld" href="http://mobile.nytimes.com/qa/2009/05/17/realestate/bart_re_sales.xml" />
<LINK rel="alternate" TYPE="application/rss+xml" TITLE="NYTimes.com Real Estate RSS" HREF="http://www.nytimes.com/services/xml/rss/nyt/RealEstate.xml"/>
</head>

    


<body >



<style type="text/css">
	table.tool, table.tool td {
		background:#EFEFEF none repeat scroll 0 0;
		border-bottom:1px solid #CCCCCC !important;
		border-top:1px solid #CCCCCC !important;
	}

	td.label {
		width:120px;
	}
	
	
	
	th, td {
		border-spacing:0;
		margin:0;
		padding:8px 5px 5px;
		text-align:left;
		vertical-align:top;
	}
	
	table.tool {color:#333333;
font-family:Arial,Helvetica,sans-serif;
width:100%;

margin-bottom:20px;

border-collapse:collapse;
border-color:#CCCCCC;
border-style:solid;
border-width:1px 0;
font-size:12px;
</style>

<div style="text-align:left; margin:5px 50px; border-bottom:3px solid #000; padding-bottom:20px;">
	          <table class="tool">
				<tr>
					<td class="label">
						<b>View Saved Sale: </b>					
					</td>
					<td>
						<select name="loadSlug" id="loadSlug" onchange="window.location='./show.php?slug='+this[this.selectedIndex].value" style="width:150px">
							<?
								$db = mysql_connect("localhost","bart","b@rt");
								mysql_select_db("designdev",$db);

								$result = mysql_query("select slug from resales ORDER BY slug DESC") or die("<br>WL Error - Dropdown:".mysql_error());
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
									$slugResult = mysql_query("select * from resales WHERE slug='".$_GET['slug']."'") or die("<br>WL Error - Saved List:".mysql_error());
									while ($slugRow = mysql_fetch_object($slugResult)) {
										$saved['slug'] = $slugRow -> slug;
										
										$saved['reg1content'] = $slugRow -> reg1content;
										$saved['reg1image'] = $slugRow -> reg1image;
										$saved['reg1imagepos'] = $slugRow -> reg1imagepos;
										
											$arrReg1 = explode("\n\r\n\r",$saved['reg1content']);
												$arrReg1_1 = explode("\r\n",$arrReg1[0]);
												$arrReg1_2 = explode("\r\n",$arrReg1[1]);
												$arrReg1_3 = explode("\r\n",$arrReg1[2]);
												$arrReg1_4 = explode("\r\n",$arrReg1[3]);
												
								
										$saved['reg2content'] = $slugRow -> reg2content;
										$saved['reg2image'] = $slugRow -> reg2image;
										$saved['reg2imagepos'] = $slugRow -> reg2imagepos;
										
											$arrReg2 = explode("\n\r\n\r",$saved['reg2content']);
												$arrReg2_1 = explode("\r\n",$arrReg2[0]);
												$arrReg2_2 = explode("\r\n",$arrReg2[1]);
												$arrReg2_3 = explode("\r\n",$arrReg2[2]);
												$arrReg2_4 = explode("\r\n",$arrReg2[3]);
												
								
										$saved['reg3content'] = $slugRow -> reg3content;
										$saved['reg3image'] = $slugRow -> reg3image;
										$saved['reg3imagepos'] = $slugRow -> reg3imagepos;
										
											$arrReg3 = explode("\n\r\n\r",$saved['reg3content']);
												$arrReg3_1 = explode("\r\n",$arrReg3[0]);
												$arrReg3_2 = explode("\r\n",$arrReg3[1]);
												$arrReg3_3 = explode("\r\n",$arrReg3[2]);
												$arrReg3_4 = explode("\r\n",$arrReg3[3]);
												
								
										$saved['reg4content'] = $slugRow -> reg4content;
										$saved['reg4image'] = $slugRow -> reg4image;
										$saved['reg4imagepos'] = $slugRow -> reg4imagepos;
										
											$arrReg4 = explode("\n\r\n\r",$saved['reg4content']);
												$arrReg4_1 = explode("\r\n",$arrReg4[0]);
												$arrReg4_2 = explode("\r\n",$arrReg4[1]);
												$arrReg4_3 = explode("\r\n",$arrReg4[2]);
												$arrReg4_4 = explode("\r\n",$arrReg4[3]);
												
								
										$saved['reg5content'] = $slugRow -> reg5content;
										$saved['reg5image'] = $slugRow -> reg5image;
										$saved['reg5imagepos'] = $slugRow -> reg5imagepos;
										
											$arrReg5 = explode("\n\r\n\r",$saved['reg5content']);
												$arrReg5_1 = explode("\r\n",$arrReg5[0]);
												$arrReg5_2 = explode("\r\n",$arrReg5[1]);
												$arrReg5_3 = explode("\r\n",$arrReg5[2]);
												$arrReg5_4 = explode("\r\n",$arrReg5[3]);
												
								
										$saved['reg6content'] = $slugRow -> reg6content;
										$saved['reg6image'] = $slugRow -> reg6image;
										$saved['reg6imagepos'] = $slugRow -> reg6imagepos;
										
											$arrReg6 = explode("\n\r\n\r",$saved['reg6content']);
												$arrReg6_1 = explode("\r\n",$arrReg6[0]);
												$arrReg6_2 = explode("\r\n",$arrReg6[1]);
												$arrReg6_3 = explode("\r\n",$arrReg6[2]);
												$arrReg6_4 = explode("\r\n",$arrReg6[3]);
												
								
										$saved['reg7content'] = $slugRow -> reg7content;
										$saved['reg7image'] = $slugRow -> reg7image;
										$saved['reg7imagepos'] = $slugRow -> reg7imagepos;
										
											$arrReg7 = explode("\n\r\n\r",$saved['reg7content']);
												$arrReg7_1 = explode("\r\n",$arrReg7[0]);
												$arrReg7_2 = explode("\r\n",$arrReg7[1]);
												$arrReg7_3 = explode("\r\n",$arrReg7[2]);
												$arrReg7_4 = explode("\r\n",$arrReg7[3]);
												
										
										/* Global Vars */
										$priceRange = array("0-400000","400000-699999","700000-899999","900000-99000000");
										$regionLabels = array("Manhattan","Four Buroughs","Long Island","Westchester/ Putnam","Rockland/ Orange","New Jersey","Connecticut");
										$regionCities = array("NEW-YORK-NY","NY","NY","NY","NJ","NJ","CT");

									}
								}
								
								function areaURL($area) {
									$area = trim( $area );
									$area = str_ireplace(" AREA","", $area );
									$area = str_ireplace(" TOWNSHIP","", $area );
									$area = str_replace(" ","xxxx", $area );
									$area = ereg_replace("[^[:alpha:]]", "", $area );
									$area = str_replace("xxxx","-", $area );
									$area = strtoupper( $area );
									
									return $area;								
								}

							?>


						</select><br>
					</td>


				</tr>
			</table>

&nbsp;&nbsp;<a href="./?slug=<? echo $saved['slug']; ?>" style="font-family:Arial,sans-serif; font-size:11px">&laquo; Edit This Sale</a><br>

<br clear="all">
<? ob_start();
?>
<p class="knewsP">

<div id="re_sales">	

<style type="text/css" media="screen"> @import url(http://www.nytimes.com/packages/html/realestate/residential_sales/sales.css); </style>

<script type="text/javascript">
	document.stopObserving('mouseup');

	function toggleContent(thisToggle,thisID) {
		if( thisToggle.className == "toggleText" ) {
			document.getElementById('text' + thisID).style.display = 'block';
			document.getElementById('image' + thisID).style.display = 'none';
			thisToggle.className = "toggleImage";
		} else {
			document.getElementById('text' + thisID).style.display = 'none';
			document.getElementById('image' + thisID).style.display = 'block';
			thisToggle.className = "toggleText";
		}
		
		thisToggle.blur();
	}
</script>

<div id="re_header">
	<h2>Residential Sales Around the Region</h2>

	<p class="summary">A comparision of recent residential sales by region and price range.</p>

	<div class="icon_guide">
		<img src="http://graphics8.nytimes.com/packages/html/realestate/residential_sales/icon_guide.gif" width="744" height="25" vspace="0" hspace="0" border="0" alt="[Br] = Number of bedrooms  [B] = Number of bathrooms  [HB] = Number of half bathrooms  [T] = Time on the market   [D] = Listing details">
	</div>
</div>

<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<th>&nbsp;</th>
		<th class="price">Less than $400,000</th>
		<th class="price">$400,000 to $699,999</th>
		<th class="price">$700,000 to $899,999</th>
		<th class="price priceLast">More Than $900,000</th>
	</tr>
<? for($r=1; $r<8; $r++) { ?>
	<tr class="topR">
		<th class="region"><? echo $regionLabels[$r-1]; ?></th>

<? for($i=1; $i<5; $i++) {
	if($_GET['debug']>"1") { echo "<br><br>{{".$r."}} ".$regionLabels[$r-1]."<br>"; }
	
	$thisListing = "arrReg".$r."_".$i;	
	$thisMeta = explode(',',${$thisListing}[3]);
	
	if($_GET['debug']>"1") { print_r(${$thisListing}); echo "<br>"; }
	
	if( strlen(trim(${$thisListing}[5]))>=10 ) {
		$thisLink[$i] = trim(${$thisListing}[5]);
	} else {
		if($r=="2") {
			$subArea = areaURL( substr( ${$thisListing}[2] , strrpos( ${$thisListing}[2] , "," ) ) );
		} else {
			$subArea = "";
		}
	
		$thisLink[$i] = "http://realestate.nytimes.com/sales/" . 
			areaURL( ${$thisListing}[1] ) . 
			$subArea .
			"-" . 
			$regionCities[$r-1] . 
			"-USA/".$priceRange[$i-1] . 
			"-price/?dym=" . 
			${$thisListing}[1];
	}
 ?>
<td>

<span class="price"><? echo ${$thisListing}[0]; ?></span>
<h4><? echo ${$thisListing}[1]; ?></h4>
<div class="address"><? echo ${$thisListing}[2]; ?></div>

<div class="content">
<? if( $saved['reg'.$r.'imagepos'] == $i) { ?>
	<div class="contentImage" id="image<? echo $r."_".$i; ?>"><a href="javascript:;" onclick="document.getElementById('text<? echo $r."_".$i; ?>').style.display='block'; document.getElementById('toggle<? echo $r; ?>').className='toggleImage'; this.parentNode.style.display='none';"><img src="<? echo $saved['reg'.$r.'image']; ?>" width="190" height="126" vspace="0" hspace="0" border="0" alt=""></a>
	</div><div class="contentText hideContent" id="text<? echo $r."_".$i; ?>">

<? } else { ?>	
	<div class="contentText">
<? } ?>

<ul class="meta">
	<li class="numBed"><? echo trim($thisMeta[0]); ?></li>
	<li class="numBath"><? echo trim($thisMeta[1]); ?></li>
	<li class="numHBath"><? echo trim($thisMeta[2]); ?></li>
	<li class="numMarket"><? echo trim($thisMeta[3]); ?> week<? if( trim($thisMeta[3]) != "1") { echo "s"; } ?></li>
</ul>

<p><? echo ${$thisListing}[4]; ?></p>

</div></div>


</td>
<? } ?>
	</tr>
	<tr class="bottomR<? if($r==7) { echo ' lastRow'; } ?>">
		<td>&nbsp;</td>
		<td>
			<a href="<? echo $thisLink[1]; ?>" class="refer">Find Related Listings&nbsp;&raquo;</a>
			
			<? if( $saved['reg'.$r.'imagepos'] == "1" ) { ?>
				<a href="javascript:;" onclick="toggleContent(this,'<? echo $r."_1"; ?>')" id="toggle<? echo $r; ?>" class="toggleText"></a>		
			<? } ?>
		</td>
		
		<td>
			<a href="<? echo $thisLink[2]; ?>" class="refer">Find Related Listings&nbsp;&raquo;</a>
			
			<? if( $saved['reg'.$r.'imagepos'] == "2" ) { ?>
				<a href="javascript:;" onclick="toggleContent(this,'<? echo $r."_2"; ?>')" id="toggle<? echo $r; ?>" class="toggleText"></a>		
			<? } ?>
		</td>
		
		<td>
			<a href="<? echo $thisLink[3]; ?>" class="refer">Find Related Listings&nbsp;&raquo;</a>
			
			<? if( $saved['reg'.$r.'imagepos'] == "3" ) { ?>
				<a href="javascript:;" onclick="toggleContent(this,'<? echo $r."_3"; ?>')" id="toggle<? echo $r; ?>" class="toggleText"></a>		
			<? } ?>
		</td>
		
		<td>
			<a href="<? echo $thisLink[4]; ?>" class="refer">Find Related Listings&nbsp;&raquo;</a>
			
			<? if( $saved['reg'.$r.'imagepos'] == "4" ) { ?>
				<a href="javascript:;" onclick="toggleContent(this,'<? echo $r."_4"; ?>')" id="toggle<? echo $r; ?>" class="toggleText"></a>		
			<? } ?>
		</td>
	</tr>
<? } ?>

</table>
</div>	
</p>
<?
$wineHTML=ob_get_contents();
ob_end_clean();


?>  

<? if(!$_GET['debug']) {  ?><textarea rows="40" cols="60" style="width:100%; height:200px"><? echo $wineHTML; ?></textarea><? } ?>
</div>

<br /><br />









<a name="top"></a>
<!--Hat -->
<NYT_HEADER>

</NYT_HEADER>
<a href="#articleBodyLink" class="jumpLink">Skip to article</a>
<!--New call for topnav stuff. -->
<div id="shell" class="">

<div id="login">
<ul id="memberTools">
 
			<li>
				<a href="http://swww.nytimes.com/membercenter/" onMouseOver="tsDD = new DropDown('timesSelectDropDown'); tsDD.show();" onMouseOut="window.setTimeout('tsDD.checkOver()',300);">My Account</a>
			</li> 


 
			<li>Welcome, <a href="http://swww.nytimes.com/mem/profile.html">bartszyszka</a></li>
			<li><a href="http://swww.nytimes.com/logout">Log Out</a></li>
			<li><a href="http://swww.nytimes.com/membercenter/sitehelp.html">Help</a></li>
			

	<div id="timesSelectDropDown">
		<ul>
			<li><a href="http://swww.nytimes.com/membercenter/">Manage My Account</a></li>
		</ul>
		<ul>
			<li class="sect"><a href="http://select.nytimes.com/mem/tnt.html">My Alerts</a></li>
			<li><a href="http://select.nytimes.com/mem/tnt.html?module=talerts">Today's Articles</a></li>
			<li><a href="http://select.nytimes.com/mem/tnt.html?module=precall">Create Alert</a></li>
			<li><a href="http://select.nytimes.com/mem/tnt.html">Manage Alerts</a></li>
		</ul>
	</div>
	
</ul>
<ul class="tabs">
<li><a href="http://swww.nytimes.com">Home Page</a></li>
<!--<li><a href="http://swww.nytimes.com/mytimes">My Times</a></li> -->
<li><a href="http://swww.nytimes.com/pages/todayspaper/index.html">Today's Paper</a></li>
<li><a href="http://swww.nytimes.com/video">Video</a></li>
<li><a href="http://swww.nytimes.com/mostpopular">Most Popular</a></li>
<li><a href="http://topics.nytimes.com/top/reference/timestopics/">Times Topics</a></li>
</ul>
</div>

<div id="page">
<? if(!$_GET['debug']) {  ?>	
<div id="masthead">

<div id="Middle1">
<!-- ADXINFO classification="feature_position" campaign="Sony_Picture_Classics01_1089928_nyt5"--><a href="http://www.nytimes.com/adx/bin/adx_click.html?type=goto&page=www.nytimes.com/yr/mo/day/realestate&pos=Middle1C&sn2=bddb1a77/dc4a4aa&sn1=dd0b3ef2/4a75e9da&camp=Sony_Picture_Classics01_1089928_nyt5&ad=EasyVirtue_88x31_PreShow&goto=http%3A%2F%2Fwww%2Esonyclassics%2Ecom%2Feasyvirtue" target="_blank">
<img src="http://graphics8.nytimes.com/adx/images/ADS/20/18/ad.201860/88x31_EASYVIRTUE.jpg" width="88" height="31" border="0"></a>

</div>

<form id="searchForm" name="searchForm" method="get" 
			action="http://stera.prvt.nytimes.com/search/sitesearch" 
			enctype="application/x-www-form-urlencoded">
<div id="nytSearchWidget">
<label for="searchQuery">Search All NYTimes.com</label>
<INPUT type="text" name="query" id="searchQuery"/>
<input id="searchSubmit" title="Search" alt="Go" type="image" src="http://graphics8.nytimes.com/images/global/buttons/go.gif">
<INPUT type="hidden" id="searchAll" name="type" value="nyt"/>
</div>
</form>
<a href="http://www.nytimes.com"><img src="http://graphics8.nytimes.com/images/misc/nytlogo152x23.gif" alt="New York Times" id="NYTLogo"/></a>
<div id="Bar3">

</div>
<div id="date">
</div>

<h1>

<a href="http://swww.nytimes.com/pages/realestate/index.html">Real Estate</a>
</h1>

</div>


<div id="navigation" class="nochild">
<ul class="tabs">
<li id="navWorld" ><a href="http://swww.nytimes.com/pages/world/index.html">World</a>
</li>
<li id="navUS" ><a href="http://swww.nytimes.com/pages/national/index.html">U.S.</a>
</li>
<li id="navNYRegion" ><a href="http://swww.nytimes.com/pages/nyregion/index.html">N.Y. / Region</a>
</li>
<li id="navBusiness" ><a href="http://swww.nytimes.com/pages/business/index.html">Business</a>
</li>
<li id="navTechnology" ><a href="http://swww.nytimes.com/pages/technology/index.html">Technology</a>
</li>
<li id="navScience" ><a href="http://swww.nytimes.com/pages/science/index.html">Science</a>
</li>
<li id="navHealth" ><a href="http://shealth.prvt.nytimes.com/pages/health/index.html">Health</a>
</li>
<li id="navSports" ><a href="http://swww.nytimes.com/pages/sports/index.html">Sports</a>
</li>
<li id="navOpinion" ><a href="http://swww.nytimes.com/pages/opinion/index.html">Opinion</a>
</li>
<li id="navArts" ><a href="http://swww.nytimes.com/pages/arts/index.html">Arts</a>
</li>
<li id="navStyle" ><a href="http://swww.nytimes.com/pages/style/index.html">Style</a>
</li>
<li id="navTravel" ><a href="http://travel.nytimes.com/pages/travel/index.html">Travel</a>
</li>
<li id="navJobs" ><a href="http://www.nytimes.com/pages/jobs/index.html">Jobs</a>
</li>
<li id="navRealestate" class="selected"><a href="http://swww.nytimes.com/pages/realestate/index.html">Real Estate</a>
</li>
<li id="navAutos" ><a href="http://swww.nytimes.com/pages/automobiles/index.html">Autos</a>
</li>
</ul>
</div><!--#navigation -->

<script type="text/javascript" src="http://realestate.nytimes.com/includes/javascript/gts-search.js"></script>
<script language="javascript" type="text/javascript">
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    //  Define suggest parameters below
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    NYT.jsonSRC = "http://realestate.nytimes.com/JSONSuggestService.aspx";
    NYT.jsonSearchSRC = "http://realestate.nytimes.com/JSONSearchAddressWebIDService.aspx";
    NYT.resultsUrl = "http://realestate.nytimes.com/";
    NYT.websiteType = "NYTimes";  
    NYT.redirectUrl = "http://greathomesanddestinations.nytimes.com/";
    NYT.isSiteSwitch = "False";
    NYT.searchType = "sales";
    </script>
<!--BEGIN SUBNAVIGATION -->
<div class="realestateSubNavigation clearfix">
<form id="gts-search" onsubmit="return false;" action="">
<div class="column first">
<div class="columnGroup">
<div class="inlineSearchControl">
<label class="propertySearch" for="txtSearch">Property Search</label>
<div class="listingTypes" id="search-type">
<INPUT type="radio" name="searchtype" id="sales" value="S" onclick="NYT.searchType='sales';NYT.searchTypeToggle();" />&#160;<label for="sales" id="saleslabel">For Sale</label> &#160; 
<INPUT type="radio" name="searchtype" id="rentals" value="R" onclick="NYT.searchType='rentals';NYT.searchTypeToggle();" />&#160;<label for="rentals" id="rentalslabel">For Rent</label>
</div>
<br/>
<INPUT class="ghost-text" name="txtSearch" id="txtSearch" value="" autocomplete="off" onkeydown="NYT.SuggestDown(event,this);" onkeyup="NYT.SuggestUp(event,this);" onfocus="NYT.searchTypeToggle();NYT.ManageSearchText('txtSearch','');" onblur="NYT.ManageSearchText('txtSearch');" type="text" />
<div id="suggest-wrap">
<div id="suggest" class="autocomplete"></div>
</div>
<div id="search-alert">
<div id="search-alert-message" class="clearfix"></div>
</div>
<INPUT type="hidden" name="RegionId" id="RegionId" />
<div id="matchCount"></div>
<div class="exampleProperties meta">
<a href="http://swww.nytimes.com/membercenter/faq/realestate.html">Help / FAQ</a>&nbsp;&nbsp;|&nbsp;
<a href="http://realestate.nytimes.com/search/advanced.aspx">Advanced Search »</a>
</div>
</div>
</div>
</div>
<div class="column two">
<div class="columnGroup">
<div class="searchOptions">
<div id="salesprice">
<div class="searchOption">
<label for="sprice-min">Min.&#160;Price&#160;($)</label>
<select id="sprice-min" name="price-min">
<option value="0">Any</option>
<option value="100000">100,000</option>
<option value="200000">200,000</option>
<option value="300000">300,000</option>
<option value="400000">400,000</option>
<option value="500000">500,000</option>
<option value="600000">600,000</option>
<option value="700000">700,000</option>
<option value="800000">800,000</option>
<option value="900000">900,000</option>
<option value="1000000">1 Million</option>
<option value="1100000">1.1 Million</option>
<option value="1200000">1.2 Million</option>
<option value="1300000">1.3 Million</option>
<option value="1400000">1.4 Million</option>
<option value="1500000">1.5 Million</option>
<option value="1750000">1.75 Million</option>
<option value="2000000">2 Million</option>
<option value="2250000">2.25 Million</option>
<option value="2500000">2.50 Million</option>
<option value="3000000">3 Million</option>
<option value="3500000">3.5 Million</option>
<option value="4000000">4 Million</option>
<option value="4500000">4.5 Million</option>
<option value="5000000">5 Million</option>
<option value="7500000">7.5 Million</option>
<option value="10000000">10 Million</option>
<option value="20000000">20 Million</option>
<option value="30000000">30 Million</option>
<option value="40000000">40 Million</option>
<option value="50000000">50 Million</option>
</select>
</div>
<div class="searchOption">
<label for="sprice-max">Max.&#160;Price&#160;($)</label>
<select id="sprice-max" name="price-max">
<option value="99000000">Any</option>
<option value="100000">100,000</option>
<option value="200000">200,000</option>
<option value="300000">300,000</option>
<option value="400000">400,000</option>
<option value="500000">500,000</option>
<option value="600000">600,000</option>
<option value="700000">700,000</option>
<option value="800000">800,000</option>
<option value="900000">900,000</option>
<option value="1000000">1 Million</option>
<option value="1100000">1.1 Million</option>
<option value="1200000">1.2 Million</option>
<option value="1300000">1.3 Million</option>
<option value="1400000">1.4 Million</option>
<option value="1500000">1.5 Million</option>
<option value="1750000">1.75 Million</option>
<option value="2000000">2 Million</option>
<option value="2250000">2.25 Million</option>
<option value="2500000">2.50 Million</option>
<option value="3000000">3 Million</option>
<option value="3500000">3.5 Million</option>
<option value="4000000">4 Million</option>
<option value="4500000">4.5 Million</option>
<option value="5000000">5 Million</option>
<option value="7500000">7.5 Million</option>
<option value="10000000">10 Million</option>
<option value="20000000">20 Million</option>
<option value="30000000">30 Million</option>
<option value="40000000">40 Million</option>
<option value="50000000">50 Million</option>
<option value="99000000">Any</option>
</select>
</div>
</div>
<div id="salesbedrooms">
<div class="searchOption">
<label for="sbedrooms">Bedrooms</label>
<select id="sbedrooms" name="sbedrooms">
<option>Any</option>
<option value="STUDIO">Studio+</option>
<option value="1">1+</option>
<option value="2">2+</option>
<option value="3">3+</option>
<option value="4">4+</option>
<option value="5">5+</option>
</select>
</div>
</div>
<div id="rentalsprice">
<div class="searchOption">
<label for="rprice-min">Min.&#160;Price&#160;($)</label>
<select id="rprice-min" name="price-min">
<option value="0">Any</option>
<option value="500">500</option>
<option value="1000">1,000</option>
<option value="1100">1,100</option>
<option value="1200">1,200</option>
<option value="1300">1,300</option>
<option value="1400">1,400</option>
<option value="1500">1,500</option>
<option value="1600">1,600</option>
<option value="1700">1,700</option>
<option value="1800">1,800</option>
<option value="1900">1,900</option>
<option value="2000">2,000</option>
<option value="2100">2,100</option>
<option value="2200">2,200</option>
<option value="2300">2,300</option>
<option value="2400">2,400</option>
<option value="2500">2,500</option>
<option value="2600">2,600</option>
<option value="2700">2,700</option>
<option value="2800">2,800</option>
<option value="2900">2,900</option>
<option value="3000">3,000</option>
<option value="3100">3,100</option>
<option value="3200">3,200</option>
<option value="3300">3,300</option>
<option value="3400">3,400</option>
<option value="3500">3,500</option>
<option value="3600">3,600</option>
<option value="3700">3,700</option>
<option value="3800">3,800</option>
<option value="3900">3,900</option>
<option value="4000">4,000</option>
<option value="4500">4,500</option>
<option value="5000">5,000</option>
<option value="5500">5,500</option>
<option value="6000">6,000</option>
<option value="6500">6,500</option>
<option value="7000">7,000</option>
<option value="7500">7,500</option>
<option value="8000">8,000</option>
<option value="8500">8,500</option>
<option value="9000">9,000</option>
<option value="10000">10,000</option>
<option value="15000">15,000</option>
<option value="20000">20,000</option>
<option value="25000">25,000</option>
<option value="30000">30,000</option>
<option value="40000">40,000</option>
<option value="50000">50,000</option>
</select>
</div>
<div class="searchOption">
<label for="rprice-max">Max.&#160;Price&#160;($)</label>
<select id="rprice-max" name="price-max">
<option value="99000000">Any</option>
<option value="500">500</option>
<option value="1000">1,000</option>
<option value="1100">1,100</option>
<option value="1200">1,200</option>
<option value="1300">1,300</option>
<option value="1400">1,400</option>
<option value="1500">1,500</option>
<option value="1600">1,600</option>
<option value="1700">1,700</option>
<option value="1800">1,800</option>
<option value="1900">1,900</option>
<option value="2000">2,000</option>
<option value="2100">2,100</option>
<option value="2200">2,200</option>
<option value="2300">2,300</option>
<option value="2400">2,400</option>
<option value="2500">2,500</option>
<option value="2600">2,600</option>
<option value="2700">2,700</option>
<option value="2800">2,800</option>
<option value="2900">2,900</option>
<option value="3000">3,000</option>
<option value="3100">3,100</option>
<option value="3200">3,200</option>
<option value="3300">3,300</option>
<option value="3400">3,400</option>
<option value="3500">3,500</option>
<option value="3600">3,600</option>
<option value="3700">3,700</option>
<option value="3800">3,800</option>
<option value="3900">3,900</option>
<option value="4000">4,000</option>
<option value="4500">4,500</option>
<option value="5000">5,000</option>
<option value="5500">5,500</option>
<option value="6000">6,000</option>
<option value="6500">6,500</option>
<option value="7000">7,000</option>
<option value="7500">7,500</option>
<option value="8000">8,000</option>
<option value="8500">8,500</option>
<option value="9000">9,000</option>
<option value="10000">10,000</option>
<option value="15000">15,000</option>
<option value="20000">20,000</option>
<option value="25000">25,000</option>
<option value="30000">30,000</option>
<option value="40000">40,000</option>
<option value="50000">50,000</option>
<option value="99000000">Any</option>
</select>
</div>
</div>
<div id="rentalsbedrooms">
<div class="searchOption">
<label for="rbedrooms">Bedrooms</label>
<select id="rbedrooms" name="rbedrooms">
<option>Any</option>
<option value="STUDIO">Studio</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>		
</div>
</div>
<div class="searchOption" id="propertytype">
<label for="property-type">Property&#160;Type</label>
<select id="property-type" name="property-type">
<option>Any</option>
<option value="SINGLE-FAMILY">Single Family</option>
<option value="MULTI-FAMILY">Multi Family</option>
<option value="CONDO">Condo</option>
<option value="CO-OP">Co-op</option>
<option value="CO-OP-CONDO">Co-op/Condo</option>
<option value="LAND">Land</option>
<option value="APARTMENT">Apartment</option>
<option value="SHARE-ROOMATE">Share/Roomate</option>
<option value="ROOM">Room</option>
<option value="EXCHANGE">Exchange</option>
<option value="TIME-SHARE">Time Share</option>
<option value="SUBLET">Sublet</option>
<option value="OTHER">Other</option>
</select>
</div>
</div>
<div class="searchOnly meta">
<span>show only:</span>
<span id="openhouses"><INPUT id="alt-open-house" name="alt-open-house" type="checkbox" value="OPEN-HOUSE"/><label for="alt-open-house">&#160;Open Houses &#160;</label></span>
<span id="newhomes"><INPUT id="alt-new-homes" name="alt-new-homes" type="checkbox" value="NEW-CONSTRUCTION"/><label for="alt-new-homes">&#160;New Developments &#160;</label></span>
<span id="nofee"><INPUT id="pf-no-fee" name="pf-no-fee"type="checkbox" value="NO-FEE"/><label for="pf-no-fee">&#160;No Fee &#160;</label></span>
<span id="vacationrentals"><INPUT id="alt-vacation-rentals" name="alt-vacation-rentals" type="checkbox" value="VACATION"/><label for="alt-vacation-rentals">&#160;Vacation Homes</label></span>
</div>
<input id="realestateSearchSubmit" value="Search" width="22" height="19" name="submit" onclick="NYT.submitGTSSearch()" type="image" src="http://sgraphics.prvt.nytimes.com/images/global/buttons/go.gif" >
</div>
</div>
<div class="column three">
<div class="columnGroup">
<h5>More In Real Estate</h5>	
<ul class="meta">
<li class="first"><a href="http://swww.nytimes.com/pages/great-homes-and-destinations/index.html">Great Homes<br/>&amp; Destinations</a></li>
<li class="last"><a href="http://swww.nytimes.com/pages/realestate/commercial/index.html">Commercial Real Estate</a></li>
</ul>
</div>
</div>
<div class="column four last">

</div>
</form>
<script language="javascript" type="text/javascript">
        NYT.searchTypeToggle();
        document.onmousedown = NYT.mH;
    </script>
</div>

<script type="text/javascript">modifyNavigationDisplay();</script>

<!--space holder for tool bar -->
<div id="adxLeaderboard"><!-- ADXINFO classification="leaderboard_728" campaign="DVRPC_1080088-nyt14"--><SCRIPT LANGUAGE="JavaScript">
   var movieWidth = 728;
   var movieHeight = 90;
   var altSrc = "http://graphics8.nytimes.com/adx/images/ADS/18/50/ad.185069/nytimes728x90.gif";
   var swfFile = "http://graphics8.nytimes.com/adx/images/ADS/18/50/ad.185069/728x90_nyt.swf";
   var altClickThru = "http://www.nytimes.com/adx/bin/adx_click.html?type=goto&page=www.nytimes.com/yr/mo/day/realestate&pos=TopAd&sn2=b0ca477e/9282e090&sn1=43bce5e7/917834ea&camp=DVRPC_1080088-nyt14&ad=728x90_nyt&goto=http%3A%2F%2Fwww%2Eclassictowns%2Eorg";
   var swfSrc = swfFile + "?clicktag=" + escape(altClickThru);
</SCRIPT>
<script language="JavaScript" src="http://www.nytimes.com/ads/common/embed3.js">
</script>
</div>

<? } ?>
<a name="articleBodyLink"></a>
<div id="main" class="noBg">

<div id="articleBody">
<NYT_TEXT >


    







<? echo $wineHTML; ?>






	
	
	
     
</NYT_TEXT>
</div>

<!--MOTHS -->

  <!-- start MOTH -->
  	<div id="insideNYTimes" class="doubleRule">
            <script language="JavaScript" type="text/javascript" src="http://swww.nytimes.com/js/app/moth/moth.js"></script>
        
    <div id="insideNYTimesHeader">
                    <div class="navigation"><span id="leftArrow"><img id="mothReverse" src="http://swww.nytimes.com/images/global/buttons/moth_reverse.gif" /></span>&nbsp;<span id="rightArrow"><img id="mothForward" src="http://swww.nytimes.com/images/global/buttons/moth_forward.gif" /></span></div>
                <h4>
            Inside NYTimes.com        </h4>
    </div>
    
        
    <div id="insideNYTimesScrollWrapper">
        <table id="insideNYTimesBrowser" cellspacing="0">
            <tbody>
                <tr>
                                                <td class="first">
        <div class="story">
            <h6 class="kicker">
                                    <a href="http://www.nytimes.com/pages/nyregion/index.html">N.Y. / Region &raquo;</a>
                            </h6>
            <div class="mothImage">
                <a href="http://www.nytimes.com/2008/10/21/nyregion/21rooms.html"><img src="http://swww.nytimes.com/images/2008/10/20/nyregion/21moth_rooms2.jpg" alt="Inside Socialist Party Headquarters" width="151" height="151" /></a>
            </div>
            <h6 class="headline"><a href="http://www.nytimes.com/2008/10/21/nyregion/21rooms.html">Inside Socialist Party Headquarters</a></h6>
        </div>
    </td>
                                                <td>
        <div class="story">
            <h6 class="kicker">
                                    <a href="http://www.nytimes.com/pages/garden/index.html">Home & Garden &raquo;</a>
                            </h6>
            <div class="mothImage">
                <a href="http://www.nytimes.com/2008/10/23/garden/23mexico.html"><img src="http://swww.nytimes.com/images/2008/10/22/garden/23moth-mexico.jpg" alt="His Decorating Theory? Color Chaos" width="151" height="151" /></a>
            </div>
            <h6 class="headline"><a href="http://www.nytimes.com/2008/10/23/garden/23mexico.html">His Decorating Theory? Color Chaos</a></h6>
        </div>
    </td>
                                                <td>
        <div class="story">
            <h6 class="kicker">
                                    <a href="http://theater.nytimes.com/pages/theater/index.html">Theater &raquo;</a>
                            </h6>
            <div class="mothImage">
                <a href="http://www.nytimes.com/2009/02/01/theater/01blan.html"><img src="http://swww.nytimes.com/images/2009/02/02/theater/White151.jpg" alt="Edmund White on &lsquo;Terre Haute&rsquo;" width="151" height="151" /></a>
            </div>
            <h6 class="headline"><a href="http://www.nytimes.com/2009/02/01/theater/01blan.html">Edmund White on &lsquo;Terre Haute&rsquo;</a></h6>
        </div>
    </td>
                                                                                            <td>
        <div class="story">
            <h6 class="kicker">
                                    <a href="http://www.nytimes.com/pages/fashion/index.html">Fashion & Style &raquo;</a>
                            </h6>
            <div class="mothImage">
                <a href="http://runway.blogs.nytimes.com/2009/03/18/valentino-the-movie/"><img src="http://swww.nytimes.com/images/2009/03/20/fashion/valentinomoth.jpg" alt="Valentino, the Movie" width="151" height="151" /></a>
            </div>
            <h6 class="headline"><a href="http://runway.blogs.nytimes.com/2009/03/18/valentino-the-movie/">Valentino, the Movie</a></h6>
        </div>
    </td>
                                                <td>
        <div class="story">
            <h6 class="kicker">
                                    <a href="http://www.nytimes.com/pages/nyregion/index.html">N.Y. / Region &raquo;</a>
                            </h6>
            <div class="mothImage">
                <a href="http://www.nytimes.com/2008/03/02/nyregion/nyregionspecial2/02Rlandmark.html"><img src="http://swww.nytimes.com/images/2008/02/29/nyregion/nyregionspecial2/02moth-rlandmark.jpg" alt="The Office as Architectural Touchstone" width="151" height="151" /></a>
            </div>
            <h6 class="headline"><a href="http://www.nytimes.com/2008/03/02/nyregion/nyregionspecial2/02Rlandmark.html">The Office as Architectural Touchstone</a></h6>
        </div>
    </td>
                                                <td>
        <div class="story">
            <h6 class="kicker">
                                    <a href="http://www.nytimes.com/pages/arts/design/index.html">Art & Design &raquo;</a>
                            </h6>
            <div class="mothImage">
                <a href="http://www.nytimes.com/2008/03/01/arts/design/01muse.html"><img src="http://swww.nytimes.com/images/2008/02/29/arts/design/01moth-muse.jpg" alt="Director&rsquo;s Brief Stay at Dia Foundation Is Over" width="151" height="151" /></a>
            </div>
            <h6 class="headline"><a href="http://www.nytimes.com/2008/03/01/arts/design/01muse.html">Director&rsquo;s Brief Stay at Dia Foundation Is Over</a></h6>
        </div>
    </td>
                                                <td class="hidden">
        <div class="story">
            <h6 class="kicker">
                                    <a href="http://www.nytimes.com/pages/fashion/index.html">Fashion & Style &raquo;</a>
                            </h6>
            <div class="mothImage">
                <a href="http://www.nytimes.com/2008/03/02/fashion/02drunk.html"><span class="img" src="http://swww.nytimes.com/images/2008/02/29/fashion/02moth-drunk.jpg" alt="Starving Themselves, Cocktail in Hand" width="151" height="151" /></a>
            </div>
            <h6 class="headline"><a href="http://www.nytimes.com/2008/03/02/fashion/02drunk.html">Starving Themselves, Cocktail in Hand</a></h6>
        </div>
    </td>
                                                <td class="hidden">
        <div class="story">
            <h6 class="kicker">
                                    <a href="http://www.nytimes.com/pages/books/index.html">Books &raquo;</a>
                            </h6>
            <div class="mothImage">
                <a href="http://www.nytimes.com/2008/03/02/books/review/Michaelis-t.html"><span class="img" src="http://swww.nytimes.com/images/2008/02/29/books/01moth-michaelis.jpg" alt="A Life of the Soldier- Cartoonist Bill Mauldin" width="151" height="151" /></a>
            </div>
            <h6 class="headline"><a href="http://www.nytimes.com/2008/03/02/books/review/Michaelis-t.html">A Life of the Soldier- Cartoonist Bill Mauldin</a></h6>
        </div>
    </td>
                                                <td class="hidden">
        <div class="story">
            <h6 class="kicker">
                                    <a href="http://www.nytimes.com/pages/arts/music/index.html">Music &raquo;</a>
                            </h6>
            <div class="mothImage">
                <a href="http://www.nytimes.com/2008/03/01/arts/music/01grim.html"><span class="img" src="http://swww.nytimes.com/images/2008/02/29/arts/music/01moth-grim.jpg" alt="Britten&rsquo;s Tale of the Haunted Misfit" width="151" height="151" /></a>
            </div>
            <h6 class="headline"><a href="http://www.nytimes.com/2008/03/01/arts/music/01grim.html">Britten&rsquo;s Tale of the Haunted Misfit</a></h6>
        </div>
    </td>
                                                <td class="hidden">
        <div class="story">
            <h6 class="kicker">
                                    <a href="http://www.nytimes.com/pages/realestate/index.html">Real Estate &raquo;</a>
                            </h6>
            <div class="mothImage">
                <a href="http://www.nytimes.com/2008/03/02/realestate/02cov.html"><span class="img" src="http://swww.nytimes.com/images/2008/02/29/realestate/02moth-cov.jpg" alt="Winning That One in a Million Housing Lottery" width="151" height="151" /></a>
            </div>
            <h6 class="headline"><a href="http://www.nytimes.com/2008/03/02/realestate/02cov.html">Winning That One in a Million Housing Lottery</a></h6>
        </div>
    </td>
                                                <td class="hidden">
        <div class="story">
            <h6 class="kicker">
                                    <a href="http://www.nytimes.com/pages/opinion/index.html">Opinion &raquo;</a>
                            </h6>
            <div class="mothImage">
                <a href="http://www.nytimes.com/2008/03/01/opinion/01hedin.html"><span class="img" src="http://swww.nytimes.com/images/2008/02/29/opinion/01moth-opart.jpg" alt="Op-Ed: My Forbidden Fruits (and Vegetables)" width="151" height="151" /></a>
            </div>
            <h6 class="headline"><a href="http://www.nytimes.com/2008/03/01/opinion/01hedin.html">Op-Ed: My Forbidden Fruits (and Vegetables)</a></h6>
        </div>
    </td>
                                    </tr>
            </tbody>
        </table>
    </div>
    
    </div><!-- end #insideNYTimes -->


</div>
<!--Footer -->

<NYT_FOOTER>	 
<NYT_COPYRIGHT>

<div id="footer">
<div class="footerRow">
<a href="http://www.nytimes.com/">Home</a>
<ul>
<li><a href="http://swww.nytimes.com/pages/world/index.html">World</a></li>
<li><a href="http://swww.nytimes.com/pages/national/index.html">U.S.</a></li>
<li><a href="http://swww.nytimes.com/pages/nyregion/index.html">N.Y. / Region</a></li>
<li><a href="http://swww.nytimes.com/pages/business/index.html">Business</a></li>
<li><a href="http://swww.nytimes.com/pages/technology/index.html">Technology</a></li>
<li><a href="http://swww.nytimes.com/pages/science/index.html">Science</a></li>
<li><a href="http://swww.nytimes.com/pages/health/index.html">Health</a></li>
<li><a href="http://swww.nytimes.com/pages/sports/index.html">Sports</a></li>
<li><a href="http://swww.nytimes.com/pages/opinion/index.html">Opinion</a></li>
<li><a href="http://swww.nytimes.com/pages/arts/index.html">Arts</a></li>
<li><a href="http://swww.nytimes.com/pages/style/index.html">Style</a></li>
<li><a href="http://travel.nytimes.com/pages/travel/index.html">Travel</a></li>
<li><a href="http://www.nytimes.com/pages/jobs/index.html">Jobs</a></li>
<li><a href="http://swww.nytimes.com/pages/realestate/index.html">Real Estate</a></li>
<li><a href="http://swww.nytimes.com/pages/automobiles/index.html">Automobiles</a></li>
<li><a href="#top">Back to Top</a></li>
</ul>
</div>
<a href="http://www.nytimes.com/ref/membercenter/help/copyright.html">Copyright 2009</a> 
<a href="http://www.nytco.com/">The New York Times Company</a>
<ul>
<li><a href="http://www.nytimes.com/privacy">Privacy Policy</a></li>
<li><a href="http://query.nytimes.com/gst/sitesearch_selector.html?query=&date_select=full&type=nyt">Search</a></li>
<li><a href="http://www.nytimes.com/corrections.html">Corrections</a></li>
<li><a href="http://www.nytimes.com/rss" class="rssButton">RSS</a></li>
<li><a href="http://firstlook.nytimes.com">First Look</a></li>
<li><a href="http://www.nytimes.com/membercenter/sitehelp.html">Help</a></li>
<li><a href="http://nytimes.com/ref/membercenter/help/infoservdirectory.html">Contact Us</a></li>
<li><a href="http://www.nytco.com/careers/">Work for Us</a></li>
<li><a href="http://spiderbites.nytimes.com/">Site Map</a></li>
</ul>
</div>

</NYT_COPYRIGHT>
</NYT_FOOTER>  

</div>
</div>

			
		<!-- Start UPT call -->
		<img height="1" width="3" border=0 src="http://up.nytimes.com/?d=0/8/&t=2&s=2&ui=14513445&r=http%3a%2f%2fk2stage%2eem%2enytimes%2ecom%2fcs%2fContentServer%3fpagename%3dNYTd%252FPublishNow%26pubid%3d987627237870%26page%5fid%3d1226519877114%26asset%5ftype%3dNYT%5fArticle%26ssTodaysYear1%3d2009%26ssTodaysMonth1%3d05%26ssTodaysDay1%3d17%26force%3dF%26target%3d988585607032%26publishdepth%3d1%26submit%3dPublish&u=swww%2enytimes%2ecom%2f2009%2f05%2f17%2frealestate%2fbart%5fre%5fsales%2ehtml%3f">
		<!-- End UPT call -->
	
		
        <script language="JavaScript"><!--
          var dcsvid="14513445";
          var regstatus="registered";
        //--></script>
        <script src="http://swww.nytimes.com/js/app/analytics/trackingTags_v1.1.js" type="text/javascript"></script>
        <noscript>
          <div><img alt="DCSIMG" id="DCSIMG" width="1" height="1" src="http://wt.o.nytimes.com/dcsym57yw10000s1s8g0boozt_9t1x/njs.gif?dcsuri=/nojavascript&amp;WT.js=No&amp;WT.tv=1.0.7"/></div>
        </noscript>
   


		<script language="Javascript">Tacoda_AMS_DDC_addPair("t_section","Realestate")</script>
		<script language="Javascript">Tacoda_AMS_DDC_addPair("site","nytimes.com")</script>
		<script language="JavaScript">Tacoda_AMS_DDC("http://te.nytimes.com/tte/blank.gif","1.0")</script>	
		
<IMG SRC="/adx/bin/clientside/58a15a97Q2F_oooQ24KQ22DragbgrrrrrgbKHQ5E" height="1" width="3">


</body>


<!-- ADXINFO classification="blank-but-count-imps" campaign="blank-popunderblocker"--><img src="http://graphics8.nytimes.com/ads/blank.gif">
<script language="javascript" src="http://core.insightexpressai.com/adServer/adServerESI.aspx?bannerID=143390"></script>
</html>





 












<ics:argument name="asset_id" value="1226519877114"/>





<? } ?>