<?php
    require_once"config.php";

// Query to get aggregated netPay for each month
$sql = "SELECT MONTH(dates) as month, SUM(netPay) as totalNetPay FROM emp_payslip_history GROUP BY month ORDER BY month";
$result = $conn->query($sql);

$months = [];
$netPays = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $months[] = date("M", mktime(0, 0, 0, $row["month"], 1));
        $netPays[] = $row["totalNetPay"];
    }
}

$conn->close();

echo json_encode(["months" => $months, "netPays" => $netPays]);
?>
