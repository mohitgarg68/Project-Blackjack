<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Extra Details</title>
</head>
<body>
	<h3>Please Fill in some extra details</h3>
		<?php
		echo form_open('main/input_data_g');

		echo "<p> Email : " . $this->session->userdata('email');
		echo "</br>";
		
		echo "<p> Password : ";
		echo form_password('gpass');
		echo "</p>";

		echo "<p> Mobile Number : ";
		echo form_input('gmobile');
		echo "</p>";

		echo "<p> Local Address : ";
		echo form_input('glocal');
		echo "</p>";

		echo "<p> City : ";
		echo form_input('gcity');
		echo "</p>";

		echo "<p> State : ";
		echo form_input('gstate');
		echo "</p>";

		echo "<p> Select your Hobbies : ";
		echo "</p>";

		echo form_checkbox('ghobby[]' , 'coding' , TRUE);
		echo "Coding";
		echo "</p>";

		echo form_checkbox('ghobby[]' , 'singing' , TRUE);
		echo "Singing";
		echo "</p>";

		echo form_checkbox('ghobby[]' , 'reading' , TRUE);
		echo "Reading";
		echo "</p>";

		echo form_checkbox('ghobby[]' , 'politics' , TRUE);
		echo "Politics";
		echo "</p>";

		echo form_checkbox('ghobby[]' , 'painting' , TRUE);
		echo "Painting";
		echo "</p>";

		echo "<p> Gender : " . $this->session->userdata('gender');
		echo "</p>";
		
		echo form_submit('submit_data_g', 'Complete Registration!');
		echo form_close();
		?>

</body>
</html>