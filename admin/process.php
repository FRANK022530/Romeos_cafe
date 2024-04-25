<?php 
	require_once"config.php";
	session_start();

    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
 





if (isset($_GET['deleterateid'])) {
  $id = $_GET['deleterateid'];
  $sql= "DELETE FROM emp_rate  WHERE id='$id'";


  $result=mysqli_query($conn, $sql);

if ($result) {
           echo '<script>';
    echo 'document.addEventListener("DOMContentLoaded", function() {';
    echo '    if (typeof Swal === "undefined") { alert("SweetAlert library not found."); }';
    echo '    else {';
    echo '        Swal.fire({';
    echo '            title: "Rate Deleted",';
 
    echo '            icon: "success",';
    echo '        }).then(function() {';
    echo '            window.location.replace("rates.php");';
    echo '        });';
    echo '    }';
    echo '});';
    echo '</script>';
   
        exit();
}
else
{
  echo "ERROR: UNABLE TO DELETE RECORD ".mysqli_error($conn);
}

}


if (isset($_POST['addshift'])) {
    $shift = $_POST['shifts'];
    $timein = $_POST['timein'];
    $timeout = $_POST['timeout'];
    $status = "Approve";
    
  
    // Convert time to non-military format
    $formattedTimeIn = date('g:i A', strtotime($timein));
    $formattedTimeOut = date('g:i A', strtotime($timeout));

   $sql = "UPDATE shift
        SET 
            time_in = '$formattedTimeIn',
            time_out = '$formattedTimeOut',
            shift_status = '$status'
        WHERE shifts = '$shift'";


    $result = mysqli_query($conn, $sql);

    if ($result) {
                  echo '<script>';
    echo 'document.addEventListener("DOMContentLoaded", function() {';
    echo '    if (typeof Swal === "undefined") { alert("SweetAlert library not found."); }';
    echo '    else {';
    echo '        Swal.fire({';
    echo '            title: "Record Updated",';
    echo '            text: "Please Check Record",';
    echo '            icon: "success",';
    echo '        }).then(function() {';
    echo '            window.location.replace("shift.php");';
    echo '        });';
    echo '    }';
    echo '});';
    echo '</script>';
   
        exit();
    } else {
        echo "ERROR: Unable to update record " . mysqli_error($conn);
    }
}


if (isset($_POST['deleteshift'])) {
    $shift = $_POST['shifts'];

 

    $sql = "UPDATE shift
            SET 
                time_in = NULL,
                time_out = NULL,
                shift_status = ''
            WHERE shifts = '$shift'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
                  echo '<script>';
    echo 'document.addEventListener("DOMContentLoaded", function() {';
    echo '    if (typeof Swal === "undefined") { alert("SweetAlert library not found."); }';
    echo '    else {';
    echo '        Swal.fire({';
    echo '            title: "Shift Deleted Successfully",';
    echo '            text: "Please check Records",';
    echo '            icon: "success",';
    echo '        }).then(function() {';
    echo '            window.location.replace("shift.php");';
    echo '        });';
    echo '    }';
    echo '});';
    echo '</script>';
   
        exit();
    } else {
        echo "ERROR: Unable to update record " . mysqli_error($conn);
    }

    mysqli_close($conn);
}







if (isset($_POST['addrate'])) {
    $emptype = $_POST['emptype'];
    $amount = $_POST['amount'];


    $sql = "INSERT INTO emp_rate (status, rate)
            VALUES ('$emptype', '$amount')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
                   echo '<script>';
    echo 'document.addEventListener("DOMContentLoaded", function() {';
    echo '    if (typeof Swal === "undefined") { alert("SweetAlert library not found."); }';
    echo '    else {';
    echo '        Swal.fire({';
    echo '            title: "Rate Successfully Added",';
    echo '            text: "Please check Records",';
    echo '            icon: "success",';
    echo '        }).then(function() {';
    echo '            window.location.replace("rates.php");';
    echo '        });';
    echo '    }';
    echo '});';
    echo '</script>';
   
       
    } else {
        echo "ERROR: Unable to insert record " . mysqli_error($conn);
    }
}



