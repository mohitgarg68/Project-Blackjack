<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Front Page</title>
</head>
<body>
	<h1>Welcome to Front Page</h1>

	<a href='<?php echo base_url() . "index.php/main/register" ?>'>Register yourself</a>
	</br>
	<a href='<?php echo base_url() . "index.php/main/normal_login" ?>'>Login</a>
	</br>
	<a href='<?php echo base_url() . "index.php/user_authentication/index" ?>'>Register with Google+</a>
	</br>
	<a href='<?php echo base_url() . "index.php/main/flogin" ?>'>Register with Facebook</a>

</body>
</html>