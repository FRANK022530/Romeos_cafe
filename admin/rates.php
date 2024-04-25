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


a {
  text-decoration: none;
  color: black;
}



i {
  margin-right: 5px;
 

}


/* You can further customize the styles as needed. */


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

    .container {
        display: flex;
        justify-content: center;
        align-items: center;

   
    }

    .rate {
        display: flex;
        flex-direction: column;
        width: 95%;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .display,
    .addrate {
        padding: 20px;
        box-sizing: border-box;

    }

    h2 {
        color: #333;
        text-align: left;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;

    }

    th, td {
        padding: 10px;
        text-align: center;
    
    }

    th {
        background-color: #37251b;
        color: #fff;
        text-align: center;
    }

    input[type="text"],
    input[type="number"],
    input[type="type"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        width: 200px;

        padding: 12px;
        border: none;
        border-radius: 5px;
        background-color: #37251b;
        color: #fff;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #543930;
    }

    .fa-trash {
        color: #e74c3c;
    }

    .addrate, .display {
        background-color: #f9f9f9;
    }

    /* Responsive styles */
    @media (min-width: 768px) {
        .rate {
            flex-direction: row;
            justify-content: space-between;
        }

        .display{
            flex: 1;
        }
      
        .addrate {
            flex: .5;
        }
    }
    form
    {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
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
            <h1 >Employee Rates  <br><span >This section empowers employers to input crucial data, including the initial rate update, cut-off date, and employee rates, streamlining the management of essential rate-related information<br><br>

            </h1>

          
          </div>

<br>

           <div class="container">
 <div class="rate">
          <div class="display">

    <form action="process.php" method="POST">
        <table>
             <?php 
            $sql = "SELECT * FROM cutoff";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <input type="hidden" name="cutoffid" value="<?php echo $row['id']; ?>">
                <td> <h5 style="margin: 3px">First Cut-off</h5> <input type="number" name="firstcutoff" min="1" max="31" placeholder="First Cut-off" value="<?php echo $row['first']; ?>"></td>
                 <td>  <h5 style="margin: 3px">Second Cut-off</h5><input  type="number" name="secondcutoff" min="1" max="31" placeholder="Second Cut-off" value="<?php echo $row['second']; ?>"></td>
                  
            </tr>
<?php
            }
            ?>
        </table>
        


        <table>
            <tr>
                <th>Name</th>
                <th>Status</th>
                <th>Rate</th>
            </tr>
            <?php 
            $sql = "SELECT * FROM emp_info";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><input  type="text" name="name_<?php echo $row['id']; ?>" value="<?php echo $row['name']; ?>" readonly></td>
                <td>        <select name="status_<?php echo $row['id']; ?>">
        
   <option value="<?php $row['status'] ?>" selected disabled><?php echo $row['status'] ?></option>
 <?php
    $sql_all = "SELECT status FROM emp_rate";    $result_all = mysqli_query($conn, $sql_all);
    while ($row_all = mysqli_fetch_assoc($result_all)) {
      echo '<option value="' . $row_all['status'] . '">'  . $row_all['status'] . '</option>';
    }
    ?>
   </select></td>
                <td><input type="text" name="rate_<?php echo $row['id']; ?>" value="<?php echo $row['rate']; ?>"></td>
            </tr>
            <?php
            }
            ?>
        </table>
        <input type="submit" name="emprate" value="UPDATE">
    </form>
</div>
 </div>
 </div>
<br>




             <div class="container">
        <div class="rate">
            <div class="display">
             
                <form action="process.php" method="POST">
                    <table>
                        <tr>
                            <th>Employee type</th>
                            <th>Rate</th>
                             <th>Action</th>
                        
                        </tr>
                        <?php 
                        $sql = "SELECT * FROM emp_rate";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><input type="text" name="status_<?php echo $row['id']; ?>" value="<?php echo $row['status']; ?>"></td>
                            <td><input type="text" name="rate_<?php echo $row['id']; ?>" value="<?php echo $row['rate']; ?>"></td>
                            <td><a href="process.php?deleterateid=<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <br>
                    <input type="submit" name="updaterate" value="UPDATE" style="margin-right: 20px;">
                </form>
            </div>

            <div class="addrate"><br>
                <h1>Add Employee Initial Rate</h1><br><br><br>
                <br>
                <form action="process.php" method="POST">
                    <input type="type" name="emptype" placeholder="Employee type"><br>
                    <input type="type" name="amount" placeholder="Amount"><br><br>
                    <input type="submit" name="addrate" value="ADD">
                </form>
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



</script>

</html>