#! /usr/bin/php
<HTML>
<HEAD>
<TITLE>Find <?php echo "$parm" ?></TITLE>
</HEAD>

<BODY>
<b><font face=arial size=+2>Find <?php echo "$parm" ?></font></b>
<font face=arial>
<br><?php print(date("m/d/y h:i")) ?>

<?php
// *****************************************************//
// //
// Author - Marcus S. Xenakis 4/28/99 //
// marcus@xenakis.net //
// //
// This simple PHP script only runs on a UNIX server. //
// It is based on the "find" command. //
// It should reside in your web server root directory //
// //
// This program finds files on the sitebased upon the //
// passed paramter (parm) or the promted filespec. //
// The filespec can be a complete name or it may //
// wildcards. //
// //
// This program is disigned to call two other php //
// scripts, //
// usage.php: which displays directory usage. //
// directory.php: which displays dir lists. //
// //
// There is one modifications required in order in //
// order to run this script. You must enter your root //
// dirctory. //
// //
//******************************************************//

// --- add promter and recursive call
echo "<form action=\"./\">";
echo "File: ";
echo "<input type=\"text\" size=30 name=\"parm\"> ";
echo "<input value=\" Submit \" type=submit>";
echo "<hr><br><pre>";

// MODIFY THE FOLLOWING LINE TO YOUR HOME DIRECTORY
$findData = passthru("find /web/design/docs -name ".escapeshellarg("*".$_GET['parm']."*")." ");
echo "FOUND:" . $findData . " }";
echo "</pre>";
?>
<hr><br></font>
<font face=arial size=2>
[<u><a href=usage.php>Usage</a></u>]
[<u><a href=directory.php>Dir</a></u>]
</font>

</body>
</html>