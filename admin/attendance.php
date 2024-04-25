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
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
       justify-content:center;
       flex-direction: column;
       flex: 1;
       margin-bottom: 30px;
        
    }

    .box3
    {
       
        background-color: #37251b;
    
 
  	width: 100%;
  	height: 90px;


  	  


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


 #menu  ul .logo 
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

 #menu  ul li a
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
table {
  border-collapse: collapse;
  width: 95%;


  margin-left: auto;
  margin-right: auto;



}

table th:first-child
{
	width: 120px;
}
table th:nth-child(7),th:nth-child(8)
{
	width: 65px;

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

table td
{
text-align:center;
font-size: 14px;
background-color: white;


}
table .a,.b
{
text-align:right;
font-size: 14px;

}

table tr:nth-child(even) {
  background-color: #f9f9f9;
}
table tr:nth-child(odd) {
  background-color: #E5E8E8 ;
}

table th, table td {
  border: 1px solid #ddd;
  padding: 8px;
}



.search
{
  width: 95%;
  margin-top:20px;


  
  display: flex;
  align-items: center;

  justify-content: space-between;
  justify-content: right;


  background-color: white;
  height: 80px;

  border-radius: 10px 10px 0px 0px;

  margin-right: auto;
  margin-left: auto;


}
form
{
    display: flex;
    width: 100%;
  
  justify-content: right;
  align-items: center;






}
.search select
{
	width: 200px;
	height:40px;

	border-radius:10px;
  margin-left: 10px;
  margin-right: 10px;


	
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
.search h1
{
	margin-right: 170px;

}
button
{
	background-color:black;
	border: none;
	padding: 4px;
	
	color: white;

	border-radius: 3px;
	width: 50px; 


	

}
button .approve
{
		height: 20px;

	font-size: 20px;
}
.update 
{
	border: none;
	font-size: 15px;
	background-color: none;
	
}
.update a
{
	color: black;
}
.seeall
{
	text-decoration: none;
	color:black;
	font-size: 15px;
	text-align: center;
	padding: 5px;



}
input[type='date']{
	height: 35px;
	width: 150px;

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
      overflow: hidden;

    } 
    .welcome h1
    {
      
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
    width: 20rem;
  
    }



  /* CSS for modal */
.modal, .modals {
    display: none;
    position: fixed;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);

    
}
.modal2, .modal2s
{
 display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 100%;
}
.modal-content, .modal-contents {

width: fit-content;
height: fit-content;


 padding: 10px;



    background-color: #fff;
    border-radius: 10px;
}

.close, .closes {
    float: right;
    cursor: pointer;
    font-size: 20px;
}





.modal .modal-content .container1, .modals .modal-contents .container1
{

  

  height: 120%;
 width: 120%;



  
  border:none;



  color: #37251b;

  display: flex;
  justify-content: center;


}
.modal .modal-content .container1 form, .modals .modal-contents .container1 form
{
margin-right: auto;
margin-left: auto;

margin-top: 10px;



display: flex;
flex-direction: column;




}
.time
{
  display: flex;
  justify-content:space-evenly;
  width: 100%;


}
.modal .modal-content .container1 form input, .modals .modal-contents .container1 form input 
{
 height:20px;
  width: 120px;
  font-weight: bold;
  border:none;
  background-color: rgba(0, 0, 0,0);
  border-bottom: 2px solid #37251b;
  color: black;

  margin-bottom: 10px;
  font-size: 12px;



}
.modal .modal-content .container1 form select,.modals .modal-contents .container1 form .Second select
{
 height:20px;
  width: 110px;
  font-weight: bold;
  border:none;
  background-color: rgba(0, 0, 0,0);
  border-bottom: 2px solid #37251b;
  color: black;

  margin-bottom: 10px;
  font-size: 12px;
}


.modal .modal-content .container1 .name, .modals .modal-contents .container1 .name
{
    
  border-bottom: none;
  font-size: 20px;
  padding: 20px;
  width: 100%;



}
.modal .modal-content .container1 form .date, .modals .modal-contents .container1 form .date
{
  width: 100px;
  
  font-size: 12px;





border-bottom: none;
}



.modal .modal-content .container1 form .submit, .modals .modal-contents .container1 form .submit
{
background-color:#37251b;
color: white;
text-align: center;
border: none;
border-radius: 5px;
height: 30px;
width: 150px;

margin-left:5%;


} 



.modal .modal-content .container2, .modals .modal-contents .container2
{

  display: flex;
  align-items: center;
  justify-content: center;

 height: 100%;
 width: 100%;



}
.modal .modal-content .container2 img, .modals .modal-contents .container2 img
{
 width: 300px;






}
.modal .modal-content table, .modals .modal-contents table  
{


    border-top: 5px solid #37251b;
  border-bottom: 5px solid #37251b;

   
background-color: white;

background-color: none;



  
}

.modal .modal-content table td, .modals .modal-contents table td
{




border: none;



  
}
 .modal .modal-content label,  .modals .modal-contents label
{
  font-size: 10px;
}

.modals .modal-contents .container1 form select
{
 margin-bottom: 20px;
 height: 30px;
 border: none;
 width: 270px;
 border-bottom: 2px solid #37251b ;
}

.addattendance
{

  width: 95%;
  margin-left: auto;
  margin-right: auto;
  height: 50px;
  display: flex;
  justify-content: right;
  align-items: center;

}
.addattendance input
{
    background-color: #37251b;
    border: none;
    color: white;
     padding: 3px 12px 3px 15px;  
    text-align: center;
    text-decoration: none;
    display: inline-block;
      border-radius: 5px;
 
    cursor: pointer;

    height: 30px;
    margin-right: 10px;
}



     @media screen and  (min-width: 320px) and (max-width: 767px) {
    .search
     {
      display: flex;
      height: 60px;
     }
      .search input[type="date"],
    .search input[type="submit"]{
      
      
      height: 25px;
      width: 80px;
      font-size: 10px;






    }
     .search select
     {
      height: 27px;
      width: 100px;
      font-size: 10px;
      border-radius: 8px;
     }


    .search input[type="submit"]
    {
      margin-right:10px;
    }


   form
{
    display: flex;
  
  justify-content: right;
  align-items: center;
 

}

  
      table {
      width: 95%;


      
    }
    table tr th
    {
      font-size: 7px;
    }
    table tr td
    {
      font-size: 7px;
    }
    table button
    {
      font-size: 7px;
      width: 20px;
    }
    table .a, .b{
 font-size: 7px;

    }
    table input[type="checkbox"]
    {
      height: 9px;

    }
    table th:nth-child(7),th:nth-child(8)
{
  width: 50px;

}
   table th:first-child
{
  width: 50px;

}



          .welcome{
        height:200px;
        margin-top: 20px;
      }


        .welcome h1
      {


        font-size:20px;
        margin-top: 0px;




      }

      .welcome h1 span
      {
        font-size:10px;
      }

  .barista
      {
        width: 33%;
      }

table th:nth-child(3), th:nth-child(4)
  {
    display: none;
  }
  table td:nth-child(3), td:nth-child(4)
  {
    display: none;
  }
     .search input[type="date"]
{

  width: 50px;
    

}


      .modal .modal-content table td:nth-child(2), .modals .modal-contents table td:nth-child(2)
{


display: none;


  
}

.time{

width:90%;


}

.modal .modal-content .container1,.modals .modal-contents .container1
{
width: 100%;
}


.modals .modal-contents .container1 form select
{

 width: 250px;
 border-bottom: none;

}
.modal .modal-content .container1 form input, .modals .modal-contents .container1 form input
{
 height:20px;
  width: 100px;
  font-weight: bold;
  border:none;
  background-color: rgba(0, 0, 0,0);
  border-bottom: 2px solid #37251b;
  color: black;

  margin-bottom: 10px;
  font-size: 12px;



}


}
 
    .error {
            color: red;
        }

        .success {
            color: green;
        }

        .error-border {
            border: 1px solid red;
        }

        .success-border {
            border: 1px solid green;
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
            <img class="barista" src="images/times.png">
            <h1>Employee Attendance <br><span>A digital solution for tracking and managing employee presence and absence, streamlining administrative processes and enhancing workforce accountability</h1>

          
          </div>

          <?php
  $sql = "SELECT password FROM account
    WHERE username= '$username' ";
    $result = mysqli_query($conn,$sql);

// Check if the query was successful
if ($result) {
    // Fetch the result as an associative array
    $row = $result->fetch_assoc();

    // Check if a row was found
    if ($row) {
        // Get the password from the result
        $password = $row['password'];
        

    } else {
        echo "No matching username found";
    }

    // Free the result set
    $result->free();
} else {
    
}
?>



<div class="search">

  <form method="POST" action="attendance.php">
   
    <input type="date" name="selected_date" >
    <select name="name">
    	 <?php
    echo '<option disabled selected>Search Employee:</option>';

    $sql_all = "SELECT name FROM emp_info";
    $result_all = mysqli_query($conn, $sql_all);
    while ($row_all = mysqli_fetch_assoc($result_all)) {
      echo '<option value="' . $row_all['name'] . '">'  . $row_all['name'] . '</option>';
    }
    ?>
   </select>
    <input type="submit" name="search" value="SEARCH"><br>
  </form>
</div>



<?php  
if (isset($_POST['search']) && isset($_POST['name']) && empty($_POST['selected_date'])) { 
    $name = $_POST['name'];





    
    $sql = "SELECT * FROM emp_attendance WHERE name = '$name' ORDER BY date_timeinin DESC, first_timein DESC ";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        // Check if there are rows returned
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr> 
                <th>Name</th>
                <th>Date</th>
                <th>First Time In</th>
                <th>First Time Out</th>
                <th>Second Time In</th>
                <th>Second Time Out</th>
                <th>Time in Status</th>
                <th>Overtime</th>
                <th>Confirm</th>
                <th>Total hours</th>
                <th>Action</th>
            </tr>";

            // Loop through the rows and display the data
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['date_timeinin']}</td>";
                echo "<td>{$row['first_timein']}</td>";
                echo "<td>{$row['first_timeout']}</td>";
                echo "<td>{$row['second_timein']}</td>";
                echo "<td>{$row['second_timeout']}</td>";
                echo "<td class='timeinStatusCell'>{$row['timein_status']}</td>"; 

                echo "<td class='b'>";
                echo "{$row['overtime_totalhours']}&nbsp;&nbsp;&nbsp;";
                echo "<form action='process.php' method='POST' onsubmit='return confirmUpdate()'>";
                echo "<input type='hidden' name='id' value='{$row['id']}'>";
                echo "<input type='hidden' name='ot' value='{$row['overtime_totalhours']}' >";
                echo "<input type='checkbox' name='ot_checkbox' id='myCheckbox2' value='{$row['overtime_totalhours']}' ";
                echo !empty($row['approve_ot']) ? 'checked' : '';
                echo ">";                
                echo "</td>";
                echo "<td>";
                echo "<button name='approve' type='submit'><i class='fa fa-check'></i></button>";
                echo "</td>";
                echo "<input type='hidden' name='checkbox_submit' value='1'>"; // Add a hidden input to identify checkbox submission

                echo "</form>";

                echo "<td>{$row['shift_totalhours']}</td>";

                echo "<td class='update'>";
                echo "<button class='openModalButton' 
                        data-name='{$row['name']}'
                        data-ftimein='{$row['first_timein']}'
                        data-ftimeout='{$row['first_timeout']}'
                        data-stimein='{$row['second_timein']}'
                        data-date='{$row['date_timein']}'
                        data-dateout='{$row['date_timeout']}'
                        data-id='{$row['id']}'
                        data-stimeout='{$row['second_timeout']}'
                        data-othours='{$row['overtime_totalhours']}'
                        data-totalhours='{$row['shift_totalhours']}'
                    >
                    <i class='fa fa-pencil'></i>
                    </button>";
                echo "</td>";

                echo "</tr>";
            }

            echo "</table>";

            // Pagination Links
     
        } else {
            echo "<table>";
            echo "<tr> 
                <th>Name</th>
                <th>Date</th>
                <th>First Time In</th>
                <th>First Time Out</th>
                <th>Second Time In</th>
                <th>Second Time Out</th>
                <th>Time in Status</th>
                <th>Overtime</th>
                <th>Confirm</th>
                <th>Total hours</th>
                <th>Action</th>
            </tr>";
            echo "<tr><td colspan='11' style='text-align: center;'>No record found.</td></tr>";
            echo "</table>";
        }
    } else {
        echo "Error: " . mysqli_error($connection);
    }
    ?>
    <a class="seeall" href="attendance.php">See All</a>
    <?php  
}
?>











