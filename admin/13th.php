<?php
// Include the configuration file
require_once "config.php";

// Start the session
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page
    header('Location: ../index.php');
    exit;
}

// Retrieve session variables
$username = $_SESSION['username'];
$name = $_SESSION['name'];
?>

  

<!DOCTYPE html>
<html>
<head>
	<title>ROMEO'S CAFE</title>
	<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<style type="text/css">
		*
	{
		padding: 0;
		margin: 0;
		font-family: sans-serif;
		
}

body
{
background-color: #DEDCE0;
  background-attachment: fixed;
}

		.main
	{
		display: flex;
		flex-direction: column;
	}

    .box1
    {
       
        background-color: #37251b;
        height: 70px;

        text-align: center;
    }
    .box1 h1
    {
    	margin-top: 20px;
    	color: white;
    }
    .box2
    {
    	display: flex;
      align-items: center;
       flex-direction: column;
       flex: 1;
       margin-bottom: 320px;
        
    }

    .box3
    {
       
        background-color: #37251b;
    
 
  	width: 100%;
  	height: 90px;
  	  


    }
ul
	{
		list-style: none;
		height:100vh;
		background-color: black;
		width: 150px;

	}

	ul li
	{
		padding: 5px 20px 5px 20px;
		line-height: 52px;
		background-color: black;
        border-bottom: 1px solid grey;
		

	}
	ul li:hover
	{
	 width: 130px;	
	 text-align: center;
	 background-color: #181818;

	}


	ul .logo 
	{
		
		padding:0px;
		width: 150px;
		height: 150px;
	}
	ul .logo img
	{
		width: 150px;
		height: 150px;
		background-color:none;

	}
	ul li a i
	{
		color: white;
	font-size: 20px;
	}

	ul li a
	{
		text-decoration: none;
		color: white;
		

	}
	.main #menu
	{
		position: fixed;
		margin-left: -200px;
		
		
	}


.main #menu.active{
	
	margin-left:0px;
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


.info{

	display: flex;
	justify-content:flex-end;
	margin-top: -30px;


	color: white;

}
.info a{


	color: white;
	margin-left: 10px;
	margin-right: 10px;

}
	{
		padding: 0;
		margin: 0;
	}

	table {
  border-collapse: collapse;
  width: 95%;
  margin-top:30px;

  margin-left: auto;
  margin-right: auto;
}
table th:first-child
{
	width: 150px;

}

table th, table td {
  border: 1px solid #ddd;
  padding: 8px;
}

table th {
  background-color: #37251b;
  color: white;
  font-size: 14px;
}
table td:first-child
{
text-align: left;
}
table th {
  background-color: #37251b;
  color: white;
  font-size: 14px;
}
table td:first-child
{
text-align: left;
}

table td
{
text-align:center;
font-size: 14px;
height: 20px;


}

table tr:nth-child(even) {
  background-color: #f9f9f9;
}
table tr:nth-child(odd) {
  background-color: #E5E8E8 ;
}
td a
{
	text-decoration: none;
	color: white;
}
button
{
	padding: 3px;
	background-color: black;
	border-radius: 3px;
	border: none;

}

.search
{
	
	width: 95%;
	margin-top: 50px;

	
	display: flex;
	justify-content: right;

}
.search input[type="submit"]
{
	width: 100px;
	height: 40px;

	background-color: #37251b;
	color: white;
	border-radius:0px 5p x 5px 0px;

}
.search input[type="date"]
{
  padding-left:5px;
  padding-right:5px;
  width: 120px;
  	height: 40px;


}
.search h1
{

display: inline;
margin-right: 370px;

}
.totalsalary
{

	background-color: #37251b;
	color: white;
	border: none;

}
.Dateselected
{


 text-align: center;
 width: 100%;
 color: #37251b;

 margin-top: 30px;
 margin-bottom: -15px;

 font-size: 13px;
 font-weight: bold;

 display: flex;
 justify-content: center;

}

@media screen and (min-width: 768px) and (max-width: 1199px){
		table {
			width: 10%;
		}

		.search h1 {
			margin-right: 0;
			margin-bottom: 10px;
		}

		.search input[type="date"],
		.search input[type="submit"] {
			width: 100%;
			margin-bottom: 10px;
		}



		table {
			width: 90%;
			
		}
		table tr th
		{
			font-size: 11px;
		}
		table tr td
		{
			font-size: 11px;
		}
	}









		 @media screen and  (min-width: 320px) and (max-width: 767px) {
		.search h1 {
			margin-right: 0;
			margin-bottom:10px;
			font-size: 25px;

		}

			.search input[type="date"],
		.search input[type="submit"]{
			width: 100%;
			margin-bottom: 10px;
			height: 30px;
			font-size: 12px;


		}



	
			table {
			width: 90%;
			
		}
		table tr th
		{
			font-size: 6px;
		}
		table tr td
		{
			font-size: 6px;
		}
	}



     .welcome
    {
      margin-top:30px;
      margin-left:auto;
      margin-right:auto;
      width: 95%;
      height:250px;
      background-color:white;
      border-radius: 10px;

      display: flex;
    } 

      .barista
   {
    margin-left: 10px;
    width: 33%;
   }
