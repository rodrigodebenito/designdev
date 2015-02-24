<?php
//////// Revolver - code.php Version 1.4 ( www.loadrevolver.com )
//////// By Tubatomic Studio, llc ( www.tubatomic.com )
////////////////////////
$Files     = array();
$Files[]   = "";
$PGarray   = array();
$dirfiles  = opendir($dir);
$cdate     = date("Ymd");
$pg        = $_GET['pg'];
$playcheck = strstr($pg, '_');
if ($playcheck == "_p") {
    $play = true;
}
$pg = str_replace("_p", "", $pg);
if ($pg == "" and $play != true and $playdefault == true) {
    $play = true;
}
if ($highest_lowest == true) {
    $imgcount = 1;
} else {
    $imgcount = 0;
}
if (!$dirfiles)
    die('Can Not Find Any Images' . $dir);
while ($Filename = readdir($dirfiles)) {
    if ($datedriven == true) {
        $fulldate = substr($Filename, 0, 8);
    } else {
        $fulldate = 0;
    }
    if ($datedriven == true AND $fulldate > $cdate)
        continue;
    if ($datedriven == true AND strlen($Filename) > 23 || $datedriven == true AND strlen($Filename) < 15)
        continue;
    $filetype = strtolower(substr($Filename, (strlen($Filename) - 3), 3));
    if ($filetype != "gif" and $filetype != "jpg" and $filetype != "png")
        continue;
    $Files[] = $Filename;
    if ($highest_lowest == true) {
        $PGarray[$imgcount] = $imgcount;
    } else {
        $PGarray[$imgcount] = $imgcount + 1;
    }
    $imgcount++;
}
if ($highest_lowest == true) {
    sort($Files);
    $imgcount = $imgcount - 1;
    if ($pg == "" or $pg > $imgcount or $pg < 1)
        $pg = $imgcount;
    $nextpage = $pg - 1;
    if ($nextpage < 1) {
        $nextpage = $imgcount;
    }
    $prevpage = $pg + 1;
    if ($prevpage > $imgcount) {
        $prevpage = 1;
    }
} else {
    sort($Files);
    $imgcount = $imgcount;
    if ($pg == "" or $pg > $imgcount or $pg < 1)
        $pg = 1;
    $nextpage = $pg + 1;
    if ($nextpage > $imgcount) {
        $nextpage = 1;
    }
    $prevpage = $pg - 1;
    if ($prevpage < 1) {
        $prevpage = $imgcount;
    }
}
$imagesource = $dir . $Files[$pg];
$imageinfo   = getimagesize($imagesource);
$imageheight = $imageinfo[1];
$imagewidth  = $imageinfo[0];
if ($datedriven == true) {
    $month = substr($Files[$pg], 4, 2);
    $day   = substr($Files[$pg], 6, 2);
    $year  = substr($Files[$pg], 0, 4);
    if (strlen($Files[$pg]) == 22) {
        $imagecolor = "#" . substr($Files[$pg], 12, 6);
    } else {
        $imagecolor = $defaultbackcolor;
    }
} else {
    $month = "";
    $day   = "";
    $year  = "";
    if (strlen($Files[$pg]) == 22 && $getbackgroundcolorfromfilename == true) {
        $imagecolor = "#" . substr($Files[$pg], 12, 6);
    } else {
        $imagecolor = $defaultbackcolor;
    }
}
$jscript_slideshow = '<script type="text/javascript">
playstatus = "";';
$jscript_slideshow .= 'nextpage = "' . $nextpage . '";';
$delayx1000 = $delay * 1000;
$jscript_slideshow .= 'delay = ' . $delayx1000 . ';';
if ($play == true) {
    $jscript_slideshow .= 'window.onload = play();';
}
$jscript_slideshow .= "\n";
$jscript_slideshow .= '
function play(){if(playstatus != "playing"){if(delay != 0){slideshow = window.setInterval("window.location = \'?pg="+nextpage+"_p\'",delay);playstatus = "playing";}}}
function stop(){if(playstatus == "playing"){if(delay != 0){clearInterval(slideshow);playstatus = "";}}}
</script>
';
?>