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
	    background-image: url(images/background.png);
	    background-size: cover;
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
	    text-align: right;


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


	  label {
	    display: inline-block;
	    width: 150px;
	    margin-bottom: 10px;
	    font-weight: bold;
	  }

	  /* Style for input fields */
	  input[type="text"],
	  [type="date"] {
	    padding: 8px;
	    border: 1px solid #ccc;
	    border-radius: 4px;
	    box-sizing: border-box;
	    width: 250px;
	    font-size: 14px;
	  }

	  /* Style for form container */
	  .form-container {
	    margin: auto;
	    margin-top: 20px;
	    width: 700px;
	    height: 350px;
	    padding: 20px;
	    border: none;
	    border-radius: 10px;
	    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	    backdrop-filter: blur(20px);


	    display: flex;
	    flex-direction: column;

	    flex-wrap: wrap;



	  }

	  /* Style for submit button */
	  input[type="submit"] {


	    background-color: #37251b;
	    color: white;
	    width: 150px;
	    padding: 8px 20px;
	    border: none;
	    border-radius: 4px;
	    cursor: pointer;
	    font-size: 16px;
	  }

	  /* Style for submit button on hover */
	  input[type="submit"]:hover {
	    background-color: #45a049;
	  }

	  .id {
	    width: 20px;
	  }

	  .submit {
	    text-align: right;
	    margin-right: 15px;

	  }

	  select {
	    padding: 8px;
	    border: 1px solid #ccc;
	    border-radius: 4px;
	    box-sizing: border-box;
	    width: 250px;
	    font-size: 14px;
	  }

	  .image-style {
	    width: 250px;
	    height: 250px;

	  }

	  .image {

	    display: flex;
	    justify-content: flex-end;

	    margin-top: -290px;
	    margin-bottom: 20px;
	    margin-right: 20px;
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
	          <a href="attendance.php"><i class="fa fa-check">&nbsp;</i>Attendance</a>
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
	      <h1>ROMEO'S CAFE</h1>

	      <div class="info">


	        <p><?php echo $_SESSION['name'];  ?></p>
	        <p><a href="logout.php"><i class="fa fa-power-off"></i></a></p>
	      </div>

	    </div>
	  </div>
	  <div class="box2">

	    <?php
      if (isset($_POST['reveal'])) {
        $id = $_POST['id'];
        $query = "SELECT * FROM emp_info WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($query_run)) {
      ?>

	        <div class="form-container">
	          <form action="process.php" method="POST">
	            <label class="id">ID:</label>
	            <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">

	            <?php echo $row['id']; ?><br>
	            <br>

	            <label for="name">Name:</label>
	            <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>">
	            <br>


	            <label for="age">Age:</label>
	            <input type="text" id="age" name="age" value="<?php echo $row['age']; ?>">
	            <br>

	            <label for="status">Status:</label>
	            <select id="status" name="status">
	              <option value="Regular" <?php if ($row['status'] === 'Regular') echo 'selected'; ?>>Regular</option>
	              <option value="Working Student" <?php if ($row['status'] === 'Working Student') echo 'selected'; ?>>Working Student</option>
	            </select><br>

	            <label for="contact">Contact:</label>
	            <input type="text" id="contact" name="contact" value="<?php echo $row['contact']; ?>">
	            <br><br><br>
	            <label for="rate">Rate:</label>
	            <input type="text" id="rate" name="rate" value="<?php echo $row['rate']; ?>">
	            <br>

	            <label for="hiredate">Hire Date:</label>
	            <input type="date" id="hiredate" name="hiredate" value="<?php echo date('Y-m-d', strtotime($row['hiredate'])); ?>">
	            <br>

	            <div class="submit">
	              <input type="submit" name="updateemp_info" value="Save">
	            </div>
	            <div class="image">
	              <?php
                $imgData = $row['image'];
                $imgSrc = 'data:image/jpeg;base64,' . base64_encode($imgData);
                echo '<img src="' . $imgSrc . '" / class="image-style">';

                ?>
	            </div>

	          </form>
	        </div>

	    <?php
        }
      }
      ?>




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