<?php  

if (isset($_POST['search']) && isset($_POST['selected_date']) && !empty($_POST['selected_date']) && !isset($_POST['name'])) {	
$selecteddate=$_POST['selected_date'];
$formattedDate = date('F j, Y', strtotime($selecteddate));





        	$sql="SELECT * FROM emp_attendance where date_timein = '$formattedDate' ";
        	$result = mysqli_query($conn,$sql);

// Check if the query was successful
if ($result) {
	 if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr> 
    <th>Name</th>
    <th>Date</th>
    <th>First Time In</th>
    <th>First Time Out</th>
    <th>Second Time In</th>
    <th>Second Time Out</th>
    <th>Time in Status</th>

    <th>Overtime</th>
    <th>Confirm</th>
    <th>Total hours</th>
    <th>Action</th>
    </tr>";

    // Loop through the rows and display the data
    while ($row = mysqli_fetch_assoc($result)) {
    	
        echo "<tr>";

        ?>


	
 <td><?php echo $row['name']; ?></td>
 <td><?php echo $row['date_timeinin']; ?></td>
<td><?php echo $row['first_timein']; ?></td>
<td><?php echo $row['first_timeout']; ?></td>
<td><?php echo $row['second_timein']; ?></td>
<td><?php echo $row['second_timeout']; ?></td>
<td class="timeinStatusCell"><?php echo $row['timein_status']; ?></td> 
<form action="process.php" method="POST" onsubmit="return confirmUpdate()">
  

  <td class="b">
    <?php echo $row['overtime_totalhours']; ?>&nbsp;&nbsp;&nbsp;
    <input type="checkbox" name="ot" id="myCheckbox2" value="<?php echo $row['overtime_totalhours']; ?>" <?php if (!empty($row['approve_ot'])) echo 'checked'; ?>>
  </td>

  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

  <td><button name="approve" type="submit"><i class="fa fa-check"></i></button></td>
</form>

<script>
  function confirmUpdate() {
    var confirmed = confirm('Are you sure you want to update the record?');
    if (!confirmed) {
      // Form submission canceled
      window.location.replace("attendance.php");
    }
    return confirmed;
  }
</script>



<td><?php echo $row['shift_totalhours']; ?></td>


<td class="update">
    <button class="openModalButton" 
    data-name="<?php echo $row['name']; ?>" 
    data-ftimein="<?php echo $row['first_timein']; ?>"
    data-ftimeout="<?php echo $row['first_timeout']; ?>"
    data-stimein="<?php echo $row['second_timein']; ?>"
    data-date="<?php echo $row['date_timein']; ?>"
    data-dateout="<?php echo $row['date_timeout']; ?>"
    data-id="<?php echo $row['id']; ?>"
    data-stimeout="<?php echo $row['second_timeout']; ?>"
    data-othours="<?php echo $row['overtime_totalhours'];?>"
    data-totalhours="<?php echo$row['shift_totalhours'] ; ?>"


    >
    <i class="fa fa-pencil"></i>

  </button>
  
</td>


 
<?php
        echo "</tr>";
    }

    echo "</table>";
  
} else
{
	      echo "<table>";
      echo "<tr> 
        <th>Name</th>
        <th>Date</th>
        <th>First Time In</th>
        <th>First Time Out</th>
        <th>Second Time In</th>
        <th>Second Time Out</th>
        <th>Time in Status</th>
      
        <th>Overtime</th>
        <th>Confirm</th>
        <th>Total hours</th>
        <th>Action</th>
      </tr>";?>
<tr><td colspan="11" style="text-align: center;">No record found.</td></tr>

   <?php
 
 }
 echo "</table>";  
 
}
    ?>
    <a class="seeall" href="attendance.php">See All</a>
    <?php
}


