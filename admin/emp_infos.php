<?php
session_start();

if (!isset($_SESSION['username'])) {
    // redirect to login page if user is not logged in
    header('Location: ../index.php');
    exit;
}

$username = $_SESSION['username'];
$name = $_SESSION['name'];

require_once "config.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>ROMEO'S CAFE</title>

    <head>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        justify-content: flex-end;
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


    label {
        display: inline-block;
        width: 150px;
        margin-bottom: 10px;
        font-weight: bold;
    }

    /* Style for input fields */
    input[type="text"],
    [type="date"] {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        width: 250px;
        font-size: 14px;
    }

    /* Style for form container */

    /* Style for submit button */
    input[type="submit"] {


        background-color: #37251b;
        color: white;
        width: 150px;
        padding: 8px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        margin: 5px;

    }

    /* Style for submit button on hover */
    input[type="submit"] {
        background-color: #056517;
    }

    .submit .remove {
        background-color: #bf1029;

    }

    .id {
        width: 20px;
    }

    .submit {
        text-align: right;
        margin-right: 15px;

    }

    select {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        width: 250px;
        font-size: 14px;
    }

    .image-style {
        width: 250px;
        height: 250px;
        border-radius: 10px;

    }

    .image {

        margin-left: 40px;
        margin-bottom: 70px;
        margin-top: 35px;
        margin-right: 20px;
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

        margin-top: 20px;
        flex-grow: 1;
        height: auto;
        padding: 20px;
        border: none;
        border-radius: 10px;
        background-color: white;

        display: flex;
        flex-direction: column;
        align-items: center;





    }



    .welcome {
        margin-top: 30px;
        margin-left: auto;
        margin-right: auto;
        width: 95%;
        height: 260px;
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
        width: 15rem;

    }

    .pending {
        height: 150px;
        width: 400px;
        background-color: white;
        margin: 20px;
        margin-bottom: 0px;
        border-radius: 10px;

        display: flex;
        justify-content: center;
        align-items: center;



    }

    .pie {
        height: 330px;
        width: 400px;
        background-color: white;
        margin: 20px;
        margin-bottom: 0px;
        border-radius: 10px;


        display: flex;
        justify-content: center;
        align-items: center;

    }

    .piecon {
        width: 280px;
        height: 280px;


    }

    .container {

        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        width: 95%;
        margin-left: auto;
        margin-right: auto;




    }

    .three {
        margin-right: -10px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        align-items: center;



    }

    .pie {
        width: 95%;



    }

    .pending {
        width: 95%;




    }

    .pendingcon {
        padding: 10px;
        display: flex;

        flex-direction: column;

        font-size: 11px;




    }

    .pendingcon table {
        height: 100px;
        width: 190px;
        background-color: rgba(0, 0, 0, 0);






        margin-top: -8px;
    }

    .pendingcon tr td:nth-child(2) {
        text-align: center;
        width: 50px;
    }

    .check {
        width: 120px;
        height: 120px;
    }

    a {
        color: black;

    }

    @media screen and (min-width: 768px) and (max-width: 1023px) {

        .pie,
        .pending {
            width: 100%;
        }

        .welcome {
            height: 300px;
        }
    }



    @media screen and (min-width: 320px) and (max-width: 767px) {

        input[type="text"],
        [type="date"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            width: 150px;
            font-size: 10px;
        }

        /* Style for form container */

        /* Style for submit button */
        input[type="submit"] {


            background-color: #37251b;
            color: white;
            width: 150px;
            padding: 8px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin: 5px;

        }

        /* Style for submit button on hover */
        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .submit .remove:hover {
            background-color: red;

        }

        .id {
            width: 20px;
        }

        .submit {
            text-align: right;
            margin-right: 15px;

        }

        select {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            width: 150px;
            font-size: 10px;
        }

        .image-style {
            width: 120px;
            height: 120px;
            border-radius: 10px;

        }

        .image {
            margin-top: 40%;
            margin-bottom: 220%;
            margin-left: 0px;
            margin-right: 0px;

        }


        .info {

            display: flex;
            justify-content: flex-end;
            margin-top: -30px;


            color: white;
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
            font-size: 10px;

        }

        table {

            padding: 15px;

        }

        td:nth-child(2) {

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }




        .three {
            margin-right: 0px;
            margin-left: 0px;
            width: 100%;




        }

        .submit {
            text-align: right;
            margin-right: 0px;

        }

        label {
            display: inline-block;
            width: 150px;
            font-size: 12px;
            font-weight: bold;
        }

        .barista {
            width: 33%;

        }
    }

    .welcome h1 {

        margin-left: 10px;
        margin-right: 20px;


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
            <img class="barista" src="images/employee.png">
            <h1>Employee Information <br>
                <span>Encompasses essential details about individuals employed by a company, including personal, employment, and administrative data.<br>
                    <a href="employee.php"><i class="fa fa-backward"></i> Back</a>
                </span>
            </h1>




        </div>


        <div class="container">
            <table>
                <tr>
                    <td>
                        <?php
                        if (isset($_POST['reveal'])) {
                            $id = $_POST['id'];
                        } elseif (isset($_GET['id'])) {
                            $id = $_GET['id'];
                        }

                        $query = "SELECT * FROM emp_info WHERE id='$id' ";
                        $query_run = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($query_run)) {
                        ?>
                            <div class="form-container">
                                <form action="process.php" method="POST">
                                    <label class="id">ID:</label>
                                    <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
                                    <?php echo $row['id']; ?><br>
                                    <br>
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" >
                                    <br>
                                    <label for="age">Age:</label>



<?php
$birthdate = $row['age'];
date_default_timezone_set('Asia/Manila');

// Current date
$currentDate = date("Y-m-d");

// Create a DateTime object for birthdate
$birthdateObj = DateTime::createFromFormat('!m-d-Y', $birthdate);
if (!$birthdateObj) {
    // If the first format fails, try the second format
    $birthdateObj = DateTime::createFromFormat('!Y-m-d', $birthdate);
}

// Check if birthdate is valid
if ($birthdateObj) {
    $birthdateFormatted = $birthdateObj->format('Y-m-d');

    // Calculate age
    $age = date_diff(date_create($birthdateFormatted), date_create($currentDate))->y;

    
} 
?>                            <input type="hidden" id="age" name="age" value="<?php echo $row['age']; ?>" readonly>
                                    <input type="text" id="agenow" name="agenow" value="<?php echo $age; ?>" readonly>
                                    <br>
                                    <label for="status">Status:</label>
                                    <select id="status" name="emptype">
                                        <option value="" <?php if ($row['emptype'] === '') echo 'selected'; ?>> </option>
                                        <option value="Regular" <?php if ($row['emptype'] === 'Regular') echo 'selected'; ?>>Regular</option>
                                        <option value="Working Student" <?php if ($row['emptype'] === 'Working Student') echo 'selected'; ?>>Working Student</option>
                                    </select><br>
                                    <label for="contact">Contact:</label>
                                    <input type="text" id="contact" name="contact" value="<?php echo $row['contact']; ?>">
                                    <br>
                                    <label for="contact">Personal Email:</label>
                                    <input type="text" id="personalemail" name="personalemail" value="<?php echo $row['personalemail']; ?>">
 

                                    <br><br><br>
                                    <label for="sss">SSS No.:</label>
                                    <input type="text" name="sss" value="<?php echo $row['sss']; ?>"><br>
                                    <label for="philhealth">PhilHealth No.:</label>
                                    <input type="text" name="philhealth" value="<?php echo $row['philhealth']; ?>"><br>
                                    <label for="pagibig">Pagibig No.:</label>
                                    <input type="text" name="pagibig" value="<?php echo $row['pagibig']; ?>"><br><br><br>
                                    <label for="rate">Rate:</label>
                                    <input type="text" id="rate" name="rate" value="<?php echo $row['rate']; ?> " readonly>
                                    <br>
                                    <label for="status">Position:</label>
                                    <input type="text" id="rate" name="status" value="<?php echo $row['status']; ?> " readonly>

<br>
                                    <label for="hiredate">Hire Date:</label>
                                    <input type="date" id="hiredate" name="hiredate" value="<?php echo date('Y-m-d', strtotime($row['hiredate'])); ?>">
                                    <br>

                            </div>
                        <?php
                        } // End of the first while loop
                        ?>
                    </td>
                    <td>
                        <?php
                        if (isset($_POST['reveal'])) {
                            $id = $_POST['id'];
                        } elseif (isset($_GET['id'])) {
                            $id = $_GET['id'];
                        }

                        $query = "SELECT * FROM emp_info WHERE id='$id' ";
                        $query_run = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($query_run)) {
                        ?>
                            <div class="image">
                                <?php
                                $imgData = $row['image'];
                                $imgSrc = 'data:image/jpeg;base64,' . base64_encode($imgData);
                                echo '<img src="' . $imgSrc . '" class="image-style">';
                                ?>
                            </div>
                        <?php
                        } // End of the second while loop
                        ?>
                        <div class="submit">
                            <input type="submit" name="updateemp_info" value="Save"><br>
                            <input class="remove" type="submit" name="remove" value="Remove">
                        </div>
                    </td>
                </tr>
                </form>
            </table>

            <div class="three">


                <div class="pie">
                    <div class="piecon">
                        <canvas id="myPieChart"></canvas>
                        <?php
                        if (isset($_POST['reveal'])) {
                            $id = $_POST['id'];
                        } elseif (isset($_GET['id'])) {
                            $id = $_GET['id'];
                        }

                        // Assuming you already have a database connection in $conn

                        // Query to get the name from emp_info based on the provided ID
                        $query = "SELECT name FROM emp_info WHERE id='$id'";
                        $query_run = mysqli_query($conn, $query);

                        if ($query_run) {
                            $row = mysqli_fetch_array($query_run);
                            $employeeName = $row['name'];
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }

                        // Query to get the count of "Late" records
                        $lateCountQuery = "SELECT COUNT(*) AS lateCount FROM emp_attendance WHERE name = '$employeeName' AND timein_status = 'Late'";
                        $lateCountResult = mysqli_query($conn, $lateCountQuery);

                        // Query to get the count of "Ontime" records
                        $ontimeCountQuery = "SELECT COUNT(*) AS ontimeCount FROM emp_attendance WHERE name = '$employeeName' AND timein_status = 'Ontime'";
                        $ontimeCountResult = mysqli_query($conn, $ontimeCountQuery);

                        $absentCountQuery = "SELECT COUNT(*)  AS absentCount FROM emp_weekly_schedule WHERE schedule LIKE '% -%' AND schedule NOT LIKE '% -' and name='$employeeName'";
                        $absentCountResult = mysqli_query($conn, $absentCountQuery);

                        if ($lateCountResult && $ontimeCountResult && $absentCountResult) {
                            $lateCountRow = mysqli_fetch_assoc($lateCountResult);
                            $lateCount = $lateCountRow['lateCount'];

                            $ontimeCountRow = mysqli_fetch_assoc($ontimeCountResult);
                            $ontimeCount = $ontimeCountRow['ontimeCount'];

                            $absentCountRow = mysqli_fetch_assoc($absentCountResult);
                            $absent = $absentCountRow['absentCount'];
                            $sum = $lateCount + $ontimeCount;
                            $absentCount = $absent - $sum;
                            if ($absentCount < 0) {
                                $absentCount = 0;
                            }
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }

                        ?>

                    </div>


                </div>
                <div class="pending">
                    <div class="pendingcon">
                        <h3>Requirements:</h3>
                        <?php
                        if (isset($_POST['id'])) {
                            $id = $_POST['id'];
                            $name = $_POST['name'];
                        } elseif (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $name = $_GET['name'];
                        }
                        // Your database connection code here
                        $query = "SELECT * FROM emp_info WHERE id = '$id'";
                        $query_run = mysqli_query($conn, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            $row = mysqli_fetch_assoc($query_run);
                            $r_nbi = $row['r_nbi'];
                            $r_psa = $row['r_psa'];
                            $r_id = $row['r_id'];
                            $r_1x1 = $row['r_1x1'];
                            $r_healthCert = $row['r_healthCert'];
                        }
                        ?>

                        <table>

                            <tr>
                                <td>NBI</td>
                                <form action="r_nbi.php" method="POST">
                                    <td>

                                        <input type="checkbox" name="r_nbi" id="r_nbi" onchange="this.form.submit()" <?php if (!empty($row['r_nbi'])) echo 'checked'; ?>>
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        <input type="hidden" name="name" value="<?php echo $name; ?>">

                                    </td>
                                </form>
                            </tr>
                            <tr>
                                <td>PSA Copy</td>
                                <form action="r_psa.php" method="POST">
                                    <td>

                                        <input type="checkbox" name="r_psa" id="r_psa" onchange="this.form.submit()" <?php if (!empty($row['r_psa'])) echo 'checked'; ?>>
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        <input type="hidden" name="name" value="<?php echo $name; ?>">

                                    </td>
                                </form>
                            </tr>
                            <tr>
                                <td>I.D Copy</td>
                                <form action="r_id.php" method="POST">
                                    <td>

                                        <input type="checkbox" name="r_id" id="r_id" onchange="this.form.submit()" <?php if (!empty($row['r_id'])) echo 'checked'; ?>>
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        <input type="hidden" name="name" value="<?php echo $name; ?>">

                                    </td>
                                </form>
                            </tr>
                            <tr>
                                <td>1X1 Copy</td>
                                <form action="r_1x1.php" method="POST">
                                    <td>

                                        <input type="checkbox" name="r_1x1" id="r_1x1" onchange="this.form.submit()" <?php if (!empty($row['r_1x1'])) echo 'checked'; ?>>
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        <input type="hidden" name="name" value="<?php echo $name; ?>">

                                    </td>
                                </form>
                            </tr>
                            <tr>
                                <td>Health Certificate</td>
                                <form action="r_healthCert.php" method="POST">
                                    <td>

                                        <input type="checkbox" name="r_healthCert" id="r_healthCert" onchange="this.form.submit()" <?php if (!empty($row['r_healthCert'])) echo 'checked'; ?>>
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        <input type="hidden" name="name" value="<?php echo $name; ?>">

                                    </td>
                                </form>
                            </tr>


                        </table>

                        <script>
                            $(document).ready(function() {
                                // Attach change event listener to all checkboxes
                                $('input[type=checkbox]').change(function() {
                                    // Get the checkbox ID and its checked status
                                    var checkboxId = $(this).attr('id');
                                    var isChecked = $(this).prop('checked');

                                    // Send AJAX request to update the database
                                    $.ajax({
                                        type: 'POST',
                                        url: 'updateEmpReq.php', // replace with the actual server-side script
                                        data: {
                                            id: <?php echo $id; ?>,
                                            checkboxName: checkboxId,
                                            isChecked: isChecked ? 1 : 0
                                        },
                                        success: function(response) {
                                            console.log(response);
                                        },
                                        error: function(error) {
                                            console.log(error);
                                        }
                                    });
                                });
                            });
                        </script>



                    </div>
                    <img class="check" src="images/check.jpg">
                </div>

            </div>

        </div>

    </div>



    <div class="box3"></div>





    <script type="text/javascript">
        var data = {
            labels: ["Ontime", "Late", "Absent"],
            datasets: [{
                data: [<?php echo isset($ontimeCount) ? $ontimeCount : 0; ?>, <?php echo isset($lateCount) ? $lateCount : 0; ?>, <?php echo isset($absentCount) ? $absentCount : 0; ?>],
                backgroundColor: ["#36A2EB", "#FFCE56", "#FF6384"]
            }]
        };

        // Configuration options for the pie chart
        var options = {
            responsive: true,
            maintainAspectRatio: false,
        };

        // Get the canvas element and create the pie chart
        var ctx = document.getElementById("myPieChart").getContext("2d");
        var myPieChart = new Chart(ctx, {
            type: "pie",
            data: data,
            options: options
        });







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
</body>

</html>