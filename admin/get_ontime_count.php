<?php
require_once "config.php"; // Include your database connection setup here

// Initialize arrays to hold the data for each category
$onTimeData = [];
$lateData = [];
$absentData = [];
$labels = [];
$currentDate = new DateTime('now');

// Set the day of the week to Monday (1) for the current date
$currentDate->setISODate($currentDate->format('Y'), $currentDate->format('W'), 1);

// Subtract 28 days to get to the start of the four weeks ago
$currentDate->modify('-28 days');

for ($i = 0; $i < 4; $i++) {
    // Get the start and end dates for the current week
    $startOfWeek = $currentDate->format('Y-m-d');
    $currentDate->modify('+6 days');
    $endOfWeek = $currentDate->format('Y-m-d');

    // Query to count "on-time" entries for the current week
    $onTimeSql = "SELECT COUNT(*) AS count FROM emp_attendance WHERE DATE(date_timeinin) BETWEEN ? AND ? AND timein_status = 'Ontime'";
    
    // Query to count "late" entries for the current week
    $lateSql = "SELECT COUNT(*) AS count FROM emp_attendance WHERE DATE(date_timeinin) BETWEEN ? AND ? AND timein_status = 'Late'";
    
    // Query to count "absent" entries for the current week
    $absentSql = "SELECT COUNT(*) AS count FROM emp_attendance WHERE DATE(date_timeinin) BETWEEN ? AND ? AND timein_status = 'Absent'";
    
    // Use prepared statements to prevent SQL injection
    $stmtOnTime = $conn->prepare($onTimeSql);
    $stmtOnTime->bind_param('ss', $startOfWeek, $endOfWeek);
    $stmtOnTime->execute();
    $onTimeResult = $stmtOnTime->get_result();

    $stmtLate = $conn->prepare($lateSql);
    $stmtLate->bind_param('ss', $startOfWeek, $endOfWeek);
    $stmtLate->execute();
    $lateResult = $stmtLate->get_result();

    $stmtAbsent = $conn->prepare($absentSql);
    $stmtAbsent->bind_param('ss', $startOfWeek, $endOfWeek);
    $stmtAbsent->execute();
    $absentResult = $stmtAbsent->get_result();

    // Fetch the results
    $onTimeRow = $onTimeResult->fetch_assoc();
    $lateRow = $lateResult->fetch_assoc();
    $absentRow = $absentResult->fetch_assoc();

    // Add data to the arrays
    $labels[] = date('m/d/Y', strtotime($startOfWeek)) . " - " . date('m/d/Y', strtotime($endOfWeek));
    $onTimeData[] = (int) $onTimeRow['count'];
    $lateData[] = (int) $lateRow['count'];
    $absentData[] = (int) $absentRow['count'];

    // Move to the next week
    $currentDate->modify('+1 day'); // Move to the next day
  
}

$response = [
    'labels' => $labels,
    'onTime' => $onTimeData,
    'late' => $lateData,
    'absent' => $absentData,
];

header('Content-Type: application/json');
echo json_encode($response);
?>
