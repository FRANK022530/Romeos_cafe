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

<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html>

<head>
  <title>ROMEO'S CAFE</title>

  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    justify-content: center;
    flex-direction: column;
    flex: 1;
    margin-bottom: 100px;

  }

  .box3 {

    background-color: #37251b;


    width: 100%;
    height: 90px;



  }


  .pagination {
    display: flex;
    list-style: none;
    padding: 0;


    width: 95%;
    margin-left: auto;
    margin-right: auto;
  }

  .pagination li {
    margin: 5px;
    background-color: white;
    border-radius: 10px;

  }

  .pagination a,
  .pagination span {
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

  #menu ul {
    list-style: none;
    height: 100vh;
    background-color: black;
    width: 150px;

  }

  #menu ul li {
    padding: 5px 20px 5px 20px;
    line-height: 52px;
    background-color: black;
    border-bottom: 1px solid grey;


  }

  #menu ul li:hover {
    width: 130px;
    text-align: center;
    background-color: #181818;

  }


  #menu ul .logo {

    padding: 0px;
    width: 150px;
    height: 150px;
  }

  #menu ul .logo img {
    width: 150px;
    height: 150px;
    background-color: none;

  }

  #menu ul li a i {
    color: white;
    font-size: 20px;
  }

  #menu ul li a {
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

  table {
    border-collapse: collapse;
    width: 95%;


    margin-left: auto;
    margin-right: auto;



  }

  table th:first-child {
    width: 120px;

  }

  table th:nth-child(7),
  th:nth-child(8) {
    width: 65px;

  }

  table th,
  table td {
    border: 1px solid #ddd;
    padding: 8px;
  }

  table th {
    background-color: #37251b;
    color: white;
    font-size: 14px;
  }

  table td:first-child {
    text-align: left;
  }

  table td {
    text-align: center;
    font-size: 14px;
    background-color: white;


  }

  table .a,
  .b {
    text-align: right;
    font-size: 14px;



  }

  table tr:nth-child(even) {
    background-color: #f9f9f9;
  }

  table tr:nth-child(odd) {
    background-color: #ddd;
  }


  table th,
  table td {
    border: 1px solid #ddd;
    padding: 8px;
  }



  .search {
    width: 95%;
    margin-top: 20px;



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

  form {
    display: flex;
    width: 100%;

    justify-content: right;
    align-items: center;







  }


  .search input[type="submit"] {
    width: 100px;
    height: 40px;

    background-color: #37251b;
    color: white;
    border-radius: 0px 5p x 5px 0px;

    margin-right: 50px;

    border-radius: 8px;

  }

  .search input[type="date"] {
    padding-left: 5px;
    padding-right: 5px;
    width: 110px;
    height: 38px;
    border-radius: 8px;
    margin-right: 10px;
    border: .5px solid black;

  }

  .search h1 {
    margin-right: 170px;

  }

  button {
    background-color: black;
    border: none;
    padding: 4px;

    color: white;

    border-radius: 3px;
    width: 50px;




  }

  button .approve {
    height: 20px;

    font-size: 20px;
  }

  .update {
    border: none;
    font-size: 15px;
    background-color: none;

  }

  .update a {
    color: black;
  }

  .seeall {
    text-decoration: none;
    color: black;
    font-size: 15px;
    text-align: center;
    padding: 10px;



  }

  input[type='date'] {
    height: 35px;
    width: 150px;

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
  }

  .welcome h1 {

    margin-left: 20px;
    margin-right: 40px;


  }

  span {
    font-size: 15px;
    font-weight: 100;
  }

  .barista {
    margin-left: 1rem;
    width: 18rem;

  }


  @media screen and (min-width: 768px) and (max-width: 1199px) {
    table {
      width: 10%;
    }

    .search h1 {
      margin-right: 0;
      margin-bottom: 10px;
    }

    .search input[type="date"],
    .search select,
    .search input[type="submit"] {
      width: 100%;
      margin-bottom: 10px;
    }

    form {
      display: flex;
      flex-direction: column;
      justify-content: right;
      align-items: center;
      margin-bottom: 10px;
    }



    table tr th {
      font-size: 9px;
    }

    table tr td {
      font-size: 9px;
    }
  }




  @media screen and (min-width: 320px) and (max-width: 767px) {
    .search {
      display: flex;
      height: 60px;
    }

    .search input[type="date"],
    .search input[type="submit"] {


      height: 25px;
      width: 80px;
      font-size: 10px;






    }

    .search select {
      height: 27px;
      width: 100px;
      font-size: 10px;
      border-radius: 8px;
    }


    .search input[type="submit"] {
      margin-right: 10px;
    }


    form {
      display: flex;

      justify-content: right;
      align-items: center;


    }


    table {
      width: 95%;

    }

    table tr th {
      font-size: 7px;
    }

    table tr td {
      font-size: 7px;
    }

    table button {
      font-size: 7px;
      width: 20px;
    }

    table .a,
    .b {
      font-size: 7px;

    }

    table input[type="checkbox"] {
      height: 9px;

    }

    table th:nth-child(7),
    th:nth-child(8) {
      width: 50px;

    }

    table th:first-child {
      width: 50px;

    }

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

    .barista {
      width: 33%;
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
      <img class="barista" src="images/times.png">
      <h1>Employee Attendance <br><span>A digital solution for tracking and managing employee presence and absence, streamlining administrative processes and enhancing workforce accountability</h1>


    </div>



    <div class="search">

      <form method="POST" action="attendance.php">
        <input type="date" name="selected_date">



        <input type="submit" name="search" value="SEARCH"><br>




      </form>
    </div>







    <?php
    if (!isset($_POST['search'])) {


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

      $itemsPerPage = 20;
      $totalPages = ceil($totalItems / $itemsPerPage);

      // Get the current page from the query string
      $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

      // Calculate the offset for the SQL query
      $offset = ($current_page - 1) * $itemsPerPage;

      // Fetch data based on the current page and items per page
      // In a real-world scenario, you would fetch data from your database here

      $sql = "SELECT * FROM emp_attendance WHERE name='$name' ORDER BY date_timeinin DESC, first_timein DESC LIMIT $offset, $itemsPerPage";


      $result = mysqli_query($conn, $sql);
      // Check if the query was successful
      if ($result) {
        echo "<table>";
        echo "<tr> 
    <th>Date</th>
    <th>First Time In</th>
    <th>First Time Out</th>
    <th>Second Time In</th>
    <th>Second Time Out</th>
    <th>Time in Status</th>

    <th>Overtime</th>
    <th>Total hours</th>
    </tr>";

        // Loop through the rows and display the data
        while ($row = mysqli_fetch_assoc($result)) {

          echo "<tr>";

    ?>



          <td><?php echo $row['date_timeinin']; ?></td>
          <td><?php echo $row['first_timein']; ?></td>
          <td><?php echo $row['first_timeout']; ?></td>
          <td><?php echo $row['second_timein']; ?></td>
          <td><?php echo $row['second_timeout']; ?></td>
          <td class="timeinStatusCell"><?php echo $row['timein_status']; ?></td>


          <td><?php echo $row['overtime_totalhours']; ?></td>



          <td><?php echo $row['shift_totalhours']; ?></td>






        <?php
          echo "</tr>";
        }

        echo "</table>";
        ?>
        <ul class="pagination">
          <?php if ($current_page > 1) : ?>
            <li><a href="?page=<?php echo ($current_page - 1); ?>">Previous</a></li>
          <?php endif; ?>

          <?php if ($current_page < $totalPages) : ?>
            <li><a href="?page=<?php echo ($current_page + 1); ?>">Next</a></li>
          <?php endif; ?>
        </ul><?php
            } else {
              echo "Error: " . mysqli_error($connection);
            }
          }
              ?>


    <?php

    if (isset($_POST['search']) && isset($_POST['selected_date']) && !empty($_POST['selected_date'])) {
      $selecteddate = $_POST['selected_date'];
      $formattedDate = date('F j, Y', strtotime($selecteddate));





      $sql = "SELECT * FROM emp_attendance where date_timein = '$formattedDate' AND name='$name' ";
      $result = mysqli_query($conn, $sql);



      if ($result) {
        echo "<table>";
        echo "<tr> 
    <th>Date</th>
    <th>First Time In</th>
    <th>First Time Out</th>
    <th>Second Time In</th>
    <th>Second Time Out</th>
    <th>Time in Status</th>

    <th>Overtime</th>
    <th>Total hours</th>
    </tr>";

        // Loop through the rows and display the data
        while ($row = mysqli_fetch_assoc($result)) {

          echo "<tr>";

    ?>



          <td><?php echo $row['date_timeinin']; ?></td>
          <td><?php echo $row['first_timein']; ?></td>
          <td><?php echo $row['first_timeout']; ?></td>
          <td><?php echo $row['second_timein']; ?></td>
          <td><?php echo $row['second_timeout']; ?></td>
          <td class="timeinStatusCell"><?php echo $row['timein_status']; ?></td>


          <td><?php echo $row['overtime_totalhours']; ?></td>



          <td><?php echo $row['shift_totalhours']; ?></td>






    <?php
          echo "</tr>";
        }

        echo "</table>";
      } else {
        echo "Error: " . mysqli_error($connection);
      }
    }
    ?>
  </div>
  <div class="box3"></div>


</body>
<script>
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




  var timeinStatusCells = document.getElementsByClassName('timeinStatusCell');

  for (var i = 0; i < timeinStatusCells.length; i++) {
    var status = timeinStatusCells[i].innerText;

    if (status === 'Ontime') {
      timeinStatusCells[i].style.color = 'green';
    } else if (status === 'Late') {
      timeinStatusCells[i].style.color = 'red';
    } else if (status === 'No Schedule') {
      timeinStatusCells[i].style.color = 'grey';
    } else {
      // Default color for other cases
      timeinStatusCells[i].style.color = 'orange';
    }
  }
</script>

</html>