<?php
    session_start();
    if(isset($_SESSION["username"])) {
        $query    = "SELECT * FROM `users3` WHERE username='$username'";
        exit();
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/dynamic.css">
</head>
<body>
	<div class="container">
		<div class="row dynhead">
			<div id="headerleft" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			
			</div>
			