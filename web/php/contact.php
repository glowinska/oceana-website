<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
<?php
	// server side checking example

	$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
	if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
	{
		exit("Wrong email: ".$_POST['email']);
	}

	if(!isset($_POST['textarea']) || empty($_POST['textarea']))
	{
		exit("Wrong text: ".$_POST['textarea']);
	}

	echo "<h3>The received results:</h3>";
	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";
?>
	</body>
</html>
