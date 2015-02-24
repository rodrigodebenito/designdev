<?php

/**
* 
*/
class Mm {
  
	
  function __construct() {
		function getVertical($cvertical,$format="text") {
			  switch($cvertical) {
					case "autos":
						if($format == "two") { return "AU"; } else { return "Autos"; }
						break;
						
					case "arts":
						if($format == "two") { return "AR"; } else { return "Arts"; }
						break;
					case "business":
						if($format == "two") { return "BU"; } else { return "Business"; }
						break;
					case "general":
						if($format == "two") { return "GN"; } else { return "NYTimes.com"; }
						break;
						
					case "greathomes":
						if($format == "two") { return "GH"; } else { return "Great Homes"; }
						break;
					
					case "health":
						if($format == "two") { return "HL"; } else { return "Health"; }
						break;
					case "jobs":
						if($format == "two") { return "JO"; } else { return "Jobs"; }
						break;
					case "movies":
						if($format == "two") { return "MO"; } else { return "Movies"; }
						break;
					case "mobile":
						if($format == "two") { return "MB"; } else { return "Mobile"; }
						break;
					case "opinion":
						if($format == "two") { return "OP"; } else { return "Opinion"; }
						break;
					case "politics":
						if($format == "two") { return "PO"; } else { return "Politics"; }
						break;
					case "realestate":
						if($format == "two") { return "RE"; } else { return "Real Estate"; }
						break;
					case "sports":
						if($format == "two") { return "SP"; } else { return "Sports"; }
						break;
					case "style":
						if($format == "two") { return "ST"; } else { return "Style"; }
						break;
					case "tech":
						if($format == "two") { return "TE"; } else { return "Tech"; }
						break;
					case "theater":
						if($format == "two") { return "TH"; } else { return "Theater"; }
						break;
					case "timespeople":
						if($format == "two") { return "TP"; } else { return "Times People"; }
						break;
					case "travel":
						if($format == "two") { return "TR"; } else { return "Travel"; }
						break;
					case "video":
						if($format == "two") { return "VI"; } else { return "Video"; }
						break;
					case "tmagazine":
						if($format == "two") { return "TM"; } else { return "T Magazine"; }
						break;
					case "magazine":
						if($format == "two") { return "GN"; } else { return "The Magazine"; }
						break;
			  }
		  }
		
		
		
		function linkCode($vertical,$date,$linktype) {
			$startDate = "2009-04-17";
			$days = (strtotime($date) - strtotime($startDate)) / (60 * 60 * 24);

			$thisWeek = str_pad( 93 + ( Floor($days/7) ) , 3 , "0", STR_PAD_LEFT);
			
			if($_REQUEST['mm']['moduletype'] == "testa") {
			//	$thisWeek = $thisWeek."B";
			}
			
			if($_REQUEST['mm']['edition'] == "global") { return ""; } else {
				return "WT.mc_id=".getVertical($vertical,"two")."-D-I-NYT-MOD-MOD-M".$thisWeek."-ROS-".substr($date,3,2).substr($date,0,2)."-".$linktype."&WT.mc_ev=click";
			}
		}
		
		function get_julian( $str )
		    {
		        $d = date_create($str);

		        if( $d == false )
		            return 0;

		        $day_in_year = (int) date_format($d, "z");
		        $year        = (int) date_format($d, "Y") - 1;
		        $julian_days = $year * 365;
		        $julian_days += ($year >>= 2);
		        $julian_days -= ($year /= 25);
		        $julian_days += $year >> 2;
		        $julian_days += $day_in_year + 1;

		        return ceil($julian_days);
		    }
	
	$this->edition             = $_REQUEST['mm']['edition'];
	$this->moduletype             = $_REQUEST['mm']['moduletype'];
    $this->vertical             = $_REQUEST['mm']['vertical'];
    $this->cvertical            = getVertical($_REQUEST['mm']['vertical']);
    $this->month     	        = $_REQUEST['mm']['month'];
    $this->day     			    = $_REQUEST['mm']['day'];
    $this->year     			= $_REQUEST['mm']['year'];
    $this->logurl				= "?" . linkCode(
										$_REQUEST['mm']['vertical'] , 
										$_REQUEST['mm']['year']."-".$_REQUEST['mm']['month']."-".$_REQUEST['mm']['day']." 00:00:00" ,  
										"LOGO"
									);
    $this->gifurl             	= 	"?" . linkCode(
										$_REQUEST['mm']['vertical'] , 
										$_REQUEST['mm']['year']."-".$_REQUEST['mm']['month']."-".$_REQUEST['mm']['day']." 00:00:00" ,  
										"VRT"
									);
    $this->txturl           	= 	"?" . linkCode(
										$_REQUEST['mm']['vertical'] , 
										$_REQUEST['mm']['year']."-".$_REQUEST['mm']['month']."-".$_REQUEST['mm']['day']." 00:00:00" ,  
										"URL"
									);

    $this->photourl          	= trim($_REQUEST['mm']['headurl']) . linkCode(
										$_REQUEST['mm']['vertical'] , 
										$_REQUEST['mm']['year']."-".$_REQUEST['mm']['month']."-".$_REQUEST['mm']['day']." 00:00:00" ,  
										"PH"
									);
    $this->headurl            	= trim($_REQUEST['mm']['headurl']) . linkCode(
										$_REQUEST['mm']['vertical'] , 
										$_REQUEST['mm']['year']."-".$_REQUEST['mm']['month']."-".$_REQUEST['mm']['day']." 00:00:00" ,  
										"HDR"
									);
    $this->l1url             	= trim($_REQUEST['mm']['l1url']) . linkCode(
										$_REQUEST['mm']['vertical'] , 
										$_REQUEST['mm']['year']."-".$_REQUEST['mm']['month']."-".$_REQUEST['mm']['day']." 00:00:00" ,  
										"L1"
									);
    $this->l2url             	= trim($_REQUEST['mm']['l2url']) . linkCode(
										$_REQUEST['mm']['vertical'] , 
										$_REQUEST['mm']['year']."-".$_REQUEST['mm']['month']."-".$_REQUEST['mm']['day']." 00:00:00" ,  
										"L2"
									);
    // $this->l3url             	= trim($_REQUEST['mm']['l3url']) . linkCode(
    // 										$_REQUEST['mm']['vertical'] , 
    // 										$_REQUEST['mm']['year']."-".$_REQUEST['mm']['month']."-".$_REQUEST['mm']['day']." 00:00:00" ,  
    // 										"L3"
    // 									);
    $this->head             	= $_REQUEST['mm']['head'];
    $this->l1             		= $_REQUEST['mm']['l1'];
    $this->l2            		= $_REQUEST['mm']['l2'];
    // $this->l3             		= $_REQUEST['mm']['l3'];
    $this->headsize             	= $_REQUEST['mm']['headsize'];
    $this->headcolor             	= $_REQUEST['mm']['headcolor'];
  }
}


?>