if (isset($_POST['updateemp_info'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $emptype = $_POST['emptype'];
    $status = $_POST['status'];
    $contact = $_POST['contact'];
    $rate = $_POST['rate'];
    $hiredate = $_POST['hiredate'];
    $personalemail = $_POST['personalemail'];

    // Update account table
    $sqlAccount = "UPDATE account SET personalemail='$personalemail' WHERE name='$name'";
    $resultAccount = mysqli_query($conn, $sqlAccount);

    // Update emp_info table
    $sqlEmpInfo = "UPDATE emp_info SET name='$name', age='$age', status='$status', emptype='$emptype', contact='$contact', rate='$rate', hiredate='$hiredate', personalemail='$personalemail' WHERE id=$id";
    $resultEmpInfo = mysqli_query($conn, $sqlEmpInfo);

    // Check if both updates were successful
    if ($resultAccount && $resultEmpInfo) {
        echo '<script>';
        echo 'document.addEventListener("DOMContentLoaded", function() {';
        echo '    if (typeof Swal === "undefined") { alert("SweetAlert library not found."); }';
        echo '    else {';
        echo '        Swal.fire({';
        echo '            title: "Records Successfully Updated",';
        echo '            text: "Please check Records",';
        echo '            icon: "success",';
        echo '        }).then(function() {';
        echo '            window.location.replace("employee.php");';
        echo '        });';
        echo '    }';
        echo '});';
        echo '</script>';

        exit();
    } else {
        echo "ERROR: UNABLE TO UPDATE RECORD " . mysqli_error($conn);
    }
}








if (isset($_POST['updateemp_infoold'])) {
  $id = $_POST['id'];
  $classification = $_POST['classification'];
  $name = $_POST['name'];

  // Prepare the first update query
  $sql1 = "UPDATE emp_info
           SET classification = ?
           WHERE id = ?";

  // Prepare the second update query
  $sql2 = "UPDATE account
           SET classification = ?
           WHERE name = ?";

  // Prepare and bind the parameters for the first query
  $stmt1 = mysqli_prepare($conn, $sql1);
  mysqli_stmt_bind_param($stmt1, "si", $classification, $id);

  // Prepare and bind the parameters for the second query
  $stmt2 = mysqli_prepare($conn, $sql2);
  mysqli_stmt_bind_param($stmt2, "ss", $classification, $name);

  // Execute the first update query
  mysqli_stmt_execute($stmt1);

  // Execute the second update query
  mysqli_stmt_execute($stmt2);

  // Check if any row was affected in both queries
  $rowsAffected1 = mysqli_stmt_affected_rows($stmt1);
  $rowsAffected2 = mysqli_stmt_affected_rows($stmt2);

  if ($rowsAffected1 > 0 && $rowsAffected2 > 0) {
    echo '<script>alert("Record Successfully Saved");';
    echo 'window.location.replace("employee.php");</script>';
  } else {
    echo "ERROR: UNABLE TO UPDATE RECORD " . mysqli_error($conn);
  }

  // Close the prepared statements
  mysqli_stmt_close($stmt1);
  mysqli_stmt_close($stmt2);
}

  
if (isset($_POST['remove'])) {
  
  
$id = $_POST['id'];
  $name = $_POST['name'];
  $age = $_POST['age'];
  $status = $_POST['status'];
  $contact = $_POST['contact'];
  $rate = $_POST['rate'];
  $hiredate = $_POST['hiredate'];
  $sss = $_POST['sss'];
  $pagibig = $_POST['pagibig'];
  $philhealth = $_POST['philhealth'];
  $clasification="PUT SOMETHING";

$sql = "UPDATE emp_info SET name='$name', age='$age', status='$status', contact='$contact', rate='$rate', hiredate='$hiredate', sss='$sss', pagibig='$pagibig', philhealth='$philhealth', classification='$clasification' WHERE id=$id";

  
  $result = mysqli_query($conn, $sql);

  if ($result) {
               echo '<script>';
    echo 'document.addEventListener("DOMContentLoaded", function() {';
    echo '    if (typeof Swal === "undefined") { alert("SweetAlert library not found."); }';
    echo '    else {';
    echo '        Swal.fire({';
    echo '            title: "Record Successfully Updated",';
    echo '            text: "Please check Record",';
    echo '            icon: "success",';
    echo '        }).then(function() {';
    echo '            window.location.replace("employee.php");';
    echo '        });';
    echo '    }';
    echo '});';
    echo '</script>';
   
        exit();
  } else {
    echo "ERROR: UNABLE TO UPDATE RECORD " . mysqli_error($conn);
  }
}

   
if (isset($_POST['addadmin'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $type='admin';

if($cpassword==$password){

    $sql = "INSERT INTO account (name, username, password, confirmpassword, type)
            VALUES ('$name', '$username', '$password', '$cpassword','$type' )";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      $_SESSION['username']=$username;
       echo '<script>alert("Please Fill up the Security Question");
    </script>';

    header("Location:securityquestion.php");
      exit();
    } else {
        echo "ERROR: Unable to insert record " . mysqli_error($conn);
    }

                          }

}

if (isset($_POST['setsecurity'])) {
    $username = $_POST['username'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    $sql = "UPDATE account SET securityquestion = '$question', answer = '$answer' WHERE username = '$username'";

    $result = mysqli_query($conn, $sql);

    if ($result) {

                   echo '<script>';
    echo 'document.addEventListener("DOMContentLoaded", function() {';
    echo '    if (typeof Swal === "undefined") { alert("SweetAlert library not found."); }';
    echo '    else {';
    echo '        Swal.fire({';
    echo '            title: "Admin Successfully Added",';
    echo '            icon: "success",';
    echo '        }).then(function() {';
    echo '            window.location.replace("home.php");';
    echo '        });';
    echo '    }';
    echo '});';
    echo '</script>';
   
        exit(); 



    } else {
        echo "ERROR: UNABLE TO UPDATE RECORD " . mysqli_error($conn);
    }
}



if (isset($_POST['updaterate'])) {
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'status_') === 0) {
            $id = substr($key, strlen('status_'));
            $status = $_POST['status_'.$id];
            $rate = $_POST['rate_'.$id];

            // Update the corresponding record in the database
            $sql = "UPDATE emp_rate SET status='$status', rate='$rate' WHERE id='$id'";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                echo "ERROR: UNABLE TO UPDATE RECORD " . mysqli_error($conn);
                break;
            }
        }
    }

                      echo '<script>';
    echo 'document.addEventListener("DOMContentLoaded", function() {';
    echo '    if (typeof Swal === "undefined") { alert("SweetAlert library not found."); }';
    echo '    else {';
    echo '        Swal.fire({';
    echo '            title: "Rate Successfully updated",';
    echo '            icon: "success",';
    echo '        }).then(function() {';
    echo '            window.location.replace("rates.php");';
    echo '        });';
    echo '    }';
    echo '});';
    echo '</script>';
   
        exit(); 
}


