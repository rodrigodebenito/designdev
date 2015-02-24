
<!-- This is random scrap file I am using to clean up other files -->


<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
  <tr class="template-upload fade">
    <td class="hide_file"><i class="fa fa-eye"></i></td>
    <td valign="top" class="icon file" data-ext="new"><a href="{%=file.url%}"><img src="/windex/icons/new.png" alt="new" width="24" height="24"></a></td>
    <td>
      <p class="name">{%=file.name%}</p>
      <strong class="error text-danger"></strong>
    </td>
    <td>
      <p class="size">Processing...</p>
      <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
    </td>
    <td class="hidden">
      {% if (!i && !o.options.autoUpload) { %}
        <button class="btn btn-primary start" disabled>
          <i class="glyphicon glyphicon-upload"></i>
          <span>Start</span>
        </button>
      {% } %}
      {% if (!i) { %}
          <button class="btn btn-warning cancel">
            <i class="glyphicon glyphicon-ban-circle"></i>
            <span>Cancel</span>
          </button>
      {% } %}
    </td>
  </tr>
{% } %}
</script>

<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
  <tr class="i new-file fade">
    <td class="hide_file"><i class="fa fa-eye"></i></td>
    <td valign="top" class="icon file" data-ext="new"><a href="{%=file.url%}"><img src="/windex/icons/new.png" alt="new" width="24" height="24"></a></td>
    <td class="file">
      <a href="{%=file.url%}">{%=file.name%}</a>
      {% if (file.error) { %}
        <div><span class="label label-danger">Error</span> {%=file.error%}</div>
      {% } %}
    </td>
    <td class="modified">{%=o.formatFileSize(file.size)%}</td>
    <td class="action download"><a href="<?php echo $r; ?>{%=file.name%}" download="{%=file.name%}"><i class="fa fa-download"></i></a></td>
    <td class="action delete" data-url="<?php echo $r; ?>"><i class="fa fa-trash-o"></i></td>
  </tr>
{% } %}
</script>













 // Trigger & Dropper ======================================================================
  
  $('.dropdown-toggle').dropdown(); // ...for the Slideshow Nav
  
  // Dropper Check
  function dropped(){
    if ($body.hasClass('open')) {
      return true;
    } else {
      return false;
    };
  };
  

  // Log Trigger & Dropper
  var dropper;
  $('.trigger').click(function(e){
    e.preventDefault();
    dropper = '#'+ $(this).attr('data-dropper');
    if (!dropped() == true) { //if dropper is NOT open
      $(dropper).show('fast',function(){
        $body.addClass("open");
        $trigger_close.show();
      });
    };
  });
  
  $trigger_close.click(function(e){
    e.preventDefault();
    if (dropped() == true) { //if dropper is open
      clear_queries();
      $body.removeClass("open");
      $trigger_close.hide();

      setTimeout(function(){
        $(dropper).hide();
        history.pushState('', document.title, window.location.pathname);
      }, 200);
    };
  });




  // function prepare_path(){
  //   global $uri;
  //   $filename = $_SERVER['DOCUMENT_ROOT'] . $uri;
  //   if (file_exists($filename)) {
  //     echo "The file <strong>$filename</strong> exists";
  //     echo substr(sprintf('%o', fileperms($filename)), -4);
  //     chmod($filename, 0775);
  //     echo substr(sprintf('%o', fileperms($filename)), -4);
  //     // $fileowner = posix_getpwuid(fileowner($filename));
  //     // if ($fileowner !== '_www') {
  //     //   print_r($fileowner);
  //     //   $user_name = '_www';
  //     //   chown($filename, $user_name);
  //     //   print_r($fileowner);
  //     // } else {
  //     //   print_r($fileowner);
  //     // }
  //   } else {
  //     echo "The file $filename does not exist";
  //   }
  // }

// if (condition) {
//   $user_name = '_www';
//   // chown($path, $user_name);


url: handler,
formData: [{ name: 'custom_path', value: custom_path }]




<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td class="hidden">
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>

