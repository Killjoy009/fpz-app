<?php
	include ('eden.php');
	error_reporting(0);
	$style = eden('path', 'fpz-app/css/style.css');  
	$reset = eden('path', 'fpz-app/css/reset.css');
	$mainjs = eden('path', 'fpz-app/js/main.js');
	$jquery = eden('path', 'fpz-app/js/jquery-2.1.1.js');

	$url = $_SERVER['REQUEST_URI'];
	$parts = explode('/',$url);
	$title = $parts[3];
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo $reset ?>"> <!-- CSS reset -->
	<link rel="stylesheet" href="<?php echo $style ?>"> <!-- Gem style -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> <!-- Bootstrap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>  	
	<title><?php echo $title; ?></title>
</head>
