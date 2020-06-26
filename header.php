<?php
session_start();
// include "config.php";

// session_start();
// if(isset($_SESSION['email'])){
//   // echo $_SESSION['name'];
// }else{
//   header("Location:login.php");
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>B M INFOTECH || HOME PAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@200;300;400;500;600&family=Nunito:ital,wght@0,600;1,400&family=Open+Sans:wght@400;600&family=Roboto:ital,wght@0,300;0,400;1,100;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <div class="container">
  	<a class="navbar-brand" href="#">BM INFOTECH</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	  	<div class="m-auto"></div>
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="#">About Us</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Contact Us</a>
	      </li>
	      <?php
	      if(isset($_SESSION['email'])){
	      	?>
	      	<li class="nav-item">
		        <a class="nav-link" href="#"><?php echo $_SESSION['name']; ?></a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" href="logout.php">Logout</a>
		    </li>
		   <?php
		   }else{
		   	?>
			 <li class="nav-item">
		        <a class="nav-link" href="login.php">Login</a>
		      </li>
	      <?php
		   }

	      ?>
	      
	    </ul>
	  </div>
  </div>
</nav>