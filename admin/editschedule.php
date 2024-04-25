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
        height: 60px;


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



    th {
        height: 65px;
        line-height: 15px;

        color: #37251b;
        font-size: 12px;
        display: flex;
        flex-direction: column;
        width: 100px;
        letter-spacing: 1px;



    }

    td {
        width: 70px;
        height: 30px;

        font-size: 10px;

    }

    tr td input {

        width: 70px;
        height: 30px;

        color: black;
        border: none;

        background-color: rgba(0, 0, 0, 0);
        font-size: 13px;




    }



    .firs td {


        color: black;

    }

    .firs th {
        height: 55px;

    }

    .firs td {
        width: 50px;
        height: 60px;

        font-size: 12px;
        ;
        font-weight: bold;
        border: none;

    }

    .firs tr {
        width: 100%;

    }



    .daysbuttons {
        display: flex;
        justify-content: space-between;
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

    form {



        background-color: white;

        display: flex;


        flex-direction: column;

        text-align: center;

        padding: 10px;
        border-radius: 10px;

        flex-grow: 1;

        margin-bottom: 10px;
        overflow: auto;





    }

    .buttons {
        display: flex;
        justify-content: space-between;
    }

    .buttons .save,
    .edit {

        width: 120px;
        height: 35px;
        background-color: #A6CF98;
        border: none;
        border-radius: 5px;
        margin: 10px;


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
        overflow: hidden;



    }

    .welcome h1 {
        margin-top: 50px;
        margin-left: 20px;
        margin-right: 40px;


    }

    span {
        font-size: 15px;
        font-weight: 100;
    }


    .barista {
        margin-left: 1rem;
        width: 20rem;

    }


    .con {
        width: 95%;


        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;

        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        justify-content: start;








    }

    select {
        font-size: 10px;
        text-align: center;
        border: none;
        margin-top: 10px;
    }


    .other {
        display: flex;





    }

    .prefferedtime {
        margin-left: 5px;
        margin-right: 5px;
    }

    .prefferedtime,
    .shift {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 5px;
        text-align: center;







    }

    h3 {
        font-size: 18px;
    }

    .prefferedtime select {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    table {
        width: 100%;
        border-collapse: collapse;

    }


    table td {
        padding: 5px;
        border: 1px solid #ccc;
    }

    #selectedOptionDisplay,
    #selectedOptionDisplay1,
    #selectedOptionDisplay2,
    #selectedOptionDisplay3,
    #selectedOptionDisplay4,
    #selectedOptionDisplay5,
    #selectedOptionDisplay6 {
        font-weight: bold;

    }

    .valueCell,
    .changeValueBtn {
        cursor: pointer;
    }



    .tables {

        display: flex;
    }

    .editschedule {
        width: 90%;
        margin-top: 7px;


    }

    .editschedule input {
        padding: 10px;
        border: none;
        border-radius: 5px;



        font-size: 11px;
        margin-bottom: -10px;
        margin-top: -5px;
    }



    @media screen and (min-width: 768px) and (max-width: 1030px) {
        form {
            width: 100%;
            overflow: auto;



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

        .other {
            width: 100%;
        }

        .prefferedtime,
        .shift {
            width: 100%;
        }


    }


    @media screen and (min-width: 320px) and (max-width: 767px) {
        .other {
            width: 100%;
        }

        .welcome {
            height: 190px;
            margin-top: 20px;
        }


        .welcome h1 {



            margin-top: 10px;
            color: #37251b;
            font-size: 20px;



        }

        .firs th {
            width: 70px;
            display: flex;
            justify-content: center;
        }

        form {
            width: 100%;
            overflow: auto;




        }

        .barista {
            width: 33%;

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

        .other {
            width: 100%;
        }

        .prefferedtime,
        .shift {
            width: 100%;
        }



        .welcome h1 {


            font-size: 20px;
            margin-top: 20px;




        }

        .welcome h1 span {
            font-size: 12px;

        }


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


                <p><?php echo $_SESSION['name'];  ?>

                <p><a href="logout.php"><i class="fa fa-power-off"></i></a></p>
            </div>

        </div>
    </div>
    <div class="box2">


        <div class="welcome">
            <img class="barista" src="images/schedule.png">
            <h1>Employee Scheduling <br><span>Digital tool that facilitates the efficient planning and organization of workforce schedules within a business .<br><br>

            </h1>


        </div>



        <?php
        $week = date("W");
        $year = (isset($_GET['year'])) ? $_GET['year'] : date("Y");
        $week = (isset($_GET['week'])) ? $_GET['week'] : Date('W');
        if ($week > 53) {
            $year += 1;
            $week = 1;
        }
        ?>


        <div class="con">


            <form action="process.php" method="POST">

                <div class="tables">
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
                                echo "<th>" . date('l', $d) . "<br>";
                                echo date('m/d/Y', $d);
                                echo "<select name='holiday2[]'>";
                                echo '<option value="Regular Day">Regular Day</option>';
                                echo '<option value="Regular Holiday">Regular Holiday</option>';
                                echo '<option value="Legal Holiday">Legal Holiday</option>';
                                echo "</select>";
                                echo "</th>";
                                $mondate = date('F d, Y', $d);
                                $monweek = date('l', $d);

                                $_SESSION['mondate'] = $mondate;
                                $_SESSION['monweek'] = $monweek;
                            }
                            ?>
                        </tr>

                        <tr>
                        <?php
                        $sqll = "SELECT schedule FROM emp_weekly_schedule WHERE schedule LIKE '%$mondate%'";
                        $resultSchedule = mysqli_query($conn, $sqll);

                        $buttonNames = []; // Initialize an empty array

                        // Check if there are rows in the result set
                        if ($resultSchedule) {
                            // Fetch names and populate the $buttonNames array
                            while ($row = mysqli_fetch_assoc($resultSchedule)) {
                                // Use explode to split the string and get the second part
                                $scheduleParts = explode('-', $row['schedule']);
                                
                                // Trim to remove leading and trailing spaces
                                $trimmedSchedule = trim($scheduleParts[1]);
                                
                                // Add the trimmed schedule to the $buttonNames array
                                $buttonNames[] = $trimmedSchedule;
                            }
                        }

                        $sql = "SELECT name FROM emp_info WHERE classification IS NULL";
                        $result = mysqli_query($conn, $sql);

                        $initialButtonNameIndex = 0; // Index to track the initial button name

                        // Loop through the number of rows in the shift table
                        while ($shift_row = mysqli_fetch_assoc($result)) {
                            echo "<tr>"; // Start a new table row for each shift
                            echo '<td class="shift-cell" style="background-color: ' . getBackgroundColor($buttonNames[$initialButtonNameIndex]) . ';">';
                            $names = $shift_row['name']; // Fetch the 'name' from the current row

                            // Check if the index exists in $buttonNames
                            if (array_key_exists($initialButtonNameIndex, $buttonNames)) {
                                echo '<input type="button" class="changeValueBtn myButton" data-name="' . $buttonNames[$initialButtonNameIndex] . '" value="' . $buttonNames[$initialButtonNameIndex] . '" onclick="toggleColor(this, ' . $initialButtonNameIndex . ')"/>';

                                // Access a specific element in $buttonNames within the string
                                echo '<input type="hidden" name="mon[]" data-mondatetime="' . $mondate . '" data-names="' . $names . '" value="' . $mondate . ' - ' . $buttonNames[$initialButtonNameIndex] . ' // ' . $names . '" />';

                                $time = getTimeFromShift($buttonNames[$initialButtonNameIndex]);
                                
                                // Display the time in the value cell
                                echo '<p class="valueCell">' . $time . '</p>';

                                $initialButtonNameIndex++;
                            }

                            echo "</td>";
                            echo "</tr>"; // Close the table row for this shift
                        }

                        function getBackgroundColor($buttonName) {
                            // Define background colors based on button names
                            $colorMapping = [
                                'Opening' => '#A6CF98',
                                'Midshift 1' => '#FFCE56',
                                'Midshift 2' => '#FFCE56',
                                'Midshift 3' => '#FFCE56',
                                'Midshift 4' => '#FFCE56',
                                'Midshift 5' => '#FFCE56',
                                'Closing 1' => '#E5D4FF',
                                'Closing 2' => '#E5D4FF',
                                'Closing 3' => '#E5D4FF',
                                'Closing 4' => '#E5D4FF',
                                'Closing 5' => '#E5D4FF',
                                // Add more mappings as needed
                            ];

                            // Check if the button name is in the mapping, default to white if not found
                            return isset($colorMapping[$buttonName]) ? $colorMapping[$buttonName] : 'white';
                        }

                        function getTimeFromShift($buttonName) {
                            global $conn;

                            // Fetch time from the shift table based on the selected button name
                            $sql = "SELECT time_in, time_out FROM shift WHERE shifts = '$buttonName'";
                            $result = mysqli_query($conn, $sql);

                            if ($result && $row = mysqli_fetch_assoc($result)) {
                                // Format the time (adjust as needed)
                                $timeIn = date('h:i A', strtotime($row['time_in']));
                                $timeOut = date('h:i A', strtotime($row['time_out']));

                                return $timeIn . ' - ' . $timeOut;
                            }

                            return '';
                        }
                        ?>



                    </table>


                    <table class="firsts">
                        <tr>
                            <?php
                            for ($day = 2; $day <= 2; $day++) {
                                $d = strtotime($year . "W" . $week . $day);
                                echo "<th>" . date('l', $d) . "<br>";
                                echo date('m/d/Y', $d);
                                echo "<select name='holiday3[]'>";
                                echo '<option value="Regular Day">Regular Day</option>';
                                echo '<option value="Regular Holiday">Regular Holiday</option>';
                                echo '<option value="Legal Holiday">Legal Holiday</option>';
                                echo "</select>";
                                echo "</th>";
                                $tuedate = date('F d, Y', $d);
                                $tueweek = date('l', $d);

                                $_SESSION['tuedate'] = $tuedate;
                                $_SESSION['tueweek'] = $tueweek;
                            }
                            ?>
                        </tr>

                        <tr>
                            <?php
                            $sqll = "SELECT schedule FROM emp_weekly_schedule WHERE schedule LIKE '%$tuedate%'";
                            $resultSchedule = mysqli_query($conn, $sqll);

                            $buttonNames = []; // Initialize an empty array

                            // Check if there are rows in the result set
                            if ($resultSchedule) {
                                // Fetch names and populate the $buttonNames array
                                while ($row = mysqli_fetch_assoc($resultSchedule)) {
                                    // Use explode to split the string and get the second part
                                    $scheduleParts = explode('-', $row['schedule']);
                                    
                                    // Trim to remove leading and trailing spaces
                                    $trimmedSchedule = trim($scheduleParts[1]);
                                    
                                    // Add the trimmed schedule to the $buttonNames array
                                    $buttonNames[] = $trimmedSchedule;
                                }
                            }

                            $sql = "SELECT name FROM emp_info WHERE classification IS NULL";
                            $result = mysqli_query($conn, $sql);

                            $initialButtonNameIndex = 0; // Index to track the initial button name

                            // Loop through the number of rows in the shift table
                            while ($shift_row = mysqli_fetch_assoc($result)) {
                                echo "<tr>"; // Start a new table row for each shift
                                echo '<td class="shift-cell" style="background-color: ' . getBackgroundColor1($buttonNames[$initialButtonNameIndex]) . ';">';
                                $names = $shift_row['name']; // Fetch the 'name' from the current row

                                // Check if the index exists in $buttonNames
                                if (array_key_exists($initialButtonNameIndex, $buttonNames)) {
                                    echo '<input type="button" class="changeValueBtn myButton" data-name="' . $buttonNames[$initialButtonNameIndex] . '" value="' . $buttonNames[$initialButtonNameIndex] . '" onclick="toggleColor(this, ' . $initialButtonNameIndex . ')"/>';

                                    // Access a specific element in $buttonNames within the string
                                    echo '<input type="hidden" name="tue[]" data-mondatetime="' . $tuedate . '" data-names="' . $names . '" value="' . $tuedate . ' - ' . $buttonNames[$initialButtonNameIndex] . ' // ' . $names . '" />';

                                    $time = getTimeFromShift1($buttonNames[$initialButtonNameIndex]);
                                    
                                    // Display the time in the value cell
                                    echo '<p class="valueCell">' . $time . '</p>';

                                    $initialButtonNameIndex++;
                                }

                                echo "</td>";
                                echo "</tr>"; // Close the table row for this shift
                            }

                           function getBackgroundColor1($buttonName) {
                            // Define background colors based on button names
                            $colorMapping = [
                                'Opening' => '#A6CF98',
                                'Midshift 1' => '#FFCE56',
                                'Midshift 2' => '#FFCE56',
                                'Midshift 3' => '#FFCE56',
                                'Midshift 4' => '#FFCE56',
                                'Midshift 5' => '#FFCE56',
                                'Closing 1' => '#E5D4FF',
                                'Closing 2' => '#E5D4FF',
                                'Closing 3' => '#E5D4FF',
                                'Closing 4' => '#E5D4FF',
                                'Closing 5' => '#E5D4FF',
                                '' => 'transparent', // Color for an empty string
                                // Add more mappings as needed
                            ];

                            // Check if the button name is in the mapping, default to white if not found
                            return isset($colorMapping[$buttonName]) ? $colorMapping[$buttonName] : 'white';
                        }

                                                    function getTimeFromShift1($buttonName) {
                                                        global $conn;

                                                        // Fetch time from the shift table based on the selected button name
                                                        $sql = "SELECT time_in, time_out FROM shift WHERE shifts = '$buttonName'";
                                                        $result = mysqli_query($conn, $sql);

                                                        if ($result && $row = mysqli_fetch_assoc($result)) {
                                                            // Format the time (adjust as needed)
                                                            $timeIn = date('h:i A', strtotime($row['time_in']));
                                                            $timeOut = date('h:i A', strtotime($row['time_out']));

                                                            return $timeIn . ' - ' . $timeOut;
                                                        }

                                                        return '';
                                                    }
                                                    ?>


                    </table>


                    <table class="firstss">
                        <tr>
                            <?php
                            for ($day = 3; $day <= 3; $day++) {
                                $d = strtotime($year . "W" . $week . $day);
                                echo "<th>" . date('l', $d) . "<br>";
                                echo date('m/d/Y', $d);
                                echo "<select name='holiday3[]'>";
                                echo '<option value="Regular Day">Regular Day</option>';
                                echo '<option value="Regular Holiday">Regular Holiday</option>';
                                echo '<option value="Legal Holiday">Legal Holiday</option>';
                                echo "</select>";
                                echo "</th>";
                                $weddate = date('F d, Y', $d);
                                $wedweek = date('l', $d);

                                $_SESSION['weddate'] = $weddate;
                                $_SESSION['wedweek'] = $wedweek;
                            }
                            ?>
                        </tr>
                        <tr>
                            <?php
                            $sqll = "SELECT schedule FROM emp_weekly_schedule WHERE schedule LIKE '%$weddate%'";
                            $resultSchedule = mysqli_query($conn, $sqll);

                            $buttonNames = []; // Initialize an empty array

                            // Check if there are rows in the result set
                            if ($resultSchedule) {
                                // Fetch names and populate the $buttonNames array
                                while ($row = mysqli_fetch_assoc($resultSchedule)) {
                                    // Use explode to split the string and get the second part
                                    $scheduleParts = explode('-', $row['schedule']);
                                    
                                    // Trim to remove leading and trailing spaces
                                    $trimmedSchedule = trim($scheduleParts[1]);
                                    
                                    // Add the trimmed schedule to the $buttonNames array
                                    $buttonNames[] = $trimmedSchedule;
                                }
                            }

                            $sql = "SELECT name FROM emp_info WHERE classification IS NULL";
                            $result = mysqli_query($conn, $sql);

                            $initialButtonNameIndex = 0; // Index to track the initial button name

                            // Loop through the number of rows in the shift table
                            while ($shift_row = mysqli_fetch_assoc($result)) {
                                echo "<tr>"; // Start a new table row for each shift
                                echo '<td class="shift-cell" style="background-color: ' . getBackgroundColor2($buttonNames[$initialButtonNameIndex]) . ';">';
                                $names = $shift_row['name']; // Fetch the 'name' from the current row

                                // Check if the index exists in $buttonNames
                                if (array_key_exists($initialButtonNameIndex, $buttonNames)) {
                                    echo '<input type="button" class="changeValueBtn myButton" data-name="' . $buttonNames[$initialButtonNameIndex] . '" value="' . $buttonNames[$initialButtonNameIndex] . '" onclick="toggleColor(this, ' . $initialButtonNameIndex . ')"/>';

                                    // Access a specific element in $buttonNames within the string
                                    echo '<input type="hidden" name="wed[]" data-mondatetime="' . $weddate . '" data-names="' . $names . '" value="' . $weddate . ' - ' . $buttonNames[$initialButtonNameIndex] . ' // ' . $names . '" />';

                                    $time = getTimeFromShift2($buttonNames[$initialButtonNameIndex]);
                                    
                                    // Display the time in the value cell
                                    echo '<p class="valueCell">' . $time . '</p>';

                                    $initialButtonNameIndex++;
                                }

                                echo "</td>";
                                echo "</tr>"; // Close the table row for this shift
                            }

                            function getBackgroundColor2($buttonName) {
                                // Define background colors based on button names
                                $colorMapping = [
                                    'Opening' => '#A6CF98',
                                    'Midshift 1' => '#FFCE56',
                                    'Midshift 2' => '#FFCE56',
                                    'Midshift 3' => '#FFCE56',
                                    'Midshift 4' => '#FFCE56',
                                    'Midshift 5' => '#FFCE56',
                                    'Closing 1' => '#E5D4FF',
                                    'Closing 2' => '#E5D4FF',
                                    'Closing 3' => '#E5D4FF',
                                    'Closing 4' => '#E5D4FF',
                                    'Closing 5' => '#E5D4FF',
                                    '' => 'transparent',
                                    // Add more mappings as needed
                                ];

                                // Check if the button name is in the mapping, default to white if not found
                                return isset($colorMapping[$buttonName]) ? $colorMapping[$buttonName] : 'white';
                            }

                            function getTimeFromShift2($buttonName) {
                                global $conn;

                                // Fetch time from the shift table based on the selected button name
                                $sql = "SELECT time_in, time_out FROM shift WHERE shifts = '$buttonName'";
                                $result = mysqli_query($conn, $sql);

                                if ($result && $row = mysqli_fetch_assoc($result)) {
                                    // Format the time (adjust as needed)
                                    $timeIn = date('h:i A', strtotime($row['time_in']));
                                    $timeOut = date('h:i A', strtotime($row['time_out']));

                                    return $timeIn . ' - ' . $timeOut;
                                }

                                return '';
                            }
                            ?>
                    </table>

                    <table class="firstsss">
                        <tr>

                            <?php
                            for ($day = 4; $day <= 4; $day++) {
                                $d = strtotime($year . "W" . $week . $day);
                                echo "<th>" . date('l', $d) . "<br>";
                                echo date('m/d/Y', $d);
                                echo "<select name='holiday4[]'>";
                                echo '<option value="Regular Day">Regular Day</option>';
                                echo '<option value="Regular Holiday">Regular Holiday</option>';
                                echo '<option value="Legal Holiday">Legal Holiday</option>';
                                echo "</select>";
                                echo "</th>";
                                $thurdate = date('F d, Y', $d);
                                $thurweek = date('l', $d);

                                $_SESSION['thurdate'] = $thurdate;
                                $_SESSION['thurweek'] = $thurweek;
                            }
                            ?>
                        </tr>
                        <tr>
                           <?php
                            $sqll = "SELECT schedule FROM emp_weekly_schedule WHERE schedule LIKE '%$thurdate%'";
                            $resultSchedule = mysqli_query($conn, $sqll);

                            $buttonNames = []; // Initialize an empty array

                            // Check if there are rows in the result set
                            if ($resultSchedule) {
                                // Fetch names and populate the $buttonNames array
                                while ($row = mysqli_fetch_assoc($resultSchedule)) {
                                    // Use explode to split the string and get the second part
                                    $scheduleParts = explode('-', $row['schedule']);
                                    
                                    // Trim to remove leading and trailing spaces
                                    $trimmedSchedule = trim($scheduleParts[1]);
                                    
                                    // Add the trimmed schedule to the $buttonNames array
                                    $buttonNames[] = $trimmedSchedule;
                                }
                            }

                            $sql = "SELECT name FROM emp_info WHERE classification IS NULL";
                            $result = mysqli_query($conn, $sql);

                            $initialButtonNameIndex = 0; // Index to track the initial button name

                            // Loop through the number of rows in the shift table
                            while ($shift_row = mysqli_fetch_assoc($result)) {
                                echo "<tr>"; // Start a new table row for each shift
                                echo '<td class="shift-cell" style="background-color: ' . getBackgroundColor3($buttonNames[$initialButtonNameIndex]) . ';">';
                                $names = $shift_row['name']; // Fetch the 'name' from the current row

                                // Check if the index exists in $buttonNames
                                if (array_key_exists($initialButtonNameIndex, $buttonNames)) {
                                    echo '<input type="button" class="changeValueBtn myButton" data-name="' . $buttonNames[$initialButtonNameIndex] . '" value="' . $buttonNames[$initialButtonNameIndex] . '" onclick="toggleColor(this, ' . $initialButtonNameIndex . ')"/>';

                                    // Access a specific element in $buttonNames within the string
                                    echo '<input type="hidden" name="thur[]" data-mondatetime="' . $thurdate . '" data-names="' . $names . '" value="' . $thurdate . ' - ' . $buttonNames[$initialButtonNameIndex] . ' // ' . $names . '" />';

                                    $time = getTimeFromShift3($buttonNames[$initialButtonNameIndex]);
                                    
                                    // Display the time in the value cell
                                    echo '<p class="valueCell">' . $time . '</p>';

                                    $initialButtonNameIndex++;
                                }

                                echo "</td>";
                                echo "</tr>"; // Close the table row for this shift
                            }

                            function getBackgroundColor3($buttonName) {
                                // Define background colors based on button names
                                $colorMapping = [
                                    'Opening' => '#A6CF98',
                                    'Midshift 1' => '#FFCE56',
                                    'Midshift 2' => '#FFCE56',
                                    'Midshift 3' => '#FFCE56',
                                    'Midshift 4' => '#FFCE56',
                                    'Midshift 5' => '#FFCE56',
                                    'Closing 1' => '#E5D4FF',
                                    'Closing 2' => '#E5D4FF',
                                    'Closing 3' => '#E5D4FF',
                                    'Closing 4' => '#E5D4FF',
                                    'Closing 5' => '#E5D4FF',
                                    '' => 'transparent',
                                    // Add more mappings as needed
                                ];

                                // Check if the button name is in the mapping, default to white if not found
                                return isset($colorMapping[$buttonName]) ? $colorMapping[$buttonName] : 'white';
                            }

                            function getTimeFromShift3($buttonName) {
                                global $conn;

                                // Fetch time from the shift table based on the selected button name
                                $sql = "SELECT time_in, time_out FROM shift WHERE shifts = '$buttonName'";
                                $result = mysqli_query($conn, $sql);

                                if ($result && $row = mysqli_fetch_assoc($result)) {
                                    // Format the time (adjust as needed)
                                    $timeIn = date('h:i A', strtotime($row['time_in']));
                                    $timeOut = date('h:i A', strtotime($row['time_out']));

                                    return $timeIn . ' - ' . $timeOut;
                                }

                                return '';
                            }
                            ?>
                    </table>

                    <table class="firstssss">
                        <tr>
                            <?php
                            for ($day = 5; $day <= 5; $day++) {
                                $d = strtotime($year . "W" . $week . $day);
                                echo "<th>" . date('l', $d) . "<br>";
                                echo date('m/d/Y', $d);
                                echo "<select name='holiday5[]'>";
                                echo '<option value="Regular Day">Regular Day</option>';
                                echo '<option value="Regular Holiday">Regular Holiday</option>';
                                echo '<option value="Legal Holiday">Legal Holiday</option>';
                                echo "</select>";
                                echo "</th>";
                                $fridate = date('F d, Y', $d);
                                $friweek = date('l', $d);

                                $_SESSION['fridate'] = $fridate;
                                $_SESSION['friweek'] = $friweek;
                            }
                            ?>
                        </tr>
                        <tr>
                            <?php
                            $sqll = "SELECT schedule FROM emp_weekly_schedule WHERE schedule LIKE '%$fridate%'";
                            $resultSchedule = mysqli_query($conn, $sqll);

                            $buttonNames = []; // Initialize an empty array

                            // Check if there are rows in the result set
                            if ($resultSchedule) {
                                // Fetch names and populate the $buttonNames array
                                while ($row = mysqli_fetch_assoc($resultSchedule)) {
                                    // Use explode to split the string and get the second part
                                    $scheduleParts = explode('-', $row['schedule']);
                                    
                                    // Trim to remove leading and trailing spaces
                                    $trimmedSchedule = trim($scheduleParts[1]);
                                    
                                    // Add the trimmed schedule to the $buttonNames array
                                    $buttonNames[] = $trimmedSchedule;
                                }
                            }

                            $sql = "SELECT name FROM emp_info WHERE classification IS NULL";
                            $result = mysqli_query($conn, $sql);

                            $initialButtonNameIndex = 0; // Index to track the initial button name

                            // Loop through the number of rows in the shift table
                            while ($shift_row = mysqli_fetch_assoc($result)) {
                                echo "<tr>"; // Start a new table row for each shift
                                echo '<td class="shift-cell" style="background-color: ' . getBackgroundColor4($buttonNames[$initialButtonNameIndex]) . ';">';
                                $names = $shift_row['name']; // Fetch the 'name' from the current row

                                // Check if the index exists in $buttonNames
                                if (array_key_exists($initialButtonNameIndex, $buttonNames)) {
                                    echo '<input type="button" class="changeValueBtn myButton" data-name="' . $buttonNames[$initialButtonNameIndex] . '" value="' . $buttonNames[$initialButtonNameIndex] . '" onclick="toggleColor(this, ' . $initialButtonNameIndex . ')"/>';

                                    // Access a specific element in $buttonNames within the string
                                    echo '<input type="hidden" name="fri[]" data-mondatetime="' . $fridate . '" data-names="' . $names . '" value="' . $fridate . ' - ' . $buttonNames[$initialButtonNameIndex] . ' // ' . $names . '" />';

                                    $time = getTimeFromShift4($buttonNames[$initialButtonNameIndex]);
                                    
                                    // Display the time in the value cell
                                    echo '<p class="valueCell">' . $time . '</p>';

                                    $initialButtonNameIndex++;
                                }

                                echo "</td>";
                                echo "</tr>"; // Close the table row for this shift
                            }

                            function getBackgroundColor4($buttonName) {
                                // Define background colors based on button names
                                $colorMapping = [
                                    'Opening' => '#A6CF98',
                                    'Midshift 1' => '#FFCE56',
                                    'Midshift 2' => '#FFCE56',
                                    'Midshift 3' => '#FFCE56',
                                    'Midshift 4' => '#FFCE56',
                                    'Midshift 5' => '#FFCE56',
                                    'Closing 1' => '#E5D4FF',
                                    'Closing 2' => '#E5D4FF',
                                    'Closing 3' => '#E5D4FF',
                                    'Closing 4' => '#E5D4FF',
                                    'Closing 5' => '#E5D4FF',
                                    '' => 'transparent',
                                    // Add more mappings as needed
                                ];

                                // Check if the button name is in the mapping, default to white if not found
                                return isset($colorMapping[$buttonName]) ? $colorMapping[$buttonName] : 'white';
                            }

                            function getTimeFromShift4($buttonName) {
                                global $conn;

                                // Fetch time from the shift table based on the selected button name
                                $sql = "SELECT time_in, time_out FROM shift WHERE shifts = '$buttonName'";
                                $result = mysqli_query($conn, $sql);

                                if ($result && $row = mysqli_fetch_assoc($result)) {
                                    // Format the time (adjust as needed)
                                    $timeIn = date('h:i A', strtotime($row['time_in']));
                                    $timeOut = date('h:i A', strtotime($row['time_out']));

                                    return $timeIn . ' - ' . $timeOut;
                                }

                                return '';
                            }
                            ?>
                    </table>

                    <table class="firstsssss">
                        <tr>

                            <?php
                            for ($day = 6; $day <= 6; $day++) {
                                $d = strtotime($year . "W" . $week . $day);
                                echo "<th>" . date('l', $d) . "<br>";
                                echo date('m/d/Y', $d);
                                echo "<select name='holiday6[]'>";
                                echo '<option value="Regular Day">Regular Day</option>';
                                echo '<option value="Regular Holiday">Regular Holiday</option>';
                                echo '<option value="Legal Holiday">Legal Holiday</option>';
                                echo "</select>" . "</th>";
                                $satdate = date('F d, Y', $d);
                                $satweek = date('l', $d);

                                $_SESSION['satdate'] = $satdate;
                                $_SESSION['satweek'] = $satweek;
                            }
                            ?>
                        </tr>
                        <tr>
                            <?php
                            $sqll = "SELECT schedule FROM emp_weekly_schedule WHERE schedule LIKE '%$satdate%'";
                            $resultSchedule = mysqli_query($conn, $sqll);

                            $buttonNames = []; // Initialize an empty array

                            // Check if there are rows in the result set
                            if ($resultSchedule) {
                                // Fetch names and populate the $buttonNames array
                                while ($row = mysqli_fetch_assoc($resultSchedule)) {
                                    // Use explode to split the string and get the second part
                                    $scheduleParts = explode('-', $row['schedule']);
                                    
                                    // Trim to remove leading and trailing spaces
                                    $trimmedSchedule = trim($scheduleParts[1]);
                                    
                                    // Add the trimmed schedule to the $buttonNames array
                                    $buttonNames[] = $trimmedSchedule;
                                }
                            }

                            $sql = "SELECT name FROM emp_info WHERE classification IS NULL";
                            $result = mysqli_query($conn, $sql);

                            $initialButtonNameIndex = 0; // Index to track the initial button name

                            // Loop through the number of rows in the shift table
                            while ($shift_row = mysqli_fetch_assoc($result)) {
                                echo "<tr>"; // Start a new table row for each shift
                                echo '<td class="shift-cell" style="background-color: ' . getBackgroundColor5($buttonNames[$initialButtonNameIndex]) . ';">';
                                $names = $shift_row['name']; // Fetch the 'name' from the current row

                                // Check if the index exists in $buttonNames
                                if (array_key_exists($initialButtonNameIndex, $buttonNames)) {
                                    echo '<input type="button" class="changeValueBtn myButton" data-name="' . $buttonNames[$initialButtonNameIndex] . '" value="' . $buttonNames[$initialButtonNameIndex] . '" onclick="toggleColor(this, ' . $initialButtonNameIndex . ')"/>';

                                    // Access a specific element in $buttonNames within the string
                                    echo '<input type="hidden" name="sat[]" data-mondatetime="' . $satdate . '" data-names="' . $names . '" value="' . $satdate . ' - ' . $buttonNames[$initialButtonNameIndex] . ' // ' . $names . '" />';

                                    $time = getTimeFromShift5($buttonNames[$initialButtonNameIndex]);
                                    
                                    // Display the time in the value cell
                                    echo '<p class="valueCell">' . $time . '</p>';

                                    $initialButtonNameIndex++;
                                }

                                echo "</td>";
                                echo "</tr>"; // Close the table row for this shift
                            }

                            function getBackgroundColor5($buttonName) {
                                // Define background colors based on button names
                                $colorMapping = [
                                    'Opening' => '#A6CF98',
                                    'Midshift 1' => '#FFCE56',
                                    'Midshift 2' => '#FFCE56',
                                    'Midshift 3' => '#FFCE56',
                                    'Midshift 4' => '#FFCE56',
                                    'Midshift 5' => '#FFCE56',
                                    'Closing 1' => '#E5D4FF',
                                    'Closing 2' => '#E5D4FF',
                                    'Closing 3' => '#E5D4FF',
                                    'Closing 4' => '#E5D4FF',
                                    'Closing 5' => '#E5D4FF',
                                    '' => 'transparent',
                                    // Add more mappings as needed
                                ];

                                // Check if the button name is in the mapping, default to white if not found
                                return isset($colorMapping[$buttonName]) ? $colorMapping[$buttonName] : 'white';
                            }

                            function getTimeFromShift5($buttonName) {
                                global $conn;

                                // Fetch time from the shift table based on the selected button name
                                $sql = "SELECT time_in, time_out FROM shift WHERE shifts = '$buttonName'";
                                $result = mysqli_query($conn, $sql);

                                if ($result && $row = mysqli_fetch_assoc($result)) {
                                    // Format the time (adjust as needed)
                                    $timeIn = date('h:i A', strtotime($row['time_in']));
                                    $timeOut = date('h:i A', strtotime($row['time_out']));

                                    return $timeIn . ' - ' . $timeOut;
                                }

                                return '';
                            }
                            ?>
                    </table>
                    <table class="firstssssss">
                        <tr>

                            <?php
                            for ($day = 7; $day <= 7; $day++) {
                                $d = strtotime($year . "W" . $week . $day);
                                echo "<th>" . date('l', $d) . "<br>";
                                echo date('m/d/Y', $d);
                                echo "<select name='holiday7[]'>";
                                echo '<option value="Regular Day">Regular Day</option>';
                                echo '<option value="Regular Holiday">Regular Holiday</option>';
                                echo '<option value="Legal Holiday">Legal Holiday</option>';
                                echo "</select>" . "</th>";
                                $sundate = date('F d, Y', $d);
                                $sunweek = date('l', $d);

                                $_SESSION['sundate'] = $sundate;
                                $_SESSION['sunweek'] = $sunweek;
                            }
                            ?>
                        </tr>
                        <tr>
                           <?php
                            $sqll = "SELECT schedule FROM emp_weekly_schedule WHERE schedule LIKE '%$sundate%'";
                            $resultSchedule = mysqli_query($conn, $sqll);

                            $buttonNames = []; // Initialize an empty array

                            // Check if there are rows in the result set
                            if ($resultSchedule) {
                                // Fetch names and populate the $buttonNames array
                                while ($row = mysqli_fetch_assoc($resultSchedule)) {
                                    // Use explode to split the string and get the second part
                                    $scheduleParts = explode('-', $row['schedule']);
                                    
                                    // Trim to remove leading and trailing spaces
                                    $trimmedSchedule = trim($scheduleParts[1]);
                                    
                                    // Add the trimmed schedule to the $buttonNames array
                                    $buttonNames[] = $trimmedSchedule;
                                }
                            }

                            $sql = "SELECT name FROM emp_info WHERE classification IS NULL";
                            $result = mysqli_query($conn, $sql);

                            $initialButtonNameIndex = 0; // Index to track the initial button name

                            // Loop through the number of rows in the shift table
                            while ($shift_row = mysqli_fetch_assoc($result)) {
                                echo "<tr>"; // Start a new table row for each shift
                                echo '<td class="shift-cell" style="background-color: ' . getBackgroundColor6($buttonNames[$initialButtonNameIndex]) . ';">';
                                $names = $shift_row['name']; // Fetch the 'name' from the current row

                                // Check if the index exists in $buttonNames
                                if (array_key_exists($initialButtonNameIndex, $buttonNames)) {
                                    echo '<input type="button" class="changeValueBtn myButton" data-name="' . $buttonNames[$initialButtonNameIndex] . '" value="' . $buttonNames[$initialButtonNameIndex] . '" onclick="toggleColor(this, ' . $initialButtonNameIndex . ')"/>';

                                    // Access a specific element in $buttonNames within the string
                                    echo '<input type="hidden" name="sun[]" data-mondatetime="' . $sundate . '" data-names="' . $names . '" value="' . $sundate . ' - ' . $buttonNames[$initialButtonNameIndex] . ' // ' . $names . '" />';

                                    $time = getTimeFromShift6($buttonNames[$initialButtonNameIndex]);
                                    
                                    // Display the time in the value cell
                                    echo '<p class="valueCell">' . $time . '</p>';

                                    $initialButtonNameIndex++;
                                }

                                echo "</td>";
                                echo "</tr>"; // Close the table row for this shift
                            }

                            function getBackgroundColor6($buttonName) {
                                // Define background colors based on button names
                                $colorMapping = [
                                    'Opening' => '#A6CF98',
                                    'Midshift 1' => '#FFCE56',
                                    'Midshift 2' => '#FFCE56',
                                    'Midshift 3' => '#FFCE56',
                                    'Midshift 4' => '#FFCE56',
                                    'Midshift 5' => '#FFCE56',
                                    'Closing 1' => '#E5D4FF',
                                    'Closing 2' => '#E5D4FF',
                                    'Closing 3' => '#E5D4FF',
                                    'Closing 4' => '#E5D4FF',
                                    'Closing 5' => '#E5D4FF',
                                    '' => 'transparent',
                                    // Add more mappings as needed
                                ];

                                // Check if the button name is in the mapping, default to white if not found
                                return isset($colorMapping[$buttonName]) ? $colorMapping[$buttonName] : 'white';
                            }

                            function getTimeFromShift6($buttonName) {
                                global $conn;

                                // Fetch time from the shift table based on the selected button name
                                $sql = "SELECT time_in, time_out FROM shift WHERE shifts = '$buttonName'";
                                $result = mysqli_query($conn, $sql);

                                if ($result && $row = mysqli_fetch_assoc($result)) {
                                    // Format the time (adjust as needed)
                                    $timeIn = date('h:i A', strtotime($row['time_in']));
                                    $timeOut = date('h:i A', strtotime($row['time_out']));

                                    return $timeIn . ' - ' . $timeOut;
                                }

                                return '';
                            }
                            ?>
                    </table>

                </div>
                <div class="buttons">

                    <div class="daysbuttons">
                        <a href="<?php echo $_SERVER['PHP_SELF'] . '?week=' . ($week - 1) . '&year=' . $year; ?>" class="button"><i class="fa fa-backward"></i> Previous week</a>
                        <a href="<?php echo $_SERVER['PHP_SELF'] . '?week=' . ($week + 1) . '&year=' . $year; ?>" class="button"><i class="fa fa-forward"></i> Next week</a>
                    </div>



                    <input type="submit" name="save" value="SAVE" class="save">

                </div>
            </form>



            <div class="other">
                <div class="prefferedtime">
                    <h3>Preffered Shift</h3>
                    <select id="employeeSelect">
                        <option>Select an employee</option> <!-- Default option -->
                        <?php
                        $sql = "SELECT name FROM emp_info WHERE classification IS NULL";
                        $result = mysqli_query($conn, $sql);

                        if (!$result) {
                            echo "Error executing query: " . mysqli_error($conn);
                        } else {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option>" . $row['name'] . "</option>";
                            }
                        }
                        ?>
                    </select>

                    <table class="pshift">
                        <tr>
                            <td>Monday</td>
                            <td id="selectedOptionDisplay"></td>
                        </tr>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td id="selectedOptionDisplay1"></td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td id="selectedOptionDisplay2"></td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td id="selectedOptionDisplay3"></td>
                        </tr>
                        <tr>
                            <td>Friday</td>
                            <td id="selectedOptionDisplay4"></td>
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td id="selectedOptionDisplay5"></td>
                        </tr>
                        <tr>
                            <td>Sunday</td>
                            <td id="selectedOptionDisplay6"></td>
                        </tr>
                    </table>


                </div>


                <div class="shift">
                    <h3>Shifts Time</h3>
                    <form class="editschedule" action="shift.php" method="POST">
                        <input type="submit" name="" value="Edit Schedule">
                    </form>
                    <table class="pshift">
                        <?php
                        $query = "SELECT * FROM shift WHERE shift_status='Approve'";

                        $query_run = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($query_run)) {
                        ?>
                            <tr>

                                <td><?php echo $row['shifts'];  ?></td>
                                <td><?php echo $row['time_in'];  ?> to <?php echo $row['time_out'];  ?></td>


                            </tr>
                        <?php
                        }

                        ?>

                    </table>

                </div>
            </div>
        </div>






    </div>


    <div class="box3">

    </div>




</body>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        const buttons = document.querySelectorAll(".changeValueBtn");
        const valueCells = document.querySelectorAll(".valueCell");
        <?php
        $sql = "SELECT * FROM shift WHERE shift_status = 'Approve'";
        $result = $conn->query($sql);

        // Fetch data and store it in the $valuesArray array
        $valuesArray = array();
        while ($row = $result->fetch_assoc()) {
            // Add double quotes around each element
            $valuesArray[] = '"' . $row['time_in'] . " - " . $row['time_out'] . '"';
        }

        // Add "121212" as the last value
        $valuesArray[] = '" "';
        ?>

        const valuesArray = [<?php echo implode(',', $valuesArray); ?>];







        <?php
        $sql = "SELECT shifts FROM shift WHERE shift_status = 'Approve'";
        $result = $conn->query($sql);

        // Fetch data and store it in the $valuesArray array
        $buttonNames = array();
        while ($row = $result->fetch_assoc()) {
            // Add double quotes around each element
            $buttonNames[] = '"' . $row['shifts'] . '"';
        }

        // Add "121212" as the last value
        $buttonNames[] = '" "';
        ?>

        const buttonNames = [<?php echo implode(',', $buttonNames); ?>];







        buttons.forEach((button, index) => {
            button.addEventListener("click", (event) => {
                event.preventDefault(); // Prevent default form submission

                const buttonName = button.getAttribute("data-name");
                const cell = button.parentElement.nextElementSibling;



                // Save the current button name, mondate, and names to the hidden input field
                const hiddenInput = button.nextElementSibling;
                const mondate = hiddenInput.getAttribute("data-mondatetime");
                const names = hiddenInput.getAttribute("data-names");
                hiddenInput.value = `${mondate} - ${button.getAttribute("data-name")} // ${names}`;

                // Perform an AJAX request to process.php
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "process.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                        // Handle the response from process.php if needed
                    }
                };

                // Send the button name as POST data
                xhr.send("buttonName=" + encodeURIComponent(buttonName));
            });

            // Handle value updates
            button.addEventListener("click", () => {
                const currentValue = valueCells[index].textContent;
                if (!currentValue) {
                    valueCells[index].textContent = valuesArray[0];
                    button.setAttribute("data-name", buttonNames[0]);
                    button.setAttribute("value", buttonNames[0]);
                } else {
                    const nextValueIndex = (valuesArray.indexOf(currentValue) + 1) % valuesArray.length;
                    valueCells[index].textContent = valuesArray[nextValueIndex];
                    button.setAttribute("data-name", buttonNames[nextValueIndex]);
                    button.setAttribute("value", buttonNames[nextValueIndex]);
                }

                // Save the current button name, mondate, and names to the hidden input field
                const hiddenInput = button.nextElementSibling;
                const mondate = hiddenInput.getAttribute("data-mondatetime");
                const names = hiddenInput.getAttribute("data-names");
                hiddenInput.value = `${mondate} - ${button.getAttribute("data-name")} // ${names}`;
            });
        });
    });



    //hanggang dito







    var sidebarBtn = document.getElementById('burger-menu');
    var menu = document.getElementById('menu');
    var box2 = document.querySelector('.box2');
    var form = document.querySelector('form');

    sidebarBtn.addEventListener('click', function() {
        menu.classList.toggle('active');
        sidebarBtn.querySelector('i').classList.toggle('fa-bars');
        sidebarBtn.querySelector('i').classList.toggle('fa-times');

        if (menu.classList.contains('active')) {
            form.style.width = '50%';
            box2.style.width = '90%';
            box2.style.marginLeft = '10%'; // Set margin-left to 30% to move the box to the right
        } else {
            form.style.width = '';
            box2.style.width = ''; // Reset width to default
            box2.style.marginLeft = ''; // Reset margin-left to default
        }
    });



    document.getElementById("employeeSelect").addEventListener("change", function() {
        // Get the selected employee name
        var selectedEmployee = this.value;

        // Send an AJAX request to a PHP script to retrieve the schedule
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "get_schedule.php?employee=" + selectedEmployee, true);

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Update the content of the <td> element with the retrieved schedule data
                document.getElementById("selectedOptionDisplay").textContent = xhr.responseText;
            }
        };

        xhr.send();
    });


    document.getElementById("employeeSelect").addEventListener("change", function() {
        // Get the selected employee name
        var selectedEmployee = this.value;

        // Send an AJAX request to a PHP script to retrieve the schedule
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "get_schedule.php?employeee=" + selectedEmployee, true);

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Update the content of the <td> element with the retrieved schedule data
                document.getElementById("selectedOptionDisplay1").textContent = xhr.responseText;
            }
        };

        xhr.send();
    });


    document.getElementById("employeeSelect").addEventListener("change", function() {
        // Get the selected employee name
        var selectedEmployee = this.value;

        // Send an AJAX request to a PHP script to retrieve the schedule
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "get_schedule.php?employeeee=" + selectedEmployee, true);

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Update the content of the <td> element with the retrieved schedule data
                document.getElementById("selectedOptionDisplay2").textContent = xhr.responseText;
            }
        };

        xhr.send();
    });

    document.getElementById("employeeSelect").addEventListener("change", function() {
        // Get the selected employee name
        var selectedEmployee = this.value;

        // Send an AJAX request to a PHP script to retrieve the schedule
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "get_schedule.php?employeeeee=" + selectedEmployee, true);

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Update the content of the <td> element with the retrieved schedule data
                document.getElementById("selectedOptionDisplay3").textContent = xhr.responseText;
            }
        };

        xhr.send();
    });

    document.getElementById("employeeSelect").addEventListener("change", function() {
        // Get the selected employee name
        var selectedEmployee = this.value;

        // Send an AJAX request to a PHP script to retrieve the schedule
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "get_schedule.php?employeeeeee=" + selectedEmployee, true);

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Update the content of the <td> element with the retrieved schedule data
                document.getElementById("selectedOptionDisplay4").textContent = xhr.responseText;
            }
        };

        xhr.send();
    });

    document.getElementById("employeeSelect").addEventListener("change", function() {
        // Get the selected employee name
        var selectedEmployee = this.value;

        // Send an AJAX request to a PHP script to retrieve the schedule
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "get_schedule.php?employeeeeeee=" + selectedEmployee, true);

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Update the content of the <td> element with the retrieved schedule data
                document.getElementById("selectedOptionDisplay5").textContent = xhr.responseText;
            }
        };

        xhr.send();
    });

    document.getElementById("employeeSelect").addEventListener("change", function() {
        // Get the selected employee name
        var selectedEmployee = this.value;

        // Send an AJAX request to a PHP script to retrieve the schedule
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "get_schedule.php?employeeeeeeee=" + selectedEmployee, true);

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Update the content of the <td> element with the retrieved schedule data
                document.getElementById("selectedOptionDisplay6").textContent = xhr.responseText;
            }
        };

        xhr.send();
    });


    //hanggang dito

    document.addEventListener("DOMContentLoaded", function() {
        const buttons = document.querySelectorAll(".changeValueBtn");

        buttons.forEach((button) => {
            button.addEventListener("click", () => {
                const currentValue = button.getAttribute("data-name");
                let nextValue = "";

                // Determine the next button name based on the current value
                switch (currentValue) {
                    case 'Opening':
                        nextValue = 'Midshift 1';
                        break;
                    case 'Midshift 1':
                    case 'Midshift 2':
                    case 'Midshift 3':
                    case 'Midshift 4':
                    case 'Midshift 5':
                        nextValue = 'Closing 1';
                        break;
                    case 'Closing 1':
                    case 'Closing 2':
                    case 'Closing 3':
                    case 'Closing 4':
                    case 'Closing 5':
                        nextValue = '';
                        break;
                    default:
                        nextValue = 'Opening';
                        break;
                }


                // Call the toggleColor function with the updated values
                toggleColor(button, nextValue);
            });
        });
    });

    function toggleColor(button, buttonValue) {
        let backgroundColor = '';

        // Determine background color based on the button value
        switch (buttonValue) {
            case 'Opening':
                backgroundColor = 'transparent';
                break;
            case 'Midshift 1':
            case 'Midshift 2':
            case 'Midshift 3':
            case 'Midshift 4':
            case 'Midshift 5':
                backgroundColor = '#A6CF98';
                break;
            case 'Closing 1':
            case 'Closing 2':
            case 'Closing 3':
            case 'Closing 4':
            case 'Closing 5':
                backgroundColor = '#FFCE56';
                break;
            case '':
                backgroundColor = '#E5D4FF';
                break;
            default:
                backgroundColor = 'red';
        }

        // Find the parent <td> element and apply the background color
        const tdElement = button.closest('td');
        if (tdElement) {
            tdElement.style.backgroundColor = backgroundColor;
        }
    }
</script>






</html>