if (isset($_POST['emprate'])) {




    $id = $_POST['cutoffid'];
    $first = $_POST['firstcutoff'];
    $second = $_POST['secondcutoff'];

    date_default_timezone_set('Asia/Manila');
    $day = date('j');



    $sql = "SELECT first,second FROM cutoff where id=1 ";


    $result = mysqli_query($conn, $sql);


    if ($result) {
 
    $row = mysqli_fetch_assoc($result);

    $todaysfcutoff = $row['first']+1;
    $todaysscutoff = $row['second']+1;

    mysqli_free_result($result);
    } else {
   
    echo "ERROR: " . mysqli_error($conn);
    }

   


if( $todaysfcutoff==$day || $todaysscutoff==$day )
{

    $sql = "UPDATE cutoff SET first = '$first', second = '$second' WHERE id = $id";

// Execute the query
 $result = mysqli_query($conn, $sql);

// Check for success
if ($result === true) {
   
} else {
    echo "Error updating record: " . mysqli_error($conn);
}






    foreach ($_POST as $key => $value) {
        if (strpos($key, 'status_') === 0) {
            $id = substr($key, strlen('status_'));
            $name = $_POST['name_'.$id];
            $status = $_POST['status_'.$id];
            $rate = $_POST['rate_'.$id];

            // Update the corresponding record in the database
            $sql = "UPDATE emp_info SET name='$name', status='$status', rate='$rate' WHERE id='$id'";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                echo "ERROR: UNABLE TO UPDATE RECORD " . mysqli_error($conn);
                break;
            }
        }
    }

                      echo '<script>';
    echo 'document.addEventListener("DOMContentLoaded", function() {';
    echo '    if (typeof Swal === "undefined") { alert("SweetAlert library not found."); }';
    echo '    else {';
    echo '        Swal.fire({';
    echo '            title: "Rate Successfully updated",';
    echo '            icon: "success",';
    echo '        }).then(function() {';
    echo '            window.location.replace("rates.php");';
    echo '        });';
    echo '    }';
    echo '});';
    echo '</script>';

}
else {
    echo '<script>';
echo 'document.addEventListener("DOMContentLoaded", function() {';
echo '    if (typeof Swal === "undefined") { alert("SweetAlert library not found."); }';
echo '    else {';
echo '        Swal.fire({';
echo '            title: "You can\'t Update Rate",';
echo '            icon: "warning",';
echo '            text: "You can Update after the day of Cut off",';
echo '        }).then(function() {';
echo '            window.location.replace("rates.php");';
echo '        });';
echo '    }';
echo '});';
echo '</script>';

}




}














