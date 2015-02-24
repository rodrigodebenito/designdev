<a href="/apps/blog_notes" id="back">Blog Notes &raquo;</a>

<table id="index">
<tr>
	<th></th>
	<th>Blog Name</th>
	<th>Last Modified</th>
	<th>Number&nbsp;of&nbsp;Files</th>
</tr>

<?php foreach ($directories as $dir) : ?>
	<? $d++; ?>
	<tr<? if($d=="1") { echo " class='first'"; } ?>>
		<? if(substr($dir,0,1) == "_") { ?>
			<td colspan="4" class="notBlog"><a href="<?php echo $dir ?>/"><?php echo $dir?></a></td>
		<? } elseif($dir != "detail.php") { ?>
	
			<td class="thumb">

				<? 
					$testFile1 = PATH . "/" . $dir . "/" . $dir . "75.gif";
					$testFile2 = PATH . "/" . $dir . "/" . $dir . "75.jpg";
					$testFile3 = PATH . "/" . $dir . "/" . $dir . "_75.jpg";
					$testFile4 = PATH . "/" . $dir . "/" . $dir . "_75.gif";
					$testFile5 = PATH . "/" . $dir . "/" . $dir . "75.png";
					$testFile6 = PATH . "/" . $dir . "/" . $dir . "_75.png";
					$testFile7 = PATH . "/" . $dir . "/" . $dir . "_75X75.jpg";
					$testFile8 = PATH . "/" . $dir . "/" . $dir . "_75x75.jpg";
					$testFile9 = PATH . "/" . $dir . "/" . $dir . "_75X75.gif";
					$testFile10 = PATH . "/" . $dir . "/" . $dir . "_75x75.gif";
			
					if( file_exists($testFile1) ) {
						$showThumb = $testFile1;
					} elseif( file_exists($testFile2) ) {
						$showThumb = $testFile2;
					} elseif( file_exists($testFile3) ) {
						$showThumb = $testFile3;
					} elseif( file_exists($testFile4) ) {
						$showThumb = $testFile4;
					} elseif( file_exists($testFile5) ) {
						$showThumb = $testFile5;
					} elseif( file_exists($testFile6) ) {
						$showThumb = $testFile6;
					} elseif( file_exists($testFile7) ) {
						$showThumb = $testFile7;
					} elseif( file_exists($testFile8) ) {
						$showThumb = $testFile8;
					} elseif( file_exists($testFile9) ) {
						$showThumb = $testFile9;
					} elseif( file_exists($testFile10) ) {
						$showThumb = $testFile11;
					} else {
						$showThumb = "";

						// // CHECKS IF THERE ARE ANY OTHER FILES WITH "75" IN THEIR NAME - TOO SLOW
						
						// $files = scandir(PATH . "/" . $dir . "/");
						// 					    if (!$files) $ERRORS = 'Sorry, the blog you are looking does not exist';
						// 
						// for($f=0; $f<count($files); $f++) {
						// 	if(strstr($files[$f],"75")) {
						// 		$showThumb = PATH . "/" . $dir . "/" . $files[$f];
						// 		echo "FOUND ONE";
						// 		break;
						// 	} 
						// }
					}
			
				?>
				
				<? if($showThumb!="") { ?>
					<a href="<?php echo $dir ?>/"><img width="50" height="50" alt="" src="/blogs/<? echo substr($showThumb,strlen(PATH)); ?>"></a>
				<? } else { /*?>
					<a href="detail.php?name=<?php echo $dir ?>"><img alt="[DIR]" src="/index/icons/folder_icon.gif" align="right" /></a>
				<? */ } ?>
			</td>

			<td class="filename"><b><a href="<?php echo $dir ?>/"><?php echo $dir?></a></b></td>
			
			<td class="time"><? echo date("d-M-Y H:i", filemtime(PATH . "/" . $dir)); ?></td>
			
			<td class="files"><? echo count(glob(PATH . "/" . $dir . "/" . "*")); ?>&nbsp;Files</td>

		<? } ?>
	</tr>
<?php endforeach; ?>

</table>