<?php
function update_log($type, $project_title){
  // echo '<h1>123</h1>';
  $id = 'update_log_'.$type;
  if ($type == 'status') {
    $button = 'Add';
    $button_class = '';
  } else if ($type == 'showtell') {
    $button = 'SNT';
    $button_class = '';
  } else {
    $button = 'Reset';
    $button_class = 'btn-danger';
  }
  global $windex_path, $r;
  $_log = $windex_path.'/functions/_log.php';
  
  echo <<<EOF
<form data-type='$type' id='$id' class='update_log form-inline' action='$_log' method='post' accept-charset='utf-8'>
  <input type='hidden' name='designer' value='Jeremy Zilar' id='log_designer'>
  <input type='hidden' name='project_name' value='$project_title' id='log_project_name'>
  <input type='hidden' name='path' value='$r' id='log_path'>
  <textarea name='log_status' rows='3' id='$type' placeholder='Add status'></textarea>
  <div class='form-actions'>
    <button type='submit' class='btn btn-mini btn-primary pull-right $button_class'>$button</button>
  </div>
</form>
EOF;
}

?>