?>


<?php  

if (isset($_POST['search']) && isset($_POST['selected_date']) && !empty($_POST['selected_date']) && isset($_POST['name'])) { 
$selecteddate=$_POST['selected_date'];
$formattedDate = date('F j, Y', strtotime($selecteddate));
$name=$_POST['name'];





          $sql="SELECT * FROM emp_attendance where date_timein = '$formattedDate' and name='$name' ";
          $result = mysqli_query($conn,$sql);

// Check if the query was successful
if ($result) {
   if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr> 
    <th>Name</th>
    <th>Date</th>
    <th>First Time In</th>
    <th>First Time Out</th>
    <th>Second Time In</th>
    <th>Second Time Out</th>
    <th>Time in Status</th>

    <th>Overtime</th>
    <th>Confirm</th>
    <th>Total hours</th>
    <th>Action</th>
    </tr>";

    // Loop through the rows and display the data
    while ($row = mysqli_fetch_assoc($result)) {
      
        echo "<tr>";

        ?>


  
 <td><?php echo $row['name']; ?></td>
 <td><?php echo $row['date_timeinin']; ?></td>
<td><?php echo $row['first_timein']; ?></td>
<td><?php echo $row['first_timeout']; ?></td>
<td><?php echo $row['second_timein']; ?></td>
<td><?php echo $row['second_timeout']; ?></td>
<td class="timeinStatusCell"><?php echo $row['timein_status']; ?></td> 
<form action="process.php" method="POST" onsubmit="return confirmUpdate()">
  

  <td class="b">
    <?php echo $row['overtime_totalhours']; ?>&nbsp;&nbsp;&nbsp;
    <input type="checkbox" name="ot" id="myCheckbox2" value="<?php echo $row['overtime_totalhours']; ?>" <?php if (!empty($row['approve_ot'])) echo 'checked'; ?>>
  </td>

  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

  <td><button name="approve" type="submit"><i class="fa fa-check"></i></button></td>
</form>

<script>
  function confirmUpdate() {
    var confirmed = confirm('Are you sure you want to update the record?');
    if (!confirmed) {
      // Form submission canceled
      window.location.replace("attendance.php");
    }
    return confirmed;
  }
</script>



<td><?php echo $row['shift_totalhours']; ?></td>


<td class="update">
    <button class="openModalButton" 
    data-name="<?php echo $row['name']; ?>" 
    data-ftimein="<?php echo $row['first_timein']; ?>"
    data-ftimeout="<?php echo $row['first_timeout']; ?>"
    data-stimein="<?php echo $row['second_timein']; ?>"
    data-date="<?php echo $row['date_timein']; ?>"
    data-dateout="<?php echo $row['date_timeout']; ?>"
    data-id="<?php echo $row['id']; ?>"
    data-stimeout="<?php echo $row['second_timeout']; ?>"
    data-othours="<?php echo $row['overtime_totalhours'];?>"
    data-totalhours="<?php echo$row['shift_totalhours'] ; ?>"


    >
    <i class="fa fa-pencil"></i>

  </button>
</td>


 
<?php
        echo "</tr>";
    }

    echo "</table>";
  
} else
{
        echo "<table>";
      echo "<tr> 
        <th>Name</th>
        <th>Date</th>
        <th>First Time In</th>
        <th>First Time Out</th>
        <th>Second Time In</th>
        <th>Second Time Out</th>
        <th>Time in Status</th>
        
        <th>Overtime</th>
        <th>Confirm</th>
        <th>Total hours</th>
        <th>Action</th>
      </tr>";?>
<tr><td colspan="12" style="text-align: center;">No record found.</td></tr>

   <?php
 
 }
 echo "</table>";  
 
}
    ?>
    <a class="seeall" href="attendance.php">See All</a>
    <?php
}


