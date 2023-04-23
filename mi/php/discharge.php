<?php
	$conn = new mysqli('localhost','root','','mini');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	$patient_name = $_POST['f_Name'];
	$sql = "SELECT * FROM admission WHERE fname = '$patient_name'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	  $sql = "INSERT INTO discharge SELECT * FROM admission WHERE fname = '$patient_name'";
	  mysqli_query($conn, $sql);
	  $sql = "DELETE FROM admission WHERE fname = '$patient_name'";
	  mysqli_query($conn, $sql);
	  header("location:../html/discharge.html");
	}
	else {
	  echo "Patient not found in admission table.";
	}
	mysqli_close($conn);    
?>




