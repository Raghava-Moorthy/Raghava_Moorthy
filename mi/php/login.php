<?php
session_start();
$id=$_POST['r_id'];
$password=$_POST['r_pass'];
$con = new mysqli('localhost','root','','mini');
$isLoggedIn = false;
if($con->connect_error){
    die("Failed to connect: ".$con->connect_error);
}else{
    $stmt = $con->prepare("select * from recep where recid =?");
    $stmt->bind_param("s",$id);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
        $data = $stmt_result->fetch_assoc();
        if($data['passwrd'] === $password){
            $_SESSION['recid'] = $id;
            $isLoggedIn = true;
        }else{
            echo "<h2>Invalid Email or password</h2>";
        } 
    }else{
        echo "<h2>Invalid id or password</h2>";
    }
}
if ($isLoggedIn) {
    header("location:../html/button.html");
    exit();
} else {
    echo "failed";
}
?>