?>




















 <?php
    if (!isset($_POST['search']) || !isset($_POST['search'])) {    
    
// Determine the total number of items from the database
$sqlTotalItems = "SELECT COUNT(*) as total FROM emp_attendance";
$resultTotalItems = mysqli_query($conn, $sqlTotalItems);

if ($resultTotalItems) {
    $rowTotalItems = mysqli_fetch_assoc($resultTotalItems);
    $totalItems = $rowTotalItems['total'];
} else {
    // Handle the error, e.g., by setting a default total or displaying an error message
    $totalItems = 0;
}

$itemsPerPage = 15;
$totalPages = ceil($totalItems / $itemsPerPage);

// Get the current page from the query string
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the offset for the SQL query
$offset = ($current_page - 1) * $itemsPerPage;

// Fetch data based on the current page and items per page
// In a real-world scenario, you would fetch data from your database here

$sql = "SELECT * FROM emp_attendance ORDER BY date_timeinin DESC, first_timein DESC LIMIT $offset, $itemsPerPage";
$result = mysqli_query($conn, $sql);





        // Check if the query was successful
        if ($result) {
            echo "<table>";
            echo "<tr> 
            <th>Name</th>
            <th>Date</th>
            <th>First Time In</th>
            <th>First Time Out</th>
            <th>Second Time In</th>
            <th>Second Time Out</th>
            <th>Time in Status</th>
            <th>Overtime</th>
            <th>Confirm</th>
            <th>Total hours</th>
            <th>Action</th>
            </tr>";

            // Loop through the rows and display the data
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";

                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['date_timeinin']}</td>";
                echo "<td>{$row['first_timein']}</td>";
                echo "<td>{$row['first_timeout']}</td>";
                echo "<td>{$row['second_timein']}</td>";
                echo "<td>{$row['second_timeout']}</td>";
                echo "<td class='timeinStatusCell'>{$row['timein_status']}</td>";

                echo "<td class='b'>";
                echo "{$row['overtime_totalhours']}&nbsp;&nbsp;&nbsp;";
                echo "<form action='process.php' method='POST' onsubmit='return confirmUpdate()'>";
                echo "<input type='hidden' name='id' value='{$row['id']}'>";
                echo "<input type='hidden' name='ot' value='{$row['overtime_totalhours']}' >";
                echo "<input type='checkbox' name='ot_checkbox' id='myCheckbox2' value='{$row['overtime_totalhours']}' ";
                echo !empty($row['approve_ot']) ? 'checked' : '';
                echo ">";                
                echo "</td>";
                echo "<td>";
                echo "<button name='approve' type='submit'><i class='fa fa-check'></i></button>";
                echo "</td>";
                echo "<input type='hidden' name='checkbox_submit' value='1'>"; // Add a hidden input to identify checkbox submission

                echo "</form>";

                echo "<td>{$row['shift_totalhours']}</td>";

                echo "<td class='update'>";
                echo "<button class='openModalButton' 
                        data-name='{$row['name']}'
                        data-ftimein='{$row['first_timein']}'
                        data-ftimeout='{$row['first_timeout']}'
                        data-stimein='{$row['second_timein']}'
                        data-date='{$row['date_timein']}'
                        data-dateout='{$row['date_timeout']}'
                        data-id='{$row['id']}'
                        data-stimeout='{$row['second_timeout']}'
                        data-othours='{$row['overtime_totalhours']}'
                        data-totalhours='{$row['shift_totalhours']}'
                        data-nd='{$row['nightdeff']}'
                        data-status='{$row['timein_status']}'

                    >
                    <i class='fa fa-pencil'></i>
                    </button>";
                echo "</td>";


                echo "</tr>";
            }

            echo "</table>";?>
                <!-- Pagination Links -->
   <ul class="pagination">
        <?php if ($current_page > 1): ?>
            <li><a href="?page=<?php echo ($current_page - 1); ?>">Previous</a></li>
        <?php endif; ?>

        <?php if ($current_page < $totalPages): ?>
            <li><a href="?page=<?php echo ($current_page + 1); ?>">Next</a></li>
        <?php endif; ?>
    </ul><?php
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }
    ?>



    <script>
        function confirmUpdate() {
            return confirm('Are you sure you want to update the record?');
        }
    </script>

        	 



