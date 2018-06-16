<?php ob_start(); ?>
<?php session_start(); ?>
<?php include "functions.php"; ?>
<?php include "db.php"; ?>


<?php

$header = <<< End
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="author" content="Kodinger">
		<meta name="keyword" content="Kodinger, template, html5, css3, bootstrap4">
		<meta name="description" content="HTML5 and CSS3 Template Based on Bootstrap 4">
		<title>Home Page</title>
		<link rel="stylesheet" href="ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="sweetalert/dist/sweetalert.css">
		<link rel="stylesheet" href="css/stisla.css">
	</head>

	<body>
End;

echo $header;

?>