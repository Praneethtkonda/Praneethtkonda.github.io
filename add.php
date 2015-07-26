<?php session_start(); ?>
<!DOCTYPE html>
<html>
<body>
<?php	
	echo "Hello folks";
	$id=$_POST['id'];
	echo $id;
	$name=$_POST['name'];
	echo $name;
	include 'config.php';
	$sql="SELECT * FROM products WHERE productid ='$id'";
	$query=mysqli_query($sql);
	if(mysqli_query($query,$connect)){
		echo "Your cart item is :".$name	
	}
?>
</body>
</html>
