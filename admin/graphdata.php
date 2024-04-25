<?php
require_once "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yearly Salary Chart</title>
    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<style>
    .hide
    {
        display:none;
    }
</style>
<body>
    <!-- Create canvas for the line graph -->
      <p class="hide" id="totalValue"></p>

    <canvas id="salaryChart" width="100%" height="100%"></canvas>






<?php 


    $query = "SELECT name FROM emp_attendance";
$result = mysqli_query($conn, $query);

if ($result) {
    // Array to store unique names
    $names = array();
    
    // Loop through the result set
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        
        // Check if the name has already been fetched
        if (!in_array($name, $names)) {
            $names[] = $name;
        }
    }
    ?>
      

<?php

$timezone = new DateTimeZone('Asia/Manila');
$dateeee = new DateTime('now', $timezone);

// Using date function
$date1 = date('m/01/Y'); // First day of the current month
$formattedDate1 = date("Y-m-d", strtotime($date1));
$formattedDate11 = date("F d, Y", strtotime($date1));

// Using DateTime class
$date2 = $dateeee; 
$formattedDate2 = $date2->format('Y-m-d');
$formattedDate22 = $date2->format('F d, Y');

    $names =$name;
    $sql_all1 = "SELECT emp_attendance.name,
        TIME_FORMAT(SEC_TO_TIME(SUM(TIME_TO_SEC(TIME_FORMAT(shift_totalhours, '%H:%i')))), '%H:%i') AS all_shifted,
        TIME_FORMAT(SEC_TO_TIME(SUM(TIME_TO_SEC(TIME_FORMAT(approve_ot, '%H:%i')))), '%H:%i') AS total_ot_hours,
        TIME_FORMAT(SEC_TO_TIME(SUM(TIME_TO_SEC(TIME_FORMAT(approve_early_timein, '%H:%i')))), '%H:%i') AS total_early_time,
        TIME_FORMAT(SEC_TO_TIME(SUM(TIME_TO_SEC(TIME_FORMAT(nightdeff, '%H:%i')))), '%H:%i') AS nightdeff,
        TIME_FORMAT(SEC_TO_TIME(SUM(CASE WHEN dayss = 'Regular Day' THEN TIME_TO_SEC(TIME_FORMAT(shift_totalhours, '%H:%i')) ELSE 0 END)), '%H:%i') AS total_hours_shifted,
        TIME_FORMAT(SEC_TO_TIME(SUM(CASE WHEN dayss = 'Regular Holiday'THEN TIME_TO_SEC(TIME_FORMAT(shift_totalhours, '%H:%i')) ELSE 0 END)), '%H:%i') AS RHtotal_hours_shifted,
        TIME_FORMAT(SEC_TO_TIME(SUM(CASE WHEN dayss = 'Legal Holiday' THEN TIME_TO_SEC(TIME_FORMAT(shift_totalhours, '%H:%i')) ELSE 0 END)), '%H:%i') AS LHtotal_hours_shifted,
          CASE WHEN emp_info.sss = '' THEN '0' ELSE '1' END AS sss,
         CASE WHEN emp_info.philhealth = '' THEN '0' ELSE '1' END AS philhealth,
            CASE WHEN emp_info.pagibig = '' THEN '0' ELSE '1' END AS pagibig,
     emp_info.name AS namess, emp_info.rate AS rates,
     emp_attendance.first_timein AS first_timein,
     emp_attendance.first_timeout AS first_timeout,
     emp_attendance.second_timein AS second_timein,
     emp_attendance.second_timeout AS second_timeout,
     emp_attendance.date_timein AS date_timein,
     emp_attendance.date_ftimeout AS date_ftimeout,
     emp_attendance.date_timeout AS date_timeout,
     emp_attendance.date_stimein AS date_stimein,

     emp_info.status AS statuss

   

    FROM
        emp_attendance
    JOIN
        emp_info ON emp_attendance.name = emp_info.name
    WHERE
         DATE(date_timeinin) BETWEEN '$formattedDate1' AND '$formattedDate2'
         AND emp_attendance.second_timeout IS NOT NULL
    Group by emp_attendance.name";
    $result_all1 = mysqli_query($conn, $sql_all1);?>



