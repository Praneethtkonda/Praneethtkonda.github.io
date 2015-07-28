<?php session_start();?>
<!DOCTYPE html>
<html>
</head>
<body>
	<h1><legend>Sony HDD</legend></h1>
	<?php
	  if(isset($_POST['submit']))
	  {
		$username="adminAhwR2PQ";
		$servername="127.5.212.130:3306";
		$password="SZQijmUftmln";
                $database="praneeth";
		$connect=mysql_connect($servername,$username,$password,$database);
		if(!$connect){
			echo "Error not connected to the server";
		}
		$quan=$_POST['quan'];
		echo "Your Product quantity is ".$quan."<br>";
		$name="Sony HDD";
		$price=5100;
		$_SESSION['each']= $quan * $price;
		$u=$_SESSION['name'];
		$total=$_SESSION['each'];
		echo $total."<br>";
		$sql ="INSERT INTO `praneeth`.billing (User,Name,Quantity,Price,Total) VALUES ('$u','$name','$quan','$price','$total')";
                if (!mysql_query($sql)) {
                      echo "Your item didn't add to the cart";
                } 
                else {
                      echo "Item added to the cart successfully";
                  }
	}	
	?>
		 <a href='http://praneeth-tkart.rhcloud.com/Sk.php'>Go to the main website</a>

</body>
</html>

