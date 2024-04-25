<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbpass = "Passw0rd!";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form was submitted for forgot password
    if (isset($_POST["forgot_password"])) {
        $email = $_POST["email"];

        // Generate OTP (you can use a better method to generate OTP)
        $otp = rand(100000, 999999);

        // Store OTP in the database for future verification
        $sql = "UPDATE users SET otp = $otp WHERE email = '$email'";
        $conn->query($sql);

        // Send OTP to the user's email
        $subject = "Password Reset OTP";
        $message = "Your OTP is: $otp";
        mail($email, $subject, $message);

        echo "OTP sent to your email. Please check your inbox.";
    }

    // Check if the form was submitted for changing password
    elseif (isset($_POST["change_password"])) {
        $email = $_POST["email"];
        $otp = $_POST["otp"];
        $new_password = $_POST["new_password"];

        // Verify OTP
        $sql = "SELECT * FROM users WHERE email = '$email' AND otp = $otp";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Update password and clear OTP
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $sql_update = "UPDATE users SET password = '$hashed_password', otp = NULL WHERE email = '$email'";
            $conn->query($sql_update);

            echo "Password updated successfully.";
        } else {
            echo "Invalid OTP. Please try again.";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot/Change Password</title>
</head>

<body>

    <!-- Forgot Password Form -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <input type="submit" name="forgot_password" value="Forgot Password">
    </form>

    <!-- Change Password Form -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <label for="otp">OTP:</label>
        <input type="text" name="otp" required>
        <label for="new_password">New Password:</label>
        <input type="password" name="new_password" required>
        <input type="submit" name="change_password" value="Change Password">
    </form>

</body>

</html>