if (isset($_POST['approve'])) {
    $id = $_POST['id'];
    $ot = isset($_POST['ot_checkbox']) ? $_POST['ot'] : '';

    // Update the values of approve_early_timein and approve_ot
    $sql = "UPDATE emp_attendance SET approve_ot = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $ot, $id);
    
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo '<script>window.location.replace("attendance.php");</script>';
    } else {
        // Error updating record
        echo "Error updating record: " . mysqli_error($conn);
    }
}


if (isset($_POST['updateattendance'])) {

    $id = $_POST['id'];
    $ftimein = $_POST['ftimein'];
    $ftimeout = $_POST['ftimeout'];
    $stimein = $_POST['stimein'];
    $stimeout = $_POST['stimeout'];

    $datein = $_POST['datein'];
    $dateout = $_POST['dateout'];

    $ot = $_POST['ot'];
    $totalhours = $_POST['totalhours'];
    $status = $_POST['status'];

    $formattedDate = date("Y-m-d", strtotime($datein));

    function validateTimeInput($time) {
        // Regular expression pattern for "hh:mm AM/PM" format
        $pattern = '/^(1[0-2]|0?[1-9]):([0-5][0-9]) [AP]M$/i';

        // Check if the input matches the pattern
        return preg_match($pattern, $time);
    }

    function validateDateInput($date) {
        // Regular expression pattern for "Month dd, yyyy" format
        $pattern = '/^[A-Za-z]+\s+\d{1,2},\s+\d{4}$/';

        // Check if the input matches the pattern
        return preg_match($pattern, $date);
    }

    if (validateDateInput($datein)) {
       $sql = "UPDATE emp_attendance SET first_timein='$ftimein', first_timeout='$ftimeout', second_timein='$stimein', second_timeout='$stimeout', overtime_totalhours='$ot', shift_totalhours='$totalhours', date_timein='$datein', date_timeinin='$formattedDate', date_timeout='$dateout', timein_status='$status'  WHERE id='$id'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo '<script>';
            echo 'document.addEventListener("DOMContentLoaded", function() {';
            echo '    if (typeof Swal === "undefined") { alert("SweetAlert library not found."); }';
            echo '    else {';
            echo '        Swal.fire({';
            echo '            title: "Attendance Updated",';
            echo '            icon: "success",';
            echo '        }).then(function() {';
            echo '            window.location.replace("attendance.php");';
            echo '        });';
            echo '    }';
            echo '});';
            echo '</script>';
            exit();
        } else {
            echo "ERROR: UNABLE TO UPDATE RECORD " . mysqli_error($conn);
        }
    } else {
        echo '<script>';
        echo 'document.addEventListener("DOMContentLoaded", function() {';
        echo '    if (typeof Swal === "undefined") { alert("SweetAlert library not found."); }';
        echo '    else {';
        echo '        Swal.fire({';
        echo '            title: "Invalid Date Format",';
        echo '            text: "Example format: January 1, 2000",';
        echo '            icon: "warning",';
        echo '        }).then(function() {';
        echo '            window.location.replace("attendance.php");';
        echo '        });';
        echo '    }';
        echo '});';
        echo '</script>';
        exit();
    }

    if (validateTimeInput($ftimein) && validateTimeInput($ftimeout) && validateTimeInput($stimein) && validateTimeInput($stimeout)) {
        $sql = "UPDATE emp_attendance SET first_timein='$ftimein', first_timeout='$ftimeout', second_timein='$stimein', second_timeout='$stimeout', overtime_totalhours='$ot', shift_totalhours='$totalhours', date_timein='$datein', date_timeinin='$formattedDate', date_timeout='$dateout', timein_status='$status'  WHERE id='$id'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo '<script>';
            echo 'document.addEventListener("DOMContentLoaded", function() {';
            echo '    if (typeof Swal === "undefined") { alert("SweetAlert library not found."); }';
            echo '    else {';
            echo '        Swal.fire({';
            echo '            title: "Attendance Updated",';
            echo '            icon: "success",';
            echo '        }).then(function() {';
            echo '            window.location.replace("attendance.php");';
            echo '        });';
            echo '    }';
            echo '});';
            echo '</script>';
            exit();
        } else {
            echo "ERROR: UNABLE TO UPDATE RECORD " . mysqli_error($conn);
        }
    } else {
        echo '<script>';
        echo 'document.addEventListener("DOMContentLoaded", function() {';
        echo '    if (typeof Swal === "undefined") { alert("SweetAlert library not found."); }';
        echo '    else {';
        echo '        Swal.fire({';
        echo '            title: "Invalid Time Format",';
        echo '            text: "Example format: 12:00 PM",';
        echo '            icon: "warning",';
        echo '        }).then(function() {';
        echo '            window.location.replace("attendance.php");';
        echo '        });';
        echo '    }';
        echo '});';
        echo '</script>';
        exit();
    }
}


