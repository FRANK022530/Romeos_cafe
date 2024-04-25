<?php
  require_once"config.php";
         $employeeName = $_POST['employeeName'];
$selectedShift = $_POST['selectedShift'];

// Assuming you have a table named 'employee_shifts'
$sql = "INSERT INTO emp_selected_schedule (name, schedule) VALUES ('$employeeName', '$selectedShift')
        ON DUPLICATE KEY UPDATE schedule = VALUES(schedule)";

if (!mysqli_query($conn, $sql)) {
    echo "Error executing query: " . mysqli_error($conn);
}
?>