<div id="modal" class="modal">
  <div class="modal2">
    <div class="modal-content">
        <!-- Content for the modal -->
        <span class="close" id="closeModal">&times;</span>
       

       <table>
            <tr>
              <td>
                <div class="container1">
     <form action="process.php" method="POST">
      <div>
        <input class="name" type="text" name="name" id="name"  disabled>
      </div>
    
    
    <div class="time">        
        <div class="First">
            <label for="ftimein">First Time-In:</label><br>
            <input type="text" name="ftimein" id="ftimein" ><br>
            <label for="ftimeout">First Time-Out:</label><br>
            <input type="text" name="ftimeout" id="ftimeout" ><br>
            <label for="datein">Date Time-In:</label><br>
            <input type="text" name="datein" id="datein" ><br>
            <label for="ot">Overtime:</label><br>
            <input type="text" name="ot" id="ot"  placeholder="Enter OT:"><br>
            <label for="nightdifferential">Night Differential:</label><br>
            <input type="text" name="nightdifferential" id="nightdifferential" required><br>
            <br>
        </div>

        <div class="Second">
            <label for="stimein">Second Time-In:</label><br>
            <input type="text" name="stimein" id="stimein"  ><br>
            <label for="stimeout">Second Time-Out:</label><br>
            <input type="text" name="stimeout" id="stimeout" ><br>
            <label for="dateout">Date Time-Out:</label><br>
            <input type="text" name="dateout" id="dateout" ><br>
            <label for="totalhours">Total hours:</label><br>
            <input type="text" name="totalhours" id="totalhours" required><br>
            <label for="status">Status:</label><br>
           <select name="status" id="status">
             <option>Ontime</option>
             <option>Late</option>
             <option>Absent</option>
             <option>No Schedule</option>

           </select><br>
            <br>
        </div>
    </div>
    <div>
       <input type="hidden" name="id" id="id" >
    <input type="submit" class="submit" name="updateattendance" value="UPDATE">
    </div>
   
