<?php

require_once 'config.php';

$path = PATH;

$directories = scandir($path);
natcasesort($directories);

$directories = array_filter($directories, "notDotandNotFile");

function notDotandNotFile($file) {
  return !preg_match('/^\./', $file) && !is_file($file);
}


ob_start();
include_once 'index_view.php';
$CONTENT .= ob_get_contents();
ob_end_clean();
include_once 'layout.php';

?>