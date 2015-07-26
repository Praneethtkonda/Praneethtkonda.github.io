<?php session_start();?>
<!DOCTYPE html>
<html>
<head>

  <title>Tss Kart</title>
  <link rel="stylesheet" type="text/css" href="sk.css">
  <script src="sk.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>
<body>
  <body background="Photos/back1.jpg">
<!-- Header photo -->
    <div class="header">
      <h1><img src="Photos/WE.png" height="200" width="200"><strong>     T-kart</strong></h1>
      <p class="k"><h4 id="date"></h4></p>
      <p style="color:black;"><?php 
		echo "Welcome  ". $_SESSION['name'];
       ?>
     </p>	
  </div>
<!-- Navigational bar -->  
  <nav class="navbar navbar-default">
    <div>
      <ul class="nav navbar-nav">
        <li><a href="http://localhost/reg/Project1/Sk.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">categories
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://localhost/reg/Project1/Sk.php">Pc Games</a></li>
            <li><a href="http://localhost/reg/Project1/Sk.php">Smartphones</a></li>
            <li><a href="http://localhost/reg/Project1/Sk.php">External Harddisks</a></li>
            <li><a href="http://localhost/reg/Project1/Sk.php">Optical Mouse</a></li>
          </ul>
        </li>
        <li><a href="contact.html"><span class="change">Contact us</span></a></li>
        <li><a href="http://www.praneethtkonda.wordpress.com"><span class="change"> Visit my blog</span></a></li>
        <ul class="nav navbar-nav navbar-right">
        <ul class="nav navbar-nav navbar-right">
        	<li class="active"><a href="http://localhost/reg/Project1/cart.php"><span class="glyphicons glyphicons-shopping-cart"></span>Your Cart</a></li>
        	<li><a href="http://localhost/reg/Project1/l.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
        </ul>
     </ul>   
    </div>    
  </nav>
  <script>
    var s;
  s=new Date();
  document.getElementById("date").innerHTML = s.toDateString();
  </script>