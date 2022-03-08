<?php
	if (!isset($_POST['email']) or !isset($_POST['password']))
	{
		header('Location: ./login.php');
	}
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CDN css -->

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">

		<!-- Local css -->
		<link rel="stylesheet" href="style.css">

		<title>Dowling</title>
	</head>
	<body onload="setup()">
		<nav>

			<div class="">

				<ul>
					<li><a href="weeklyReport.php">Dowling</a></li>
					<li style="float:right"><a class="logout" href="login.php">Logout</a></li>
					<li style="float:right"><a class="inactive">Hello, <span id="user_name">User</span></a></li>
					<li style="float:right"><a class="active" href="index.php">Bike Rentals and Returns</a></li>
				</ul>

			</div>

		</nav>

		<!-- ===============================================-->
		<!--    Main Content-->
		<!-- ===============================================-->
		<main>

			<!-- ============================================-->
			<!-- <section> begin ============================-->
			<section class="text-center pb-0" style="padding-bottom: 200px !important">

				<div class="pt-5 p-3 " align="center">
					
					<span id="docks" style="display:inline;">

						<div class="row pb-5" align="center">

							<!--Dock 1 ============================-->
							<div class="col-2 p-3 dock">
								<h1>Dock 1</h1>
								<p>Bikes Available:</p>
								<h2>3 / 6</h2>
								<div class="pt-3 row">
									<button class="btn btn-dark checkOut" type="button" onclick="checkOut(0)">Check Out</button>
									<button class="btn btn-dark" type="button" onclick="checkIn(0)">Check In</button>
								</div>
							</div>
							<!-- /Dock 1 ============================-->

							<!--Dock 2 ============================-->
							<div class="col-2 p-3 dock">
								<h1>Dock 2</h1>
								<p>Bikes Available:</p>
								<h2>6 / 6</h2>
								<div class="pt-3 row">
									<button class="btn btn-dark checkOut" type="button" onclick="checkOut(1)">Check Out</button>
									<button class="btn btn-dark" type="button" onclick="checkIn(1)">Check In</button>
								</div>
							</div>
							<!-- /Dock 2 ============================-->

							<!--Dock 3 ============================-->
							<div class="col-2 p-3 dock">
								<h1>Dock 3</h1>
								<p>Bikes Available:</p>
								<h2>0 / 6</h2>
								<div class="pt-3 row">
									<button class="btn btn-dark checkOut" type="button" onclick="checkOut(2)">Check Out</button>
									<button class="btn btn-dark" type="button" onclick="checkIn(2)">Check In</button>
								</div>
							</div>
							<!-- /Dock 3 ============================-->

							<!--Dock 4 ============================-->
							<div class="col-2 p-3 dock">
								<h1>Dock 4</h1>
								<p>Bikes Available:</p>
								<h2>3 / 6</h2>
								<div class=" pt-3 row">
									<button class="btn btn-dark checkOut" type="button" onclick="checkOut(3)">Check Out</button>
									<button class="btn btn-dark" type="button" onclick="checkIn(3)">Check In</button>
								</div>
							</div>
							<!-- /Dock 4 ============================-->

							<!--Dock 5 ============================-->
							<div class="col-2 p-3 dock">
								<h1>Dock 5</h1>
								<p>Bikes Available:</p>
								<h2>3 / 6</h2>
								<div class="pt-3 row">
									<button class="btn btn-dark checkOut" type="button" onclick="checkOut(4)">Check Out</button>
									<button class="btn btn-dark" type="button" onclick="checkIn(4)">Check In</button>
								</div>
							</div>
							<!-- /Dock 5 ============================-->
						</div >
						<div class="row pb-5" align="center">

							<!-- Dock 6 ============================-->
							<div class="col-2 p-3 dock">
								<h1>Dock 6</h1>
								<p>Bikes Available:</p>
								<h2>3 / 6</h2>
								<div class="pt-3 row">
									<button class="btn btn-dark checkOut" type="button" onclick="checkOut(5)">Check Out</button>
									<button class="btn btn-dark" type="button" onclick="checkIn(5)">Check In</button>
								</div>
							</div>
							<!-- /Dock 6 ============================-->

							<!-- Dock 7 ============================-->
							<div class="col-2 p-3 dock">
								<h1>Dock 7</h1>
								<p>Bikes Available:</p>
								<h2>3 / 6</h2>
								<div class="pt-3 row">
									<button class="btn btn-dark checkOut" type="button" onclick="checkOut(6)">Check Out</button>
									<button class="btn btn-dark" type="button" onclick="checkIn(6)">Check In</button>
								</div>
							</div>
							<!-- /Dock 7 ============================-->

							<!-- Dock 8 ============================-->
							<div class="col-2 p-3 dock">
								<h1>Dock 8</h1>
								<p>Bikes Available:</p>
								<h2>3 / 6</h2>
								<div class="pt-3 row">
									<button class="btn btn-dark checkOut" type="button" onclick="checkOut(7)">Check Out</button>
									<button class="btn btn-dark" type="button" onclick="checkIn(7)">Check In</button>
								</div>
							</div>
							<!-- /Dock 8 ============================-->

							<!-- Dock 9 ============================-->
							<div class="col-2 p-3 dock">
								<h1>Dock 9</h1>
								<p>Bikes Available:</p>
								<h2>3 / 6</h2>
								<div class=" pt-3 row">
									<button class="btn btn-dark checkOut" type="button" onclick="checkOut(8)">Check Out</button>
									<button class="btn btn-dark" type="button" onclick="checkIn(8)">Check In</button>
								</div>
							</div>
							<!-- Dock 9 ============================-->

							<!-- Dock 10 ============================-->
							<div class="col-2 p-3 dock">
								<h1>Dock 10</h1>
								<p>Bikes Available:</p>
								<h2>3 / 6</h2>
								<div class="pt-3 row">
									<button class="btn btn-dark checkOut" type="button" onclick="checkOut(9)">Check Out</button>
									<button class="btn btn-dark" type="button" onclick="checkIn(9)">Check In</button>
								</div>
							</div>
							<!-- /Dock 10 ============================-->	
						</div>
					</span>

					<!-- .modal -->
					<div class="modal fade" id="damageModal">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">
										Bike Damages Check In
									</h4>
								</div>
								<div class="modal-body">
									Is the bike damaged?
								</div>
								<div class="modal-footer">
									<div class="row" align="center" style="margin: 0 auto;">
									<div class="col-6">
									<a onclick="damaged(false);"><button type="button" class="btn btn-success">
										No
									</button></a>
									</div>
									<div class="col-6">
									<a onclick="damaged(true);"><button type="button" class="btn btn-success">
										Yes
									</button></a>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- <section> close ============================-->
			<!-- ============================================-->
		</main>
		<!-- ===============================================-->
		<!--    End of Main Content-->
		<!-- ===============================================-->





		<footer><a target="_blank" href="undefined/icons/set/electric-bike">Electric Bike icon</a> icon by <a target="_blank" href="">Icons8</a></footer>
	</body>
</html>