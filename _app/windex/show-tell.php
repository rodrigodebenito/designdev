<section id="show-tell" class="dropper">
  <div class="container">
    <div class="row">
      <div id="log_box" class="span5 offset3">
        <h3>SHOW & TELL</h3>

        <?php
        // Project Log Roll
				
        $query = "SELECT * FROM log WHERE log_type = 'showtell' ORDER BY id DESC";
				$result = db_query('query', $query);
				if (!empty($result)) {
	        $json = array();
	        while($row = mysql_fetch_row($result)){
	          $log_result = json_decode($row[2], true);
	          $log_time = $row[4];
	          // echo $log_result;
	          $project_name = $log_result['item']['project_name'];
	          $log_project_name = '';
	          if (!empty($project_name)) {
	            $log_project_name = '<h6><a class="log_path" href="'.$log_result['item']['path'].'">'.$log_result['item']['project_name'].'</a></h6>';
	          }
          
	          echo <<<EOF
	          <div class="log_item">
	            <div class="circle">
	              <img class="log_designer_img" src="$windex_path/img/jeremy.gif" alt="Updated by {$log_result['item']['designer']}">
	            </div>
	            <p class="log_status">$log_project_name {$log_result['item']['log_status']}</p>
	            <p class="log_meta"><a class="log_time" href="{$log_result['item']['path']}" title="$log_time">$log_time</a> — <em>by <a class="log_designer">{$log_result['item']['designer']}</em></a></p>
	          </div>
EOF;
	        }
					# code...
				}
        ?>
      </div><!-- #log -->
      
    </div>
  </div><!-- .container -->
</section>