</form>

      </div>
  

                
              </td>
              <td>

                    <div class="container2">
        <img src="images/times.png">
      </div>
                
              </td>
            </tr>
          </table>


    </div>
    </div>
</div>





<div id="modals" class="modals">
  <div class="modal2s">
    <div class="modal-contents">
        <!-- Content for the modal -->
        <span class="closes" id="closeModals">&times;</span>
       

       <table>
            <tr>
              <td>
                <div class="container1">
     <form action="process.php" method="POST" id="passwordForm">
      <div>
 
                   <select name="name" id="name">
                                    <option disabled selected>Select Employee name:</option>
                                    <?php
                                    $sql_all = "SELECT name FROM emp_info WHERE classification IS NULL ";
                                    $result_all = mysqli_query($conn, $sql_all);

                                    while ($row_all = mysqli_fetch_assoc($result_all)) {
                                        echo '<option value="' . $row_all['name'] . '">' . $row_all['name'] . '</option>';
                                    }
                                    ?>
                                </select>
      </div>
    
    
    <div class="time">        
        <div class="First">
            <label for="ftimein">First Time-In:</label><br>
            <input type="text" name="ftimein" id="ftimein" required><br>
            <label for="ftimeout">First Time-Out:</label><br>
            <input type="text" name="ftimeout" id="ftimeout" required><br>
            <label for="datein">Date Time-In:</label><br>
            <input type="text" name="datein" id="datein" required ><br>
            <label for="ot">Overtime:</label><br>
            <input type="text" name="ot" id="ot" required><br>
             <label for="nightdifferential">Night Differential:</label><br>
            <input type="text" name="nightdifferential" id="nightdifferential" required><br>
            <br>
        </div>

        <div class="Second">
            <label for="stimein">Second Time-In:</label ><br>
            <input type="text" name="stimein" id="stimein"  required><br>
            <label for="stimeout">Second Time-Out:</label ><br>
            <input type="text" name="stimeout" id="stimeout" required><br>
            <label for="dateout">Date Time-Out:</label><br>
            <input type="text" name="dateout" id="dateout" required ><br>
            <label for="totalhours">Total hours:</label><br>
            <input type="text" name="totalhours" id="totalhours"required><br>
             <label for="status">Status:</label><br>
            <select name="status" id="status">
            <option disabled selected>Select Status:</option>
             <option>Ontime</option>
             <option>Late</option>
             <option>Absent</option>
             <option>No Schedule</option>

           </select><br>

           
            <br>
        </div>

    </div>

    <input type="hidden" name="username"   value="<?php echo $username ?>">
     <label for="adminpass">Administator Password:</label>
     <input type="password" name="adminpass" id="adminpass" required style="width: 250px;  text-align: center;">

        <span style="font-size:10px;" id="passwordMessage" class="error"></span><br>
    <div>
       <input type="hidden" name="id" id="id" >
    <input style="display:none;" type="submit" class="submit" name="addattendance"  id="submitBtn" value="Insert Record">
    </div>
   
