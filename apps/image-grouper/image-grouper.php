<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Compare</title>
    <link rel="stylesheet" href="/apps/blogheader_browser/css/blog_headers.css" type="text/css" media="screen" title="no title" charset="utf-8">


<!--

	HI SASCHA,
	What are you doing editing this??

-->




<style type="text/css">
<!--

body,html > body {
	margin:0;
	padding:59px 52px;
	float:left;
}

.link {
	text-align:left;
	vertical-align:top;
}

h2 {
	text-align:left;
	padding:80px 0 5px 0;
	border-bottom:2px solid #ccc;
}
img {
	padding:10px 40px 0 0;

}

#main,#page {
	white-space:nowrap;
	width:inherit;
	float:left;
}

#topNav { color:#ccc; }

-->
</style>

  </head>
  <body>
	<a href="/" id="logo"></a>
    <div id="page">
	
	
      <div id="header">
        <? /*     <h1><a href="/blogs/">NYTimes.com Images</a></h1>    */ ?>
      </div>
      <div id="main">
      	
      
        



<?php
        $handle = opendir ('./');
		$header = '';
		
		function niceName($filename) {
			$filename = str_replace("-", " ", $filename);
			$filename = str_replace("_", " ", $filename);
			
			return $filename;
		}
		
		$files = array();
        while (false !== ($file = readdir($handle))) {
            if($file != "." && 
            	$file != ".." && 
            	$file != basename(__FILE__) && 
            	strpos($file,".htaccess")===FALSE && 
            	strpos($file,".html")===FALSE && 
            	strpos($file,".php")===FALSE ) {
					array_push($files,$file);			
            }
        }

		sort($files);
		
		
		
		$showImages = "";
		
		
		foreach ( $files as $file ) {
			
				if ( strpos($file,"_") >= 1 ) {
					$lastHeader = $header;
					$header = substr($file, 0 , strpos($file,"_")  );
					
					if ($lastHeader != $header && $header != "") {
						$showImages .= "<h2 id='" . $header . "'>" . niceName($header) ."</h2>";
						
						$groupAnchors[] = "<a href='#".$header."'>". niceName($header) . "</a>";
						
					}
					
				}
	
				
				$showImages .= '<a href="'.$file.'">';
					
					if( strpos($file,".psd") >= 1 || strpos($file,".ai") >= 1 || strpos($file,".eps") >= 1 ) {
						$showImages .= $file;
					} else {
						$showImages .= '<img border="0" src="'.$file.'" />';
					}
					
				$showImages .= '</a>&nbsp;&nbsp;';
		}

		
		$groupAnchors = implode($groupAnchors, "&nbsp;&nbsp;|&nbsp;&nbsp;");

		echo "<div id='topNav'>".$groupAnchors."</div>";
		echo $showImages;
		
?>



</div>
</div>
</body>
</html>