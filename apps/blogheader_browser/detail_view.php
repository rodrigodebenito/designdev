<a id="back" href="/blogs/">Back to index »</a>



<div id="content" class="module">
	<div class="summary">
	  <? if( substr($blog->name,0,1) != "_" ) { ?>
	    <h1><a href="http://<?= $blog->name ?>.blogs.nytimes.com/"><?= ucfirst($blog->name) ?></a></h1>
	    <p><a href="http://<?= $blog->name ?>.blogs.nytimes.com/">View Blog »</a></p>
	  <? } else { ?>
		<h1><?= ucfirst($blog->name) ?></h1>
	  <? } ?>
	</div>

	<? if( substr($blog->name,0,1) != "_" ) { ?>
	<div class="fileGroup">
		
		
		<h2>Live Images</h2>
		<p>Only the following blog images are on our production server (graphics8) and ready to use in blogs and promos.</p>
		
		<? 
		
		$bH=0;
		foreach($blog->headers as $header) :?>
		
		
		<? 
		
		file_get_contents("http://graphics8.nytimes.com/images/blogs_v3/".$blog->name."/".$header->filename);
		
		
		if($http_response_header[0] == "HTTP/1.0 200 OK") { 
			$bH=$bH+1; ?>
		
		
		
		  <div class="blog_header">
		    <h2><?= $header->name ?></h2>
		    <img src="<?="http://graphics8.nytimes.com/images/blogs_v3/$blog->name/$header->filename" ?>" class="image"><br /><br />
		    <p>&bull; <a href="<?="http://graphics8.nytimes.com/images/blogs_v3/$blog->name/$header->filename" ?>">Production URL »</a> &nbsp; 
			<a href="javascript:;"  id="copyBtn<? echo $bH; ?>" class="copy">Copy</a>
			
			
			<textarea style="width:0; height:0; border:0; padding:0; height:0; display:none; overflow:hidden;" id="copyMe<? echo $bH; ?>"><?="http://graphics8.nytimes.com/images/blogs_v3/$blog->name/$header->filename" ?></textarea>
			<?
				$addToScript .= "
					$('copyBtn".$bH."').addEvent('click',function() {
						var el = $('copyMe".$bH."');
						el.select();
						var t = el.getText();
						sendtoclipboard(t,el);
					});
						
					";
				?>
	</p>
			
			
		    <? if ($header->psd) :?>
		      <p>&bull; <a href="<?= $header->psd ?>">Download PSD ↓</a></p>
		    <? endif; ?>
		    <? if ($header->ai) :?>
		      <p>&bull; <a href="<?= $header->ai ?>">Download AI ↓</a></p>
		    <? endif; ?>
		  </div>
		<? } ?>
		<? endforeach; ?>
		
		
		
		<? if($bH<=0) { ?>
			<p><b style="color:#A81817">No images have been uploaded (and ksynced) to /images/blogs_v3/ on graphics8.</b></p>
		<? } else { ?>
			<script language="javascript" type="text/javascript" src="/apps/clipboard/mootools.js"></script>
			<script type="text/javascript" charset="utf-8">
				window.addEvent('domready', function() {

					function sendtoclipboard(s,el)	{
						if( window.clipboardData && clipboardData.setData )	{
							clipboardData.setData("text", s);
						} else {
							ffcopy(el);
						}
					}

					function ffcopy(inElement) {
					  if (inElement.createTextRange) {
						var range = inElement.createTextRange();
						if (range && BodyLoaded==1)
						  range.execCommand('Copy');
					  } else {
						var flashcopier = 'flashcopier';
						if(!document.getElementById(flashcopier)) {
						  var divholder = document.createElement('div');
						  divholder.id = flashcopier;
						  document.body.appendChild(divholder);
						}
						document.getElementById(flashcopier).innerHTML = '';
						var divinfo = '<embed src="/apps/clipboard/_clipboard.swf" FlashVars="clipboard='+encodeURIComponent(inElement.value)+'" width="0" height="0" type="application/x-shockwave-flash"></embed>';
						document.getElementById(flashcopier).innerHTML = divinfo;
					  }
					}

					<? echo $addToScript; ?>

				});
			</script>
			
		<? } ?>
		
	</div>
	<? } ?>
	
	<div class="fileGroup staging">
		<h2 id="current">Design Files</h2>
		<p>All files related to this blog on Design's development server. These images should only be placed in the appropriate location in /images/blogs_v3/ on graphics8 and should <i>not</i> be uploaded anywhere else. Questions? E-mail:&nbsp;<a href="mailto:nytd_blog_team@nytimes.com">nytd_blog_team@nytimes.com</a></p>

		<table id="index">
		<tr>
			<th>Live?</th>
			<th>Name</th>
			<th>Image&nbsp;Preview</th>
			<th>Last Modified</th>
			<th>Size</th>
		</tr>
		<? 
		
		function byte_convert($bytes)
		  {
		    $symbol = array('B', 'KB', '<b>MB</b>', '<b>GB</b>', 'TB', 'PB', 'EB', 'ZB', 'YB');

		    $exp = 0;
		    $converted_value = 0;
		    if( $bytes > 0 )
		    {
		      $exp = floor( log($bytes)/log(1024) );
		      $converted_value = ( $bytes/pow(1024,floor($exp)) );
		    }

		    return sprintf( '%.2f '.$symbol[$exp], $converted_value );
		  }
		
		foreach($filelist->headers as $allfile) :?>
		<? $dF++; ?>
		
		<tr<? if($dF=="1") { echo ' class="first"'; } ?>>
			<td class="live">
				<? if(eregi('\.png', $allfile->filename) || eregi('\.jpg', $allfile->filename) || eregi('\.gif', $allfile->filename)) { ?>
					
					<?
						file_get_contents("http://graphics8.nytimes.com/images/blogs_v3/".$blog->name."/".$allfile->filename);
						//echo $http_response_header[0]."<br>";
						if($http_response_header[0] == "HTTP/1.0 200 OK") { ?>
							<a href="<? echo "http://graphics8.nytimes.com/images/blogs_v3/".$blog->name."/".$allfile->filename; ?>"><span class="statusYes">YES</span></a>
						
					<? } else { ?>
						<span class="statusNo">NO</span>
					<? } ?>
				<? } ?>
			</td>
			
			<td
				<? 
				
				$thisDir = is_dir(PATH ."/". $allfile->blogname ."/".$allfile->filename);
				
				if($thisDir) { ?><b><? } ?>
					<a href="<? echo $allfile->image; ?>"><? echo $allfile->filename; ?><? if($thisDir) { ?>/<? } ?></a>
				<? if($thisDir) { ?></b><? } ?>
			</td>
			
			<td class="preview">
				<? if(eregi('\.png', $allfile->filename) || eregi('\.jpg', $allfile->filename) || eregi('\.gif', $allfile->filename)) { ?>
					
					<a href="<? echo $allfile->image; ?>"><img src="<? echo $allfile->image; ?>" <?
					
					list($width, $height, $type, $attr) = getimagesize(PATH ."/". $allfile->blogname ."/".$allfile->filename);
					
					$maxW = "125";
					$maxH = "50";
					
					
					if($width > $maxW && $height > $maxH) {
						$newW = $maxW;
						$newH = $maxW * $height / $width;
						
						if($newH > $maxH) {
							$newH = $maxH;
							$newW = $maxH * $width / $height;
						}
						
						echo ' width="'.$newW.'" height="'.$newH.'"  ';
						
					} elseif($width > $maxW) {
						echo ' width="'.$maxW.'"';
					} elseif($height > $maxH) {
						echo ' height="'.$maxH.'"';
					} else {
						echo ' width="'.$width.'" height="'.$height.'"   ';
					}
					
					?>></a>
				<? } ?>
			</td>
			
			<td class="time"><? echo date("d-M-Y H:i", filemtime(PATH ."/". $allfile->blogname ."/".$allfile->filename)); ?></td>
			
			<td class="size">
				<?
				
					echo byte_convert(filesize((PATH ."/". $allfile->blogname ."/".$allfile->filename)));
				
				?>
				
			</td>
		</tr>
		
		
		<? endforeach; ?>
		</table>

	</div>



	
	
</div>

<div id="meta" class="module">
<? if(file_exists("$blog->path/$blog->name/info.txt")) { ?>
  <pre id="info"><? include_once("$blog->path/$blog->name/info.txt") ?></pre>
<? } ?>
  <ul>
   <? if( is_dir(PATH ."/". $allfile->blogname ."/master")) { ?> <li><a href="<?= "$blog->base_uri/$blog->name" ?>/master/">Master Art »</a></li><? } ?>
	<? if( substr($blog->name,0,1) != "_" ) { ?><li><a href="#current">Current Design Files &raquo;</a></li><? } ?>
   <? if( is_dir(PATH ."/". $allfile->blogname ."/archive")) { ?><li><a href="<?= "$blog->base_uri/$blog->name" ?>/archive/">Archived Design Files »</a></li><? } ?>
  </ul>

</div>
	<br clear="all">
<a id="back_bottom" href="/blogs/">Back to index »</a>