</form>

      </div>
  

                
              </td>
              <td>

                    <div class="container2">
        <img src="images/times.png">
      </div>
                
              </td>
            </tr>
          </table>


    </div>
    </div>
</div>


<div class="addattendance">
  <input type="submit" name="addattendance" value="Add Record">
  
</div>

</div>  

<?php
require_once "config.php";

// Calculate yesterday's date in the desired format
$yesterday = date('F d, Y', strtotime('-1 day'));

// SQL query to retrieve names from emp_weekly_schedule
$sql = "SELECT name
        FROM emp_weekly_schedule
        WHERE 
            schedule LIKE '$yesterday%' AND 
            (
                schedule LIKE '%Opening'
                OR schedule LIKE '%Midshift 1'
                OR schedule LIKE '%Midshift 2'
                OR schedule LIKE '%Midshift 3'
                OR schedule LIKE '%Midshift 4'
                OR schedule LIKE '%Midshift 5'
                OR schedule LIKE '%Closing 1'
                OR schedule LIKE '%Closing 2'
                OR schedule LIKE '%Closing 3'
                OR schedule LIKE '%Closing 4'
                OR schedule LIKE '%Closing 5'
            )";

// Execute the query
$result_schedule = $conn->query($sql);

// Check if there are results from emp_weekly_schedule
if ($result_schedule->num_rows > 0) {
    // Output data of each row
    while ($row_schedule = $result_schedule->fetch_assoc()) {
        $name = $row_schedule["name"];

        // Check if the name has a first_timein in emp_attendance on the specific date (yesterday)
        $sql_attendance = "SELECT * FROM emp_attendance WHERE name = '$name' AND first_timein IS NOT NULL AND date_timein = '$yesterday'";
        $result_attendance = $conn->query($sql_attendance);

        if ($result_attendance === false) {
            echo "Error in attendance query: " . $conn->error . "<br>";
        } else {
            if ($result_attendance->num_rows > 0) {
                // Output data from emp_attendance
                // Your logic here for when first_timein is present
            } else {
                // Calculate yesterday's date in the desired format "Y-m-d"
                $yesterdayFormatted = date('Y-m-d', strtotime('-1 day'));

                // Assuming $name contains the employee's name
                $insert_query = "INSERT INTO emp_attendance (name, timein_status, date_timein, date_timeinin, first_timein, first_timeout, second_timein,second_timeout, overtime_totalhours, shift_totalhours, nightdeff) 
                                 SELECT '$name', 'Absent', '$yesterday', '$yesterdayFormatted','00:00', '00:00', '00:00', '00:00', '00:00','00:00','00:00'
                                 FROM DUAL
                                 WHERE NOT EXISTS (
                                     SELECT 1
                                     FROM emp_attendance
                                     WHERE name = '$name' AND timein_status = 'absent' AND date_timein = '$yesterday' AND date_timeinin = '$yesterdayFormatted'
                                 )";

                $insert_result = $conn->query($insert_query);

                if ($insert_result === false) {
                    echo "Error inserting record in emp_attendance: " . $conn->error . "<br>";
                } else {
                    if ($conn->affected_rows > 0) {
                    
                    } else {
                   
                    }
                }
            }
        }
    }
} else {
  
}

// Close the connection

?>



<?php
require_once "config.php";

$yesterday = date('F d, Y', strtotime('-1 day'));

// Calculate the timestamp for today, 5 AM
$current_datetime = date('Y-m-d H:i:s');

// Set the time to 5 AM
$target_datetime = date('Y-m-d', strtotime($current_datetime)) . ' 05:00:00';

// Calculate the timestamp for the target date and time
$target_timestamp = strtotime($target_datetime . ' 05:00:00');

// Set the reference time to 5 AM for $timess
$timess = strtotime($current_datetime);

if ($timess >= $target_timestamp){
    // Update records in emp_attendance
    $sql = "SELECT * FROM emp_attendance WHERE second_timein IS NULL AND second_timeout IS NULL AND date_timein = '$yesterday'";

    // Execute the query
    $result_schedule = $conn->query($sql);

    // Check if there are results from emp_weekly_schedule
    if ($result_schedule->num_rows > 0) {
        while ($row_all = mysqli_fetch_assoc($result_schedule)) {
            $firstin = strtotime($row_all['first_timein']);
            $firstout = strtotime($row_all['first_timeout']);  

            // Calculate the time difference in seconds
            $time_difference = $firstout - $firstin;

            // Convert the time difference back to 'H:i:s' format
            $allShift = gmdate('H:i', $time_difference);

            // Update the emp_attendance record using emp_attendance_id
            $emp_attendance_id = $row_all['id'];
            $sql_update = "UPDATE emp_attendance 
                           SET second_timein = '00:00', 
                               second_timeout = '00:00', 
                               shift_totalhours = '$allShift', 
                               overtime_totalhours = '00:00', 
                               nightdeff = '00:00',
                               timein_status= 'Undertime'
                           WHERE id = $emp_attendance_id";

        }
    }
} 

