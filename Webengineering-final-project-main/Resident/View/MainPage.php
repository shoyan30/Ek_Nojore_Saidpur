<!DOCTYPE html>
<html>

<head>

	<title>Ak Nojore Saidpur</title>
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/af27af1048.js" crossorigin="anonymous"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


	<style>
		body {
			font-family: 'Poppins', sans-serif;
			margin: 0px;
			padding: 0px;
		}

		.nav2:hover {
			background-color: darksalmon;
			border-radius: 10px;
			cursor: pointer;

		}

		.nav2-bg { 
			background-color: darkmagenta;
		} 

		.card-bg {
			background-color: darkmagenta;
		}

		.btn-bg {
			background-color: darkmagenta;
		}

		/* .font-image {
			background-image: url("dhaka-city.jpg");
			background-repeat: no-repeat;
			height: 800px;
			width: 100%;

			opacity: 70%;
		} */
		.centered {
			font-size: 50px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			justify-content: center;
		}

		.card-img {
			border-radius: 25px;
			height: 300px;
			width: 100%;
		}

		.card-text {
			text-align: justify;
		}

		.card-style:hover {
			box-shadow: 10px 10px 18px #888888;
			/* box-shadow: 10px 10px 10px 10px rgba(22, 22, 26, 0.18); */

		}
		.btn{
			background-color: yellowgreen;
		}
		
	</style>

</head>

