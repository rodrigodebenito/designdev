<?php 

define('ABSPATH', '/web/design/docs/grabs');

$path = ABSPATH;

function findexts($filename) {
	$filename = strtolower($filename) ;
	$exts = split("[/\\.]", $filename) ;
	$n = count($exts)-1;
	$exts = $exts[$n];
	return $exts;
}

function get_file_from_dir() {
  	
	// open the directory
	$dir = opendir (ABSPATH);

 	// loop through it, looking for any/all PNG, JPG, & GIF files:
	while (false !== ($file = readdir($dir))) {
		if (strpos($file, '.png',1)||strpos($file, '.jpg',1)||strpos($file, '.gif',1) ) {
			
			// check last time file was modified & pull year and month info
			$mtime = filemtime($file);
			$year = date("Y", $mtime); 
			$month = date("m", $mtime); 
			$day = date("d", $mtime);
			$hour = date("H", $mtime);			
			$minute = date("i", $mtime);			
			
			$filename = $file;
			// if filename contains " - NYTimes.com"...
			if (strstr($filename, " - NYTimes.com") && !strstr($filename, $day)) {
						
				// apply the findexts() function
				$ext = findexts($file);

				// remove the file extension and " - NYTimes.com"
				$newstring = substr($filename, 0, -18);
				
				$renamed_filename = $day."_".$newstring."_".$hour.$minute.".".$ext;

				rename($file, $day."_".$newstring."_".$hour.$minute.".".$ext);

			} else if (strstr($filename, " - New York Times Blog") && !strstr($filename, $day)) {

				// apply the findexts() function
				$ext = findexts($file);

				// remove the file extension and " - New York Times Blog"
				$newstring = substr($filename, 0, -26);
				
				$renamed_filename = $day."_".$newstring."_".$hour.$minute.".".$ext;

				rename($file, $day."_".$newstring."_".$hour.$minute.".".$ext); 

			} else if (strstr($filename, "The New York Times > ") && !strstr($filename, $day)) {

				// remove "The New York Times > "
				$newstring = substr($filename, 21);
				
				// $renamed_filename = $day."_".$newstring;
				// rename($file, $day."_".$newstring); 

				$renamed_filename = $day."_".$newstring."_".$hour.$minute.".".$ext;

				rename($file, $day."_".$newstring."_".$hour.$minute.".".$ext); 

			} else if (strstr($filename, " - The New York Times") && !strstr($filename, $day)) {

				// apply the findexts() function
				$ext = findexts($file);

				// remove the file extension and " - The New York Times"
				$newstring = substr($filename, 0, -25);
				
				$renamed_filename = $day."_".$newstring."_".$hour.$minute.".".$ext;

				rename($file, $day."_".$newstring."_".$hour.$minute.".".$ext); 

			} else if (strstr($filename, " - New York Times") && !strstr($filename, $day)) {

				// apply the findexts() function
				$ext = findexts($file);

				// remove the file extension and " - New York Times"
				$newstring = substr($filename, 0, -21);
				
				$renamed_filename = $day."_".$newstring."_".$hour.$minute.".".$ext;

			  	rename($file, $day."_".$newstring."_".$hour.$minute.".".$ext); 

			} else if (!strstr($filename, $day)) {

				// apply the findexts() function
				$ext = findexts($file);

				// remove the file extension
				$newstring = substr($filename, 0, -4);
				
				$renamed_filename = $day."_".$newstring."_".$hour.$minute.".".$ext;

				rename($file, $day."_".$newstring."_".$hour.$minute.".".$ext);
			}
			
			// check if "year" folder exists
			if (!is_dir($year)) {
				mkdir($year, 0777);
				chmod($year, 0777);				
			}
			
			// check if "month" folder exists
			if(!is_dir($year .'/'. $month)) {
				mkdir($year .'/'. $month, 0777);
				chmod($year .'/'. $month, 0777);
			}
			
	 		rename(ABSPATH."/".$renamed_filename, ABSPATH."/".$year."/".$month."/".$renamed_filename);
			
		}  
	}
}

get_file_from_dir();

ob_start();
include_once 'index_view.php';
$CONTENT = ob_get_contents();
ob_end_clean();
include_once 'layout.php';

?>