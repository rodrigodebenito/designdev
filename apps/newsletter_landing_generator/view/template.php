<!DOCTYPE html>
<html lang="en">
<head>

  <title><?php echo $newsletter->name; ?></title>
  <meta charset="UTF-8">
  
  <?php
  /**
   * @version: $Id: template.php 390 2011-08-02 15:59:22Z jon $
   * @overview: Marketing Module Generator
   */
   ?>

  <link rel="stylesheet" href="http://css.nyt.com/marketing/css/0.1/build.min.css">
  <link rel="stylesheet" href="http://css.nyt.com/marketing/css/0.1/newsletter.min.css">
  <style>
  strong { color: <?php echo $newsletter->color; ?>; }
  </style>

  <!--[if IE]>
    <style type="text/css">
      @import url(http://css.nyt.com/css/0.1/screen/common/ie.css);
    </style>
  <![endif]-->

  <script src="http://js.nyt.com/js2/build/sitewide/sitewide.js"></script>

</head>

<body>

  <div id="shell">

    <ul id="memberTools">
      <li><iframe scrolling="no" frameborder="0" src="http://www.nytimes.com/export_html/common/new_login_iframe.html"></iframe></li>
    </ul>

    <div class="tabsContainer">
      <ul id="mainTabs" class="tabs"></ul>
    </div><!-- END .tabsContainer -->

    <div id="page" class="tabContent active">

      <div id="main">

        <div id="mktg">

          <div class="columnGroup first">
            <div class="nyt"><img src="http://graphics8.nytimes.com/marketing/images/newsletter/nytlogo156x22.png" width="156" height="22" alt="NYTimes Logo"></div>
            <div class="header"><img src="<?php echo $newsletter->header; ?>" alt="<?php echo $newsletter->name; ?>"></div>
            <div class="hero"><img src="<?php echo $newsletter->hero; ?>" width="396" alt="Nyc"></div>
            <p><strong><?php echo $newsletter->lead; ?></strong> <?php echo stripslashes($newsletter->body); ?></p>
            <iframe title="regilite" src="https://myaccount.nytimes.com/regilite?product=<?php echo $newsletter->code; ?>&theme=MarketingLanding&landing=true" width="395" height="110" marginheight="0" marginwidth="0" frameborder="0" vspace="0" hspace="0" scrolling="no" allowtransparency="true"></iframe>
          </div>

        </div><!-- END #mktg -->

        <div class="hideContent">
          <!--Start UPT call -->
          <img height="1" width="3" border="0" src="http://up.nytimes.com/?d=0//&amp;t=6&amp;s=0&amp;ui=&amp;r=&amp;u=www%2enytimes%2ecom%2fgst%2fbetamail%2ehtml%3fURI%3dhttp%3a%2f%2fmy%2enytimes%2ecom%2f%26OQ%3d%5frQ3D1%26OP%3d423bb8d4Q2FipEPiwShEQ5CuQ5BiGhdQ5CQ7BQ7BwCiQ5BQ26hPEhQ5CQ7ByQ22hEGhEuiQ5BQ26hSQ5BEwIQ3BhQ5Bg"> <!--End UPT call -->
          <script>
          var dcsvid="";
          var regstatus="non-registered";
          </script>
          <script src="http://graphics8.nytimes.com/js/app/analytics/trackingTags_v1.1.js"></script>
          <noscript>
            <div>
              <img alt="DCSimg" id="DCSimg" width="1" height="1" src="http://wt.o.nytimes.com/dcsa5pgfq10000c9zuysqk0lm_6i8y/njs.gif?dcsuri=/nojavascript&amp;WT.js=No&amp;WT.tv=1.0.7" name="DCSimg">
            </div>
          </noscript> 
        </div><!-- END .hideContent -->

      </div><!--END #main -->

      <div id="footer"></div><!-- END #footer -->

    </div><!--END #page -->

  </div><!--END #shell -->

  <img src="/adx/bin/clientside/704e6b2aQ2FncZyQ7DQ51ayQ20dQ24Q24ZdQ25Q7DQ7D0Q5Cccad1" height="1" width="3">

  <script src="http://js.nyt.com/marketing/js/shell.min.js"></script>

</body>
</html>