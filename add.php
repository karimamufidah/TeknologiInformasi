<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,telepon, message) VALUES('$name','$email','$message')");
		
		// Show message when user added
		echo "User berhasil ditambahkan. <a href='index.php'>Kembali ke Home</a>";
	}
	?>