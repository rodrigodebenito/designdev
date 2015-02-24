<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>MySQL 2 JSON</title>
</head>
<body>

<?php

	extract($_POST);

	function mysql2json($mysql_result) {
		$result = array( );
		while ($row = mysql_fetch_assoc($mysql_result))
			$result[] = $row;
		return json_encode($result);
	}

	$db = mysql_connect($host,$user,$pass);
	mysql_select_db($database,$db);
	$results = mysql_query($sql) or die("<br>SQL Error: " . mysql_error( ) . "<br /><br />" . $sql);

	$json = mysql2json($results);
	$json = preg_replace("#\\\/#", "/", $json);
	
?>

<textarea cols="80" rows="40">
<?php echo "var $variable = $json;"; ?>
</textarea>

</body>
</html>
