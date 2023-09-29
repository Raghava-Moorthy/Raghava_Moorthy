<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<%@ page import="java.sql.*"%>
<%@ page import="java.math.*"%>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8" />
<title>Profile Page</title>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../__css/style.css" />
</head>

<body class="prof">
	<img src="../__img/prof-bg.jpg" class="prof-bg" alt="">
	<header>
		<h1 class="welcome">Profile</h1>
	</header>
	<main class="profile-main">
		<div class="profile-picture">
			<label for="profile-image"> <img
				src="https://www.w3schools.com/howto/img_avatar.png"
				title="Change Image" alt="Profile Picture" /> <input type="file"
				id="profile-image" style="display: none" />
			</label>
		</div>

		<section class="profile-info">
			<label for="name">Name : <span class="profile-input">${sessionScope.UserName}</span>
			</label> 
			<label for="email">Email : <span class="profile-input">${sessionScope.UserEmail}</span>
			</label>
			<%
			String userName = (String) session.getAttribute("UserName");
			Connection connection = null;
			Statement statement = null;
			ResultSet resultSet = null;
			try {
				Class.forName("com.mysql.cj.jdbc.Driver");
				connection = DriverManager.getConnection("jdbc:mysql://localhost:3306/fms", "root", "01102003Rm@@");
				statement = connection.createStatement();
				String sql = "SELECT * FROM FUEL_UPDATE WHERE USERNAME='" + userName + "'";
				resultSet = statement.executeQuery(sql);
				if (resultSet.next()) {
					BigDecimal fuelValue = resultSet.getBigDecimal("REMAINING");
					String VehicleType = resultSet.getString("VEHICLE");
			%>

			<label for="vehicle">Vehicle type : <span
				class="profile-input"> <%=VehicleType%>
			</span>
			</label> <label for="fuel">Remaining Fuel : <span
				class="profile-input"> <%=fuelValue%> L
			</span>
			</label>
			<%
			}
			} catch (ClassNotFoundException | SQLException e) {
			e.printStackTrace();
			} finally {
			try {
			if (resultSet != null)
				resultSet.close();
			if (statement != null)
				statement.close();
			} catch (SQLException e) {
			e.printStackTrace();
			}
			}
			%>
		</section>
	</main>

	<script>
		document.getElementById('profile-image').addEventListener('change',function(event) {
			const imageFile = event.target.files[0];
			if (imageFile) {
				const imageUrl = URL.createObjectURL(imageFile);
				document.querySelector('.profile-picture img').src = imageUrl;
			}
		});
	</script>
</body>

</html>