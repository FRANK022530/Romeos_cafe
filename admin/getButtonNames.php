	<?php 
	require_once"config.php";
 ?>

<?php
// Connect to your database (you'll need to provide your database connection details)

// Query your database to fetch the list of shifts
$query = "SELECT shift_id, shifts FROM your_shifts_table";
// Execute the query and fetch the results into an array

$shiftData = array();
$shifts = array();

foreach ($results as $row) {
    $shiftId = $row['shift_id'];
    $shiftName = $row['shifts'];
    
    // Define the behavior and values for each shift based on your custom logic
    $nextShift = determineNextShift($shiftName); // Implement your custom logic
    $value = determineShiftValue($shiftName); // Implement your custom logic
    
    $shiftData[$shiftName] = array('value' => $value, 'next_shift' => $nextShift);
    $shifts[] = $shiftName;
}

// Return the shift data and list of shifts as JSON
$data = array('shiftData' => $shiftData, 'shifts' => $shifts);
header('Content-Type: application/json');
echo json_encode($data);
?>
