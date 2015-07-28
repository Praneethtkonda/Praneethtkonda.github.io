<?php
	$Username="adminAhwR2PQ";	
        $Password="SZQijmUftmln";
        $Server = "127.5.212.130:3306";
	$database ="praneeth";
	$connect = mysqli_connect($Server, $Username, $Password,$database);
	
	if(!connect){
		die("Connection failed:" .mysqli_connect_error());
	}
?>
