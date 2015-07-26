<?php
	$Username ="root";
	$Password ="hello";
	$Server = "localhost";
	$database ="kart";
	$connect = mysqli_connect($Server, $Username, $Password,$database);
	
	if(!connect){
		die("Connection failed:" .mysqli_connect_error());
	}
?>
