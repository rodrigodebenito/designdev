<?php

function show_log_roll($log_roll){
  global $windex_path, $project_title, $r;
  $imgpath = $windex_path.'/img/jeremy.gif';
  
  // print_r($log_roll);

	if (empty($log_roll)) {
    // echo 'EMPTY';
  } else {
		foreach ($log_roll as $log) {
      // print_r($log);
      
			$log_data = json_decode($log['log_data'], true);
			// print_r($log_data);
			$log_path = $log_data['path'];
			$project_name = $log_data['title'];
      $folder_icon = '';
      if ($log_path !== $r) {
        $folder_icon = '<i class="fa fa-folder"></i> ';
      }

      $log_project_name = '';
      if (!empty($project_name)) {
        $log_project_name = '<a href="'.$log_path.'" title="'.$log_path.'">'.$folder_icon.$project_name.'</a>';
      } else {
        $log_project_name = '<a href="'.$log_path.'" title="'.$log_path.'">'.$folder_icon.$log_path.'</a>';
      }
			$log_time = $log['log_time'];
			$log_designer = $log['designer'];
      $log_type = $log['log_type'];
      if ($log_type == 'edit') {
        $log_type = 'edited';
      }
      if ($log_type == 'delete') {
        $log_type = 'deleted a file in';
      }
			
      echo <<<EOF
      <li>
        <div class="circle">
          <img src="$imgpath" width="30px" height="30px" alt="Updated by $log_designer">
        </div>
        <div class="status">
          <p>$log_designer $log_type $log_project_name, <span class="log_time">$log_time</span></p>
        </div>
      </li>
EOF;
		}
  }
} ?>