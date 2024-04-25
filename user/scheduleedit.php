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
		<title>ROMEOS CAFE</title>

		<head>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css">
		</head>

	</head>
	<style type="text/css">
		* {
			padding: 0;
			margin: 0;
			font-family: sans-serif;



		}

		body {
			background-image: url(images/background.png);
			background-size: cover;
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
			flex-direction: column;
			flex: 1;

			margin-bottom: 100px;
		}

		.box3 {

			background-color: #37251b;


			width: 100%;
			height: 90px;


		}

		ul {
			list-style: none;

			width: 150px;
			height: 100vh;
			background-color: black;

		}

		ul li {
			padding: 5px 20px 5px 20px;
			line-height: 80px;



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

		.first {

			text-align: center;

			font-size: 14px;

			display: inline-block;

			border-bottom: 1px solid black;



		}

		.firsts {

			text-align: center;

			display: inline-block;




			font-size: 14px;
			border-bottom: 1px solid black;

		}

		.firstss {

			text-align: center;

			display: inline-block;

			font-size: 14px;
			border-bottom: 1px solid black;

		}

		.firstsss {

			text-align: center;

			display: inline-block;

			font-size: 14px;
			border-bottom: 1px solid black;
		}

		.firstssss {

			text-align: center;

			display: inline-block;

			font-size: 14px;
			border-bottom: 1px solid black;

		}

		.firstsssss {

			text-align: center;

			display: inline-block;

			font-size: 14px;
			border-bottom: 1px solid black;

		}

		.firstssssss {

			text-align: center;

			display: inline-block;

			font-size: 14px;
			border-bottom: 1px solid black;

		}

		th {
			width: 100px;
			line-height: 30px;
			background-color: #37251b;
			color: white;


		}

		td {
			width: 100px;
			line-height: 20px;
			font-size: 12px;

		}

		tr td input {

			width: 20px;
			height: 20px;
			margin-top: 15px;
			background-color: #37251b;

		}


		.second {
			border-bottom: 1px solid black;
			word-spacing: 10px;



			display: block;
			margin-left: 17%;




			width: 500px;

			border-radius: 10px;
			backdrop-filter: blur(30px);
			box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.2);
			border-radius: 10px;




		}

		.second th {
			background-color: #37251b;
			color: white;
			height: 20px;
		}

		.second td {

			height: 20px;
			width: 250px;
			text-align: center;
			font-size: 12px;

		}

		.daysbutt {


			font-size: 20px;
			color: #37251b;
			margin: 20px;
		}

		.daysbuttt {


			text-align: center;
			margin-top: 10px;
		}

		.form {
			margin-top: 10px;
			border-radius: 10px;
			backdrop-filter: blur(20px);
			box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.2);
			border-radius: 10px;
			width: 835px;
			display: flex;
			margin-left: auto;
			margin-right: auto;

		}

		.buttons {
			position: relative;
			top: 30px;
			right: 0px;

			display: flex;
			justify-content: right;
			width: 83%;
		}

		.buttons .save,
		.edit {
			color: white;
			width: 120px;
			height: 35px;
			background-color: #37251b;
			border-radius: 5px;
			margin: 5px;
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
	</style>

	<body>
		<div class="week">
			<h1>


		</div>
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
						<a href="home.php"><i class="fa fa-home"></i> HOME</a>

					</li>
					<li>
						<a href="schedule.php"><i class="fa fa-calendar"></i> SCHEDULE</a>


					</li>
					<li>
						<a href=""><i class="fa fa-money"></i> PAYROLL</a>
					</li>
					<li>
						<a href=""></i>ATTENDANCE</a>
					</li>
					<li>
						<a href="">SALARY</a>
					</li>
					<li>
						<a href="">EMPLOYEE</a>
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



			<?php
			$week = date("W");
			$year = (isset($_GET['year'])) ? $_GET['year'] : date("Y");
			$week = (isset($_GET['week'])) ? $_GET['week'] : Date('W');
			if ($week > 53) {
				$year += 1;
				$week = 1;
			}
			?>
			<div class="daysbuttt">
				<label>Previous week</label>
				<a href="<?php echo $_SERVER['PHP_SELF'] . '?week=' . ($week - 1) . '&year=' . $year; ?>" class="daysbutt"><i class="fa fa-backward"></i></a> <!--Previous week-->

				<a href="<?php echo $_SERVER['PHP_SELF'] . '?week=' . ($week + 1) . '&year=' . $year; ?>" class="daysbutt"><i class="fa fa-forward"></i></a> <!--Next week-->
				<label>Next week</label>

			</div>



			<form action="process.php" method="POST">
				<div class="form">
					<table class="firs">
						<tr>
							<th> Shift </th>

						</tr>


						<?php

						$sql = "SELECT * FROM shift";
						$result = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_array($result)) :
						?>

							<tr>

								<td> <?php echo $row['shifts']; ?></td>

							</tr>

						<?php endwhile; ?>

					</table>





					<table class="first">
						<tr>
							<?php
							for ($day = 1; $day <= 1; $day++) {
								$d = strtotime($year . "W" . $week . $day);
								echo "<th>" . date('l', $d) . "<br>";
								echo date('M d, Y', $d) . "</th>";

								if ($day === 1) {
									$mondate = date('M d, Y', $d);
								}
							}
							?>
						</tr>

						<?php
						$sql = "SELECT * FROM shift";
						$result = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_array($result)) :
						?>
							<tr>

								<td><input type='checkbox' name='mon[]' value="<?php echo $mondate . ' - ' . $row['shifts']; ?>"></td>
							</tr>
						<?php endwhile; ?>
					</table>



					<table class="firsts">
						<tr>

							<?php
							for ($day = 2; $day <= 2; $day++) {
								$d = strtotime($year . "W" . $week . $day);
								echo "<th>" . date('l', $d) . "<br>";
								echo date('M d, Y', $d) . "</th>";
								$tuedate = date('M d, Y', $d);
							}
							?>
						</tr>

						<?php
						$sql = "SELECT * FROM shift";
						$result = mysqli_query($conn, $sql);

						while ($row = mysqli_fetch_array($result)) :
						?>
							<tr>
								<td><input type='checkbox' name='tue[]' value="<?php echo $tuedate . ' - ' . $row['shifts']; ?>"></td>
							</tr>
						<?php endwhile; ?>

					</table>

					<table class="firstss">
						<tr>
							<?php
							for ($day = 3; $day <= 3; $day++) {
								$d = strtotime($year . "W" . $week . $day);
								echo "<th>" . date('l', $d) . "<br>" . date('M d, Y', $d) . "</th>";
								$weddate = date('M d, Y', $d);
							}
							?>
						</tr>
						<?php
						$sql = "SELECT * FROM shift";
						$result = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_array($result)) :
						?>
							<tr>
								<td><input type="checkbox" name="wed[]" value="<?php echo $weddate . ' - ' . $row['shifts']; ?>"></td>
							</tr>
						<?php endwhile; ?>
					</table>

					<table class="firstsss">
						<tr>

							<?php
							for ($day = 4; $day <= 4; $day++) {
								$d = strtotime($year . "W" . $week . $day);
								echo "<th>" . date('l', $d) . "<br>";
								echo date('M d, Y', $d) . "</th>";
								$thurdate = date('M d, Y', $d);
							}
							?>
						</tr>
						<?php

						$sql = "SELECT * FROM shift";
						$result = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_array($result)) :
						?>

							<tr>
								<td><input type='checkbox' name='thur[]' value="<?php echo $thurdate; ?> - <?php echo $row['shifts']; ?>"></td>
							</tr>
						<?php endwhile; ?>

					</table>

					<table class="firstssss">
						<tr>
							<?php
							for ($day = 5; $day <= 5; $day++) {
								$d = strtotime($year . "W" . $week . $day);
								echo "<th>" . date('l', $d) . "<br>";
								echo date('M d, Y', $d) . "</th>";
								$fridate = date('M d, Y', $d);
							}
							?>
						</tr>

						<?php
						$sql = "SELECT * FROM shift";
						$result = mysqli_query($conn, $sql);

						while ($row = mysqli_fetch_array($result)) { ?>
							<tr>
								<td><input type="checkbox" name="fri[]" value="<?php echo $fridate . ' - ' . $row['shifts']; ?>"></td>
							</tr>
						<?php } ?>

					</table>

					<table class="firstsssss">
						<tr>

							<?php
							for ($day = 6; $day <= 6; $day++) {
								$d = strtotime($year . "W" . $week . $day);
								echo "<th>" . date('l', $d) . "<br>";
								echo date('M d, Y', $d) . "</th>";
								$satdate = date('M d, Y', $d);
							}
							?>
						</tr>
						<?php

						$sql = "SELECT * FROM shift";
						$result = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_array($result)) :
						?>

							<tr>
								<td><input type='checkbox' name='sat[]' value="<?php echo $satdate . ' - ' . $row['shifts']; ?>"></td>
							</tr>
						<?php endwhile; ?>

					</table>
					<table class="firstssssss">
						<tr>

							<?php
							for ($day = 7; $day <= 7; $day++) {
								$d = strtotime($year . "W" . $week . $day);
								echo "<th>" . date('l', $d) . "<br>";
								echo date('M d, Y', $d) . "</th>";
								$sundate = date('M d, Y', $d);
							}
							?>
						</tr>
						<?php

						$sql = "SELECT * FROM shift";
						$result = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_array($result)) :
						?>

							<tr>
								<td><input type='checkbox' name='sun[]' value="<?php echo $sundate . ' - ' . $row['shifts']; ?>"></td>
							</tr>
						<?php endwhile; ?>


					</table>
				</div>
				<div class="buttons">

					<input type="submit" name="save" value="SAVE" class="save">
					<input type="submit" name="edit" value="EDIT" class="edit">
				</div>
			</form>





			<table class="second">
				<tr>
					<th colspan=6>TIME PER SHIFT</th>
				</tr>
				<?php
				$query = "SELECT * FROM shift";

				$query_run = mysqli_query($conn, $query);
				while ($row = mysqli_fetch_array($query_run)) {
				?>
					<tr>

						<td><?php echo $row['shifts'];  ?></td>
						<td><?php echo $row['time_in'];  ?> to <?php echo $row['time_out'];  ?></td>


					</tr>
				<?php
				}

				?>

			</table>




		</div>





		<div class="box3">

		</div>




	</body>
	<script type="text/javascript">




	</script>
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