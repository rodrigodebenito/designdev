<?php

function get_log_roll(){
  global $r, $q, $u;
  $query = "SELECT * FROM log WHERE log_path LIKE '%$r%' ORDER BY id DESC";
  $mysqli = get_db();
  $results = $mysqli->query( $query );
  $rows = array();
  if (!empty($results)) {
    while ( $result = $results->fetch_assoc()) {
      array_push($rows, $result);
    }
  }
  // print_r($rows);
  return $rows;
}


?>