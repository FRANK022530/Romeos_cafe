<?php
 require_once"config.php";
// Fetch time_in values where shift_status is 'Approve'
$query = "SELECT time_in FROM shift WHERE shift_status = 'Approve'";
$result = $db->query($query);

// Check if the query was successful
if ($result) {
    // Convert the result into an array
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row['time_in'];
    }

    // Send the data as JSON to the client
    echo json_encode($data);
} else {
    // If the query fails, send an error message
    echo json_encode(["error" => "Failed to fetch data"]);
}

// Close the database connection
$db->close();
?>
