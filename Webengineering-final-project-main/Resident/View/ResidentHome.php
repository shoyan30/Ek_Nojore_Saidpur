<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Resident HomePage</title>
	<script src="https://kit.fontawesome.com/af27af1048.js" crossorigin="anonymous"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<style>
	body {
		font-family: 'Poppins', sans-serif;
		margin: 0px;
		padding: 0px;
		background-color: #FCF3CF;
		
	}
	.nav1{
		background-color: #E74C3C ;
	}

	.div2 {
		background-color: lightyellow;

		width: 700px;
		padding-left: 5px;
		border: 30px solid green;
		margin: auto;

	}

	.btn-bg {
		background-color: #F39C12;
		border-radius: 25px;
		border-style: none;

	}

	.btn-bg:hover {
		border: 1px solid;

		box-shadow: 2px 2px 2px 2px inset;
	}

	.nav2:hover {
		background-color: darksalmon;
		border-radius: 10px;
		cursor: pointer;

	}

	.body-sec {
		padding-top: 150px;
		background-color: #F5CBA7 ;
	}

	.problems-pic {
		height: 200px;
		width: 500px;
		border-radius: 50%;
	}
</style>

<body>

	<!-- <div class="container div1">
		<div class="div2">
			<ul>
				<li><a href="profilepage.php">
						<h2>Profile Page</h2>
					</a>
				</li>
				<br>
				<li><a href="RaiseIssue.php">
						<h2>Raise Issue</h2>
					</a></li><br>
				<li><a href="showallresident.php">
						<h2>Show all Resident<h2>
					</a></li><br>

				<br>
				<a href="../Control/Logout.php">Logout</a>
			</ul>
		</div>
	</div> -->

	<div class="nav1 fixed-top p-2">
		<section class="container">
			<nav>
				<ul class="nav justify-content-between  text-white">
					<div class="d-flex">
						<li class="nav-item">
							<a class="nav2 nav-link active text-white fs-5" href="../view/Road.php">Road Surface</a>
						</li>
						<div class="dropdown">
							<button class="nav2 btn text-white fs-5  dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
								Mosquito
							</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
								<li><a class="nav-link active" href="../view/MosquitoInfected.php">Mosquito affected</a></li>
								<li><a class="nav-link active" href="../view/MosquitoLarvae.php">Mosquito Larva</a></li>

							</ul>
						</div>
						<li class="nav-item">
							<a class="nav2 nav-link text-white fs-5 active" href="../view/Streetlight.php">Street Light</a>
						</li>
						<li class="nav-item">
							<a class="nav2 nav-link active text-white fs-5" href="../view/IllegalStructure.php">Illigalstructure</a>
						</li>
						<li class="nav-item">
							<a class="nav2 nav-link active text-white fs-5" href="../view/Waterlog.php">WaterLog</a>
						</li>
					</div>
					<div class="d-flex justify-content-center align-item-center">
						<div>
							<li class="nav-item me-5">
								<button class="btn-bg fs-6"><a class="nav-link active text-white" href="profilepage.php">Update Profile</a></button>
							</li>
						</div>
						<div>
							<li class="nav-item">
								<button class=" btn-bg fs-6"><a class="nav-link active text-white" href="../Control/Logout.php">Log Out</a></button>
							</li>
						</div>
					</div>
				</ul>
			</nav>
		</section>
	</div>

	<section class="body-sec container">
		<div class="row">
			<div class="col-lg-6">
				<img class="problems-pic img-fluid" src="road-pic.jpeg">
			</div>

			<div class="col-lg-6 d-flex align-items-center justify-content-center">
				<div>
					<h2 style="font-weight: bolder; text-decoration:underline">Road Surfess:</h2>
					<p class="">A road in poor condition will increase vehicle cost, increase travel time and even damage the loads carried. It will also influence the accident rate and the comfort of road users as well as the environment.</p>
				</div>

			</div>

		</div>

		<div class="row gy-5 mt-5">
			<div class="col-lg-6 d-flex align-items-center justify-content-center">
				<div>
					<h2 style="font-weight: bolder; text-decoration:underline">Mosquito:</h2>
					<p>Diseases that are spread to people by mosquitoes include Zika virus, West Nile virus, Chikungunya virus, dengue, and malaria. Employers should protect workers and workers should protect themselves from diseases spread by mosquitoes.</p>
				</div>

			</div>
			<div class="col-lg-6">

				<img class="problems-pic" src="mosquito-pic.png">
			</div>
		</div>


		<div class="row mt-5">
			<div class="col-lg-6">
				<img class="problems-pic img-fluid" src="streetlight.jpg">
			</div>

			<div class="col-lg-6 d-flex align-items-center justify-content-center">
				<div>
					<h2 style="font-weight: bolder; text-decoration:underline">Street Light:</h2>
					<p class="">A road in poor condition will increase vehicle cost, increase travel time and even damage the loads carried. It will also influence the accident rate and the comfort of road users as well as the environment.</p>
				</div>
			</div>

		</div>

		<div class="row mt-5">
			<div class="col-lg-6 d-flex align-items-center justify-content-center">
				<div>
					<h2 style="font-weight: bolder; text-decoration:underline">Illigal Structure:</h2>
					<p>Diseases that are spread to people by mosquitoes include Zika virus, West Nile virus, Chikungunya virus, dengue, and malaria. Employers should protect workers and workers should protect themselves from diseases spread by mosquitoes.</p>
				</div>

			</div>
			<div class="col-lg-6">

				<img class="problems-pic" src="iiligal structure-pic.jpg">
			</div>
		</div>


		<div class="pt-5">
			<h2 style="font-weight: bolder; text-decoration:underline">WaterLog</h2>
			<div class="text-center">
				<img class="problems-pic" src="waterlog.jpg">
			</div>

			<div class=" text-center p-5">
				<p>Waterlogging is excess water in the root zone accompanied by anaerobic conditions. The excess water inhibits gaseous exchange with the atmosphere, and biological activity uses up available oxygen in the soil air and water – also called anaerobiosis, anoxia or oxygen deficiency.</p>
			</div>

			<div class="d-flex align-items-center justify-content-center ">
				<div>
				<h3>These conditions affect agricultural plants in several ways:</h3>
				
				<ul>
					<li>nutrient deficiencies or toxicities</li>
					<li>root death</li>
					<li>reduced growth or death of the plant.</li>
				</ul>
				
				</div>
				
				
			</div>
			


		</div>
	</section>

	<footer>

	</footer>
















	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>