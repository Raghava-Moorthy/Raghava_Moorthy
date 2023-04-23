<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Admission Report</title>
    <link rel="icon" type="image/png" href="../img/plus.png">
    <script src="../js/script.js"></script>    
</head>
<body>
            <?php
			$conn = mysqli_connect('localhost', 'root', '', 'mini');
			if (!$conn) {
				die('Connection failed: ' . mysqli_connect_error());
			}
			$sql = 'SELECT * FROM admission';
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="ad_report justify-content-center d-flex ">';
                        echo '<p class="ad_repo">ADMISSION REPORT</p>';
                        echo '<div class="d-block adcard justify-content-center ">';
					        echo '<p class="ad_list">Name: ' . $row['fname'].'.'.$row['initial'] .'</p>';
					        echo '<p class="ad_list">Age: ' . $row['age'] . '</p>';
					        echo '<p class="ad_list">Gender: ' . $row['gender'] . '</p>';
					        echo '<p class="ad_list">Mobile: ' . $row['mobile'] . '</p>';
					        echo '<p class="ad_list">Address: ' . $row['address'] . '</p>';
                        echo '</div>';
                    echo '</div>';
				}
			} else {
				echo '<p>No records found.</p>';
			}
			mysqli_close($conn);
		?>



    
</body>
</html>