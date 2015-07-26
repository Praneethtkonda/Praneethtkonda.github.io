<?php session_start();?>
<!DOCTYPE html>
<html>
</head>
<body>
	<h1><legend>Moto X 2nd gen</legend></h1>
	<?php
	  if(isset($_POST['submit']))
	  {
		$username="root";
		$servername="localhost";
		$password="hello";
                $database="kart";
		$connect=mysql_connect($servername,$username,$password,$database);
		if(!$connect){
			echo "Error not connected to the server";
		}
		$quan=$_POST['quan'];
		echo "Your Product quantity is ".$quan."<br>";
		$name="Moto X 2nd gen";
		$price=29999;
		$_SESSION['each']= $quan * $price;
		$u=$_SESSION['name'];
		$total=$_SESSION['each'];
		echo $total."<br>";
		$sql ="INSERT INTO `kart`.billing (User,Name,Quantity,Price,Total) VALUES ('$u','$name','$quan','$price','$total')";
                if (!mysql_query($sql)) {
                      echo "Your item didn't add to the cart";
                } 
                else {
                      echo "Item added to the cart successfully";
                  }
	}	
	?>
		 <a href='http://localhost/reg/Project1/Sk.php'>Go to the main website</a>

</body>
</html>

