<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

	<style>
		body {
			

/* background-image: url("form_bg2.jpg");
background-repeat: no-repeat; */
background-color: peachpuff;


		}

		.div2 {
         background-color: pink;
         border: 1px solid;
         padding: 25px;
         width: 600px;
         height: 400px;

         margin-top: 80px;

		 

      }

      .div2:hover {
         box-shadow: 5px 10px 8px 10px #888888;
      }

      .div1 {
         display: flex;
         align-items: center;
         justify-content: center;


      }
	  .btn{
		  background-color: cadetblue;
		  border-radius: 5px;
		  color: white;
		  font-size: 25px;
	  }
	</style>
</head>

<body>

	<div class="container">
		
	<div class="div1">
	   <div class="div2 ">
		<h3 style="text-align: center;">Admin & User login page</h3><br>
			<form style="text-align: center;" action="" method="POST">
				<input class="btn" type="submit" name="admin_login" value="Admin Login" required>

				<button class="btn"><a style="color: white; font-size:25px" href="../View/Login.php">User Login</a></button>
			</form>
		</div>

	</div>

	</div>
	<?php
	if (isset($_POST['admin_login'])) {
		header("Location: admin_login.php");
	}
	
	?>

</body>

</html>