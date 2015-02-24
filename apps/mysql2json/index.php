<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>MySQL 2 JSON</title>
</head>
<body>

<h3>MySQL -> JSON</h3>

<style>
	label {
		display: inline-block;
		width: 100px;
	}
</style>

<form method="post" action="results.php">
	
	<p>
		<label for="user">Username</label>
		<input id="user" name="user" value="bart" />
	</p>
	
	<p>
		<label for="pass">Password</label>
		<input id="pass" name="pass" value="b@rt" />
	</p>
	
	<p>
		<label for="host">Host</label>
		<input id="host" name="host" value="localhost" />
	</p>
	
	<p>
		<label for="database">Database</label>
		<input id="database" name="database" value="designdev" />
	</p>
	
	<p>
		<label class="sql" for="sql">SQL Statement</label>
	</p>
	<p>
		<textarea cols="80" rows="10" id="sql" name="sql"></textarea>
	</p>
	
	<p>
		<label for="variable">Variable Name</label>
		<input id="variable" name="variable" value="nytd_results" />
	</p>
	
	<p>
		<input type="submit" />
	</p>
	
</form>

</body>
</html>