<div class="Dateselected">
</div>
<?php
if (mysqli_num_rows($result_all1) > 0) {
    while ($row_all = mysqli_fetch_assoc($result_all1)) {

        $gt ="00.00";
        $lshw ="00.00";

        
        $status = $row_all['statuss'];
        $allshifted = $row_all['all_shifted'];


        $rateperday = $row_all['rates'];
        $rateperhour = $rateperday/ 8;
        $totalregularhours =  $row_all['total_hours_shifted']; 
        list($hours, $minutes) = explode(':', $totalregularhours);
        $totalHours = (int)$hours + ($minutes / 60);
        $StotalAmount = $totalHours * $rateperhour;
        $StotalAmount = number_format($StotalAmount, 2);


        $totalallshift =  $row_all['all_shifted']; 
        list($allshifthours, $allshiftminutes) = explode(':', $totalallshift);
        $allshifttotalHours = (int)$allshifthours + ($allshiftminutes / 60);
        $allshifttotalAmount = $allshifttotalHours * $rateperhour;
    
        

        $RHSrate = $rateperday * .30;
        $RHSrateperhour = $RHSrate / 8;
        $RHStotalhours =  $row_all['RHtotal_hours_shifted']; 
        list($RHShours, $RHSminutes) = explode(':', $RHStotalhours);
        $RHStotalHourss = (int)$RHShours + ($RHSminutes / 60);
        $RHStotalAmount = $RHStotalHourss * $RHSrateperhour;
    

        $LHSrate = $rateperday * 1;
        $LHSrateperhour = $LHSrate/ 8;
        $LHStotalhours =  $row_all['LHtotal_hours_shifted']; 
        list($LHShours, $LHSminutes) = explode(':', $LHStotalhours);
        $LHStotalHourss = (int)$LHShours + ($LHSminutes / 60);
        $LHStotalAmount = $LHStotalHourss * $LHSrateperhour;    
        

        $totalAmount = $LHStotalAmount +$allshifttotalAmount + $RHStotalAmount;
    
        $otrate = $rateperday * 1.25;
        $otrateperhour = $otrate / 8;
        $ottotalhours = $row_all['total_ot_hours'];

        // Check if the string contains a colon before splitting it
        if (strpos($ottotalhours, ':') !== false) {
            list($othours, $otminutes) = explode(':', $ottotalhours);
            $ottotalHourss = (int)$othours + ($otminutes / 60);
            $ottotalAmount = $ottotalHourss * $otrateperhour;
            $ottotalAmount = number_format($ottotalAmount, 2);
        } else {
            // Handle the case where the string doesn't contain a colon
            $ottotalAmount = 0; // Or any other appropriate default value
        }


        $NDrateperhour = $rateperhour* 0.10;
        $NDtotalhours = $row_all['nightdeff'];
        list($NDhours, $NDminutes) = explode(':', $NDtotalhours);
        $NDtotalHourss = (int)$NDhours + ($NDminutes / 60);
        $NDtotalAmount = $NDtotalHourss * $NDrateperhour;
        $NDtotalAmount = number_format($NDtotalAmount, 2);

        $totalholidaypay= $RHStotalAmount + $LHStotalAmount;
        $totalholidaypay = number_format($totalholidaypay, 2);

        $lookupTable = array(0 => '0.00', 1 => '100.00');
        $pagibigs = isset($lookupTable[$row_all['pagibig']]) ? $lookupTable[$row_all['pagibig']] : 'Unknown';
        $totalpagibig=$pagibigs/2;
        $totalpagibig = number_format($totalpagibig, 2);

        $Phrate= $rateperday* 21;
        $Phpay = 0.015* $Phrate;
        $lookupTable1 = array(0 => '0.00', 1 => $Phpay);
        $philhealths = isset($lookupTable1[$row_all['philhealth']]) ? $lookupTable1[$row_all['philhealth']] : 'Unknown';
        $totalphilhealth=$philhealths/2;
        $totalphilhealth = number_format($totalphilhealth, 2);

        $SSrate= $rateperday* 21;
        $variable = (($SSrate >= 8250 && $SSrate <= 8749.99) * 382.50) +
                    (($SSrate >= 8750 && $SSrate <= 9249.99) * 405.00) +
                    (($SSrate >= 9250 && $SSrate <= 9749.99) * 427.50)+
                    (($SSrate >= 9750 && $SSrate <= 10249.99) * 450.00)+
                    (($SSrate >= 10250 && $SSrate <= 10749.99) * 472.50)+
                    (($SSrate >= 10750  && $SSrate <= 11249.99) * 495.00);
        $lookupTable2 = array(0 => '0.00', 1 => $variable);
        $SSSS = isset($lookupTable2[$row_all['sss']]) ? $lookupTable2[$row_all['sss']] : 'Unknown';
        $totalsss=$SSSS/2;
        $totalsss = number_format($totalsss, 2);
        $totalgross= $totalAmount + $ottotalAmount + $NDtotalAmount;
        $totalbenefit=$totalpagibig+$totalphilhealth+$totalsss;
        $totalnetpay = $totalgross - $totalbenefit;
        $totalnetpay = number_format($totalnetpay, 2);





    ?>
 
     <table>
    
            <td class="wagisama" id="allnetpay"><?php echo $totalnetpay; ?></td>
             
           

          </table>

  <p id="totalValue"></p>




 
    <?php
}
}
}
 ?>
       




