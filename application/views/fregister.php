<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Extra Details</title>
</head>
<body>
	<h3>Please Fill in some extra details</h3>
		<?php
		echo form_open('main/input_data_f');
	                        
	                        echo "<p> FB ID : ";
	                        echo $this->session->userdata('fbid');
	                        echo "</p>";

	                        echo "<p> Email : ";
	                        echo form_input('femail');
	                        echo "</p>";
	        
	                        echo "<p> Password : ";
	                        echo form_password('fpass');
	                        echo "</p>";

	                        echo "<p> Mobile Number : ";
	                        echo form_input('fmobile');
	                        echo "</p>";

	                        echo "<p> Local Address : ";
	                        echo form_input('flocal');
	                        echo "</p>";

	                        echo "<p> City : ";
	                        echo form_input('fcity');
	                        echo "</p>";

	                        echo "<p> State : ";
	                        echo form_input('fstate');
	                        echo "</p>";

	                        echo "<p> Select your Hobbies : ";
	                        echo "</p>";

	                        echo form_checkbox('fhobby[]' , 'coding' , TRUE);
	                        echo "Coding";
	                        echo "</p>";

	                        echo form_checkbox('fhobby[]' , 'singing' , TRUE);
	                        echo "Singing";
	                        echo "</p>";

	                        echo form_checkbox('fhobby[]' , 'reading' , TRUE);
	                        echo "Reading";
	                        echo "</p>";

	                        echo form_checkbox('fhobby[]' , 'politics' , TRUE);
	                        echo "Politics";
	                        echo "</p>";

	                        echo form_checkbox('fhobby[]' , 'painting' , TRUE);
	                        echo "Painting";
	                        echo "</p>";

	                        echo "Gender : ";
	        //echo "</br>";

	                        echo form_radio('fgender', 'male', FALSE);
	                        echo "Male";
	        //echo "</br>";

	                        echo form_radio('fgender', 'female', TRUE);
	                        echo "Female";
	                        echo "</br>";

	        
	                        echo form_submit('submit_data_f', 'Complete Registration');
	                    echo form_close();
		?>

</body>
</html>