// Close the database connection

?>

<?php


?>




        <div class="box3"></div>


</body>


<script >


	
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



var modal = document.getElementById('modal');
var closeModalButton = document.getElementById('closeModal');
var openModalButtons = document.querySelectorAll('.openModalButton');

var nameInput = document.getElementById('name');
var ftimeinInput = document.getElementById('ftimein');
var ftimeoutInput = document.getElementById('ftimeout');
var dateinInput = document.getElementById('datein');
var otInput = document.getElementById('ot');
var stimeinInput = document.getElementById('stimein');
var stimeoutInput = document.getElementById('stimeout');
var dateoutInput = document.getElementById('dateout');
var totalhoursInput = document.getElementById('totalhours');
var idInput = document.getElementById('id');
var nightdifferential = document.getElementById('nightdifferential');
var statis = document.getElementById('status');


openModalButtons.forEach(function (button) {
    button.addEventListener('click', function () {
        modal.style.display = 'block';

        // Retrieve data from the button's data attributes
       var name = button.getAttribute('data-name');
        var ftimein = button.getAttribute('data-ftimein');
        var ftimeout = button.getAttribute('data-ftimeout');
        var stimein = button.getAttribute('data-stimein');
        var date = button.getAttribute('data-date');
        var dateout = button.getAttribute('data-dateout');
        var id = button.getAttribute('data-id');
        var stimeout = button.getAttribute('data-stimeout');
        var othours = button.getAttribute('data-othours');
        var totalhours = button.getAttribute('data-totalhours');
        var ndifferential = button.getAttribute('data-nd'); 
        var stat = button.getAttribute('data-status');

        // Populate the input fields in the modal
        nameInput.value = name;
        ftimeinInput.value = ftimein;
        ftimeoutInput.value = ftimeout;
        dateinInput.value = date;
        otInput.value = othours;
        stimeinInput.value = stimein;
        stimeoutInput.value = stimeout;
        dateoutInput.value = dateout;
        totalhoursInput.value = totalhours;
        idInput.value = id;
        nightdifferential.value = ndifferential;
        statis.value = stat; 

       

    });
});

closeModalButton.addEventListener('click', function () {
    modal.style.display = 'none';
});

window.addEventListener('click', function (event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
});





var modals = document.getElementById('modals');
var closeModalButtons = document.getElementById('closeModals');
var openModalButtonss = document.querySelectorAll('.addattendance');



openModalButtonss.forEach(function (button) {
    button.addEventListener('click', function () {
        modals.style.display = 'block';

  
    });
});

closeModalButtons.addEventListener('click', function () {
    modals.style.display = 'none';
});

window.addEventListener('click', function (event) {
    if (event.target == modals) {
        modals.style.display = 'none';
    }
});










var timeinStatusCells = document.getElementsByClassName('timeinStatusCell');

for (var i = 0; i < timeinStatusCells.length; i++) {
    var status = timeinStatusCells[i].innerText;

    if (status === 'Ontime') {
        timeinStatusCells[i].style.color = 'green';
    } else if (status === 'Late') {
        timeinStatusCells[i].style.color = 'red';
    } else if (status === 'No Schedule') {
        timeinStatusCells[i].style.color = 'grey';
    } else if (status === 'Undertime') {
        timeinStatusCells[i].style.color = 'purple';
    }
     else {
        // Default color for other cases
        timeinStatusCells[i].style.color = 'orange';
    }
}


   document.getElementById('adminpass').addEventListener('input', function() {
            validatePassword();
        });

           function validatePassword() {
        var passwordInput = document.getElementById('adminpass');
        var passwordMessage = document.getElementById('passwordMessage');
        var submitButton = document.getElementById('submitBtn');
        var username = "<?php echo $password ?>"; // Replace with your server-side logic to get the actual username and password

        if (passwordInput.value === "") {
            passwordInput.classList.remove('success-border', 'error-border');
            passwordMessage.innerText = '';
            passwordMessage.className = '';
            submitButton.style.display = 'none'; // Hide the submit button
        } else if (passwordInput.value === username) {
            passwordInput.classList.remove('error-border');
            passwordInput.classList.add('success-border');
            passwordMessage.innerText = 'Password Match';
            passwordMessage.className = 'success';
            submitButton.style.display = 'block'; // Show the submit button
        } else {
            passwordInput.classList.remove('success-border');
            passwordInput.classList.add('error-border');
            passwordMessage.innerText = 'Password does not match';
            passwordMessage.className = 'error';
            submitButton.style.display = 'none'; // Hide the submit button
        }
    }


</script>

</html>