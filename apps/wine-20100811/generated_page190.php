<?php
if ($_REQUEST['mm']) {
  require_once 'mm190.php';
  $mm = new Mm();
  include_once('view/show190.php');
}
else {
  header("Location: index190.php");  
}
?>