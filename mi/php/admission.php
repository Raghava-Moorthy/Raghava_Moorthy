 <?php
	$fullname = $_POST['f_Name'];
	$initial = $_POST['p_ini'];
	$age = $_POST['agee'];
	$gen = $_POST['gender'];
	$room = $_POST['room_no'];
	$mobile = $_POST['mobile'];	
	$patid = $_POST['p_id'];		
	$admitdate = $_POST['ad_date'];	
	$address = $_POST['add'];	
	$situvation = $_POST['situvation'];


	$conn = new mysqli('localhost','root','','mini');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into admission(fname,initial, age,gender,roomno,mobile,pid,addate,address,problem) values( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssssss", $fullname,$initial, $age,$gen,$room,$mobile,$patid,$admitdate,$address,$situvation);
		$execval = $stmt->execute();
		echo $execval;
		header("location:../html/admission.html");
		$stmt->close();
		$conn->close();
	}
?>