if (isset($_POST['save'])) {
    $daysOfWeek = ['mon', 'tue', 'wed', 'thur', 'fri', 'sat', 'sun'];
    $holidays = ['holiday1', 'holiday2', 'holiday3', 'holiday4', 'holiday5', 'holiday6', 'holiday7'];
    
    foreach ($daysOfWeek as $index => $day) {
        if (isset($_POST[$day])) {
            $schedule = $_POST[$day];
            $date = $_SESSION[$day . 'date'];

            // Check if the holiday data exists for the current day
            if (isset($_POST[$holidays[$index]])) {
                $holiday = $_POST[$holidays[$index]];
                $holidayString = implode(',', $holiday);
            } else {
                $holidayString = ''; // Default to an empty string if no holiday data
            }

            foreach ($schedule as $item) {
                $parts = explode("//", $item);
                $result = trim($parts[0]);
                $namePart = trim($parts[1]);
                if (empty($namePart)) {
                    continue;
                }

                // Use the date corresponding to the current day in your SQL query
                $dayDate = $_SESSION[$day . 'date'];
                $sql = "SELECT * FROM emp_weekly_schedule WHERE name = '$namePart' AND schedule LIKE '%$dayDate%'";
                $sqlrun = mysqli_query($conn, $sql);

                if (mysqli_num_rows($sqlrun) > 0) {
                    $query = "UPDATE `emp_weekly_schedule` SET `schedule` = '$result', `dayss`= '$holidayString' WHERE name = '$namePart' AND schedule LIKE '%$dayDate%' ";
                } else {
                    $query = "INSERT INTO `emp_weekly_schedule` (`name`, `schedule`, `dayss`) VALUES ('$namePart', '$result', '$holidayString')";
                }

                $query_run = mysqli_query($conn, $query);

                if ($query_run) {
                    echo '<script>alert("Record Successfully ' . (mysqli_num_rows($sqlrun) > 0 ? 'updated' : 'added') . '");';
                    echo 'window.location.replace("admin_schedule.php");</script>';
                } else {
                    echo "Error " . (mysqli_num_rows($sqlrun) > 0 ? 'updating' : 'inserting') . " record: " . mysqli_error($conn);
                }

                // Debugging statements
                echo "Debug: Processing item: $item<br>";
                echo "Debug: Query: $query<br>";
                echo "Debug: Holiday String: $holidayString<br>";
                // Add more debug statements as needed
            }
        }
    }
}



