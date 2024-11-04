<?php

// Defining the variables
$brandname = $_POST['brandname'];
$email = $_POST['email'];
$countrycode = $_POST['countrycode'];
$contactnumber = $_POST['contactnumber'];
$subject = $_POST['subject'];
$message = $_POST['message'];


// about database 
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'portfolio';

// Trying to connect to database
$conn = mysqli_connect($hostname, $username, $password, $database_name);

// checking the connection
		// If the connection failed execude these code
if (!$conn) {
	die("connection failed" . mysqli_connect_error());
	header("Location: index.html");
}
echo "connection successfully";

// Inserting form values or datas from user to database
$sql = "INSERT INTO contact_hire_me(id, brandname, email, countrycode, contactnumber, subject, message)
VALUES ('', '$brandname', '$email', '$countrycode', '$contactnumber', '$subject', '$message')";

// Checking if the value is inserted or not
if (mysqli_query($conn, $sql)) {
	echo "<script>window.alert('Thank you for Hiring me!');</script>";
	Header("Location: index.html");
}
else
{
	echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

// Closing the connection
mysqli_close($conn);

?>