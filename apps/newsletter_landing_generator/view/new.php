<!DOCTYPE html>
<html lang="en">
<head>
  <title>NYTimes.com Newsletter Landing Page Generator</title>
  <meta charset="UTF-8">
  <?php
  /**
   * @version: $Id: new.php 412 2011-09-27 14:52:35Z jon $
   * @overview: Marketing Newsletter Generator
   */
   ?>
  <link rel="stylesheet" href="http://css.nyt.com/css/0.1/screen/common/global.css">
  <link rel="stylesheet" href="http://css.nyt.com/css/0.1/screen/common/forms.css">
  <style>
    body {
      background: transparent url(//index/NYTimes_logo.gif) no-repeat scroll 52px 20px;
      font-family: arial, helvetica, sans-serif;
      margin: 46px 50px;
    }
    
    #shell {
      margin: 0 auto;
      padding-bottom: 40px;
      position: relative;
      width: 100%;
    }

    #header {
      border-top: 3px solid #000;
      margin: 0 0 19px 0;
      padding: 10px 0 0 0;
    }

    h1 {
      font-size: 15px;
    }

    h2 {
      font-size: 18px;
      line-height: 14px;
    }
    
    input,
    label,
    textarea,
    select {
      font-size: 12px;
    }
    
    small {
      font-size: 10px;
    }

    table {
      border-bottom: 1px solid #ccc;
      margin-bottom: 10px;
      width: 100%;
    }

    th,
    td {
      border-top: 1px solid #efefef;
      padding: 8px 5px 5px 5px;
      text-align: left;
      vertical-align: middle;
    }

    th {
      font-weight: bold;
      text-align: left;
      font-size: 11px;
      margin-bottom: 2px;
      padding-top: 5px;
      text-transform: uppercase;
    }
    
    textarea,
    input[type='url'],
    input[type='text'] {
      width: 80%;
      border: 1px solid;
      border-color: #999 #ddd #ddd #999;
    }

    li {
      margin-bottom: .5em;
    }

    .box {
      background-color: #f0f4f5;
      border: 1px solid #ccc;
      margin-bottom: 40px;
      padding: 20px;
    }

    .toggleButton {
      background-repeat: no-repeat;
      padding-left: 18px;
    }

    .collapsed {
      background-image: url(http://i1.nyt.com/images/apps/mytimes/widgets/toggle_closed.gif);
      background-position: 0 2px;
      margin-bottom: 0;
    }

    .expanded {
      background-image: url(http://i1.nyt.com/images/apps/mytimes/widgets/toggle_open.gif);
      background-position: 0 1px;
      margin-bottom: 14px;
    }

    .hide {
      display: none;
    }
    
    .show {
      display: block;
    }
    
    .toggleContent {
      padding-top: 14px;
    }
    
    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
      display: block;
    }
  </style>
  
</head>

<body>
  
  <section id="shell">
    <header id="header">
      <h1>NYTimes.com Newsletter Landing Page Generator</h1>
    </header>
    <div id="main">
      <div class="box toggleContainer">
        <h2><a href="#" class="toggleButton collapsed">Directions</a></h2>
        <ol class="toggleContent hide">
          <li>Connect to knews.em.nytimes.com as the 'markting' user. (Notice the missing 'e').</li>
          <li>Create a new folder and name it with the slugged newsletter name (i.e. afternoonupdate). We'll call this the landing page directory.</li>
          <li>Create a new folder inside it and name it 'images'.</li>
          <li>Upload the header image and photo image.</li>
          <li>You're ready to fill out the form. Once you're done, generate the page, save the source code (works best in Firefox) and upload it to the landing page directory as index.html.</li>
        </ol>
      </div>
        <form target="_blank" action="generated_page.php" method="post" accept-charset="utf-8">
          <table>
            <tr>
              <td><label class="">Name</label></td>
              <td><input type="text" name="newsletter[name]" tabindex="1"></td>
            </tr>
            <tr>
              <td><label><a href="http://wiki.em.nytimes.com/email/doku.php?id=emailcodes" target="_blank">Newsletter Code</a></label></td>
              <td><input type="text" name="newsletter[code]" value="" tabindex="2"></td>
            </tr>
            <tr>
              <td>
                <label>Header Image URL</label>
                <small>Must be no wider than 396px</small>
              </td>
              <td><input type="url" name="newsletter[header]" placeholder="http://" tabindex="3"></td>
            </tr>
            <tr>
              <td>
                <label>Photo Image URL</label>
                <small>Must be 396px wide</small>
              </td>
              <td><input type="url" name="newsletter[hero]" placeholder="http://" tabindex="4"></td>
            </tr>
            <tr>
              <td>
                <label>Lead Color</label>
                <small>Enter a HEX color (ex: #E2E2E2)</small>
              </td>
              <td><input type="text" name="newsletter[color]" name="newsletter[color]" tabindex="5"></td>
            </tr>
            <tr>
              <td><label>Lead</label></td>
              <td><textarea name="newsletter[lead]" tabindex="6"></textarea></td>
            </tr>
            <tr>
              <td><label>Body</label></td>
              <td><textarea name="newsletter[body]" rows="6" tabindex="7"></textarea></td>
            </tr>
          </table>
          <div>
            <button class="applicationButton" type="submit">Generate Newsletter</button>
          </div>
        </form>
        
      </div><!-- END #main -->
    </section>

    <script src="/apps/js/scripts.js"></script>
    <script>Design.Toggler.init();</script>

</body>
</html>