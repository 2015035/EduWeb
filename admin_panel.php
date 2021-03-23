<?php
    include('auth_session.php');
    if(!isset($_SESSION["username"])) {
        $query    = "SELECT * FROM `users3` WHERE username='$username'";
        exit();
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard</title>
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
			<div id="headercenter" class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="text-align: center;">
		        <p>ADMIN</p>
			</div>
			<div id="headerright" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			</div>
		</div>
	</div>
	<nav class="main-nav-outer" id="test">	
		<div class="container">
			<ul class="main-nav"> 
				<li><a href="index.html">Home</a></li>
				<li><a href="upload.php">UPLOAD</a></li>
				<li><a href="download.php">download</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
			<a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>
		</div>
	</nav>
	<div class="container" id="content">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="mainpanel">
				<div>
					<a href="#"><h2>USER PANEL</h2>
					<h5>Click here to enter the user panel, create groups and appoint Team Leaders</h5>
					</a>
				</div>
				<div>
					<a href="#"><h2>FAVORITES</h2>
					<h5>Click here to view your favorite papers</h5>
					</a>
				</div>
				<div>
					<a href="#"><h2>LOREM IPSUM</h2>
					<h5>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</h5>
					</a>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="sidebar">
				<div>
					<a href="#"> LOREM IPSUM</a>
				</div>
				<div>
					<a href="#"> LOREM IPSUM</a>
				</div>
				<div>
					<a href="#"> LOREM IPSUM</a>
				</div>
				<div>
					<a href="#"> LOREM IPSUM</a>
				</div>
				<div>
					<a href="#"> LOREM IPSUM</a>
				</div>
				<div>
					<a href="#"> LOREM IPSUM</a>
				</div>
			</div>
		</div>
	</div>
	<footer>
		COPYRIGHT<BR> &#169 BY EDUWEB
	</footer>
</body>
</html>