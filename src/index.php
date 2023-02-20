<?php
	// PHP User Password Basics
	// (c) Patrick Prémartin
	//
	// Distributed under license AGPL.
	//
	// Infos and updates :
	// https://github.com/DeveloppeurPascal/PHP-UserPassword-Basics
	
	session_start();
	require_once(__DIR__."/inc/functions.inc.php");
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
		<title>PHP User Password Basics</title>
	</head>
	<body><?php include_once(__DIR__."/inc/header.inc.php"); ?>
		<h2>Home</h2>
		<p><?php
			if (hasCurrentUser()) {
				print("User ".getCurrentUserEmail()." is connected.");
			}
			else {
				print("No user connected.");
			}
		?></p>
<?php include_once(__DIR__."/inc/footer.inc.php"); ?></body>
</html>