<body class="">
	<header>
		<div class="bg-light p-2">
			<section class="container">
				<nav>
					<ul class="nav justify-content-between ">
						<div>
							<li class="nav-item">
								<!-- <a class="nav-link active" href="#"><i class="fas fa-cloud-sun fs-1"></i></a> -->
								<img style="height: 80px; width: 150px;" src="logo.jpeg">
							</li>
						</div>
						<div class="d-flex mt-2">
							<li class="nav-item me-5">
								<button class="btn-bg fs-6 rounded"><a class="nav-link active text-white" href="../View/Login.php"> Sign in</a></button>
							</li>
							<li class="nav-item">
								<button class=" btn-bg fs-6 rounded"><a class="nav-link active text-white" href="../View/RegistrationForm.php"> Sign Up</a></button>
							</li>
						</div>
					</ul>
				</nav>
			</section>
		</div>


		<div class="mt-3 nav2-bg">
			<section class="container ">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container-fluid">


						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav ">
								<li class="nav-item">
									<a class="nav2 nav-link active text-white" aria-current="page" href="#">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav2 nav-link active text-white" href="../View/gallary.html">Gallary</a>
								</li>
								<li class="nav-item">
									<a class="nav2 nav-link active text-white" href="../View/restaurant.html">Restaurant</a>
								</li>
								<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
									<ul class="navbar-nav">
										<li class="nav-item dropdown">
											<a class="nav2 nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
												<span class="text-white">Education</span>
											</a>
											<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
												<li><a class="dropdown-item" href="#">School</a></li>
												<li><a class="dropdown-item" href="#">College</a></li>
												<li><a class="dropdown-item" href="#">University</a></li>
												<li><a class="dropdown-item" href="#">Madrasha</a></li>
												<li><a class="dropdown-item" href="#">Technical</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<li class="nav-item">
									<a class="nav2 nav-link active text-white">Stay</a>
								</li>
								<li class="nav-item">
									<a class="nav2 nav-link active text-white">Transportation</a>
								</li>
								<li class="nav-item">
									<a class="nav2 nav-link active text-white">Emergency</a>
								</li>
								
								<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
									<ul class="navbar-nav">
										<li class="nav-item dropdown">
											<a class="nav2 nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
												<span class="text-white">Municipality</span>
											</a>
											<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
												<li><a class="dropdown-item" href="../View/view.html">View</a></li>
												<li><a class="dropdown-item" href="../View/Organogram.html">Organogram</a></li>
												<li><a class="dropdown-item" href="../View/councilor.html">Councilor</a></li>
												
											</ul>
										</li>
									</ul>
								</div>
								<li class="nav-item">
									<a class="nav2 nav-link active text-white">Others</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</section>
		</div>


		<marquee class='marquee' direction="left" height="30px" scrollamount="2">
			<ul class='d-flex text-info'>
				<h5>| Notice regarding registration for COVID-19 Vaccine |</h5>&nbsp;&nbsp;&nbsp;&nbsp;
				<h5>| Notice regarding immunization of childern (0-5years) |</h5>&nbsp;&nbsp;&nbsp;&nbsp;
				<h5>| Notice regarding issuness of voter ID card |</h5>&nbsp;&nbsp;&nbsp;&nbsp;
				<h5>| If you have any problem then create an account and submit your problem|</h5>&nbsp;&nbsp;&nbsp;&nbsp;
				
			</ul>
		</marquee>
	</header>



	<main>
		<section>
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img style=" opacity:60%; height:800px" src="caru-1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="centered">
						Welcome To Jadur Shohor <span style=" margin-left:250px">Saidpur</span>
					</div>
					<div class="carousel-item">
						<img style=" opacity:60%; height:800px" src="caru-2.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="centered">
						Welcome To Jadur Shohor <span style=" margin-left:250px">Saidpur</span>
					</div>
					<div class="carousel-item">
						<img style=" opacity:60%; height:800px" src="caru-3.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="centered">
						Welcome To Jadur Shohor <span style=" margin-left:250px">Saidpur</span>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</section>




		<div class="curd-div">
			<section class="container mt-5">
				<div class="row">
					<div class="col-lg-4 col-12">
						<div class="card card-style" style="width:400px; border-radius: 25px; background-color: #D3A478; color:white">
							<img class="card-img-top card-img" src="oldmayor.webp" alt="Card image">
							<div class="card-body">
								<h5 class="card-title">Amzad Hossain Sarker(former mayor)</h5>
								<p class="card-text">dies from coronavirus infections at a hospital in the capital on Thursday morning.Amjad Hossain was suffering from diabetes and lung diseases for long.Sarker was elected MP from Nilphamari-4 constituency as a Bangladesh Nationalist Party candidate in 2001.</p> 
								<a href="#" class="btn ">See Profile</a>
							</div>
						</div>

					</div>
					<div class="col-lg-4 col-12">
						<div class="card card-style" style="width:400px; border-radius: 25px; background-color: #D3A478;color:white">
							<img class="card-img-top card-img" src="sir.jpg" alt="Card image">
							<div class="card-body">
								<h4 class="card-title">Brig Gen Professor Dr. Md Lutfor Rahman </h4>
								<p class="card-text">The mission of BAUST is to develop human resources in the different fields of education to meet the ever changing needs of the society. This University aims at producing quality graduates at affordable costs imbued with the spirit of ethical values and equipped with intellectual knowledge.</p>
								<a href="//www.baust.edu.bd/pages/content_detail/message-from-vc-21883" class="btn ">See Profile</a>
							</div>
						</div>

					</div>
					<div class="col-lg-4 col-12">
						<div class="card card-style" style="width:400px; border-radius: 25px;background-color: #D3A478;color:white">
							<img class="card-img-top card-img" src="freedom.jpg" alt="Card image">
							<div class="card-body">
								<h4 class="card-title">Ijhar Road</h4>
								<p class="card-text">General Secretary of the Communist Party Saidpur upazila unit Delowar Hossain told The Independent that about 4,000 people under Saidpur upazila had sacrificed their lives during the great Liberation War. The name of the road that was named after the first martyred freedom fighter, Mahtab Beg, in this town, is now  being called the Ijhar Road, a notorious Razakar who killed him (Mahtab Beg ).</p>
								<a href="//m.theindependentbd.com/printversion/details/145726" class="btn ">See Profile</a>
							</div>
						</div>

					</div>

				</div>
				


			</section>
		</div>



		<section class="container pt-5">

		<h1><u>Photos:</u></h1>
			<div class="row">
				<div class="col-lg-4">
					<img class="img-fluid" src="g14.jpeg">
				</div>
				<div class="col-lg-4">
				    <img class="img-fluid" src="g15.jpeg">
				</div>
				<div class="col-lg-4">
				    <img class="img-fluid" src="g16.jpeg">
				</div>

			</div>
			<div class="row">
				<div class="col-lg-4">
					<img class="img-fluid" src="g17.jpeg">
				</div>
				<div class="col-lg-4">
				    <img class="img-fluid" src="g18.jpeg">
				</div>
				<div class="col-lg-4">
				    <img class="img-fluid" src="g19.jpeg">
				</div>

			</div>
			<div class="row">
				<div class="col-lg-6">
					<img src="">
				</div>
				<div class="col-lg-6">
				    <img src="">
				</div>
				<div class="col-lg-6">
				    <img src="">
				</div>

			</div>

			<div class="text-center">
				<button class="bg-danger text-white p-2 fs-3"><a class="text-white" style="text-decoration: none;" href="gallary.html">See More Photos</a></button>
			</div>
		</section>
	</main>

	<footer>
		<div style="background-color: hotpink;" class="footer-part mt-5">
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-lg-6">
						<h2>Emergency Contact</h2>

						<div class="footer-contuct">
							

							<p> <a class="contact text-white" href="tel:+8801762822330">Fire service: +8805526-72222 </a></p>
							<p> <a class="contact text-white" href="fax: 05526-73300">Police: 05526-72025</a></p>
							<p> <a class="contact text-white" href="#"><i class="fas fa-address-card"></i> Address: Station Road, Saidpur</a></p>
							<p> <a class="contact text-white" href="#">Emergency Service: 999</a></p>

						</div>
					</div>
					<div class="col-lg-6 p-5">
						<iframe width="100%" height="300" frameborder="0" allowfullscreen="" style="border:0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d20333.37969201895!2d88.91986364135533!3d25.72204365605453!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x15261313ab3f22f4!2sBangladesh+Army+University+of+Science+%26+Technology+(BAUST)!5e0!3m2!1sen!2sus!4v1475474713372"></iframe>
					</div>
				</div>



			</div>
		</div>
	</footer>




	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>