<?php
$directories = scandir($path);

$directories = array_filter($directories, "notDotandNotFile");

function notDotandNotFile($file) {
  return !preg_match('/^\./', $file) && !is_file($file);
}
?>

<?php foreach ($directories as $dir) : 

$dtime = filemtime($dir);
$dyear = date("Y", $dtime); 
$dmonth = date("F", $dtime); 
$dday = date("d", $dtime);
$dhour = date("H", $dtime);
$dmin = date("i", $dtime);
?>

<tr>
  <td valign="top"><a href="<?php echo $dir ?>"><img src="/index/icons/folder_icon.gif" alt="[DIR]" /></a></td>
	<td><strong><a href="<?php echo $dir ?>"><?php echo $dir?>/</a></strong></td>
	<td align="right"><?php echo $dday."-".$dmonth."-".$dyear." ".$dhour.":".$dmin ?></td>
	<td align="right"> - </td>	
</tr>
<?php endforeach; ?>