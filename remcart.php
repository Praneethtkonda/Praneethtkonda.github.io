<?php session_start();?>
<!DOCTYPE html>
<html>
<body>
        <?php
          $username="root";
			$password="hello";
			$servername="localhost";
			$database="kart";
			$conn=mysql_connect($servername, $username, $password, $database);	
			if(!$conn){
					echo "Not connected";			
			}
			echo "Enter the name of the same product as is";
			$hai= $_SESSION['name'];
        ?>
        <h1>Please confirm the name of your Item</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				Item:<input type="text" name="item"> 
				<input type="submit" name="submit" value="Remove">        
        </form>
        <?php
        if(isset($_POST['submit'])){
					$item=$_POST['item'];
					$sql="DELETE FROM `kart`.billing WHERE User='$hai' AND Name='$item'";
					$query=mysql_query($sql);
					if($query) {
								echo "Item successfully removed";		
								echo "<a href='http://localhost/reg/Project1/cart.php'>Go to your cart</a>";
					}
					else {
								echo "Error";	
					}        
        }
        ?>
</body>
</html>
