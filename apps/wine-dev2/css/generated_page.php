<?php
if ($_REQUEST['mm']) {
  require_once 'mm.php';
  $newsletter = new Mm();
  include_once('view/show.php');
}
else {
  header("Location: index.php");  
}
?>