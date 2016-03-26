<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>My Profile</title>
</head>
<body>
	<h3>My Profile</h3>
	
	<?php 
	foreach($cone as $mediator){
		foreach($mediator as $key => $val){
			echo $key . " : " . $val;
			echo "</br>";
		}
	}
	?>

	<a href='<?php echo base_url() . "index.php/main/index" ?>'>Logout</a>

</body>
</html>