<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

	<style>
		body{
			background-color: blueviolet;
		}
		
	</style>
</head>

<body>

	<div class="container">
		<h3>Student Management System</h3><br>
		<form action="" method="POST">
			<input type="submit" name="admin_login" value="Admin Login" required>
			
			<button><a href="../View/Login.php">User Login</a></button>
		</form>

	</div>
	<?php
	if (isset($_POST['admin_login'])) {
		header("Location: admin_login.php");
	}
	if (isset($_POST['student_login'])) {
		header("Location: student_login.php");
	}
	?>

</body>

</html>