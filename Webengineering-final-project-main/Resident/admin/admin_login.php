<!DOCTYPE html>
<html>

<head>
	<title>Admin Login</title>


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
	body{
		background-color: peachpuff;
	}
	.btn{
		background-color: steelblue;
		padding-left: 20px;
		padding-right: 20px;
		color: white;
		border-radius: 5px;
	}
	.div2:hover {
         box-shadow: 5px 10px 8px 10px #888888;
      }
	</style>


</head>

<body>

	<div style="text-align:center;" class="container">
		<div class="mt-5 div2" style="  background-color: pink; height:400px; width:600px;  margin:auto;">
			<h3>Admin Login Page</h3><br>
			<form action="" method="post">
				Email ID: <input type="text" name="email" required><br><br>
				Password: <input type="password" name="password" required><br><br>

				<input class="btn" type="submit" name="submit" value="Login">

			</form>
		</div>

	</div>

	<?php
	session_start();
	if (isset($_POST['submit'])) {
		$connection = mysqli_connect("localhost", "root", "");
		$db = mysqli_select_db($connection, "admin");
		$query = "select * from login where email = '$_POST[email]'";
		$query_run = mysqli_query($connection, $query);
		while ($row = mysqli_fetch_assoc($query_run)) {
			if ($row['email'] == $_POST['email']) {
				if ($row['password'] == $_POST['password']) {
					$_SESSION['name'] =  $row['name'];
					$_SESSION['email'] =  $row['email'];
					header("Location: admin_dashboard.php");
				} else {
	?>
					<span>Wrong Password !!</span>
	<?php
				}
			}
		}
	}
	?>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>