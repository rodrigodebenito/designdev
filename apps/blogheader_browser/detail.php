<?php

require_once 'config.php';

class BlogHeader {
  function __construct($blogname, $filename) {
    $this->path = PATH;
    $this->base_uri = BASE_URI;
    $this->blogname = $blogname;
    $this->filename = $filename;
    $this->name = $this->getName();
    $this->title = $this->getTitle();
    $this->image = "$this->base_uri/$this->blogname/$filename";
    $this->psd = $this->getPSD();
    $this->ai = $this->getAI();
  }
  
  function getPSD() {
    if (file_exists("$this->path/$this->blogname/$this->name.psd")) {
      return "$this->base_uri/$this->blogname/$this->name.psd";
    }
    else return null;
  }
  
  function getAI() {
    if (file_exists("$this->path/$this->blogname/$this->name.ai")) {
      return "$this->base_uri/$this->blogname/$this->name.ai";
    }
    else return null;
  }
  
  function getName() {
    return eregi_replace('\..*', '', $this->filename);
  }
  
  function getTitle() {
    switch(true) {
      case  preg_match("/^_.*/i", $this->name) :
        $title = 'Article Header';
        break;
      case $this->name == $this->blogname :
        $title = 'Main Header';
        break;
      default:
        $title = $this->getName();
    }
    
    return $title;
  }
}

class Blog {
  var $base_uri = BASE_URI;
  var $path = PATH;
  var $name;
  var $headers;
  
  function __construct() {
    $this->name = $_REQUEST['name'];
    $this->headers =  $this->getHeaders(); 
  }
  
  function getHeaders() {
    global $ERRORS;
    $files = scandir("$this->path/$this->name");
    if (!$files) $ERRORS = 'Sorry, the blog you are looking does not exist';
    $images = array_filter($files, array($this, "isImage"));
    $headers = array();
    foreach($images as $image) {
      $headers[] = new BlogHeader($this->name,$image);
    }
    return $headers;
  }
  
  public static function isImage($filename) {
      return eregi('\.png', $filename) || eregi('\.jpg', $filename) || eregi('\.gif', $filename);
  }
}

class FileList {
  var $base_uri = BASE_URI;
  var $path = PATH;
  var $name;
  var $headers;
  
  function __construct() {
    $this->name = $_REQUEST['name'];
    $this->headers =  $this->getHeaders(); 
  }
  
  function getHeaders() {
    global $ERRORS;
    $files = scandir("$this->path/$this->name");
    if (!$files) $ERRORS = 'Sorry, the blog you are looking does not exist';
    $headers = array();
    foreach($files as $image) {
	  if($image != "." && $image != ".." && $image != "info.txt") {
      	$headers[] = new BlogHeader($this->name,$image);
      }
	}
    return $headers;
  }
}

$blog = new Blog();
$filelist = new FileList();
ob_start();
include_once 'detail_view.php';
$CONTENT .= ob_get_contents();
ob_end_clean();
include_once 'layout.php';
?>
