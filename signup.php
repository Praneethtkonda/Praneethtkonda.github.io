<!DOCTYPE html>
<html>
<head>
  <title>SignUp</title>
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
  </div>
<!-- Navigational bar -->  
  <nav class="navbar navbar-default">
    <div>
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">categories
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Pc Games</a></li>
            <li><a href="#">Smartphones</a></li>
            <li><a href="#">External Harddisks</a></li> 
          </ul>
        </li>
        <li><a href="contact.html"><span class="change">Contact us</span></a></li>
        <li><a href="http://www.praneethtkonda.wordpress.com"><span class="change"> Visit my blog</span></a></li>
        <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
     </ul>   
    </div>    
  </nav>
  <script>
    var s;
  s=new Date();
  document.getElementById("date").innerHTML = s.toDateString();
  </script>
<!-- Main body of the form -->	
 <legend><h1 class="heading">Don't have an account,Sign up</h1></legend>
  <div class="container">
		<form method="post" action="http://praneeth-tkart.rhcloud.com/form.php">
		  Name:<input type="text" name="name"></input><br>
		  Age    :		<input type="number" name="age" min="18" max="90"></input><br>
    		  E-mail:<input type="email" name="mail"><br>
   		  Password:<input type="password" name="pwd"><br>
    		  <input type="submit" value="Register">
	       </form>
  </div>
 <div class="container-fluid">
  <p>Already have an account...</p>
  <a href="login.html">Click this to login</a>
 </div>
</body>
<style>
	.container{
		padding:20px;
		text-align:center;
		text:120px;
		background-color:#ffff66;
		width:500px;
	}
	input {
		font-size:20px;        
	}
	.heading{
		text-align:center;
	}
	.container-fluid{
			float:right;
	}
</style>
</html>
