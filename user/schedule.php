<?php
require_once "config.php";
?>
<?php
session_start();

if (!isset($_SESSION['username'])) {
	// redirect to login page if the user is not logged in
	header('Location: ../index.php');
	exit;
}
$username = $_SESSION['username'];
$name = $_SESSION['name'];
?>


<!DOCTYPE html>
<html>

<head>
	<title>ROMEO'S CAFE</title>

	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
		flex-direction: column;
		flex: 1;

		margin-bottom: 100px;
		align-items: center;
	}

	.box3 {

		background-color: #37251b;


		width: 100%;
		height: 90px;




	}

	ul {
		list-style: none;
		height: 100vh;
		background-color: black;
		width: 150px;

	}

	ul li {
		padding: 5px 20px 5px 20px;
		line-height: 52px;
		background-color: black;
		border-bottom: 1px solid grey;


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

	form th {

		height: 65px;
		line-height: 15px;

		color: #37251b;
		font-size: 12px;
		display: flex;
		flex-direction: column;

		width: 100%;
		letter-spacing: 1px;






	}

	form td {
		height: 30px;

		font-size: 14px;

	}

	form td input {
		width: 14px;
	}



	.second {

		word-spacing: 10px;
		background-color: white;
		padding: 20px;
		min-height: 270px;
		margin: 10px;



		flex: 1;

		border-radius: 10px;
		min-width: 350px;

		display: flex;
		justify-content: center;


	}

	.second tr {
		display: flex;
	}

	.second th {

		color: #37251b;
		font-size: 20px;
		height: 40px;
		text-align: left;


	}

	.second td {

		height: 30px;

		min-width: 120px;
		text-align: left;
		font-size: 14px;



	}

	.buttones {

		width: 95%;
	}

	.daysbutt {


		font-size: 20px;
		color: #37251b;
		margin: 20px;
	}

	.daysbuttt {


		text-align: right;
		margin-top: 10px;



		width: 65%;

	}

	form {
		width: 95%;
		justify-content: center;
		align-items: flex-start;
		display: flex;
		flex-wrap: wrap;

	}

	.form {


		background-color: white;
		display: flex;
		flex-direction: column;
		text-align: center;

		padding: 10px;
		border-radius: 10px;

		margin: 10px;
		margin-bottom: 10px;

		flex: 2;
		min-width: 65%;



	}

	.tables {
		display: flex;
		margin-bottom: 30px;
	}

	.tables table {

		width: 100%;
	}




	.buttons {


		display: flex;
		justify-content: right;
		margin: 20px;

	}

	.buttons .save {
		color: white;
		width: 150px;
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


	.welcome {
		margin-top: 30px;
		margin-left: auto;
		margin-right: auto;
		width: 95%;
		height: 250px;
		background-color: white;
		border-radius: 10px;


		display: flex;
		align-items: center;
	}

	.barista {
		margin-left: 10px;
		width: 20em;

	}

	.container {
		width: 95%;
		background-color: white;
		margin-left: auto;
		margin-right: auto;
		border-radius: 10px;
		margin-top: 10px;
	}



	.welcome h1 {

		margin-left: 20px;
		margin-right: 40px;


	}

	span {
		font-size: 15px;
		font-weight: 100;
	}




	@media screen and (min-width: 320px) and (max-width: 767px) {

		.welcome {
			height: 200px;
			margin-top: 20px;
		}


		.welcome h1 {


			font-size: 20px;
			margin-top: 20px;


		}

		.welcome h1 span {
			font-size: 10px;

		}

		.barista {
			width: 33%;
		}

		.modal .modal-content table td:nth-child(2) {
			display: none;
		}

		.form {

			overflow: auto;

			max-width: 95%;

		}

		/* Customize scrollbar width and track */
		::-webkit-scrollbar {
			width: 1px;
			height: 5px;
		}

		/* Customize scrollbar track */
		::-webkit-scrollbar-track {
			background: #f1f1f1;
		}

		/* Customize scrollbar thumb */
		::-webkit-scrollbar-thumb {
			background: #ccc;
			border-radius: 3px;
			/* Rounded corners for the thumb */
		}

		/* Change thumb color on hover */
		::-webkit-scrollbar-thumb:hover {
			background: #37251b;
		}

	}

	.radio {
		width: 15px;
		/* Set the desired width */
		height: 15px;

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
					<img src="images/newlogo.jpg">
				</li>
				<li>
					<a href="home.php"><i class="fa fa-home"></i> Home</a>
				</li>
				<li>
					<a href="schedule.php"><i class="fa fa-calendar"></i> Schedule</a>
				</li>
				<li>
					<a href="attendance.php"><i class="fa fa-check"></i> Attendance</a>
				</li>
				<li>
					<a href="salary.php"><i class="fa-solid fa-money-bill"></i> Payslip</a>
				</li>
				<li>
					<a href="profile.php"><i class="fa-solid fa-user"></i> Profile</a>
				</li>
			</ul>
		</div>
		<div class="box1">
			<h1>ROMEO'S CAFE</h1>

			<div class="info">


				<p><?php echo $_SESSION['name'];  ?></p>
				<p><a href="logout.php"><i class="fa fa-power-off"></i></a></p>
			</div>

		</div>
	</div>
	<div class="box2">

		<div class="welcome">
			<img class="barista" src="images/schedule.png">
			<h1>Employee Preferred Schedule <br><span>Digital tool that facilitates the efficient planning and organization of workforce schedules within a business .<br><br>

			</h1>


		</div>

		<?php
		$week = date("W");
		$year = (isset($_GET['year'])) ? $_GET['year'] : date("Y");
		$week = (isset($_GET['week'])) ? $_GET['week'] : Date('W');
		if ($week > 53) {
			$year += 1;
			$week = 1;
		}
		?>
		<div class="buttones">
			<div class="daysbuttt">
				<label>Previous week</label>
				<a href="<?php echo $_SERVER['PHP_SELF'] . '?week=' . ($week - 1) . '&year=' . $year; ?>" class="daysbutt"><i class="fa fa-backward"></i></a> <!--Previous week-->

				<a href="<?php echo $_SERVER['PHP_SELF'] . '?week=' . ($week + 1) . '&year=' . $year; ?>" class="daysbutt"><i class="fa fa-forward"></i></a> <!--Next week-->
				<label>Next week</label>

			</div>
		</div>


		<form action="process.php" method="POST">
			<div class="form">
				<div class="tables">
					<table class="firs">
						<tr>
							<th> Shift </th>

						</tr>


						<?php

						$sql = "SELECT * FROM shift where shift_status = 'Approve'";
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
								echo "<th>" . date('l', $d) . "<br>" . date('m/d/Y', $d) . "</th>";
								if ($day === 1) {
									$mondate = date('F d, Y', $d);
								}
							}
							?>
						</tr>
						<?php
						$sql = "SELECT * FROM shift where shift_status = 'Approve'";
						$result = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_array($result)) {
							$sql_selected = "SELECT * FROM emp_selected_schedule WHERE name='" . $_SESSION['name'] . "' AND schedule = '" . $mondate . "'";
							$result_selected = mysqli_query($conn, $sql_selected);
							$row_selected = mysqli_fetch_assoc($result_selected);
							$checked = mysqli_num_rows($result_selected) > 0 ? "checked" : "";
						?>
							<tr>
								<td>
									<input type="radio" class="radio" name="mon" value="<?php echo $mondate . ' - ' . $row['shifts']; ?>" <?php echo $checked; ?>>
								</td>
							</tr>
						<?php
						}
						?>
					</table>


					<table class="firsts">
						<tr>
							<?php
							for ($day = 2; $day <= 2; $day++) {
								$d = strtotime($year . "W" . $week . $day);
								echo "<th>" . date('l', $d) . "<br>" . date('m/d/Y', $d) . "</th>";
								if ($day === 2) {
									$tuedate = date('F d, Y', $d);
								}
							}
							?>
						</tr>
						<?php
						$sql = "SELECT * FROM shift where shift_status = 'Approve'";
						$result = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_array($result)) {
							$sql_selected = "SELECT * FROM emp_selected_schedule WHERE name='" . $_SESSION['name'] . "' AND schedule = '" . $tuedate . "'";
							$result_selected = mysqli_query($conn, $sql_selected);
							$row_selected = mysqli_fetch_assoc($result_selected);
							$checked = mysqli_num_rows($result_selected) > 0 ? "checked" : "";
						?>
							<tr>
								<td>
									<input type="radio" class="radio" name="tue" value="<?php echo $tuedate . ' - ' . $row['shifts']; ?>" <?php echo $checked; ?>>
								</td>
							</tr>
						<?php
						}
						?>
					</table>

					<table class="firstss">
						<tr>
							<?php
							for ($day = 3; $day <= 3; $day++) {
								$d = strtotime($year . "W" . $week . $day);
								echo "<th>" . date('l', $d) . "<br>" . date('m/d/Y', $d) . "</th>";
								if ($day === 3) {
									$weddate = date('F d, Y', $d);
								}
							}
							?>
						</tr>
						<?php
						$sql = "SELECT * FROM shift where shift_status = 'Approve'";
						$result = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_array($result)) {
							$sql_selected = "SELECT * FROM emp_selected_schedule WHERE name='" . $_SESSION['name'] . "' AND schedule = '" . $weddate . "'";
							$result_selected = mysqli_query($conn, $sql_selected);
							$row_selected = mysqli_fetch_assoc($result_selected);
							$checked = mysqli_num_rows($result_selected) > 0 ? "checked" : "";
						?>
							<tr>
								<td>
									<input type="radio" class="radio" name="wed" value="<?php echo $weddate . ' - ' . $row['shifts']; ?>" <?php echo $checked; ?>>
								</td>
							</tr>
						<?php
						}
						?>
					</table>

					<table class="firstsss">
						<tr>
							<?php
							for ($day = 4; $day <= 4; $day++) {
								$d = strtotime($year . "W" . $week . $day);
								echo "<th>" . date('l', $d) . "<br>" . date('m/d/Y', $d) . "</th>";
								if ($day === 4) {
									$thurdate = date('F d, Y', $d);
								}
							}
							?>
						</tr>
						<?php
						$sql = "SELECT * FROM shift where shift_status = 'Approve'";
						$result = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_array($result)) {
							$sql_selected = "SELECT * FROM emp_selected_schedule WHERE name='" . $_SESSION['name'] . "' AND schedule = '" . $thurdate . "'";
							$result_selected = mysqli_query($conn, $sql_selected);
							$row_selected = mysqli_fetch_assoc($result_selected);
							$checked = mysqli_num_rows($result_selected) > 0 ? "checked" : "";
						?>
							<tr>
								<td>
									<input type="radio" class="radio" name="thur" value="<?php echo $thurdate . ' - ' . $row['shifts']; ?>" <?php echo $checked; ?>>
								</td>
							</tr>
						<?php
						}
						?>
					</table>

					<table class="firstssss">
						<tr>
							<?php
							for ($day = 5; $day <= 5; $day++) {
								$d = strtotime($year . "W" . $week . $day);
								echo "<th>" . date('l', $d) . "<br>" . date('m/d/Y', $d) . "</th>";
								if ($day === 5) {
									$fridate = date('F d, Y', $d);
								}
							}
							?>
						</tr>
						<?php
						$sql = "SELECT * FROM shift where shift_status = 'Approve'";
						$result = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_array($result)) {
							$sql_selected = "SELECT * FROM emp_selected_schedule WHERE name='" . $_SESSION['name'] . "' AND schedule = '" . $fridate . "'";
							$result_selected = mysqli_query($conn, $sql_selected);
							$row_selected = mysqli_fetch_assoc($result_selected);
							$checked = mysqli_num_rows($result_selected) > 0 ? "checked" : "";
						?>
							<tr>
								<td>
									<input type="radio" class="radio" name="fri" value="<?php echo $fridate . ' - ' . $row['shifts']; ?>" <?php echo $checked; ?>>
								</td>
							</tr>
						<?php
						}
						?>
					</table>

					<table class="firstsssss">
						<tr>
							<?php
							for ($day = 6; $day <= 6; $day++) {
								$d = strtotime($year . "W" . $week . $day);
								echo "<th>" . date('l', $d) . "<br>" . date('m/d/Y', $d) . "</th>";
								if ($day === 6) {
									$satdate = date('F d, Y', $d);
								}
							}
							?>
						</tr>
						<?php
						$sql = "SELECT * FROM shift where shift_status = 'Approve'";
						$result = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_array($result)) {
							$sql_selected = "SELECT * FROM emp_selected_schedule WHERE name='" . $_SESSION['name'] . "' AND schedule = '" . $satdate . "'";
							$result_selected = mysqli_query($conn, $sql_selected);
							$row_selected = mysqli_fetch_assoc($result_selected);
							$checked = mysqli_num_rows($result_selected) > 0 ? "checked" : "";
						?>
							<tr>
								<td>
									<input type="radio" class="radio" name="sat" value="<?php echo $satdate . ' - ' . $row['shifts']; ?>" <?php echo $checked; ?>>
								</td>
							</tr>
						<?php
						}
						?>
					</table>
					<table class="firstssssss">
						<tr>
							<?php
							for ($day = 7; $day <= 7; $day++) {
								$d = strtotime($year . "W" . $week . $day);
								echo "<th>" . date('l', $d) . "<br>" . date('m/d/Y', $d) . "</th>";
								if ($day === 7) {
									$sundate = date('F d, Y', $d);
								}
							}
							?>
						</tr>
						<?php
						$sql = "SELECT * FROM shift where shift_status = 'Approve'";
						$result = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_array($result)) {
							$sql_selected = "SELECT * FROM emp_selected_schedule WHERE name='" . $_SESSION['name'] . "' AND schedule = '" . $sundate . "'";
							$result_selected = mysqli_query($conn, $sql_selected);
							$row_selected = mysqli_fetch_assoc($result_selected);
							$checked = mysqli_num_rows($result_selected) > 0 ? "checked" : "";
						?>
							<tr>
								<td>
									<input type="radio" class="radio" name="sun" value="<?php echo $sundate . ' - ' . $row['shifts']; ?>" <?php echo $checked; ?>>
								</td>
							</tr>
						<?php
						}
						?>

					</table>
				</div>
				<div class="buttons">

					<input type="submit" name="save" value="SAVE" class="save">

				</div>
			</div>



			<table class="second">
				<tr>
					<th>Shifts</th>
					<th>Time</th>

				</tr>
				<?php
				$query = "SELECT * FROM shift where shift_status = 'Approve'";

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


		</form>






	</div>





	<div class="box3">

	</div>




</body>
<script type="text/javascript">




</script>
<script type="text/javascript">
	var sidebarBtn = document.getElementById('burger-menu');
	var menu = document.getElementById('menu');
	var box2 = document.querySelector('.box2');


	sidebarBtn.addEventListener('click', function() {
		menu.classList.toggle('active');
		sidebarBtn.querySelector('i').classList.toggle('fa-bars');
		sidebarBtn.querySelector('i').classList.toggle('fa-times');

		if (menu.classList.contains('active')) {
			box2.style.width = '90%';
			box2.style.marginLeft = '10%'; // Set margin-left to 30% to move the box to the right
		} else {
			box2.style.width = ''; // Reset width to default
			box2.style.marginLeft = ''; // Reset margin-left to default
		}
	});
</script>

</html>