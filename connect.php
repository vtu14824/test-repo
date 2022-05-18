index<?php

	$username=$_POST['username'];
	$email = $_POST['email'];
	$Password = $_POST['password'];
	$cmpassword=$_POST['cmpassword'];
	$phone=$_POST['mobilenumber'];


	// Database connection
	$conn = new mysqli('localhost','root','','mb1');
	if($conn->connect_error){
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "insert into users(uname,email, pass,cpass,phno) values('$username','$email','$Password','$cmpassword','$phone');";
		if($conn->query($sql)){
			echo "<h1>You have succesfully completed your registration";
			header("Location: index.html");
exit();
		}
		else{
			echo "error";
		}

	}
	$conn->close();
?>