<?php
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	// Database connection
	$conn = new mysqli('localhost','root','','heritagex');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact(email,subject,message) values(?, ?, ?)");
		$stmt->bind_param("sss", $email,$subject,$message);
		$execval = $stmt->execute();
		header("location:../../html/product.html");
		echo $execval;
		if(isset($_POST['btnsub'])){
			echo "<script>window.close();</script>";}
		
		$stmt->close();
		$conn->close();
	}
?>

