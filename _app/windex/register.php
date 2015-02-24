<?php include('header.php'); ?>

<section id="welcome">
  <div class="container">
    <div class="row">
      <div class="span6 well">
        <p><a href="#"><img src="<?php echo $windex_path; ?>/oauth/images/lighter.png" alt="Sign in with Twitter"/></a></p>
        <form class="form-horizontal" action="profile" method="post" accept-charset="utf-8">
          <div class="control-group">
            <label class="control-label" for="name">Name</label>
            <div class="controls">
              <input type="text" class="span2" name="name" value="" placeholder="" id="name">
            </div>
          </div><!-- .control-group -->

          <div class="control-group">
            <label class="control-label" for="nyt-email">NYTimes E-mail</label>
            <div class="controls">
              <div class="input-append">
                <input name="nyt-email" class="span2" type="text" placeholder="name">
                <span class="add-on">@nytimes.com</span>
              </div>
            </div>
          </div><!-- .control-group -->
          
          <!-- Work Phone -->
          <div class="control-group">
            <label class="control-label" for="work-phone">Work Phone</label>
            <div class="controls">
              <div class="input-prepend">
                <span class="add-on">212-556-</span>
                <input name="work-phone" class="span2" id="prependedInput" type="text" placeholder="1234">
              </div>
            </div>
          </div><!-- .control-group -->
          
          <div class="control-group">
            <label class="control-label" for="personal-email">Personal E-mail</label>
            <div class="controls">
              <input name="personal-email" class="span2" type="text" placeholder="moose@gmail.com">
            </div>
          </div><!-- .control-group -->
          
          <!-- Personal Phone -->
          <div class="control-group">
            <label class="control-label" for="personal-phone">Personal Phone</label>
            <div class="controls">
              <input name="personal-phone" class="span2" type="text" placeholder="555-555-5555">
            </div>
          </div><!-- .control-group -->

          <div class="control-group">
            <label class="control-label" for="twitter">Twitter</label>
            <div class="controls">
              <div class="input-prepend">
                <span class="add-on">@</span>
                <input name="twitter" class="span2" id="prependedInput" type="text" placeholder="Username">
              </div>
            </div>
          </div><!-- .control-group -->


          <input class="btn btn-primary" type="button" name="submit" value="Save" id="submit">
        </form>
      </div>
    </div><!-- .row -->
  </div><!-- .container -->
</section>


<?php include('footer.php'); ?>