if (isset($_POST['print'])) {
    // Retrieve form data
        $name = $_POST['name'];
    $date = $_POST['date'];
    $status = $_POST['status'];
    $rate = $_POST['rate'];
    $totalhours = $_POST['totalhours'];
    $totalamount = $_POST['totalamount'];
    $totalothours = $_POST['totalothours'];
    $totalotamount = $_POST['totalotamount'];
    $NDhour = $_POST['NDhour'];
    $NDtotalamount = $_POST['NDtotalamount'];
    $RHhour = $_POST['RHhour'];
    $RHamount = $_POST['RHamount'];
    $LHhour = $_POST['LHhour'];
    $LHamount = $_POST['LHamount'];
    $sss = $_POST['sss'];
    $pagibig = $_POST['pagibig'];
    $philhealth = $_POST['philhealth'];
    $gt = $_POST['gt'];
    $lshw = $_POST['lshw'];
    $totalnet = $_POST['totalnet'];
    $currentDate = date("Y-m-d");
    $formattedDate1 = date("Y-m-d", strtotime($currentDate));

    // Check if the record already exists
    $checkQuery = "SELECT * FROM emp_payslip_history WHERE name = '$name' AND datePaid = '$formattedDate1'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        echo '<script>';
        echo 'document.addEventListener("DOMContentLoaded", function() {';
        echo '    if (typeof Swal === "undefined") { alert("SweetAlert library not found."); }';
        echo '    else {';
        echo '        Swal.fire({';
        echo '            text: "Record is already saved",';
        echo '            icon: "error",';
        echo '        }).then(function() {';
echo '            window.close();';  // Close the current tab
        echo '        });';
        echo '    }';
        echo '});';

        echo '</script>';


        exit();
    }

    // Record doesn't exist, proceed with insertion
    $sql = "INSERT INTO emp_payslip_history (name, status, rate, dates, datePaid, totalHours, totalAmount, totalOTHours, totalOTAmount, nightDeffHours, nightDeffTotalAmount, RHhour, RHamount, LHhour, LHamount, sss,  pagibig, philhealth, grossTaxable, lessTax, grossAfterTax, netPay )
            VALUES ('$name', '$status', '$rate', '$date', '$formattedDate1', '$totalhours', '$totalamount', '$totalothours', '$totalotamount', '$NDhour', '$NDtotalamount', '$RHhour', '$RHamount', '$LHhour', '$LHamount', '$sss', '$pagibig', '$philhealth', '$gt', '$lshw', '$totalnet', '$totalnet')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Successful insertion
  echo '<script>';
echo 'document.addEventListener("DOMContentLoaded", function() {';
echo '    if (typeof Swal === "undefined") { alert("SweetAlert library not found."); }';
echo '    else {';
echo '        Swal.fire({';
echo '            title: "Payslip Saved",';
echo '            icon: "success",';



echo '        }).then(function() {';
echo '            window.close();';  // Close the current tab
echo '        });';
echo '    }';
echo '});';
echo '</script>';

        exit();
    } else {
        // Error in insertion
        echo "ERROR: Unable to insert record " . mysqli_error($conn);
    }

}




if (isset($_POST["addattendance"])) {
    // Collect form data
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $ftimein = mysqli_real_escape_string($conn, $_POST["ftimein"]);
    $ftimeout = mysqli_real_escape_string($conn, $_POST["ftimeout"]);
    $datein = mysqli_real_escape_string($conn, $_POST["datein"]);
    $ot = mysqli_real_escape_string($conn, $_POST["ot"]);
    $stimein = mysqli_real_escape_string($conn, $_POST["stimein"]);
    $stimeout = mysqli_real_escape_string($conn, $_POST["stimeout"]);
    $dateout = mysqli_real_escape_string($conn, $_POST["dateout"]);
    $totalhours = mysqli_real_escape_string($conn, $_POST["totalhours"]);
    $nightdifferential = mysqli_real_escape_string($conn, $_POST["nightdifferential"]);
    $status = mysqli_real_escape_string($conn, $_POST["status"]);
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $adminpass = mysqli_real_escape_string($conn, $_POST["adminpass"]);

    $convertedDate = date('Y-m-d', strtotime($datein));


    $query = "SELECT * FROM account WHERE username='$username' AND password='$adminpass' AND classification=''";
    $query_run = mysqli_query($conn, $query);

     if (mysqli_num_rows($query_run) > 0) {
        $row = mysqli_fetch_array($query_run);

        if ($row['type'] == "admin") {


    // Your SQL query to insert data into the database
    $sql_insert = "INSERT INTO emp_attendance (name, first_timein, first_timeout, date_timein, date_timeinin, overtime_totalhours,  approve_ot, second_timein, second_timeout, date_timeout, shift_totalhours, timein_status, dayss, nightdeff) 
                   VALUES ('$name', '$ftimein', '$ftimeout', '$datein', '$convertedDate', '$ot', '$ot', '$stimein', '$stimeout', '$dateout', '$totalhours', '$status', 'Regular Day', '$nightdifferential')";

    // Execute the query
    if (mysqli_query($conn, $sql_insert)) {
                            echo '<script>';
    echo 'document.addEventListener("DOMContentLoaded", function() {';
    echo '    if (typeof Swal === "undefined") { alert("SweetAlert library not found."); }';
    echo '    else {';
    echo '        Swal.fire({';
    echo '            title: "Attendance Successfully Added",';

    echo '            icon: "success",';
    echo '        }).then(function() {';
    echo '            window.location.replace("attendance.php");';
    echo '        });';
    echo '    }';
    echo '});';
    echo '</script>';
   
        exit(); 

    } else {
        echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
    }
}
}









else {

        echo '<script>';
        echo 'document.addEventListener("DOMContentLoaded", function() {';
        echo '    if (typeof Swal === "undefined") { alert("SweetAlert library not found."); }';
        echo '    else {';
        echo '        Swal.fire({';
        echo '            title: "Invalid credentials",';
        echo '            text: "Please try again",';
        echo '            icon: "error",';
        echo '        }).then(function() {';
        echo '            window.location.replace("attendance.php");';
        echo '        });';
        echo '    }';
        echo '});';
        echo '</script>';

        exit();
    }

}






