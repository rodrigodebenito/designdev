<?php

/**
* 
*/
class Mm {
  function __construct() {
    $this->vertical             = $_REQUEST['mm']['vertical'];
    $this->cvertical            = $_REQUEST['mm']['cvertical'];
    $this->month     	        = $_REQUEST['mm']['month'];
    $this->day     			    = $_REQUEST['mm']['day'];
    $this->year     			= $_REQUEST['mm']['year'];
    $this->logurl				= $_REQUEST['mm']['logurl'];
    $this->gifurl             	= $_REQUEST['mm']['gifurl'];
    $this->txturl           	= $_REQUEST['mm']['txturl'];
    $this->photourl          	= $_REQUEST['mm']['photourl'];
    $this->headurl            	= $_REQUEST['mm']['headurl'];
    $this->l1url             	= $_REQUEST['mm']['l1url'];
    $this->l2url             	= $_REQUEST['mm']['l2url'];
    $this->l3url             	= $_REQUEST['mm']['l3url'];
    $this->head             	= $_REQUEST['mm']['head'];
    $this->l1             		= $_REQUEST['mm']['l1'];
    $this->l2            		= $_REQUEST['mm']['l2'];
    $this->l3             		= $_REQUEST['mm']['l3'];
    $this->headsize             	= $_REQUEST['mm']['headsize'];
    $this->headcolor             	= $_REQUEST['mm']['headcolor'];
  }
}


?>
