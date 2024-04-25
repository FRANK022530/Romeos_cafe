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
 
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="images/newlogo.jpg" type="jpg">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  />
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
       flex: 1;
       margin-bottom: 100px;
        
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
table {
  width: 100%;
  border-collapse:collapse;
  border-radius:10px;
  
  margin: 20px 0px;

  margin-left: auto;
  margin-right: auto;

}



th, td {
	 border: 1px solid #ccc;
    padding: 5px;
  text-align: center;

}

th {
 background-color: #37251b; 
 color: white;
}
td
{
	font-size: 12px;
}


tr:nth-child(even) {
  background-color: #f2f2f2; /* Alternate row background color */
}

td button
{
	border: none;
}

a {
  text-decoration: none;
  color: black;
}



i {
  margin-right: 5px;
 

}


/* You can further customize the styles as needed. */

.addshift
{
	color: white;
	width: 120px;
	height: 35px;
	background-color: #37251b;
	border-radius: 5px;
	margin: 5px;

	position: relative;
	left: 200px;




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
      align-items: center;
    } 

      .barista
   {
    margin-left: 10px;
      width: 25rem;
  
   }
   .container
   {
   	width: 95%;
   	background-color: white;
   	margin-left: auto;
   	margin-right: auto;
   	border-radius: 10px;
   margin-top: 10px;

   
   display: flex;
   flex-direction: column;
   align-items:flex-end;


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
  @media screen and  (min-width: 320px) and (max-width: 767px) {
  
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
        font-size:10px;
        
      }
  .barista
      {
        width: 33%;
      }

      .modal .modal-content table td:nth-child(2)
{


display: none;


  
}



}







   /* CSS for modal */
.modal,.modals {
    display: none;
    position: fixed;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);

}

.modal2,.modal2s
{
 display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 100%;
}
.modal-content,.modal-contents {




width: fit-content;
height: fit-content;


 padding: 10px;



    background-color: #fff;
    border-radius: 10px;
}

.close,.closes {
    float: right;
    cursor: pointer;
     font-size: 20px;
}





.modal .modal-content .container1, .modals .modal-contents .container1
{

  

  height: 100%;
 width: 100%;

 


  
  border:none;



  color: #37251b;

  display: flex;
  justify-content: center;









}
.modal .modal-content .container1 form, .modals .modal-contents .container1 form
{

margin-top: 10px;


display: flex;
flex-direction: column;


width: 250px;

margin-left: auto;
margin-right: auto;



}

.time
{
  display: flex;
  justify-content: space-around;
  width: 100%;


}
.modal .modal-content .container1 form input, .modals .modal-contents .container1 form input
{
 height:20px;
  width: 250px;
  font-weight: bold;
  border:none;
  background-color: rgba(0, 0, 0,0);
  border-bottom: 2px solid #37251b;
  color: black;

  margin-bottom: 10px;
  font-size: 12px;

}
.modals .modal-contents .container1 form select
{
 margin-bottom: 10px;
 height: 20px;
 border: none;
 border-bottom: 2px solid black;
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
width: 250px;

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
 margin-left: auto;
 margin-right: auto;






}
.modal .modal-content table, .modals .modal-contents table 
{


    border-top: 5px solid #37251b;
  border-bottom: 5px solid #37251b;

   
background-color: white;

background-color: none;



  
}

.modal .modal-content table td,.modals .modal-contents table td
{




border: none;


width: 300px;



  
}
 .modal .modal-content label, .modals .modal-contents label
{
  font-size: 10px;
}

