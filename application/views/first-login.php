<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>First Time Login</title>
</head>
<body>
	<h3>We thought you might find these users interesting!</h3>
	
	<?php 
	echo form_open('main/req_submit');
	foreach($start as $mediator){
		//echo form_radio('requests[]' , $mediator->id , TRUE);
		foreach($mediator as $key => $val){
			echo $key . " : " . $val;
			echo "</br>";
		}
		echo form_radio('dale', 'yes', TRUE);
		echo "Yes";

		echo form_radio('bale', 'no', FALSE);
		echo "No";
		echo "</br>";
	}
	echo form_close();
	?>

	<a href='<?php echo base_url() . "index.php/main/profile" ?>'>View Profile</a>
	<a href='<?php echo base_url() . "index.php/main/logout" ?>'>Logout</a>

</body>
</html>