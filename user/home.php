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
    <title>ROMEO'S CAFE</title>

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


    .modal {
        display: none;
        position: fixed;
        /* Use 'fixed' to keep the modal fixed on the viewport */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);


    }

    .modal2 {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;


    }

    .modal-content {
        width: fit-content;
        height: fit-content;
        padding: 10px;
        background-color: #fff;
        border-radius: 10px;

    }

    .close {
        float: right;
        cursor: pointer;
        font-size: 20px;
    }

    .modal-content table {
        margin: 10px;

        border-radius: 10px;
        backdrop-filter: blur(20px);
        box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.2);
    }

    .modal-content table tr td {
        width: 300px;
    }

    .modal-content .container1 img {
        width: 400px;
        height: 400px;
        border-radius: 20px 0px 0px 20px;
    }

    .modal-content .container2 {
        width: 200px;
        margin: auto;
    }

    .modal-content .container2 input {
        height: 20px;
        width: 200px;
        border: none;
        border-bottom: 2px solid black;
        background-color: yellow;
    }

    .modal-content .container2 button {
        height: 40px;
        width: 200px;
        background-color: black;
        color: white;
        border-radius: 10px;
    }

    .modal-content .container2 h2 {
        letter-spacing: 3px;
        font-size: 20px;
    }







    .modalnew {
        display: none;
        position: fixed;
        /* Use 'fixed' to keep the modal fixed on the viewport */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);


    }

    .modal2new {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;


    }

    .modal-content {
        width: fit-content;
        height: fit-content;
        padding: 10px;
        background-color: #fff;
        border-radius: 10px;

    }

    .closenew {
        float: right;
        cursor: pointer;
        font-size: 20px;
    }

    .modal-content table {
        margin: 10px;

        border-radius: 10px;
        backdrop-filter: blur(20px);
        box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.2);
    }

    .modal-content table tr td {
        width: 300px;
    }

    .modal-content .container2 a {
        color: black;
    }

    .modal-content .container2 h1 {
        margin-bottom: 15px;
    }

    .modal-content .container2 input {
        height: 40px;
        width: 200px;
        margin: 5px;



        border: none;
        border-bottom: 2px solid black;
        background-color: rgb(0, 0, 0, 0);

    }

    .modal-content select {
        height: 40px;
        width: 200px;
        margin: 5px;


        border: none;
        border-bottom: 2px solid black;
        background-color: rgb(0, 0, 0, 0);

    }


    .modal-content .container2 .login {
        height: 40px;
        width: 150px;
        background-color: black;
        color: white;
        border-radius: 10px;




    }

    .modalnews {
        display: none;
        position: fixed;
        /* Use 'fixed' to keep the modal fixed on the viewport */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);


    }

    .modal2news {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;


    }

    .modal-content {
        width: fit-content;
        height: fit-content;
        padding: 10px;
        background-color: #fff;
        border-radius: 10px;

    }

    .closenews {
        float: right;
        cursor: pointer;
        font-size: 20px;
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
        flex-direction: column;
        align-items: center;
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

    .firstssssss td:first-child,
    .firstsssss td:first-child,
    .firstssss td:first-child,
    .firstsss td:first-child,
    .firstss td:first-child,
    .firsts td:first-child,
    .first td:first-child {

        height: 60px;
        border: 1px solid #ccc;


    }

    .form th {
        height: 65px;
        line-height: 15px;

        color: #37251b;
        font-size: 12px;
        display: flex;
        flex-direction: column;
        justify-content: center;

        letter-spacing: 1px;




    }

    .firstssssss td,
    .firstsssss td,
    .firstssss td,
    .firstsss td,
    .firstss td,
    .firsts td,
    .first td {
        width: 90px;
        font-size: 10px;
        color: black;





    }



    .firstssssss td p:first-child,
    .firstsssss td p:first-child,
    .firstssss td p:first-child,
    .firstsss td p:first-child,
    .firstss td p:first-child,
    .firsts td p:first-child,
    .first td p:first-child {

        padding: 5px;
        font-weight: bold;
        font-size: 12px;




    }

    .form th {
        height: 65px;
        line-height: 15px;

        color: #37251b;
        font-size: 12px;
        display: flex;
        flex-direction: column;

        width: 100%;
        letter-spacing: 1px;






    }

    .pcon {
        background-color: red;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;

    }

    .form td {

        height: 30px;

        font-size: 10px;

    }





    .firs td {

        height: 60px;

        font-size: 12px;
        ;
        font-weight: bold;
        border: none;

    }

    .firs tr {
        width: 100%;

    }




    .form table {
        width: 100%;
        border-collapse: collapse;

    }

    .form table tr {
        width: 100%;
    }





    tr td input {

        width: 20px;
        height: 20px;
        margin-top: 15px;
        background-color: #37251b;

    }








    .daysbutt {


        font-size: 20px;
        color: #37251b;
        margin: 20px;
    }

    .daysbuttt {


        text-align: center;
        margin-top: 10px;
    }

    .form {


        border-radius: 10px;


        display: flex;

        text-align: center;
        align-self: center;

        margin-left: auto;
        margin-right: auto;


        overflow: auto;












    }

    .buttons {
        margin: 10px;

        display: flex;
        justify-content: right;
        width: 100%;
    }

    #dropdownButton {
        margin-left: 10px;
        margin-right: 10px;
    }

    .buttons .edit {
        color: white;
        width: 100px;
        height: 35px;
        background-color: #37251b;
        border-radius: 5px;
        margin: 10px;
        text-align: center;
        cursor: pointer;
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
        margin-left: 10px;
        width: 20rem;


    }

    .container {

        display: flex;

        align-items: center;
        justify-content: center;
        justify-content: space-between;
        height: 100%;
        width: 95%;

        margin-left: auto;
        margin-right: auto;
        border-radius: 10px;

        flex-wrap: wrap;


    }

    .con {
        width: 95%;


        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;

        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;











    }

    .container3 {




        background-color: white;

        display: flex;
        flex-direction: column;

        text-align: center;

        padding: 20px;
        border-radius: 10px;

        flex-grow: 2.5;

        margin: 10px;
        margin-bottom: 10px;




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

        .firs th {
            width: 70px;
            display: flex;
            justify-content: center;
        }

        .container3 {

            overflow: auto;

            max-width: 100rem;

        }

        /* Customize scrollbar width and track */
        ::-webkit-scrollbar {
            width: 1px;
            height: 5px;
        }

        /* Customize scrollbar track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Customize scrollbar thumb */
        ::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 3px;
            /* Rounded corners for the thumb */
        }

        /* Change thumb color on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #37251b;
        }


    }

    h2 {

        width: 100%;
        margin-left: 1rem;


    }

    .box1 .dropdown {

        position: absolute;
        top: 50px;
        right: 50px;
        height: auto;
        display: none;


    }

    .box1 #myDropdown ul {


        width: 100px;
        height: 20px;
        display: flex;
        flex-direction: column;


    }

    .box1 #myDropdown ul li {

        width: 100px;
        text-align: left;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: left;
        background-color: white;


    }

    .box1 #myDropdown ul li p {

        height: 30px;
        display: flex;
        align-items: center;
        justify-content: left;
        font-size: 12px;
        color: black;
        cursor: pointer;



    }

    .box1 #myDropdown ul li p a {


        color: black;
        font-size: 12px;
        color: black;


    }

    .daysbuttons {
        display: flex;
        justify-content: right;
        align-items: center;
        padding: 10px;

    }

    .button {
        text-decoration: none;
        padding: 5px 10px;
        border: 1px solid #ccc;
        background-color: #f5f5f5;
        color: #333;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
        margin: 2px;
    }

    .button i {
        margin-right: 5px;
    }

    .button:hover {
        background-color: #333;
        color: #fff;
    }
</style>

<body>
    <div class="week">
        <h1>


    </div>
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
                <p id="dropdownButton"><i class="fa-solid fa-caret-down"></i></p>

                <div id="myDropdown" class="dropdown">
                    <ul>
                        <li>
                            <p><a href="../index.php">Log out</a></p>
                        </li>
                        <li>
                            <p class="openModalButtonnew">ChangePassword</p>
                        </li>


                    </ul>
                </div>
            </div>

        </div>
    </div>








    <div class="modalnew" id="modalnew">
        <div class="modal2new">

            <div class="modal-content">

                <!-- Content for the modal -->
                <span class="closenew" id="closeModalnew">&times;</span>

                <table>
                    <tr>
                        <td>
                            <div class="container1">
                                <img src="images/newlogo.jpg">
                            </div>
                        </td>
                        <td>
                            <div class="container2">
                                <form action="process.php" method="POST">
                                    <h1>Security Question</h1>

                                    <input type="text" name="username" placeholder="Username:">

                                    <select name="question">
                                        <option value="" disabled selected>Chosen Security Question:</option>
                                        <option value="Mothers Maiden Name?">Mothers Maiden Name?</option>
                                        <option value="Name of your Favorite Pet?">Name of your Favorite Pet?</option>
                                        <option value="Name of your elementary school?">Name of your elementary school?</option>
                                        <option value="favorite food as a child?">favorite food as a child?</option>
                                    </select>


                                    <input type="text" name="answer" placeholder="Answer:" required><br><br><br>
                                    <input class="login" type="submit" name="submit" value="SUBMIT">

                                </form>
                            </div>
                        </td>

                    </tr>
                </table>

            </div>
        </div>
    </div>

    <div class="modalnews" id="modalnews">
        <div class="modal2news">

            <div class="modal-content">

                <!-- Content for the modal -->
                <span class="closenews" id="closeModalnews">&times;</span>


                <table>
                    <tr>
                        <td>
                            <div class="container1">
                                <img src="images/logo.jpg">
                            </div>
                        </td>
                        <td>
                            <div class="container2">
                                <form action="process.php" method="POST">
                                    <h1>Set Security Question</h1>

                                    <input type="text" name="username" placeholder="Username:" value="<?php echo $username ?>" readonly>

                                    <select name="question">
                                        <option value="" disabled selected>Chosen Security Question:</option>
                                        <option value="Mothers Maiden Name?">Mothers Maiden Name?</option>
                                        <option value="Name of your Favorite Pet?">Name of your Favorite Pet?</option>
                                        <option value="Name of your elementary school?">Name of your elementary school?</option>
                                        <option value="favorite food as a child?">favorite food as a child?</option>
                                    </select>


                                    <input type="text" name="answer" placeholder="Answer:" required><br><br>
                                    <input class="login" type="submit" name="setsecurity" value="SUBMIT">

                                </form>
                            </div>
                        </td>

                    </tr>
                </table>

            </div>
        </div>
    </div>




    <div class="box2">



        <div class="welcome">
            <img class="barista" src="images/home.png">
            <h1><span style="color:brown; ">Good Day,</span><br> <?php echo $_SESSION['name'];  ?><br><span>Welcome to Web-Based Romeo's Cafe Employee Management System</h1>


        </div>


        <div class="con">

            <h2>Approved Schedule</h2>

            <div class="container3">

                <?php
                $week = date("W");
                $year = (isset($_GET['year'])) ? $_GET['year'] : date("Y");
                $week = (isset($_GET['week'])) ? $_GET['week'] : Date('W');
                if ($week > 53) {
                    $year += 1;
                    $week = 1;
                }
                ?>





                <form action="editschedule.php" method="POST">
                    <div class="form">
                        <table class="firs">
                            <tr>
                                <th>
                                </th>

                            </tr>

                            <tr>
                                <?php

                                $sql = "SELECT name FROM emp_info where classification is null";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($result)) :
                                ?>



                                    <td> <?php echo $row['name']; ?> </td>

                            </tr>

                        <?php endwhile; ?>

                        </table>


                        <table class="first">
                            <tr>
                                <?php
                                for ($day = 1; $day <= 1; $day++) {
                                    $d = strtotime($year . "W" . $week . $day);
                                    echo "<th>" . date('l', $d) . "<br>" . date('m/d/Y', $d) . "</th>";
                                    $mondate = date('F d, Y', $d);
                                    $monweek = date('l', $d);

                                    $_SESSION['mondate'] = $mondate;
                                    $_SESSION['monweek'] = $monweek;
                                }
                                ?>
                            </tr>

                            <?php
                            $sql = "SELECT name FROM emp_info WHERE classification IS NULL";
                            $result = mysqli_query($conn, $sql);

                            while ($emp_row = mysqli_fetch_assoc($result)) {
                                $employeeName = $emp_row['name'];
                                echo "<tr>"; // Start a new table row for each employee
                                echo "<td>";

                                $scheduleSql = "SELECT schedule FROM emp_weekly_schedule WHERE name = '$employeeName' AND schedule LIKE '%$mondate%'";
                                $scheduleResult = mysqli_query($conn, $scheduleSql);

                                if ($scheduleRow = mysqli_fetch_assoc($scheduleResult)) {
                                    $schedule = $scheduleRow['schedule'];

                                    $parts = explode(" - ", $schedule);
                                    if (count($parts) >= 2) {
                                        $schedule = $parts[1];
                                    } else {
                                        $schedule = "";
                                    }



                                    // Display an additional <p> element with a corresponding value based on the schedule
                                    if ($schedule == "Opening") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (1);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];

                                            echo "<div style='background-color: #A6CF98;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";



                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 1") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (2);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];

                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 2") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (3);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 3") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (4);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 4") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (5);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 5") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (6);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 1") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (7);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 2") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (8);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 3") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (9);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 4") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (10);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 5") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (11);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } else {
                                        echo "<p></p>"; // Default if schedule doesn't match
                                    }
                                } else {
                                    echo "<p class='valueCell'></p>"; // Default if no schedule found
                                }

                                echo "</td>";
                                echo "</tr>"; // Close the table row for this employee
                            }
                            ?>

                        </table>



                        <table class="firsts">
                            <tr>
                                <?php
                                for ($day = 2; $day <= 2; $day++) {
                                    $d = strtotime($year . "W" . $week . $day);
                                    echo "<th>" . date('l', $d) . "<br>" . date('m/d/Y', $d) . "</th>";
                                    $tuedate = date('F d, Y', $d);
                                    $tueweek = date('l', $d);

                                    $_SESSION['tuedate'] = $tuedate;
                                    $_SESSION['tueweek'] = $tueweek;
                                }
                                ?>
                            </tr>
                            <?php
                            $sql = "SELECT name FROM emp_info WHERE classification IS NULL";
                            $result = mysqli_query($conn, $sql);

                            while ($emp_row = mysqli_fetch_assoc($result)) {
                                $employeeName = $emp_row['name'];
                                echo "<tr>"; // Start a new table row for each employee
                                echo "<td>";

                                $scheduleSql = "SELECT schedule FROM emp_weekly_schedule WHERE name = '$employeeName' AND schedule LIKE '%$tuedate%'";
                                $scheduleResult = mysqli_query($conn, $scheduleSql);

                                if ($scheduleRow = mysqli_fetch_assoc($scheduleResult)) {
                                    $schedule = $scheduleRow['schedule'];

                                    $parts = explode(" - ", $schedule);
                                    if (count($parts) >= 2) {
                                        $schedule = $parts[1];
                                    } else {
                                        $schedule = "";
                                    }


                                    // Display an additional <p> element with a corresponding value based on the schedule
                                    if ($schedule == "Opening") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (1);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];

                                            echo "<div style='background-color: #A6CF98;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";


                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 1") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (2);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];

                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 2") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (3);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 3") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (4);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 4") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (5);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 5") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (6);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 1") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (7);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 2") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (8);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 3") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (9);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 4") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (10);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 5") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (11);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } else {
                                        echo "<p></p>"; // Default if schedule doesn't match
                                    }
                                } else {
                                    echo "<p class='valueCell'></p>"; // Default if no schedule found
                                }

                                echo "</td>";
                                echo "</tr>"; // Close the table row for this employee
                            }
                            ?>
                        </table>


                        <table class="firstss">
                            <tr>
                                <?php
                                for ($day = 3; $day <= 3; $day++) {
                                    $d = strtotime($year . "W" . $week . $day);
                                    echo "<th>" . date('l', $d) . "<br>" . date('m/d/Y', $d) . "</th>";
                                    $weddate = date('F d, Y', $d);
                                    $wedweek = date('l', $d);

                                    $_SESSION['weddate'] = $weddate;
                                    $_SESSION['wedweek'] = $wedweek;
                                }
                                ?>
                            </tr>
                            <?php
                            $sql = "SELECT name FROM emp_info WHERE classification IS NULL";
                            $result = mysqli_query($conn, $sql);

                            while ($emp_row = mysqli_fetch_assoc($result)) {
                                $employeeName = $emp_row['name'];
                                echo "<tr>"; // Start a new table row for each employee
                                echo "<td>";

                                $scheduleSql = "SELECT schedule FROM emp_weekly_schedule WHERE name = '$employeeName' AND schedule LIKE '%$weddate%'";
                                $scheduleResult = mysqli_query($conn, $scheduleSql);

                                if ($scheduleRow = mysqli_fetch_assoc($scheduleResult)) {
                                    $schedule = $scheduleRow['schedule'];

                                    $parts = explode(" - ", $schedule);
                                    if (count($parts) >= 2) {
                                        $schedule = $parts[1];
                                    } else {
                                        $schedule = "";
                                    }

                                    // Display an additional <p> element with a corresponding value based on the schedule
                                    if ($schedule == "Opening") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (1);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];

                                            echo "<div style='background-color: #A6CF98;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";



                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 1") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (2);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];

                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 2") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (3);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 3") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (4);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 4") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (5);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 5") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (6);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 1") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (7);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 2") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (8);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 3") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (9);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 4") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (10);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 5") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (11);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } else {
                                        echo "<p></p>"; // Default if schedule doesn't match
                                    }
                                } else {
                                    echo "<p class='valueCell'></p>"; // Default if no schedule found
                                }

                                echo "</td>";
                                echo "</tr>"; // Close the table row for this employee
                            }
                            ?>

                        </table>

                        <table class="firstsss">
                            <tr>

                                <?php
                                for ($day = 4; $day <= 4; $day++) {
                                    $d = strtotime($year . "W" . $week . $day);
                                    echo "<th>" . date('l', $d) . "<br>" . date('m/d/Y', $d) . "</th>";
                                    $thurdate = date('F d, Y', $d);
                                    $thurweek = date('l', $d);

                                    $_SESSION['thurdate'] = $thurdate;
                                    $_SESSION['thurweek'] = $thurweek;
                                }
                                ?>
                            </tr>
                            <?php
                            $sql = "SELECT name FROM emp_info WHERE classification IS NULL";
                            $result = mysqli_query($conn, $sql);

                            while ($emp_row = mysqli_fetch_assoc($result)) {
                                $employeeName = $emp_row['name'];
                                echo "<tr>"; // Start a new table row for each employee
                                echo "<td>";

                                $scheduleSql = "SELECT schedule FROM emp_weekly_schedule WHERE name = '$employeeName' AND schedule LIKE '%$thurdate%'";
                                $scheduleResult = mysqli_query($conn, $scheduleSql);

                                if ($scheduleRow = mysqli_fetch_assoc($scheduleResult)) {
                                    $schedule = $scheduleRow['schedule'];

                                    $parts = explode(" - ", $schedule);
                                    if (count($parts) >= 2) {
                                        $schedule = $parts[1];
                                    } else {
                                        $schedule = "";
                                    }

                                    // Display an additional <p> element with a corresponding value based on the schedule
                                    if ($schedule == "Opening") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (1);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];

                                            echo "<div style='background-color: #A6CF98;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";


                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 1") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (2);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];

                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 2") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (3);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 3") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (4);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 4") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (5);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 5") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (6);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 1") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (7);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 2") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (8);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 3") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (9);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 4") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (10);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 5") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (11);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } else {
                                        echo "<p></p>"; // Default if schedule doesn't match
                                    }
                                } else {
                                    echo "<p class='valueCell'></p>"; // Default if no schedule found
                                }

                                echo "</td>";
                                echo "</tr>"; // Close the table row for this employee
                            }
                            ?>
                        </table>

                        <table class="firstssss">
                            <tr>
                                <?php
                                for ($day = 5; $day <= 5; $day++) {
                                    $d = strtotime($year . "W" . $week . $day);
                                    echo "<th>" . date('l', $d) . "<br>" . date('m/d/Y', $d) . "</th>";
                                    $fridate = date('F d, Y', $d);
                                    $friweek = date('l', $d);

                                    $_SESSION['fridate'] = $fridate;
                                    $_SESSION['friweek'] = $friweek;
                                }
                                ?>
                            </tr>
                            <?php
                            $sql = "SELECT name FROM emp_info WHERE classification IS NULL";
                            $result = mysqli_query($conn, $sql);

                            while ($emp_row = mysqli_fetch_assoc($result)) {
                                $employeeName = $emp_row['name'];
                                echo "<tr>"; // Start a new table row for each employee
                                echo "<td>";

                                $scheduleSql = "SELECT schedule FROM emp_weekly_schedule WHERE name = '$employeeName' AND schedule LIKE '%$fridate%'";
                                $scheduleResult = mysqli_query($conn, $scheduleSql);

                                if ($scheduleRow = mysqli_fetch_assoc($scheduleResult)) {
                                    $schedule = $scheduleRow['schedule'];

                                    $parts = explode(" - ", $schedule);
                                    if (count($parts) >= 2) {
                                        $schedule = $parts[1];
                                    } else {
                                        $schedule = "";
                                    }


                                    // Display an additional <p> element with a corresponding value based on the schedule
                                    if ($schedule == "Opening") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (1);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];

                                            echo "<div style='background-color: #A6CF98;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";



                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 1") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (2);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];

                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 2") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (3);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 3") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (4);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 4") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (5);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 5") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (6);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 1") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (7);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 2") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (8);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 3") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (9);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 4") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (10);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 5") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (11);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } else {
                                        echo "<p></p>"; // Default if schedule doesn't match
                                    }
                                } else {
                                    echo "<p class='valueCell'></p>"; // Default if no schedule found
                                }

                                echo "</td>";
                                echo "</tr>"; // Close the table row for this employee
                            }
                            ?>

                        </table>

                        <table class="firstsssss">
                            <tr>

                                <?php
                                for ($day = 6; $day <= 6; $day++) {
                                    $d = strtotime($year . "W" . $week . $day);
                                    echo "<th>" . date('l', $d) . "<br>" . date('m/d/Y', $d) . "</th>";
                                    $satdate = date('F d, Y', $d);
                                    $satweek = date('l', $d);


                                    $_SESSION['satdate'] = $satdate;
                                    $_SESSION['satweek'] = $satweek;
                                }
                                ?>
                            </tr>
                            <?php
                            $sql = "SELECT name FROM emp_info WHERE classification IS NULL";
                            $result = mysqli_query($conn, $sql);

                            while ($emp_row = mysqli_fetch_assoc($result)) {
                                $employeeName = $emp_row['name'];
                                echo "<tr>"; // Start a new table row for each employee
                                echo "<td>";

                                $scheduleSql = "SELECT schedule FROM emp_weekly_schedule WHERE name = '$employeeName' AND schedule LIKE '%$satdate%'";
                                $scheduleResult = mysqli_query($conn, $scheduleSql);

                                if ($scheduleRow = mysqli_fetch_assoc($scheduleResult)) {
                                    $schedule = $scheduleRow['schedule'];

                                    $parts = explode(" - ", $schedule);
                                    if (count($parts) >= 2) {
                                        $schedule = $parts[1];
                                    } else {
                                        $schedule = "";
                                    }


                                    // Display an additional <p> element with a corresponding value based on the schedule
                                    if ($schedule == "Opening") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (1);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];

                                            echo "<div style='background-color: #A6CF98;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";



                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 1") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (2);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];

                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 2") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (3);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 3") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (4);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 4") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (5);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 5") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (6);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 1") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (7);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 2") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (8);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 3") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (9);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 4") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (10);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 5") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (11);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } else {
                                        echo "<p></p>"; // Default if schedule doesn't match
                                    }
                                } else {
                                    echo "<p class='valueCell'></p>"; // Default if no schedule found
                                }

                                echo "</td>";
                                echo "</tr>"; // Close the table row for this employee
                            }
                            ?>

                        </table>
                        <table class="firstssssss">
                            <tr>

                                <?php
                                for ($day = 7; $day <= 7; $day++) {
                                    $d = strtotime($year . "W" . $week . $day);
                                    echo "<th>" . date('l', $d) . "<br>" . date('m/d/Y', $d) . "</th>";
                                    $sundate = date('F d, Y', $d);
                                    $sunweek = date('l', $d);

                                    $_SESSION['sundate'] = $sundate;
                                    $_SESSION['sunweek'] = $sunweek;
                                }
                                ?>
                            </tr>
                            <?php
                            $sql = "SELECT name FROM emp_info WHERE classification IS NULL";
                            $result = mysqli_query($conn, $sql);

                            while ($emp_row = mysqli_fetch_assoc($result)) {
                                $employeeName = $emp_row['name'];
                                echo "<tr>"; // Start a new table row for each employee
                                echo "<td>";

                                $scheduleSql = "SELECT schedule FROM emp_weekly_schedule WHERE name = '$employeeName' AND schedule LIKE '%$sundate%'";
                                $scheduleResult = mysqli_query($conn, $scheduleSql);

                                if ($scheduleRow = mysqli_fetch_assoc($scheduleResult)) {
                                    $schedule = $scheduleRow['schedule'];

                                    $parts = explode(" - ", $schedule);
                                    if (count($parts) >= 2) {
                                        $schedule = $parts[1];
                                    } else {
                                        $schedule = "";
                                    }


                                    // Display an additional <p> element with a corresponding value based on the schedule
                                    if ($schedule == "Opening") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (1);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];

                                            echo "<div style='background-color: #A6CF98;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";


                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 1") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (2);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];

                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 2") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (3);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 3") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (4);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 4") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (5);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Midshift 5") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (6);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #FFCE5699;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 1") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (7);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 2") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (8);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 3") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (9);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 4") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (10);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";
                                            echo "</div>";
                                        }
                                    } elseif ($schedule == "Closing 5") {
                                        $sqll = "SELECT shift_id, CONCAT(time_in, ' - ', time_out) AS timing FROM shift WHERE shift_id IN (11);";
                                        $resultt = mysqli_query($conn, $sqll);

                                        if (!$resultt) {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        } else {
                                            $row = mysqli_fetch_assoc($resultt);
                                            $time = $row['timing'];
                                            echo "<div style='background-color: #E5D4FF;' class='pcon'>";

                                            echo "  <p  class='valueCell'>$schedule</p>";
                                            echo "  <p >$time</p>";

                                            echo "</div>";
                                        }
                                    } else {
                                        echo "<p></p>"; // Default if schedule doesn't match
                                    }
                                } else {
                                    echo "<p class='valueCell'></p>"; // Default if no schedule found
                                }

                                echo "</td>";
                                echo "</tr>"; // Close the table row for this employee
                            }
                            ?>
                        </table>



                    </div>
                    <div class="daysbuttons">
                        <a href="<?php echo $_SERVER['PHP_SELF'] . '?week=' . ($week - 1) . '&year=' . $year; ?>" class="button"><i class="fa fa-backward"></i> Previous week</a>
                        <a href="<?php echo $_SERVER['PHP_SELF'] . '?week=' . ($week + 1) . '&year=' . $year; ?>" class="button"><i class="fa fa-forward"></i> Next week</a>
                    </div>

                </form>




            </div>



        </div>










    </div>

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



    document.getElementById("dropdownButton").addEventListener("click", function() {
        var dropdown = document.getElementById("myDropdown");
        dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
    });








    var modalnew = document.getElementById('modalnew');
    var closeModalButtonnew = document.getElementById('closeModalnew');
    var openModalButtonsnew = document.querySelectorAll('.openModalButtonnew');

    openModalButtonsnew.forEach(function(button) {
        button.addEventListener('click', function() {
            modalnew.style.display = 'block'; // Corrected from 'modal' to 'modalnew'
        });
    });

    closeModalButtonnew.addEventListener('click', function() {
        modalnew.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target == modalnew) { // Corrected from 'modal' to 'modalnew'
            modalnew.style.display = 'none';
        }
    });



    var modalnews = document.getElementById('modalnews');
    var closeModalButtonnews = document.getElementById('closeModalnews');
    var openModalButtonsnews = document.querySelectorAll('.openModalButtonnews');

    var success = <?php echo isset($success) && $success ? 'true' : 'false'; ?>;
    if (success) {
        var modalnews = document.getElementById('modalnews');
        modalnews.style.display = 'block';
        // You can add additional JavaScript logic here after the modal is displayed
    }

    closeModalButtonnews.addEventListener('click', function() {
        modalnews.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target == modalnews) { // Corrected from 'modal' to 'modalnew'
            modalnews.style.display = 'none';
        }
    });
</script>

</html>