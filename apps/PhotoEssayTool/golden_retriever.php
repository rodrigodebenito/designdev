<?php
	// // Prevent caching.
	header('Cache-Control: no-cache, must-revalidate');
	header('Expires: Mon, 01 Jan 1996 00:00:00 GMT');
	header('Content-type: application/json');

	ini_set('display_errors', 1);

	$content = file_get_contents($_GET["SSUrl"]);
	if($content) echo $content;

?>