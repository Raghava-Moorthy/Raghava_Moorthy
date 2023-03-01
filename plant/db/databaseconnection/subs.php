<?php
    $email = $_POST['email'];
    $conn = new mysqli('localhost','root','','heritagex');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into subscribe(email) values(?)");
        $stmt->bind_param('s',$email);
		$execval = $stmt->execute();
		echo $execval;
		header("location:../../html/index.html");
		$stmt->close();
		$conn->close();
	}
?>