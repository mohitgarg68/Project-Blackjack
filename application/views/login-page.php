<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
</head>
<body>
	<h3>Login</h3>
	

	<?php 
		echo form_open('main/login_data');
		
		echo "<p> Email : ";
		echo form_input('lemail');
		echo "</p>";
		
		echo "<p> Password : ";
		echo form_password('lpass');
		echo "</p>";
		
		echo form_submit('login', 'Login');
		echo form_close();
	?>

</body>
</html>