<?php
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];
	$state = $_POST['state'];
	$pincode = $_POST['pincode'];

	// Database connection
	$conn = new mysqli('localhost','root','','heritagex');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into buy1(fullname,email, address, mobile,pincode,state) values(?,?,?, ?, ?, ?)");
		$stmt->bind_param("sssiis", $fullname,$email, $address, $mobile,$pincode,$state);
		$execval = $stmt->execute();
		echo $execval;
		header("location:../../html/product.html");
		$stmt->close();
		$conn->close();
	}
?>