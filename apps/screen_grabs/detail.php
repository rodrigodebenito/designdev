<?php

// Google: check if a folder exists php
// http://www.dslreports.com/forum/r19705384-PHP-check-to-see-if-a-folder-exists
// http://www.php.net/is_dir

// Check for file - v4
// returns filename and what directory it is in (absolute path)
define('ABSPATH', realpath(dirname($_server['PHPSELF'])));
// also define destination path 
// $DESPATH = ABSPATH."grabs-v2";

// from blogheader browser
$path = ABSPATH;

$directories = scandir($path);

$directories = array_filter($directories, "notDotandNotFile");

function notDotandNotFile($file) {
  return !preg_match('/^\./', $file) && !is_file($file);
}


function get_file_from_dir() {
  	
	// open the directory
	$dir = opendir (ABSPATH);

}



include_once 'layout.php';
?>
