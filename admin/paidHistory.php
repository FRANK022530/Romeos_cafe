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

	#menu ul
	{
		list-style: none;
		height:100vh;
		background-color: black;
		width: 150px;

	}

	#menu ul li
	{
		padding: 5px 20px 5px 20px;
		line-height: 52px;
		background-color: black;
        border-bottom: 1px solid grey;
		

	}
	#menu ul li:hover
	{
	 width: 130px;	
	 text-align: center;
	 background-color: #181818;

	}


	#menu ul .logo 
	{
		
		padding:0px;
		width: 150px;
		height: 150px;
	}
	#menu ul .logo img
	{
		width: 150px;
		height: 150px;
		background-color:none;

	}
	#menu ul li a i
	{
		color: white;
	font-size: 20px;
	}

	#menu ul li a
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
  .pagination {
            display: flex;
            list-style: none;
            padding: 0;

          
            width: 95%;
            margin-left:auto;
            margin-right: auto;
        }

        .pagination li {
            margin: 5px;
            background-color: white;
            border-radius: 10px;

        }

        .pagination a, .pagination span {
            display: block;
            padding: 8px 12px;
            text-decoration: none;
            color: #333;
            border: 1px solid #ccc;
            border-radius: 4px;
            cursor: pointer;
        }

        .pagination .active {
            background-color: #37251b;
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
.search button 
{
	padding: 10px;
	border: none;
	margin: 10px;
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
	  width: 80px;
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
					<<a href="payroll.php"><i class="fa-solid fa-money-bill">&nbsp;</i> Payroll</a>
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
            <h1 >Payslip History <br><span>It pertains to the record or history of an employee's payslips, detailing their earnings and other benefits for specific pay periods.</span><br><br>


            </h1>

          
          </div>


	<div class="search">

		<button><a href="payroll.php">BACK</a></button>
        		<form method="post" action="paidHistory	.php">
             			<input type="date" name="date1">
        		
        		  <input type="submit" name="submit" value="SEARCH">
        		</form>
        	</div>



<?php

if (isset($_POST['submit']) && !empty($_POST['date1'])) {
    $datee = mysqli_real_escape_string($conn, $_POST['date1']);
    $sql = "SELECT * FROM emp_payslip_history 
            WHERE datePaid = '$datee'
            ORDER BY datePaid DESC";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
       ?>
            <table id="printTable"><?php
        echo "<tr> 
                    <th>Name</th>
                    <th>Date</th>
                    <th>Basic Salary</th>
                    <th>Holiday Pay</th>
                    <th>Deduction</th>
                    <th>Netpay</th>
                    <th>Action</th>
                </tr>";

        if (mysqli_num_rows($result) > 0) {
            // Loop through the rows and display the data
            while ($row = mysqli_fetch_assoc($result)) {
                $a = $row['totalAmount'];
                $b = $row['totalOTAmount'];
                $c = $row['nightDeffTotalAmount'];
                $basicSalary = $a + $b + $c;

                $d = $row['RHamount'];
                $e = $row['LHamount'];
                $holidayPay = $d + $e;

                $f = $row['sss'];
                $g = $row['pagibig'];
                $h = $row['philhealth'];
                $deduction = $f + $g + $h;

                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['datePaid'] . "</td>";
                echo "<td>" . $basicSalary . "</td>";
                echo "<td>" . $holidayPay . "</td>";
                echo "<td>" . $deduction . "</td>";
                echo "<td>" . $row['netPay'] . "</td>";
                 echo '<td><button>
    <a href="pdf.php?name=' . urlencode($row['name']) . '&date=' . urlencode($row['datePaid']) . '">
        Generate PDF
    </a>
</button></td>';
                echo "</tr>";
            }

        } else {
            echo "<tr><td colspan='7' style='text-align: center;'>No Records Found</td></tr>";
        }

        echo "</table>";
        ?>
            	<div class="buttoncontainer">
		<button class="print-btn" onclick="printTable()">Print Table</button>

	</div>

            <?php
        

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>






<?php
if (!isset($_POST['submit'])) {

    // Determine the total number of items from the database
    $sqlTotalItems = "SELECT COUNT(*) as total FROM emp_payslip_history";
    $resultTotalItems = mysqli_query($conn, $sqlTotalItems);

    if ($resultTotalItems) {
        $rowTotalItems = mysqli_fetch_assoc($resultTotalItems);
        $totalItems = $rowTotalItems['total'];
    } else {
        // Handle the error, e.g., by setting a default total or displaying an error message
        $totalItems = 0;
    }

    $itemsPerPage = 20;

    $totalPages = ceil($totalItems / $itemsPerPage);

    // Get the current page from the query string
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

    // Calculate the offset for the SQL query
    $offset = ($current_page - 1) * $itemsPerPage;

    // Fetch data based on the current page and items per page
    $sql = "SELECT * FROM emp_payslip_history ORDER BY datePaid DESC LIMIT $offset, $itemsPerPage";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // Open the form tag outside the loop
          ?>
            <table id="printTable"><?php
            echo "<tr> 
                        <th>Name</th>
                        <th>Date</th>
                        <th>Basic Salary</th>
                        <th>Holiday Pay</th>
                        <th>Deduction</th>
                        <th>Netpay</th>
                        <th>Action</th>
                    </tr>";

            // Loop through the rows and display the data
            while ($row = mysqli_fetch_assoc($result)) {
                $a = $row['totalAmount'];
                $b = $row['totalOTAmount'];
                $c = $row['nightDeffTotalAmount'];
                $basicSalary = $a + $b + $c;

                $d = $row['RHamount'];
                $e = $row['LHamount'];
                $holidayPay = $d + $e;

                $f = $row['sss'];
                $g = $row['pagibig'];
                $h = $row['philhealth'];
                $deduction = $f + $g + $h;

                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['datePaid'] . "</td>";
                echo "<td>" . $basicSalary . "</td>";
                echo "<td>" . $holidayPay . "</td>";
                echo "<td>" . $deduction . "</td>";
                echo "<td>" . $row['netPay'] . "</td>";
                // Close the form tag within each row
                echo '<td><button>
    <a href="pdf.php?name=' . urlencode($row['name']) . '&date=' . urlencode($row['datePaid']) . '">
        Generate PDF
    </a>
</button></td>';
                echo "</tr>";
            }

            // Close the table and the form
            echo "</table>";
            ?>
            	<div class="buttoncontainer">
		<button class="print-btn" onclick="printTable()">Print Table</button>

	</div>

            <?php

            echo "<ul class='pagination'>";
            if ($current_page > 1) {
                echo "<li><a href='?page=" . ($current_page - 1) . "'>Previous</a></li>";
            }

            if ($current_page < $totalPages) {
                echo "<li><a href='?page=" . ($current_page + 1) . "'>Next</a></li>";
            }
            echo "</ul>";
    
        } else {
            echo "<table>
                    <tr> 
                        <th>Name</th>
                        <th>Date</th>
                        <th>Basic Salary</th>
                        <th>Holiday Pay</th>
                        <th>Deduction</th>
                        <th>Netpay</th>
                        <th>Action</th>
                    </tr>
                    <td colspan='7' style='text-align: center;'>No Records Found</td>
                 </table>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
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
        newWin.document.write('<html><head><title></title></head><body>');
        newWin.document.write('<style>table{border-collapse:collapse;width:100%;}th,td{border:1px solid #ddd;padding:8px;text-align:center;}th{background-color:#f2f2f2;}</style>');
        newWin.document.write('<h2>Paid History</h2><br>');
        newWin.document.write(table.outerHTML);
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