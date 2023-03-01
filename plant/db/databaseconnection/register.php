<?php
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$password = $_POST['password'];


	// Database connection
	$conn = new mysqli('localhost','root','','heritagex');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(fullname,email, password) values( ?, ?, ?)");
		$stmt->bind_param("sss", $fullname,$email, $password);
		$execval = $stmt->execute();
		echo $execval;
		header("location:../../html/product.html");
		$stmt->close();
		$conn->close();
	}
?>