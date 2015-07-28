<?php session_start();?>
<!DOCTYPE html>
<html>
<body>
 	<?php
		session_unset();
		session_destroy();
		echo "Log out successful";
	?>
	<a href="http://praneeth-tkart.rhcloud.com/index.html">Click here to go to the main page</a>
</body>
</html>
