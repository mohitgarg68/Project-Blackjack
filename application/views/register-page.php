<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration Page</title>
</head>
<body>
	<h1>Please fill in the following details :</h1>
	

	<?php 
		echo form_open('main/input_data');
		
		echo "<p> Email : ";
		echo form_input('iemail');
		echo "</p>";
		
		echo "<p> Password : ";
		echo form_password('ipass');
		echo "</p>";

		echo "<p> Mobile Number : ";
		echo form_input('imobile');
		echo "</p>";

		echo "<p> Local Address : ";
		echo form_input('ilocal');
		echo "</p>";

		echo "<p> City : ";
		echo form_input('icity');
		echo "</p>";

		echo "<p> State : ";
		echo form_input('istate');
		echo "</p>";

		echo "<p> Select your Hobbies : ";
		echo "</p>";

		echo form_checkbox('ihobby[]' , 'coding' , TRUE);
		echo "Coding";
		echo "</p>";

		echo form_checkbox('ihobby[]' , 'singing' , TRUE);
		echo "Singing";
		echo "</p>";

		echo form_checkbox('ihobby[]' , 'reading' , TRUE);
		echo "Reading";
		echo "</p>";

		echo form_checkbox('ihobby[]' , 'politics' , TRUE);
		echo "Politics";
		echo "</p>";

		echo form_checkbox('ihobby[]' , 'painting' , TRUE);
		echo "Painting";
		echo "</p>";

		echo "Gender : ";
		//echo "</br>";

		echo form_radio('igender', 'male', FALSE);
		echo "Male";
		//echo "</br>";

		echo form_radio('igender', 'female', TRUE);
		echo "Female";
		echo "</br>";

		
		echo form_submit('submit_data', 'Register Now!');
		echo form_close();
	?>

</body>
</html>