<?php

  ini_set('display_errors', 1);

  $results = file_get_contents($_GET["url"]);
  if($results) echo $results;

?>