<?php

/**
* 
*/
class NewsLetter {
  function __construct( ) {
    
    $this->name             = $_REQUEST['newsletter']['name'];
    $this->code             = $_REQUEST['newsletter']['code'];
    $this->header           = $_REQUEST['newsletter']['header'];
    $this->hero             = $_REQUEST['newsletter']['hero'];
    $this->color             = $_REQUEST['newsletter']['color'];
    $this->lead             = $_REQUEST['newsletter']['lead'];
    $this->body             = $_REQUEST['newsletter']['body'];
    
  }
}

?>
