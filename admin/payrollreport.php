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
	<title>ROMEOS CAFE</title>
	<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
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
      align-items: center;
       flex-direction: column;
       flex: 1;
       margin-bottom: 450px;
        
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
		line-height: 65px;

	

		border-bottom:1px solid grey;
		background-color: black;
		

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

	td
	{
	
		width: 150px;
		height: 30px;

		font-size: 12px;
		padding: 2px;
		border: none;
	}
	
	table
	{
		display: flex;
		margin-top: 50px;
		background-color: white;

		border: 2px solid #37251b;
	}
	button{
	margin-top: 5px;
		font-size: 15px;

		background-color:black; 
		color: white; 
		padding:10px; 
		width: 625px;
		 border: none; 
		 border-radius: 5px; 

	}
	  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  .logo1
  {
  	width: 60px;
  	height: 60px;
  	margin-bottom: -60px;
  	margin-left:-500px;
  }
  h2
  {
  	margin-top: 5px;
  }
  p
  {
  	margin-top: -10px;
  }
@media screen and  (min-width: 320px) and (max-width: 767px) {

	td
	{
	
		width: 90px;
		height: 20px;

		font-size: 12px;
		padding: 2px;
		border: none;
	}
	
	table
	{
		display: flex;
		margin-top: 50px;
		background-color: white;

		border: 2px solid #37251b;


	}
	button{
		margin-top: 5px;
		font-size: 15px;

		background-color:black; 
		color: white; 
		padding:10px; 
		width: 385px;
		 border: none; 
		 border-radius: 5px; 

	}
	  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  .logo1
  {
  display: none;
  }
  h2
  {
  	margin-top: 5px;
  }
  p
  {
  	margin-top: -10px;
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
			

        <div class="box2">


        	<form action="process.php" method="POST">

        	<table>
        		<tr>
        			
        			<td colspan="4" style="text-align:center; background-color: #37251b; color: white; height: 30px; "><img class="logo1" src="images/newlogo.jpg"><h2>ROMEO'S CAFE</h2><br><p>Contact No: 09630187684</p><br><p>Unit 2, Super 9 Building, Emilio Aguinaldo Hwy, Bacoor, Philippines</p></td>
        		</tr>

        		<tr>
        			<td>Name:</td>
        			<td> <?php echo $_GET['name']; ?></td>
        			<input type="hidden" name="name" value="<?php echo $_GET['name']; ?>">
        			<td>Date:</td>
        			<td><?php echo $_GET['date']; ?> </td>
        			<input type="hidden" name="date" value="<?php echo $_GET['date']; ?>">
        		</tr>
        		<tr>
        			<td>Position:</td>
        			<td> <?php echo $_GET['status']; ?></td>
        			<input type="hidden" name="status" value="<?php echo $_GET['status']; ?>">
        			<td>Rate:</td>
        			<td><?php echo $_GET['rate']; ?> </td>
        			<input type="hidden" name="rate" value="<?php echo $_GET['rate']; ?>">
        		</tr>
        		<tr>
        			<td colspan="4" style="background-color: #37251b; color: white;"></td>
        		</tr>
        		<tr>
        			<td colspan="2"></td>
        			<td>Hours</td>
        			<td>Amount</td>
        		</tr>
        		<tr>
        			<td colspan="2">Total Hours:</td>
        			<td><?php echo $_GET['totalhours']; ?> </td>
        			<input type="hidden" name="totalhours" value="<?php echo $_GET['totalhours']; ?>">
        			<td><?php echo $_GET['totalamount']; ?>.00</td>
        			<input type="hidden" name="totalamount" value="<?php echo $_GET['totalamount']; ?>">
        		</tr>
        		<tr>
        			<td colspan="2">Total Overtime:</td>
        			<td><?php echo $_GET['totalothours']; ?></td>
        			<input type="hidden" name="totalothours" value="<?php echo $_GET['totalothours']; ?>">
        			<td><?php echo $_GET['totalotamount']; ?></td>
        			<input type="hidden" name="totalotamount" value="<?php echo $_GET['totalotamount']; ?>">
        		</tr>
        		<tr>
        			<td colspan="2">Total Night Differential:</td>
        			<td><?php echo $_GET['NDhour'];?></td>
        			<input type="hidden" name="NDhour" value="<?php echo $_GET['NDhour']; ?>">
        			<td><?php echo $_GET['NDtotalamount'];?></td>
        			<input type="hidden" name="NDtotalamount" value="<?php echo $_GET['NDtotalamount']; ?>">
        		</tr>
        		<tr>
        			<td colspan="4" style="background-color: #37251b; color: white;"></td>
        		</tr>
        		<tr>
        			<td colspan="2"></td>
        			<td>Hours</td>
        			<td>Amount</td>
        		</tr>
        		<tr>
        			<td colspan="2">Regular Holiday:</td>
        			<td><?php echo $_GET['RHhour'];?></td>
        			<input type="hidden" name="RHhour" value="<?php echo $_GET['RHhour']; ?>">
        			<td><?php echo $_GET['RHamount'];?></td>
        			<input type="hidden" name="RHamount" value="<?php echo $_GET['RHamount']; ?>">
        		</tr>
        			<tr>
        			<td colspan="2">Special Holiday:</td>
        			<td><?php echo $_GET['LHhour'];?></td>
        			<input type="hidden" name="LHhour" value="<?php echo $_GET['LHhour']; ?>">
        			<td><?php echo $_GET['LHamount'];?></td>
        			<input type="hidden" name="LHamount" value="<?php echo $_GET['LHamount']; ?>">
        		</tr>
        		<tr>
        			<td colspan="4" style="background-color: #37251b; color: white;" ></td>
        		</tr>
        		
        		<tr>
        			<td colspan="2"></td>
    
        			<td colspan="2" style="text-align:center;">Amount</td>
        		</tr>
        		<tr>
        			<td colspan="2">Gross Taxable:</td>
        			<td colspan="2"><?php echo $_GET['gt'];?></td>
        			<input type="hidden" name="gt" value="<?php echo $_GET['gt']; ?>">
        			
        		</tr>
        		<tr>
        			<td colspan="2">Less W/H Tax:</td>
        			<td colspan="2"><?php echo $_GET['lshw'];?></td>
        			<input type="hidden" name="lshw" value="<?php echo $_GET['lshw']; ?>">
        		</tr>
        		<tr>
        			<td colspan="2">Gross After Tax:</td>
        			<td colspan="2"><?php echo $_GET['totalnet'];?></td>
        			<input type="hidden" name="totalnet" value="<?php echo $_GET['totalnet']; ?>">
        		</tr>
        		<tr>
        			<td colspan="4" style="background-color: #37251b; color: white;" ></td>
        		</tr>
   						<tr>
        			<td colspan="2"></td>
        				<td colspan="2" style="text-align:center;">Amount</td>
        		</tr>
        		<tr>
        			<td colspan="2">SSS</td>
        			<td colspan="2"><?php echo $_GET['sss'];?></td>
        			<input type="hidden" name="sss" value="<?php echo $_GET['sss']; ?>">
        		</tr>
        		<tr>
        			<td colspan="2">Pagibig</td>
        			<td colspan="2"><?php echo $_GET['pagibig'];?></td>
        			<input type="hidden" name="pagibig" value="<?php echo $_GET['pagibig']; ?>">
        		</tr>
        		<tr>
        			<td colspan="2">PhilHealth</td>
        			<td colspan="2"><?php echo $_GET['philhealth'];?></td>
        			<input type="hidden" name="philhealth" value="<?php echo $_GET['philhealth']; ?>">
        		</tr>
        		
        		<tr>
        			<td colspan="2" style="background-color: #37251b; color: white;">Net Pay: </td>
  						<td colspan="2" style="background-color: #37251b; color: white;"><?php echo $_GET['totalnet'];?></td>
  						<input type="hidden" name="totalnet" value="<?php echo $_GET['totalnet']; ?>">
        		</tr>
        	
        	</table>

<button name="print" type="submit" class="print-button" type="submit"  style=" "> <i class="fa fa-print"></i>&nbsp;&nbsp;Save</button>
        	
</form>

</div>    

        <div class="box3"></div>


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