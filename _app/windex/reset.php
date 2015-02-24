<?php
if (!empty($project_data)) { ?>
  
  <!-- Edited By -->
  <p class="edited_by pull-right">Last edited by <span class="designer"><?php echo $project_designer; ?></span> <span class="updated" title="<?php echo $project_updated; ?>"><?php echo $project_updated; ?></span> | <a href="#" class="reset_modal" data-toggle="modal" data-target="#reset_modal">Reset</a></p>

  <!-- Modal -->
  <div id="reset_modal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title">Reset</h4>
        </div>
        <div class="modal-body">
          <p>This will reset this project to the default file listing on the server.</p>
          <p>Are you sure you want to do this?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="reset btn btn-danger">Reset Project</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<?php } ?>