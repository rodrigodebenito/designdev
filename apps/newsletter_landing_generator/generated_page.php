<?php
if ($_REQUEST['newsletter']) {
  
  require_once 'newsletter.php';
  $newsletter = new Newsletter( );
  include_once('view/show.php');
}
else {
  header("Location: index.php");  
}
?>