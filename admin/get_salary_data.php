<?php
require_once "config.php";

$currentMonth = date('m');
$currentYear = date('Y');
$startDate = date('Y-m-d', strtotime("-6 months"));

$salaryData = array();

for ($i = 1; $i <= 5; $i++) {
    $startOfMonth = date('Y-m-01', strtotime("-$i months"));
    $endOfMonth = date('Y-m-t', strtotime("-$i months"));

    $sql = "SELECT FORMAT(SUM(CAST(REPLACE(netPay, ',', '') AS DECIMAL(10,2))), 2) AS totalNetPay 
            FROM emp_payslip_history 
            WHERE datePaid BETWEEN '$startOfMonth' AND '$endOfMonth'";

    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $salaryData[] = str_replace(',', '', $row['totalNetPay']);
    } else {
        $salaryData[] = 0;
    }
}

// Output the salary data as JSON
echo json_encode($salaryData);

// Close the database connection
$conn->close();
?>
