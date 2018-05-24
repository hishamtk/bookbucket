<!DOCTYPE html>
<?php 
	include("functions/functions.php");
?>
<html>
<head>
	<title>BookBucket</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="mainWrapper">
		<div class="headerWrapper">
			<ul class="topnav">
			  <li ><a href="#home" style="padding: 0px"><img id="logo" src="images/logo.gif" /></a></li>
			  <li>
			  	<div class="searchBox">
			        <input type="search" id="search" placeholder="Search..." />
			        <input type="submit" name="search" value="Search" class="fa fa-search w3-white w3-border w3-border-red w3-round-large" 
			          style="height: 50px;width:70px;background-color: #FFF;">
				</div>
			  </li>
			  <li class="right" style="margin-top: 25px;"><a href="#about">Login/Register</a></li>
			  <li class="right"><h3>Hi user!</h3></li>
			</ul>
		</div>
		<div class="menubar">
			<ul>
			  <li style="margin-left: 30px;"><a href="#home">Home</a></li>
			  <li><a href="#news">All Products</a></li>
			  <li><a href="#contact">Blog</a></li>
			  <li><a href="#about">Contact Us</a></li>
			</ul>
		</div>
		<!--content wrapper starts here!-->
		<div class="contentWrapper">
			<div class="sidebar">
				<div id="sidebarTitle"><b>Branch</b></div>
				<ul id="branch">
					<?php echo getBranch(); ?>
				</ul>
				<div id="sidebarTitle"><b>Semester</b></div>
				<ul id="semester">
					<?php echo getSemester(); ?>
				</ul>
			</div>
			<div class="contentArea">
				
			</div>
		</div>
		<div class="footer">
			<h3>hello footer</h3>
		</div>
	</div>

</body>
</html>