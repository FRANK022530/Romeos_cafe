	<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		// redirect to login page if user is not logged in
		header('Location: ../index.php');
		exit;
	}

	$username = $_SESSION['username'];
	$name = $_SESSION['name'];


	?>
	<?php
	require_once "config.php";
	?>
	<!DOCTYPE html>
	<html>

	<head>
		<title>SHIFT</title>

		<head>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css">
			<link rel="icon" href="images/newlogo.jpg" type="jpg">
		</head>

	</head>
	<style type="text/css">
		* {
			padding: 0;
			margin: 0;
			font-family: sans-serif;



		}

		body {
			background-color: #DEDCE0;
			background-attachment: fixed;
		}

		.main {
			display: flex;
			flex-direction: column;
		}

		.box1 {

			background-color: #37251b;
			height: 70px;

			text-align: center;
		}

		.box1 h1 {
			margin-top: 20px;
			color: white;
		}

		.box2 {
			display: flex;
			justify-content: flex-end;
			flex: 1;

			margin-bottom: 100px;


		}

		.box3 {

			background-color: #37251b;


			width: 100%;
			height: 90px;
			margin-bottom: 100px;

		}


		ul {
			list-style: none;
			height: 100vh;
			background-color: black;
			width: 150px;

		}

		ul li {
			padding: 5px 20px 5px 20px;
			line-height: 65px;



			border-bottom: 1px solid grey;
			background-color: black;


		}

		ul li:hover {
			width: 130px;
			text-align: center;
			background-color: #181818;

		}


		ul .logo {

			padding: 0px;
			width: 150px;
			height: 150px;
		}

		ul .logo img {
			width: 150px;
			height: 150px;
			background-color: none;

		}

		ul li a i {
			color: white;
			font-size: 20px;
		}

		ul li a {
			text-decoration: none;
			color: white;


		}

		.main #menu {
			position: fixed;
			margin-left: -200px;


		}


		.main #menu.active {

			margin-left: 0px;
			transition: .5s ease;


		}




		#burger-menu i {
			display: block;
			font-size: 30px;
			cursor: pointer;
			position: absolute;
			top: 15px;
			left: 10px;
			z-index: 1;
			color: white;

		}

		.container1 {
			margin-left: auto;
			margin-right: auto;



			height: 400px;
			width: 400px;



			border: none;



			color: #37251b;

			display: inline-block;

		}

		.container1 form {
			margin-right: auto;
			margin-left: auto;

			margin-top: 40px;
			width: 400px;

		}

		.time {
			display: flex;
			justify-content: space-around;

		}

		.container1 form input {
			height: 27px;
			width: 150px;
			font-weight: bold;
			border: none;
			background-color: rgba(0, 0, 0, 0);
			border-bottom: 2px solid #37251b;
			color: black;

			margin-bottom: 10px;


		}

		.container1 form .name {
			width: 200px;
			border-bottom: none;
			font-size: 20px;

			margin-left: 5%;

		}

		.container1 form .date {
			width: 200px;

			font-size: 13px;

			margin-left: 5%;



			border-bottom: none;
		}

		.container1 form .submit {
			background-color: #37251b;
			color: white;
			text-align: center;
			border: none;
			border-radius: 5px;
			height: 30px;
			width: 100px;

			margin-left: 5%;




		}

		.container2 {
			display: inline-block;
			width: 250px;



		}

		.container2 img {

			width: 250px;








		}

		table {
			margin-left: auto;
			margin-right: auto;
			margin-top: 70px;

			border-top: 5px solid #37251b;
			border-bottom: 5px solid #37251b;

			border-radius: 10px;
			background-color: white;
		}


		.info {

			display: flex;
			justify-content: flex-end;
			margin-top: -30px;


			color: white;

		}

		.info a {


			color: white;
			margin-left: 10px;
			margin-right: 10px;

		}

		label {
			font-size: 10px;
		}
	</style>

	<body>
		<div id="burger-menu">
			<i class="fa fa-bars"></i>
		</div>
		<div class="main">



			<div id="menu">
				<ul>
					<li class="logo">
						<img src="images/logo.jpg">
					</li>
					<li>
						<a href="home.php"><i class="fa fa-home"></i>&nbsp;Home</a>

					</li>
					<li>
						<a href="admin_schedule.php"><i class="fa fa-calendar"></i>&nbsp; Schedule</a>
					</li>

					<li>
						<a href=""><i class="fa fa-check">&nbsp;</i>Attendance</a>
					</li>
					<li>
						<a href="payroll.php"><i class="fa fa-money">&nbsp;</i> Payroll</a>
					</li>

					<li>
						<a href="employee.php"><i class="fa fa-user">&nbsp;</i>Employee</a>
					</li>

					<li>
						<a href="shift.php"><i class="fa fa-calendar"></i>&nbsp;</i>Shifts</a>
					</li>
				</ul>
			</div>
			<div class="box1">
				<h1>ROMEOS CAFE</h1>

				<div class="info">


					<p><?php echo $_SESSION['name'];  ?></p>
					<p><a href="logout.php"><i class="fa fa-power-off"></i></a></p>
				</div>

			</div>
		</div>
		<div class="box2">

			<table>
				<tr>
					<td>
						<div class="container1">
							<form action="process.php" method="POST">


								<input class="name" type="text" name="name" value="<?php echo $_GET['name']; ?>" disabled>
								<br>

								<div class="time">
									<div class="First">
										<label>First Time-In:</label><br>
										<input type="text" name="ftimein" value="<?php echo $_GET['ftimein']; ?>" placeholder="Enter Time:"><br>
										<label>First Time-Out:</label><br>
										<input type="text" name="ftimeout" value="<?php echo $_GET['ftimeout']; ?>" placeholder="Enter Time:"><br>
										<label>Date Time-In:</label><br>
										<input type="text" name="datein" value="<?php echo $_GET['date']; ?>" placeholder="Enter Date In:"><br>
										<br>
										<label>Overtime:</label><br>
										<input type="text" name="ot" value="<?php echo $_GET['othours']; ?>" placeholder="Enter OT:"><br>
										<br>
									</div>
									<div class="Second">
										<label>Second Time-In:</label><br>
										<input type="text" name="stimein" value="<?php echo $_GET['stimein']; ?>" placeholder="Enter Time:"><br>
										<label>Second Time-Out:</label><br>
										<input type="text" name="stimeout" value="<?php echo $_GET['stimeout']; ?>" placeholder="Enter Time:"><br>
										<label>Date Time-Out:</label><br>
										<input type="text" name="dateout" value="<?php echo $_GET['dateout']; ?>" placeholder="Enter Date Out:"><br>
										<br>
										<label>Total hours:</label><br>
										<input type="text" name="totalhours" value="<?php echo $_GET['totalhours']; ?>" placeholder="Enter Total Hours:"><br>
										<br>
									</div>
								</div>
								<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
								<input type="submit" class="submit" name="updateattendance" value="UPDATE">

							</form>
						</div>



					</td>
					<td>

						<div class="container2">
							<img src="images/time.png">
						</div>

					</td>
				</tr>
			</table>




		</div>



		<div class="box3"></div>


	</body>
	<script type="text/javascript">
		var sidebarBtn = document.getElementById('burger-menu');
		var menu = document.getElementById('menu');

		sidebarBtn.addEventListener('click', function() {
			menu.classList.toggle('active');
			sidebarBtn.querySelector('i').classList.toggle('fa-bars');
			sidebarBtn.querySelector('i').classList.toggle('fa-times');
		});
	</script>

	</html>