.choose
{
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
.chose,.chose1{
width:77px;
 height: 35px;
 

 display: flex;
 align-items: center;
 justify-content: center;

 border-radius: 50px;

color: white;

}
.chose
{
	background-color: white ;
color: black;
}

a
{
	text-decoration: none;
	font-weight: bold;
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
			

        <div class="box2">

        	          <div class="welcome">
            <img class="barista" src="images/payroll.png">
            <h1 style="margin-top:50px; margin-left: 20px; margin-right: 50px;">13th Month Pay <br><span style=" font-size: 15px; font-weight:100;"> A financial bonus or additional compensation given to employees, typically in addition to their regular monthly salary. It is a common practice in many countries and is often mandated by labor laws regulations.<br><br>
<div class="choose"> <a href=""><div class="chose">13th Pay</div></a><a href="payroll.php"><div class="chose1">Salary</div></a></div>

            </h1>

          
          </div>





<?php 
if (!isset($_POST['submit'])) {

	$query = "SELECT name FROM emp_attendance";
$result = mysqli_query($conn, $query);

if ($result) {
    // Array to store unique names
    $names = array();
    
    // Loop through the result set
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        
        // Check if the name has already been fetched
        if (!in_array($name, $names)) {
            $names[] = $name;
        }
    }
    ?>
    	<table>
		<tr>
			<th>Name of Employee</th>
			<th>Basic Salary</th>
			<th>Total Hours</th>
			<th>13th Month Pay Calculation</th>

		</tr>
		<?php
// Assuming you want to work with the current year
$year = date('Y');

// Set $date1 to the first date of the year
$date1 = $year . '-01-01';

// Set $date2 to the last date of the year
$date2 = $year . '-12-31';

// Your SQL query with modifications
$sql_all1 = "SELECT 
                name AS names, 
                rate AS rates, 
                TIME_FORMAT(SEC_TO_TIME(SUM(TIME_TO_SEC(TIME_FORMAT(totalHours, '%H:%i')))), '%H:%i') AS allhours, 
                SUM(totalAmount) AS totalAmount
             FROM 
                emp_payslip_history 
             WHERE 
                DATE(datePaid) BETWEEN '$date1' AND '$date2' 
             GROUP BY 
                name";

$result_all1 = mysqli_query($conn, $sql_all1);
?>


<?php
if (mysqli_num_rows($result_all1) > 0) {
    while ($row_all = mysqli_fetch_assoc($result_all1)) {
    	$sum =  $row_all['totalAmount'];

    	$pay= $sum/12;
    	$formatted_pay = number_format($pay, 2);


   


	?>
 


		<tr>
			<td><?php echo $row_all['names']; ?></td>
			<td>Php <?php echo $row_all['rates']; ?></td>
			<td><?php echo $row_all['allhours']; ?></td>
			<td id="allot"><?php echo $formatted_pay; ?></td>
		</tr>



 
	<?php
}
}

 ?>
		<td class="totalsalary" style="text-align:center;">Total</td>
		<td class="totalsalary" style="text-align:center;" ></td>
		<td class="totalsalary" style="text-align:center;"></td>
		<td class="totalsalary" style="text-align:center;" id="totalallot"></td>
		
	
		
		<td class="totalsalary" style="text-align:center;"></td>

	</table>
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


 $(function() {
  var sum_total_data = 0;
  $("tr #allnetpay").each(function(index, value) {
    getEachRow = parseFloat($(this).text());
    sum_total_data += getEachRow
  });
  document.getElementById('totalValue').innerHTML = sum_total_data.toFixed(2);
});

$(function() {
  var sum_total_data1 = 0;
  $("tr #allot").each(function(index, value) {
    getEachRow = parseFloat($(this).text());
    sum_total_data1 += getEachRow
  });
  document.getElementById('totalallot').innerHTML = sum_total_data1.toFixed(2);
});

$(function() {
  var sum_total_data2 = 0;
  $("tr #allnd").each(function(index, value) {
    getEachRow = parseFloat($(this).text());
    sum_total_data2 += getEachRow
  });
  document.getElementById('totalallnd').innerHTML = sum_total_data2.toFixed(2);
});



$(function() {
  var sum_total_data4 = 0;
  $("tr #allb").each(function(index, value) {
    getEachRow = parseFloat($(this).text());
    sum_total_data4 += getEachRow
  });
  document.getElementById('totalallb').innerHTML = sum_total_data4.toFixed(2);
});

$(function() {
  var sum_total_data3 = 0;
  $("tr #allhp").each(function(index, value) {
    getEachRow = parseFloat($(this).text());
    sum_total_data3 += getEachRow
  });
  document.getElementById('totalallhp').innerHTML = sum_total_data3.toFixed(2);
});



</script>

</html>