ob_start();

if (isset($_GET['name']) && isset($_GET['date'])) {
    $name = $_GET['name'];
    $date = $_GET['date'];
    require_once('TCPDF-main/tcpdf.php');
 
    $sql = "SELECT * FROM emp_payslip_history
    WHERE name= '$name' and datePaid ='$date' ; ";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

    // Retrieve form data
    $name = $row['name'];
    $datepaid = $row['datePaid'];
    $date = $row['dates'];
    $status = $row['status'];
    $rate = $row['rate'];
    $totalhours = $row['totalHours'];
    $totalamount = $row['totalAmount'];
    $totalothours = $row['totalOTHours'];
    $totalotamount = $row['totalOTAmount'];
    $NDhour = $row['nightDeffHours'];
    $NDtotalamount = $row['nightDeffTotalAmount'];
    $RHhour = $row['RHhour'];
    $RHamount = $row['RHamount'];
    $LHhour = $row['LHhour'];
    $LHamount = $row['LHamount'];
    $sss = $row['sss'];
    $pagibig = $row['pagibig'];
    $philhealth = $row['philhealth'];
    $gt = $row['grossTaxable'];
    $lshw = $row['lessTax'];
    $totalnet = $row['netPay'];

        // Create a new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8');

        // Set document information and metadata
        $pdf->SetCreator('Romeo\'s Cafe');
        $pdf->SetAuthor('Romeo');
        $pdf->SetTitle('Payroll');
        $pdf->SetSubject('Payroll Report');
        $pdf->SetKeywords('Payroll, Report, PDF');

        // Set some language-dependent strings
        $l = array(
            'a_meta_charset' => 'UTF-8',
            'a_meta_language' => 'en',
            'w_page' => 'page',
        );

        $pdf->setLanguageArray($l);

        // Add a page
        $pdf->AddPage();

        $customCss = '<style>
        table, h1, h5 {
            margin: 0;
        }
        </style>';

        // Output the custom CSS to the PDF
        $pdf->writeHTML($customCss, true, false, true, false, '');

        // Load the logo image
        $logo = "images/newlogo.jpg";

        // Insert the logo
        $pdf->Image($logo, 20, 12, 20, '', '', '', 'T', false, 300, '', false, false, 0);

        // Set font
        $pdf->SetFont('times', '', 12);

        // Output content to PDF
        $html = '
        <br>
             <table >
                <tr> 
                  <td colspan="4"><h1 style="text-align:center;" >ROMEO\'S CAFE</h1></td>   
                 </tr>
                 <tr> 
                  <td colspan="4"><h6 style="text-align:center;" class="no-margin">Contact No: 09630187684</h6></td>   
                 </tr>
                 <tr> 
                  <td colspan="4"><h6 style="text-align:center;" class="no-margin">Unit 2, Super 9 Building, Emilio Aguinaldo Hwy, Bacoor, Philippines</h6></td>   
                 </tr>
            </table>
             <br>
             
               <hr>
           <table  >
             <tr>
                    <td colspan="4" ></td>
                </tr>
                <tr> 
                    <td style="width: 10%;">Name:</td>
                    <td style="width: 30%;"><h5>'.$name.'</h5></td>
                    <td style="width: 10%;">Date:</td>
                    <td style="width: 50%;"><h5>'.$date.'</h5></td>
                </tr>
               
                <tr>
                    <td>Position:</td>
                    <td><h5>'.$status.'</h5></td>
                    <td>Rate:</td>
                    <td><h5>'.$rate.'.00</h5></td>
                </tr>
              
                <tr>
                    <td colspan="4" ></td>
                </tr>
                <tr>
                    <td style="width: 50%;" colspan="2"  ></td>
                    <td style="width: 20%;"><h5>Hours </h5></td>
                    <td style="width: 20%;"><h5>Amount</h5></td>
                </tr>
                <tr>
                    <td colspan="2">Total Hours:</td>
                    <td>'.$totalhours.'</td>
                    <td>'.$totalamount.'</td>
                </tr>
                <tr>
                    <td colspan="2">Total Overtime:</td>
                    <td>'.$totalothours.'</td>
                    <td>'.$totalotamount.'</td>
                </tr>
                <tr>
                    <td colspan="2">Total Night Differential:</td>
                    <td>'.$NDhour.'</td>
                    <td>'.$NDtotalamount.'</td>
                </tr>
                <tr>
                    <td colspan="4" ></td>
                </tr>
                <tr>
                    <td colspan="2">Regular Holiday:</td>
                    <td>'.$RHhour.'</td>
                    <td>'.$RHamount.'</td>
                </tr>
                <tr>
                    <td colspan="2">Legal Holiday:</td>
                    <td>'.$LHhour.'</td>
                    <td>'.$LHamount.'</td>
                </tr>
                <tr>
                    <td colspan="4" ></td>
                </tr>
                <tr>
                    <td colspan="2">SSS</td>
                    <td></td>
                    <td colspan="2">'.$sss.'</td>
                </tr>
                <tr>
                    <td colspan="2">Pagibig</td>
                    <td></td>
                    <td colspan="2">'.$pagibig.'</td>
                </tr>
                <tr>
                    <td colspan="2">PhilHealth</td>
                    <td></td>
                    <td colspan="2">'.$philhealth.'</td>
                </tr>
                <tr>
                    <td colspan="4" ></td>
                </tr>
                <tr>
                    <td colspan="2">Gross Taxable:</td>
                    <td></td>
                    <td colspan="2">'.$gt.'</td>
                </tr>
                <tr>
                    <td colspan="2">Less W/H Tax:</td>
                    <td></td>
                    <td colspan="2">'.$lshw.'</td>
                </tr>

                <tr>
                    <td colspan="2">Gross After Tax:</td>
                    <td></td>
                    <td colspan="2">'.$totalnet.'</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
             <hr>
                <tr>
                    <td colspan="3" ><h4> Net Pay:</h4></td>
                    <td colspan="2" ><h4>'.$totalnet.'</h4></td>
                </tr>
                 <hr>
             
            </table>';

        $pdf->writeHTML($html, true, false, true, false, '');

        // Close and output PDF document
        ob_end_clean(); // Clean the output buffer
        $pdf->Output('payroll.pdf', 'D'); // Download the PDF file

    }
        }
    }
}