<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td class="hidden">
            {% if (file.deleteUrl) { %}
                <button class="btn btn-xs btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-xs btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>



<!-- Old Navbar code -->
<div class="navbar navbar-fixed-top hidden">
  <div class="navbar-inner">
    <div class="container">
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <!-- Be sure to leave the brand out there if you want it shown -->
      <a class="brand" href="http://localhost/"><img src="<?php echo $windex_path; ?>/img/nytimes20.png" alt="The New York Times">Design</a>
      
      <div class="nav_wrapper">
        <div class="search_state state">
          <ul class="nav dnav">
            <li data-dropper="log" class="trigger"><a href="#">Log</a></li>
            <li data-dropper="show-tell" class="trigger hide"><a href="#">Show & Tell</a></li>
            <li><a href="#">Designers</a></li>
          </ul>
          <form class="navbar-search">
            <label for="search">Search</label>
            <input type="text" name="s" value="" id="search-box" placeholder="Search" class="search-query">
          </form>
        </div>
        <div class="slideshow_state state">
          <ul class="nav">
            <li><a class="left" href="#slideshow_stage" data-slide="prev"><span>&lsaquo;</span></a></li>
            <li><a class="right" href="#slideshow_stage" data-slide="next"><span>&rsaquo;</span></a></li>
            <li class="dropdown">
              <?php show_file_names($image_names); ?>
            </li>
            <li id="slider">
              <div id="thumb"><span>&times;</span></div>
            </li>
            <li class="percent"></li>
          </ul>
        </div>
      </div>

      <div class="pull-right">
        <ul class="nav dnav">
          <?php if (!empty($images['items'])) { ?>
          <li data-dropper="slideshow" class="trigger show_slideshow"><a href="#show" title=""><i class="icon-eye-open"></i></a></li>
          <?php } ?>
          <li class="trigger_close"><a href="#" title="Close">&times;</a></li>
        </ul>
      </div>
      
      
      <!-- Everything you want hidden at 940px or less, place within here -->
      <div class="nav-collapse collapse">
        <!-- .nav, .navbar-search, .navbar-form, etc -->
        <div class="pull-right">
          <?php if (isset($screen_name)) { ?>
          <ul class="nav nav-profile logged-in">
            <li class="user circle"><a href="#"><img src="<?php echo $profile_image_url; ?>" alt="<?php echo $screen_name; ?>" /> <?php echo $screen_name; ?></a></li>
            <li><a href="#">Log out</a></li>
          </ul>
          <?php } else { ?>
          <ul class="nav nav-login logged-out">
            <li class="hidden"><a href="<?php echo $windex_path; ?>/register.php">Log in</a></li>
            <li class="hidden"><a href="<?php echo $windex_path; ?>/welcome.php">Register</a></li>
          </ul>
          <?php } ?>
        </div>
      </div>
      
      <!-- $screen_name -->
      <!-- $profile_image_url -->
    </div>
  </div>
</div>

<div id="viewer-nav" class="navbar navbar-fixed-top hide">
  <div class="navbar-inner">
    <div class="container">
      <ul class="nav">
        <li class="left"><span class="arrow arrow-left"></span></li>
        <li class="right"><span class="arrow arrow-right"></span></li>
      </ul>
      <!-- Everything you want hidden at 940px or less, place within here -->
      <div class="nav-collapse collapse">
      </div>
    </div>
  </div>
</div>

#slider {
  float: left;
  position: relative;
  margin: 16px;
  width: 220px;
  height: 20px;
  border-radius: 10px;
  overflow-y: hidden;
  -webkit-box-shadow: inset 0 0 10px rgba(63,63,63,.25), inset 0 0 3px rgba(0,0,0,.125);
  background: white;
}

#thumb {
  background: white;
  position: absolute;
  right: 15px; top: 0;
  width: 20px; height: 20px;
  cursor: pointer;
  border-radius: 10px;
  text-align: center;
  -webkit-box-shadow: 0 0 10px rgba(63,63,63,.5), 0 0 3px rgba(0,0,0,.25);
}
#thumb span{
  color:#ccc;
  font-size:18px;
  line-height:18px;
  font-weight:bold;
  position:relative;
  top:-1px;
  opacity: 0;
  -moz-opacity: 0;
  filter:alpha(opacity=0);
}
#thumb span.off{
  opacity: 0.3;
  -moz-opacity: 0.3;
  filter:alpha(opacity=30);
}
#thumb span.off:hover{
  opacity: 1;
  -moz-opacity: 1;
  filter:alpha(opacity=1);
  -webkit-transition:opacity .2s ease-in;  
     -moz-transition:opacity .2s ease-in;  
       -o-transition:opacity .2s ease-in;  
          transition:opacity .2s ease-in;
}

