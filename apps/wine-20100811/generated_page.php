<?php
if ($_REQUEST['mm']) {
  require_once 'mm.php';
  $mm = new Mm();
  include_once('view/show.php');
}
else {
  header("Location: index.php");  
}
?>