if (isset($_POST['updateshift'])) {
    $shift = $_POST['shifts'];
    $timein = $_POST['timein'];
    $timeout = $_POST['timeout'];
    $status = "Approve";
    
  
    // Convert time to non-military format
    $formattedTimeIn = date('g:i A', strtotime($timein));
    $formattedTimeOut = date('g:i A', strtotime($timeout));

   $sql = "UPDATE shift
        SET 
            time_in = '$formattedTimeIn',
            time_out = '$formattedTimeOut',
            shift_status = '$status'
        WHERE shifts = '$shift'";


    $result = mysqli_query($conn, $sql);

    if ($result) {
                  echo '<script>';
    echo 'document.addEventListener("DOMContentLoaded", function() {';
    echo '    if (typeof Swal === "undefined") { alert("SweetAlert library not found."); }';
    echo '    else {';
    echo '        Swal.fire({';
    echo '            title: "Record Updated",';
    echo '            text: "Please Check Record",';
    echo '            icon: "success",';
    echo '        }).then(function() {';
    echo '            window.location.replace("shift.php");';
    echo '        });';
    echo '    }';
    echo '});';
    echo '</script>';
   
        exit();
    } else {
        echo "ERROR: Unable to update record " . mysqli_error($conn);
    }
}



if (isset($_POST['cutoff'])) {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    // Assuming you have an ID for the row you want to update
    $id = $_POST["id"];

    // Update data in the database
    $sql = "UPDATE cutoff SET first = '$number1', second = '$number2' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

 ?>