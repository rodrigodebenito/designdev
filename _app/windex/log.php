<section id="log" class="dropper">
  <div class="container">
    <div class="row">
      <div id="log_box" class="span5">
        <h3>Log</h3>

        <?php
        // Project Log Roll
        $query = "SELECT * FROM log ORDER BY id DESC";
				$results = db_query('query', $query);
				show_log_roll($log_roll);
        ?>
      </div><!-- #log -->
      
      
      <div id="login-box" class="span3 offset2">
        <div class="well">
          <h5>Login</h5>
          <form class="">
            <div class="control-group">
              <label class="control-label" for="inputEmail">Email</label>
              <div class="controls">
                <input type="text" id="inputEmail" placeholder="Email">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputPassword">Password</label>
              <div class="controls">
                <input type="password" id="inputPassword" placeholder="Password">
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <label class="checkbox">
                  <input type="checkbox"> Remember me
                </label>
                <button type="submit" class="btn">Sign in</button>
              </div>
            </div>
          </form>

        </div>
      </div>
      
    </div>
  </div><!-- .container -->
</section>


