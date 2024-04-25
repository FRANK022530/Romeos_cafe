<?php
// Start the session
session_start();

// Redirect to the login page if the user is not logged in
if (!isset($_SESSION['username'])) {
    header('Location: ../index.php');
    exit;
}

// Get user information from the session
$username = $_SESSION['username'];
$name = $_SESSION['name'];

// Include the configuration file
require_once "config.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>ROMEO'S CAFE</title>
	<head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <link rel="icon" href="images/newlogo.jpg" type="jpg">
</head>

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

       flex-direction: column;





      
        
    }

    .box3
    {
       
        background-color: #37251b;
    
 
  	width: 100%;
  	height: 90px;

  	margin-top: 200px;
  	

  	  


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


.search
{
	
	width: 95%;
	margin-top:20px;

	margin-left: auto;
	margin-right: auto;


	
	display: flex;
	align-items: center;
	justify-content: right;
	justify-content: space-between;


	background-color: white;
	height: 80px;

	border-radius: 10px 10px 0px 0px;


}
.search input[type="submit"]
{
	width: 100px;
	height: 40px;

	background-color: #37251b;
	color: white;
	border-radius:0px 5p x 5px 0px;

	margin-right:50px;

	border-radius: 8px;

}
.search input[type="date"]
{
  padding-left:5px;
  padding-right:5px;
  width: 110px;
  	height: 38px;
border-radius: 8px;
border: .5px solid black;

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


 margin-bottom: -15px;

 font-size: 13px;
 font-weight: bold;

 display: flex;
 justify-content: center;


}

@media screen and (min-width: 768px) and (max-width: 1199px){
		.choose
		{
			margin-top: -20px;
		}
	}









		



     .welcome
    {
      margin-top:30px;
      margin-left:auto;
      margin-right:auto;
      width: 95%;
      height:270px;
      background-color:white;
      border-radius: 10px;

      display: flex;
      align-items: center;
    } 
    .welcome h1
    {
    	margin-top:50px;
    	 margin-left: 20px;
    	  margin-right: 40px;


    }
    span
    {
 font-size: 15px;
  font-weight:100;    }


  
   .barista
   {
    margin-left:1rem;
    width: 19rem;
  
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
.chose1
{
	background-color: white ;
color: black;

}
a
{
	text-decoration:none;
	font-weight: bold;
}

table button
{
	border: none;
	background-color: rgba(0, 0, 0, 0);
}

 button a
{
	color: black;

}
.search button, .openModalButton
{
	padding: 10px;
	border: none;
	margin: 10px;
	width: 100px;
	height: 30px;
}






 @media screen and  (min-width: 320px) and (max-width: 767px) {
	
		 	.search
		 {
		 	display: flex;
		 	height: 60px;
		 	align-items: center;
		 }
			.search input[type="date"],
		.search input[type="submit"]{
			
			
			height: 25px;
			width: 80px;
			font-size: 10px;





		}
		.search input[type="submit"]
		{
			margin-right: 10px;
		}



	
			table {
			width: 95%;
			
		}
		table tr th
		{
			font-size: 6px;
		}
		table tr td
		{
			font-size: 6px;
		}



		.search button
		{

	  height: 25px;
	  width:80px;
	  margin-left: 20px;
	  border-radius: 5px;	
	  	font-size: 10px;
	  	}
	  	.welcome
	  	{
	  		height:200px;
	  		margin-top: 20px;
	  	}


	 	  	.welcome h1
	  	{


	  		font-size:20px;
	  		margin-top: 20px;




	  	}

	  	.welcome h1 span
	  	{
	  		font-size:12px;
	  		
	  	}




.welcome h1 .choose{

	height: 25px;
	width:145px;
	}
.welcome h1 .choose .chose
{
 height: 25px;
 width: 70px;
}
.welcome h1 .choose .chose1
{
height: 25px;
 width: 70px;
}

button
{

	  height: 20px;
	  width: 20px;

	  border-radius: 5px;
	  font-size: 10px;

}
.barista
	  	{
	  		width: 33%;

	  	}

	
	  	.choose
	  	{
	  		margin-top:-10px ;
	  	}

	  	.welcome h1 span
	  	{
	  		font-size:10px;
	  	}
 .welcome h1
    {

    	 margin-left: 10px;
    	  margin-right: 20px;


    }
    .search input[type="date"]
{

  width: 50px;
  	

}
 .welcome button 
{
	color: green;
	width:50px;
	position:relative;
	right:30px;
	bottom:20px;
}

}



.modal{
    display: none;
    position: fixed;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);



    
}
.modal2
{
 display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 100%;


}
.modal-content{

width: fit-content;
height: fit-content;


 padding: 10px;




    background-color: #fff;
    border-radius: 10px;
}

.close{
    float: right;
    cursor: pointer;
    font-size: 20px;
}
    .print-btn {
            margin-top: 10px;
            cursor: pointer;
            padding: 8px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            width: 100px;

        }
        .buttoncontainer
        {
        	
        	width: 95%;
        	margin-left: auto;
        	margin-right: auto;
        	text-align: right;
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


        	       <div class="box2">

        	          <div class="welcome">
            <img class="barista" src="images/payroll.png">
            <h1 >Employee Payroll <br><span>Automates employee payment processes, handling tasks like wage calculation, tax deductions, and generating payslips. It ensures accurate and timely compensation</span><br><br>
            	<button class="openModalButton" style="margin-left:-10px"><a href="rates.php">Rates</a>  </button>


            </h1>

          
          </div>


	<div class="search">
		<div>

		<button><a href="paidHistory.php">Paid History</a>  </button>
			
</div>
        		<form method="post" action="payroll.php">
        		
		

        			<input type="date" name="date1">
        			<input type="date" name="date2">
        		  <input type="submit" name="submit" value="SEARCH">
        		</form>
        	</div>


<?php 
if (isset($_POST['submit'])) {

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
    	<table id="printTable">

		<tr>
			<th>Name of Employee</th>
			<th>Basic Salary</th>
			<th>Total Hours</th>
			<th>Overtime</th> 
			<th>Night Differential</th>
			<th>Holiday Pays</th>
			<th>Deductions</th>
			<th>Total Salary</th>
		
			<th>Report</th>
		</tr>
<?php

   

    $date1 = $_POST['date1'];
    $formattedDate1 = date("Y-m-d", strtotime($date1));
    $formattedDate11 = date("F d, Y", strtotime($date1));
    $date2 = $_POST['date2'];
    $formattedDate2 = date("Y-m-d", strtotime($date2));
     $formattedDate22 = date("F d, Y", strtotime($date2));
    $names =$name;
    $sql_all1 = "SELECT emp_attendance.name,
     	TIME_FORMAT(SEC_TO_TIME(SUM(TIME_TO_SEC(TIME_FORMAT(shift_totalhours, '%H:%i')))), '%H:%i') AS all_shifted,
        TIME_FORMAT(SEC_TO_TIME(SUM(TIME_TO_SEC(TIME_FORMAT(approve_ot, '%H:%i')))), '%H:%i') AS total_ot_hours,
        TIME_FORMAT(SEC_TO_TIME(SUM(TIME_TO_SEC(TIME_FORMAT(approve_early_timein, '%H:%i')))), '%H:%i') AS total_early_time,
        TIME_FORMAT(SEC_TO_TIME(SUM(TIME_TO_SEC(TIME_FORMAT(nightdeff, '%H:%i')))), '%H:%i') AS nightdeff,
        TIME_FORMAT(SEC_TO_TIME(SUM(CASE WHEN dayss = 'Regular Day' THEN TIME_TO_SEC(TIME_FORMAT(shift_totalhours, '%H:%i')) ELSE 0 END)), '%H:%i') AS total_hours_shifted,
        TIME_FORMAT(SEC_TO_TIME(SUM(CASE WHEN dayss = 'Regular Holiday'THEN TIME_TO_SEC(TIME_FORMAT(shift_totalhours, '%H:%i')) ELSE 0 END)), '%H:%i') AS RHtotal_hours_shifted,
        TIME_FORMAT(SEC_TO_TIME(SUM(CASE WHEN dayss = 'Legal Holiday' THEN TIME_TO_SEC(TIME_FORMAT(shift_totalhours, '%H:%i')) ELSE 0 END)), '%H:%i') AS LHtotal_hours_shifted,
          CASE WHEN emp_info.sss = '' THEN '0' ELSE '1' END AS sss,
   		 CASE WHEN emp_info.philhealth = '' THEN '0' ELSE '1' END AS philhealth,
    		CASE WHEN emp_info.pagibig = '' THEN '0' ELSE '1' END AS pagibig,
     emp_info.name AS namess, emp_info.rate AS rates,
     emp_attendance.first_timein AS first_timein,
     emp_attendance.first_timeout AS first_timeout,
     emp_attendance.second_timein AS second_timein,
     emp_attendance.second_timeout AS second_timeout,
     emp_attendance.date_timein AS date_timein,
     emp_attendance.date_ftimeout AS date_ftimeout,
     emp_attendance.date_timeout AS date_timeout,
     emp_attendance.date_stimein AS date_stimein,

     emp_info.status AS statuss

   

    FROM
        emp_attendance
    JOIN
        emp_info ON emp_attendance.name = emp_info.name
WHERE
    DATE(date_timeinin) BETWEEN '$formattedDate1' AND '$formattedDate2'
    AND (timein_status = 'Late' OR timein_status = 'Ontime' OR timein_status = 'Undertime')
    Group by emp_attendance.name";
    $result_all1 = mysqli_query($conn, $sql_all1);?>
  


<div class="Dateselected">
	<?php 
	
echo "From :  ". $formattedDate11;?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<?php
echo "To: ".  $formattedDate22;
	 ?>
	

</div>
<?php

if (mysqli_num_rows($result_all1) > 0) {
    while ($row_all = mysqli_fetch_assoc($result_all1)) {

    	$gt ="0.00";
		$lshw ="0.00";

    	
    	$status = $row_all['statuss'];
    	

$allshifted = $row_all['all_shifted'];

$hours = date('G', strtotime($allshifted));
$minutes = date('i', strtotime($allshifted));

$allShift = $hours + round($minutes / 60, 2);


		$rateperday = $row_all['rates'];
    	$rateperhour = $rateperday/ 8;
    	$totalregularhours =  $row_all['total_hours_shifted']; 
		list($hours, $minutes) = explode(':', $totalregularhours);
		$totalHours = (int)$hours + ($minutes / 60);
		$StotalAmount = $totalHours * $rateperhour;
		$StotalAmount = number_format($StotalAmount, 2);


		$totalallshift =  $row_all['all_shifted']; 
		list($allshifthours, $allshiftminutes) = explode(':', $totalallshift);
		$allshifttotalHours = (int)$allshifthours + ($allshiftminutes / 60);
		$allshifttotalAmount = $allshifttotalHours * $rateperhour;
	
		

		$RHSrate = $rateperday * .30;
		$RHSrateperhour = $RHSrate / 8;
		$RHStotalhours =  $row_all['RHtotal_hours_shifted']; 
		list($RHShours, $RHSminutes) = explode(':', $RHStotalhours);
		$RHStotalHourss = (int)$RHShours + ($RHSminutes / 60);
		$RHStotalAmount = $RHStotalHourss * $RHSrateperhour;
	

		$LHSrate = $rateperday * 1;
		$LHSrateperhour = $LHSrate/ 8;
		$LHStotalhours =  $row_all['LHtotal_hours_shifted']; 
		list($LHShours, $LHSminutes) = explode(':', $LHStotalhours);
		$LHStotalHourss = (int)$LHShours + ($LHSminutes / 60);
		$LHStotalAmount = $LHStotalHourss * $LHSrateperhour;	
		

		$totalAmount = $LHStotalAmount +$allshifttotalAmount + $RHStotalAmount;
	
		$otrate = $rateperday * 1.25;
		$otrateperhour = $otrate / 8;
		$ottotalhours = $row_all['total_ot_hours'];

		// Check if the string contains a colon before splitting it
		if (strpos($ottotalhours, ':') !== false) {
		    list($othours, $otminutes) = explode(':', $ottotalhours);
		    $ottotalHourss = (int)$othours + ($otminutes / 60);
		    $ottotalAmount = $ottotalHourss * $otrateperhour;
		    $ottotalAmount = number_format($ottotalAmount, 2);
		} else {
		    // Handle the case where the string doesn't contain a colon
		    $ottotalAmount = 0; // Or any other appropriate default value
		}
		$total_ot_hours = $row_all['total_ot_hours'];

// Convert the total OT hours to decimal format with two decimal places
$ot_seconds = strtotime($total_ot_hours) - strtotime('00:00');
$ot_hours = floor($ot_seconds / 3600);
$ot_minutes = floor(($ot_seconds % 3600) / 60);

$totalOT = $ot_hours + round($ot_minutes / 60, 2);

		$NDrateperhour = $rateperhour* 0.10;
		$NDtotalhours = $row_all['nightdeff'];
		list($NDhours, $NDminutes) = explode(':', $NDtotalhours);
		$NDtotalHourss = (int)$NDhours + ($NDminutes / 60);
		$NDtotalAmount = $NDtotalHourss * $NDrateperhour;
		$NDtotalAmount = number_format($NDtotalAmount, 2);

		$totalholidaypay= $RHStotalAmount + $LHStotalAmount;
		$totalholidaypay = number_format($totalholidaypay, 2);

		$lookupTable = array(0 => '0.00', 1 => '100.00');
		$pagibigs = isset($lookupTable[$row_all['pagibig']]) ? $lookupTable[$row_all['pagibig']] : 'Unknown';
		$totalpagibig=$pagibigs/2;
		$totalpagibig = number_format($totalpagibig, 2);

		$Phrate= $rateperday* 21;
		$Phpay = 0.015* $Phrate;
		$lookupTable1 = array(0 => '0.00', 1 => $Phpay);
		$philhealths = isset($lookupTable1[$row_all['philhealth']]) ? $lookupTable1[$row_all['philhealth']] : 'Unknown';
		$totalphilhealth=$philhealths/2;
		$totalphilhealth = number_format($totalphilhealth, 2);

		$SSrate= $rateperday* 21;
		$variable = (($SSrate >= 8250 && $SSrate <= 8749.99) * 382.50) +
		            (($SSrate >= 8750 && $SSrate <= 9249.99) * 405.00) +
		            (($SSrate >= 9250 && $SSrate <= 9749.99) * 427.50)+
		            (($SSrate >= 9750 && $SSrate <= 10249.99) * 450.00)+
		            (($SSrate >= 10250 && $SSrate <= 10749.99) * 472.50)+
		            (($SSrate >= 10750  && $SSrate <= 11249.99) * 495.00);
		$lookupTable2 = array(0 => '0.00', 1 => $variable);
		$SSSS = isset($lookupTable2[$row_all['sss']]) ? $lookupTable2[$row_all['sss']] : 'Unknown';
		$totalsss=$SSSS/2;
		$totalsss = number_format($totalsss, 2);




		$totalgross= $totalAmount + $ottotalAmount + $NDtotalAmount;
		

		$totalbenefit=$totalpagibig+$totalphilhealth+$totalsss;
		

		$totalnetpay = $totalgross - $totalbenefit;
		$totalnetpay = number_format($totalnetpay, 2);



$nd_seconds = strtotime($NDtotalhours) - strtotime('00:00');
$nd_hours = floor($nd_seconds / 3600);
$nd_minutes = floor(($nd_seconds % 3600) / 60);

$NDtotal = $nd_hours + round($nd_minutes / 60, 2);

// Convert the RHS total hours to decimal format with two decimal places
$rhs_seconds = strtotime($RHStotalhours) - strtotime('00:00');
$rhs_hours = floor($rhs_seconds / 3600);
$rhs_minutes = floor(($rhs_seconds % 3600) / 60);

$RHStotal = $rhs_hours + round($rhs_minutes / 60, 2);

// Convert the LHS total hours to decimal format with two decimal places
$lhs_seconds = strtotime($LHStotalhours) - strtotime('00:00');
$lhs_hours = floor($lhs_seconds / 3600);
$lhs_minutes = floor(($lhs_seconds % 3600) / 60);

$LHStotal = $lhs_hours + round($lhs_minutes / 60, 2);


	?>
 


		<tr>
			<td><?php echo $row_all['namess']; ?></td>
			<td>Php <?php echo $row_all['rates']; ?></td>
			<td><?php echo $row_all['all_shifted']; ?></td>
			<td id="allot"><?php echo $ottotalAmount; ?></td>
			<td id="allnd"><?php echo $NDtotalAmount; ?></td>
			<td id="allhp"><?php echo $totalholidaypay; ?></td>
			<td id="allb"><?php echo $totalbenefit; ?></td>
			<td id="allnetpay"><?php echo $totalnetpay; ?></td>
			
			<td><button>
  <a href="payrollreport.php?
    name=<?php echo urlencode($row_all['namess']); ?>&
    date=<?php echo urlencode($formattedDate11 . " - " . $formattedDate22); ?>&
    rate=<?php echo urlencode($rateperday); ?>&
    status=<?php echo urlencode($status); ?>&
    totalhours=<?php echo urlencode($allShift); ?>&
    totalamount=<?php echo urlencode($allshifttotalAmount); ?>&
    totalothours=<?php echo urlencode($totalOT); ?>&
    totalotamount=<?php echo urlencode($ottotalAmount); ?>&
    NDhour=<?php echo urlencode($NDtotal); ?>&
    NDtotalamount=<?php echo urlencode($NDtotalAmount); ?>&
    RHhour=<?php echo urlencode($RHStotal); ?>&
    RHamount=<?php echo urlencode($RHStotalAmount); ?>&
    LHhour=<?php echo urlencode($LHStotal); ?>&
    LHamount=<?php echo urlencode($LHStotalAmount); ?>&
    pagibig=<?php echo urlencode($totalpagibig); ?>&
    philhealth=<?php echo urlencode($totalphilhealth); ?>&
    sss=<?php echo urlencode($totalsss); ?>&
    gt=<?php echo urlencode($gt); ?>&
    lshw=<?php echo urlencode($lshw); ?>&
    totalnet=<?php echo urlencode($totalnetpay); ?>"

    target="_blank">View
  </a>
</button>

</td>


		</tr>



 
	<?php
}
}

 ?>
		<th class="totalsalary" style="text-align:center;">Total</th>
<th class="totalsalary" style="text-align:center;"></th>
<th class="totalsalary" style="text-align:center;"></th>
<th class="totalsalary" style="text-align:center;" id="totalallot"></th>
<th class="totalsalary" style="text-align:center;" id="totalallnd"></th>
<th class="totalsalary" style="text-align:center;" id="totalallhp"></th>
<th class="totalsalary" style="text-align:center;" id="totalallb"></th>
<th class="totalsalary" style="text-align:center;" id="totalValue"></th>
<th class="totalsalary" style="text-align:center;"></th>

	</table>

	<div class="buttoncontainer">
		<button class="print-btn" onclick="printTable()">Print Table</button>

	</div>

	
	<?php  
}
}

?>

 



<?php 
if (!isset($_POST['submit'])) {
	?>
 <table>
		<tr>
			<th>Name of Employee</th>
			<th>Basic Salary</th>
			<th>Total Hours</th>
			<th>Overtime</th> 
			<th>Night Differential</th>
			<th>Holiday Pays</th>
			<th>Deductions</th>
			<th>Total Salary</th>
			<th>Status</th>
		
		</tr>
 

		<tr>
			<td colspan="11" style="text-align: center;"> Please Select Dates First</td>


		</tr>
	
	</table>
        	

	<?php
}
 ?>





</div>   

        <div class="box3"></div>


</body>
<script type="text/javascript">

    function printTable() {
        var table = document.getElementById('printTable').cloneNode(true);
        
        // Set the display property of the last th and td in each row to 'none'
        var rows = table.getElementsByTagName('tr');
        for (var i = 0; i < rows.length; i++) {
            var lastTh = rows[i].querySelector('th:last-child');
            var lastTd = rows[i].querySelector('td:last-child');
            if (lastTh) {
                lastTh.style.display = 'none';
            }
            if (lastTd) {
                lastTd.style.display = 'none';
            }
        }

        var newWin = window.open('', '_blank');
newWin.document.write('<html><head><title>Payroll Report</title>');
newWin.document.write('<style>body{font-family:sans-serif;}table{border-collapse:collapse;width:100%;}th,td{border:1px solid #ddd;padding:10px;text-align:center;}th{background-color:#f2f2f2;}</style>');
newWin.document.write('</head><body>');

  // Adding the image
    newWin.document.write('<img src="absolute/path/to/images/newlogo.png" alt="Header Image" style="width:100%;">');

newWin.document.write('<br><h3 style=" text-align:center">__________________________________________________________________________________________</h3>');
newWin.document.write('<h1 style="color:Black; text-align:center">Romeos Cafe Payroll</h1>');
newWin.document.write('<p style="text-align:center;">Contact No: 0963018768 <br >4Unit 2, Super 9 Building, Emilio Aguinaldo Hwy, Bacoor, Philippines</p>');
newWin.document.write('<br><h3 style="margin-top:-30px; text-align:center">__________________________________________________________________________________________</h3>');



// Adding the table
newWin.document.write(table.outerHTML);
newWin.document.write('<p style="text-align:right; margin-top:100px;">Preffered By <br> <?php echo $_SESSION['name']  ?></p>');
newWin.document.write('</body></html>');


        newWin.document.close();
        newWin.print();
        newWin.close();
    }

	
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



$(function() {
  var sum_total_data = 0;
  $("tr #allnetpay").each(function(index, value) {
    var getEachRow = parseFloat($(value).text().replace(/,/g, ''));
    sum_total_data += getEachRow;
  });
  var formattedTotal = sum_total_data.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
  document.getElementById('totalValue').innerHTML = formattedTotal;
});

$(function() {
  var sum_total_data1 = 0;
  $("tr #allot").each(function(index, value) {
    var getEachRow = parseFloat($(this).text().replace(/,/g, ''));
    sum_total_data1 += getEachRow;
  });
  var formattedTotal1 = sum_total_data1.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
  document.getElementById('totalallot').innerHTML = formattedTotal1;
});

$(function() {
  var sum_total_data2 = 0;
  $("tr #allnd").each(function(index, value) {
    var getEachRow = parseFloat($(this).text().replace(/,/g, ''));
    sum_total_data2 += getEachRow;
  });
  var formattedTotal2 = sum_total_data2.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
  document.getElementById('totalallnd').innerHTML = formattedTotal2;
});

$(function() {
  var sum_total_data4 = 0;
  $("tr #allb").each(function(index, value) {
    var getEachRow = parseFloat($(this).text().replace(/,/g, ''));
    sum_total_data4 += getEachRow;
  });
  var formattedTotal4 = sum_total_data4.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
  document.getElementById('totalallb').innerHTML = formattedTotal4;
});

$(function() {
  var sum_total_data3 = 0;
  $("tr #allhp").each(function(index, value) {
    var getEachRow = parseFloat($(this).text().replace(/,/g, ''));
    sum_total_data3 += getEachRow;
  });
  var formattedTotal3 = sum_total_data3.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
  document.getElementById('totalallhp').innerHTML = formattedTotal3;
});






</script>

</html>