.openModalButton2
{
    width: 100px;
    padding: 8px 12px 8px 12px;
    margin: 30px;
    border-radius: 5px;

     background-color: #37251b; 
   

}
.openModalButton2 i
{

    color: white;

}
.openModalButton
{

  background-color: #056517;
    border: none;
    color: white;
     padding: 3px 12px 3px 15px;  
    text-align: center;
    text-decoration: none;
    display: inline-block;
      border-radius: 5px;
 
    cursor: pointer;

}
.delete
{

  background-color: #bf1029;
    border: none;
    color: white;
    padding: 3px 12px 3px 15px; 
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 5px;
 
    cursor: pointer;
}
.buttonss
{
    display: inline;
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
            <img class="barista" src="images/shift.png">
            <h1 >Employee Shifts <br><span >It vary scheduled periods during which employees are assigned to perform their job duties.<br><br>

            </h1>

          
          </div>



<div class="container">
    <table>
        <tr>
            <th>SHIFT</th>
            <th>TIME IN</th>
            <th>TIME OUT</th>
            <th>ACTION</th>
        </tr>
        <?php
        $sql = "SELECT * FROM shift where shift_status='Approve'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)):
        ?>
        <tr>
            <td><?php echo $row['shifts']; ?></td>
            <td><?php echo $row['time_in']; ?></td>
            <td><?php echo $row['time_out']; ?></td>
            <td>
                <button class="openModalButton" data-shift="<?php echo $row['shifts']; ?>" data-timein="<?php echo $row['time_in']; ?>" data-timeout="<?php echo $row['time_out']; ?>"><i class="fa solid fa-pen"></i></button>

            <form class="buttonss" action="process.php" method="POST" onsubmit="return confirmDelete();"> 
                 <button type="submit" name="deleteshift" class="delete"><i class="fa-solid fa-trash"></i></button>
                 <input type="hidden" name="shifts" value="<?php echo $row['shifts']; ?>">
            </form>

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete?");
    }
</script>

               
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
     <button class="openModalButton2"><i class="fa-solid fa-plus"></i></button>
</div>

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
                            <label>Shift:</label><br>
                            <input type="text" name="shifts" id="shift" disabled><br>
                            <input type="hidden" name="shifts" id="hiddenShift">
                            <label>Time-In:</label><br>
                            <input type="time" name="timein" id="timein" placeholder="Enter New Time In"><br>
                            <label>Time-Out:</label><br>
                            <input type="time" name="timeout" id="timeout" placeholder="Enter New Time Out"><br>
                            <br>
                            <input type="submit" class="submit" name="updateshift" value="UPDATE">
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
                            <form action="process.php" method="POST">
                                <label for="shift">Shift:</label><br>
                                <select name="shifts" id="shiftSelect">
                                    <option disabled selected>Select Shift:</option>
                                    <?php
                                    $sql_all = "SELECT shifts FROM shift WHERE shift_status!='Approve' ";
                                    $result_all = mysqli_query($conn, $sql_all);

                                    while ($row_all = mysqli_fetch_assoc($result_all)) {
                                        echo '<option value="' . $row_all['shifts'] . '">' . $row_all['shifts'] . '</option>';
                                    }
                                    ?>
                                </select>
                                <label for="timein">Time-In:</label><br>
                                <input type="time" name="timein" id="timein" placeholder="Enter New Time In" required=""><br>
                                <label for="timeout">Time-Out:</label><br>
                                <input type="time" name="timeout" id="timeout" placeholder="Enter New Time Out" required=""><br>

                                <br>
                                <input type="submit" class="submit" name="addshift" value="ADD SHIFT">
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


var modal = document.getElementById('modal');
var closeModalButton = document.getElementById('closeModal');
var openModalButtons = document.querySelectorAll('.openModalButton');
var shiftInput = document.getElementById('shift');
var hiddenShiftInput = document.getElementById('hiddenShift');
var timeInInput = document.getElementById('timein');
var timeOutInput = document.getElementById('timeout');

openModalButtons.forEach(function (button) {
    button.addEventListener('click', function () {
        modal.style.display = 'block';

        // Retrieve data from the button's data attributes
        var shift = button.getAttribute('data-shift');
        var timein = button.getAttribute('data-timein');
        var timeout = button.getAttribute('data-timeout');

        // Populate the input fields in the modal
        shiftInput.value = shift;
        hiddenShiftInput.value = shift; // Hidden field for form submission
        timeInInput.value = timein;
        timeOutInput.value = timeout;
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
var openModalButton2 = document.querySelectorAll('.openModalButton2');


openModalButton2.forEach(function (button) {
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

</script>

</html>