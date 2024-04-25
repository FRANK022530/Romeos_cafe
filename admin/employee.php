<?php
session_start();

if (!isset($_SESSION['username'])) {
	// redirect to login page if the user is not logged in
	header('Location: ../index.php');
	exit;
}

$username = $_SESSION['username'];
$name = $_SESSION['name'];

require_once "config.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title>SHIFT</title>

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

		align-items: center;
		flex-direction: column;

		flex: 1;

		margin-bottom: 100px;
	}

	.box3 {

		background-color: #37251b;
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
		height: 1000px;

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

	.container {

		display: flex;
		justify-content: center;
		justify-content: space-between;
		flex-wrap: wrap;




		width: 95%;





	}

	.employee {
		width: 320px;
		height: 320px;

		margin: 10px;

		color: black;

		padding-top: 20px;

		background-color: white;
		border-radius: 10px;

		display: flex;
		align-items: center;
		justify-content: center;
		flex-grow: 1;





	}

	.employee .image {

		width: 300px;
		height: 200px;

		display: flex;
		justify-content: center;
		align-items: center;
	}

	.employee .image .image-style {



		height: 180px;
		width: 180px;
		border-radius: 50%;

		margin-top: 20px;

	}

	.employee .name {
		font-size: 15px;
		display: flex;

		justify-content: center
	}

	.employee input {
		width: 150px;
		height: 40px;

		border-radius: 10px;
		border: none;
		margin-top: 10%;
		margin-left: 25%;


		background-color: #37251b;
		color: white;
	}

	.employee input:hover {
		transform: scale(1.1);
		transition: .2s ease;
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
		height: 270px;
		background-color: white;
		border-radius: 10px;

		display: flex;
		align-items: center;
		overflow: hidden;

	}

	.welcome h1 {
		margin-top: 50px;
		margin-left: 20px;
		margin-right: 40px;


	}

	span {
		font-size: 15px;
		font-weight: 100;
	}



	.barista {
		margin-left: 1rem;
		width: 15rem;

	}

	.choose {
		background-color: #37251b;
		border: 2px solid black;
		height: 35px;
		width: 155px;

		border-radius: 50px;
		color: white;
		font-size: 10px;
		float: right;

		display: flex;
		justify-content: center;
		justify-content: space-around;


	}

	.chose,
	.chose1 {
		width: 77px;
		height: 35px;


		display: flex;
		align-items: center;
		justify-content: center;

		border-radius: 50px;
		color: white;


	}

	.chose1 {
		background-color: white;
		color: black;

	}

	a {
		text-decoration: none;
		font-weight: bold;
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
			font-size: 12px;

		}




		.welcome h1 .choose {

			height: 25px;
			width: 145px;
		}

		.welcome h1 .choose .chose {
			height: 25px;
			width: 70px;
		}

		.welcome h1 .choose .chose1 {
			height: 25px;
			width: 70px;
		}


		.barista {
			width: 33%;

		}


		.choose {
			margin-top: -15px;
		}

		.welcome h1 span {
			font-size: 10px;
		}

		.welcome h1 {

			margin-left: 10px;
			margin-right: 20px;


		}


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
					<img src="images/newlogo.jpg">
				</li>
				<li>
					<a href="home.php"><i class="fa fa-home"></i>&nbsp;Home</a>

				</li>
				<li>
					<a href="admin_schedule.php"><i class="fa fa-calendar"></i>&nbsp; Schedule</a>
				</li>

				<li>
					<a href="attendance.php"><i class="fa fa-check">&nbsp;</i>Attendance</a>
				</li>
				<li>
					<a href="payroll.php"><i class="fa-solid fa-money-bill">&nbsp;</i> Payroll</a>
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
			<h1>ROMEO'S CAFE</h1>

			<div class="info">


				<p><?php echo $_SESSION['name'];  ?></p>
				<p><a href="logout.php"><i class="fa fa-power-off"></i></a></p>
			</div>

		</div>
	</div>



	<div class="box2">

		<div class="welcome">
			<img class="barista" src="images/employee.png">
			<h1>Employee Information<br><span>Encompasses essential details about individuals employed by a company, including personal, employment, and administrative data.

					<br><br>
					<div class="choose"> <a href="old_employee.php">
							<div class="chose">Previous</div>
						</a><a href="employee.php">
							<div class="chose1">Present</div>
						</a></div>

			</h1>




		</div>





		<div class="container">



			<?php




			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			// Execute a SELECT statement to retrieve all rows from the table
			$result = mysqli_query($conn, "SELECT * FROM emp_info WHERE classification is NULL ");

			// Generate HTML markup for a <div> element for each row in the table
			$html = '';
			while ($row = mysqli_fetch_array($result)) :
			?>




				<div class="employee">
					<form action="emp_infos.php" method="POST">
						<div class="name"><?php echo $row['name']; ?> </div>
						<div class="image">
							<?php
							$imgData = $row['image'];
							$imgSrc = 'data:image/jpeg;base64,' . base64_encode($imgData);
							echo '<img src="' . $imgSrc . '" / class="image-style">';

							?>
						</div>
						<input type="hidden" name="name" value="<?php echo $row['name']; ?>">
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

						<input type="submit" name="reveal" value="SEE INFO.">
					</form>
				</div>


			<?php endwhile; ?>

		</div>

	</div> <!--end div of class box 2-->



	<div class="box3">

	</div>


</body>
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