<?php 
  function get_db(){
  	$dbhost = 'localhost';
	  $dbuser = 'root';
	  $dbpass = 'root';
	  $dbdatabase = 'design';
	  return $MYSQLI = new mysqli($dbhost, $dbuser, $dbpass, $dbdatabase);
  }
 ?>