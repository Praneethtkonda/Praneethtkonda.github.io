<?php session_start();?>
<!DOCTYPE html>
<html>
<body>
 	<?php
		session_unset();
		session_destroy();
		echo "Log out successful";
	?>
	<a href="http://localhost/reg/Project1/Sk.html">Click here to go to the main page</a>
</body>
</html>
