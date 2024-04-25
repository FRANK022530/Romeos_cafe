<?php

function calculateAge($birthdate) {
    $today = new DateTime();
    $birthDate = new DateTime($birthdate);
    $age = $today->diff($birthDate)->y;
    return $age;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input for birthday
    $birthdate = $_POST["birthdate"];

    // Validate the date format (YYYY-MM-DD)
    if (DateTime::createFromFormat('Y-m-d', $birthdate) !== false) {
        // Calculate age
        $age = calculateAge($birthdate);

        // Display the result
        echo "Your age is: " . $age;
    } else {
        echo "Invalid date format. Please enter your birthday in the format YYYY-MM-DD.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
</head>
<body>
    <h1>Age Calculator</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="birthdate">Select your birthday: </label>
        <input type="date" id="birthdate" name="birthdate" required>
        <button type="submit">Calculate Age</button>
    </form>
</body>
</html>
