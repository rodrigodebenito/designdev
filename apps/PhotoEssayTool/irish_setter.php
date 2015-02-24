<?php

	$name = $_POST["name"];
	$content = $_POST["page"];

	$myFile = 'savedFiles/' . $name . ".html";
	$fh = fopen($myFile, 'w') or die("can't open file");

	$htmlHead = '<!DOCTYPE html><html class="no-js"><head><meta charset="utf-8"><title>' . $name . '</title><meta name="viewport" content="width=device-width, initial-scale=1">';
	fwrite($fh, $htmlHead);

	$style = '<style>section{display:block;margin:10px 0;padding:10px 0;position:relative;width:100%;}section header {display: block;font-size: 60px;text-align: center;}section p {margin: 10px auto;width: 600px;}section img {display: block;margin: 0 auto;}</style></head><body>';
	fwrite($fh, $style);

	$stringData = iconv("ISO-8859-1", "UTF-8", $content);

	fwrite($fh, $stringData);
	fclose($fh);

	$htmlEnd = "</body></html>";
	fwrite($fh, $htmlEnd);

	echo "DONE";

?>