<?php
// Assuming you have a database connection
require_once "config.php";

// Get the current month and year
$currentMonth = date('m');
$currentYear = date('Y');

// Calculate the start date for the last 6 months (excluding the current month)
$startDate = date('Y-m-d', strtotime("-6 months"));

// Initialize variables to store results for each month
$l1m = $l2m = $l3m = $l4m = $l5m = 0;

// Loop through the last 5 months
for ($i = 1; $i <= 5; $i++) {
    $month = date('F', strtotime("-$i months"));
    
    // Calculate the start and end dates for the current month
    $startOfMonth = date('Y-m-01', strtotime("-$i months"));
    $endOfMonth = date('Y-m-t', strtotime("-$i months"));

    // Construct the SQL query with COALESCE for default value
    $sql = "SELECT COALESCE(FORMAT(SUM(CAST(REPLACE(netPay, ',', '') AS DECIMAL(10,2))), 2), '0') AS totalNetPay 
            FROM emp_payslip_history 
            WHERE datePaid BETWEEN '$startOfMonth' AND '$endOfMonth'";

    // Execute the query
    $result = $conn->query($sql);

    // Store the result in the respective variable
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ${"l{$i}m"} = str_replace(',', '', $row['totalNetPay']);
    } else {
        ${"l{$i}m"} = 0; // Set a default value of 1000 if no value is retrieved
    }
}



// Display the results (optional)

?>
<div class=" hide">
    <?php
include 'currentsalary.php';
?>
</div>
<?php

// Close the database connection

?>









   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Include Chart.js library -->

<script>
$(function() {
  var sum_total_data = 0;
  $("tr #allnetpay").each(function(index, value) {
    var getEachRow = parseFloat($(value).text().replace(/,/g, ''));
    sum_total_data += getEachRow;
  });
  var formattedTotal = sum_total_data.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
 var totalWithoutComma = parseFloat(formattedTotal.replace(/,/g, '')); // Convert to float

document.getElementById('totalValue').innerHTML = totalWithoutComma;








  // Function to get the last 6 months dynamically
  function getLastSixMonths() {
    var months = [];
    var currentDate = new Date();

    for (var i = 5; i >= 0; i--) {
      var month = new Date(currentDate);
      month.setMonth(currentDate.getMonth() - i);
      months.push(new Intl.DateTimeFormat('en-US', { month: 'short' }).format(month));
    }

    return months;
  }

  var l1m = "<?php echo $l1m; ?>";
  var l2m = "<?php echo $l2m; ?>";
  var l3m = "<?php echo $l3m; ?>";
  var l4m = "<?php echo $l4m; ?>";
  var l5m = "<?php echo $l5m; ?>";

  // Manually input salary values for each month
  var labels = getLastSixMonths();
var salaryData = [parseFloat(l5m), parseFloat(l4m), parseFloat(l3m), parseFloat(l2m), parseFloat(l1m), totalWithoutComma];

  // Get the canvas element
  var ctx = document.getElementById('salaryChart').getContext('2d');

  // Create the line graph
  var salaryChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: labels,
      datasets: [{
        label: 'Monthly Salary',
        data: salaryData,
        fill: false,
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 2
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
});
</script>

</body>
</html>
