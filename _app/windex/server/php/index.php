<?php
/*
 * jQuery File Upload Plugin PHP Example 5.14
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

error_reporting(E_ALL | E_STRICT);
require('UploadHandler.php');
$relative_dir = $_REQUEST['relative_path'];
$upload_dir = $_REQUEST['custom_path']."/".$relative_dir."/";
$local_dir = $_REQUEST['local_path']."/".$relative_dir."/";
$option = array(
	'upload_dir' => $upload_dir,
	'thumbnail' => array(
    'upload_dir' => $upload_dir . '/_thumbs/', // Not currently used (folder defined on UploadHandler class)
    'upload_url' => $local_dir . '/_thumbs/', // Not currently used (folder defined on UploadHandler class)
    'max_width' => 150,
    'max_height' => 150
  )
);

//var_dump( $option );
//die;
$upload_handler = new UploadHandler($option);