.percent{
  margin:16px 0px;
  float:left;
  width:50px;
  font-size:12px;
  color:#888;
}

#slideshow_stage{
  margin:0 auto;
  left:0;
  width:100%;
  background:rgba(255,255,255,.1);
}

/*#slideshow_stage .modal-body{
  max-height: 600px;
}*/
/*.modal.fade.in{
  top:5%;
}*/

.title_card{
  color:#fff;
}
.title_card .item-inner{
  height:100%;
}
.title_card h1{
  margin:30% 0 35% 0;
  font-size:6em;
}

.slides .item{
  display:none;
  text-align: center;
  overflow:scroll;
}

.slides .inview{
  display:block;
}
.slides .item img{
  margin:0 auto;
  position:relative;
  -webkit-transform-origin:50% 0;
}
.item p{
  text-align: center;
  color:#fff;
  font-size:21px;
  line-height:28px;
}

.carousel-inner .item .item-inner{
  text-align: center;
}

.carousel-inner .item .item-inner img{
  margin:0 auto;
  -webkit-transform-origin:50% 0;
}

.carousel-control{
  top:0;
  width:48%;
  height:100%;
  border:none;
  background:rgba(255,255,255,0.0);
  opacity: 1;
  -moz-opacity: 1;
  filter:alpha(opacity=1);
  -webkit-border-radius: 0px;
     -moz-border-radius: 0px;
          border-radius: 0px;
}

.carousel-control:hover,
.carousel-control:focus {
  color: #ffffff;
  text-decoration: none;
}
.carousel-control span{
  opacity: 0.8;
  -moz-opacity: 0.5;
  filter:alpha(opacity=50);
}
.carousel-control:hover span{
  opacity: 1;
  -moz-opacity: 1;
  filter:alpha(opacity=1);
}





 // #show ================================================================================
  
  $slideshow = $('#slideshow');
  $slides = $('#slideshow .slides');
  $slide = $('#slideshow .slides .item');
  $inview = $('#slideshow .slides .inview');
  
  $('.btn-slideshow').click(function(e){
    e.preventDefault();
    console.log('show the slideshow');
    if (!dropped() == true) { //if dropper is NOT open
      console.log('not dropped');
      window.location.hash = '#show0';
    };
  });
  
  var h = location.hash.substr(1);
  var n = h.replace('show','');
  if (h !== '') {
    if (n >= 0) {
      $slide.each(function(){
        $(this).removeClass('inview');
        var ds = $(this).attr('data-slide');
        if (ds == n) {
          $(this).addClass('inview');
        };
        });
    };
    if (!dropped() == true) { //if dropper is NOT open
      $slideshow.show('fast',function(){
        $body.addClass("open");
      });
    };
  };


  $slide.click(function(){
    var next = $(this).removeClass('inview').next($slide);
    if (!next.length) {
      next = $('.slides .item:first');
    }
    next.addClass('inview');
    var num = next.attr('data-slide');
    window.location.hash = '#show'+[num];
  });
  
  // Image Scaler
  ;(function ($) {
    var position, permille, scaler, $stage, $thumb, $trough, width;
    /* SET THESE: */
    position = 50;
    $stage = $('.item img');
    $thumb = $('#thumb');
    $reset = $('#thumb span');
    $slider = $('#slider');
    $percent = $('.percent');
    /* OKIE DOKE! */
    width = ($slider.width() - $thumb.width());
    scaler = function (e, ui) {
      // (100*.005)+0.5 
      var upl = (ui.position.left) * .015;
        var scale = (upl + .25);
        var scale = scale.toFixed(2);
        var percent = ((scale * 100).toFixed(0));
        $percent.html(percent + '%');
        console.log(percent);
        $stage.each(function(){
          this.style.cssText = '-webkit-transform:scale('+scale+');';
        });
        if (upl != '0.75') {
          $reset.addClass('off');
        } else {
          $reset.removeClass('off');
        };
    };
    $reset.click(function(){

    });
    $thumb.css('left', position).draggable({
        containment: 'parent',
        drag: scaler,
        grid: [ 20,0 ]
    });
  })(window.jQuery);