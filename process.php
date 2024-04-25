<?php
require_once "config.php"; ?>
<?php
session_start(); // Start the session at the beginning
echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $dbserver="localhost";
$dbuser="root";
$dbpass="";
$dbname="romeo's_cafe";

    $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM account WHERE username='$username' AND password='$password' AND classification=''";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
        $row = mysqli_fetch_array($query_run);

        if ($row['type'] == "admin") {
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['name'];

            header("Location: admin/home.php");
            exit();
        } elseif ($row['type'] == "user") {
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['name'];

            header("Location: user/home.php");
            exit();
        }
    } else {

        echo '<script>';
        echo 'document.addEventListener("DOMContentLoaded", function() {';
        echo '    if (typeof Swal === "undefined") { alert("SweetAlert library not found."); }';
        echo '    else {';
        echo '        Swal.fire({';
        echo '            title: "Invalid credentials",';
        echo '            text: "Please try again",';
        echo '            icon: "error",';
        echo '        }).then(function() {';
        echo '            window.location.replace("index.php");';
        echo '        });';
        echo '    }';
        echo '});';
        echo '</script>';

        exit();
    }
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    $query = "SELECT * FROM account";
    $query_run = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($query_run)) {
        if ($row['username'] == $username && $row['securityquestion'] == $question && $row['answer'] == $answer) {
            $_SESSION['username'] = $row['username'];


            $email = $row['personalemail'];
            $otp = rand(100000, 999999);
            $_SESSION['otp'] = $otp;
            $_SESSION['mail'] = $email;
            require "Mail/phpmailer/PHPMailerAutoload.php";
            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';

            $mail->Username = 'delosreyesfranklin468@gmail.com';
            $mail->Password = 'nbnoajpofqkmxgts';

            $mail->setFrom('delosreyesfranklin468@gmail.com', 'OTP Verification');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = "Romeos Cafe OTP code";
            $mail->Body = "<p>Hello  user, </p><br> <h3>Your OTP code needed to Reset your password  is $otp <br></h3>
                    <p>Thank You </p>
                    <br><br>
                    ";

            if (!$mail->send()) {
?>
                <script>
                    alert("<?php echo "Register Failed, Invalid Email " ?>");
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("<?php echo " OTP sent to " . $email ?>");
                    window.location.replace('verification.php');
                </script>
<?php
            }


            echo '<script>alert("You can now reset your password");';
            echo 'window.location.replace("change.php");</script>';
        }
    }

    echo '<script>alert("Please check your inputs!");';
    echo 'window.location.replace("reset.php");</script>';
    exit();
}


if (isset($_POST['set'])) {
    if ($_POST['password'] == $_POST['confirmpassword']) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        // Use prepared statements to prevent SQL injection
        $sql = "UPDATE account SET password=?, confirmpassword=? WHERE username=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $password, $confirmpassword, $username);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo '<script>';
            echo 'document.addEventListener("DOMContentLoaded", function() {';
            echo '    Swal.fire({
                      title: "Password Successfully Updated",
                      icon: "success"
                  }).then(function() {
                      window.location.replace("index.php");
                  });';
            echo '});';
            echo '</script>';
            exit();
        } else {
            echo '<script>';
            echo 'document.addEventListener("DOMContentLoaded", function() {';
            echo '    Swal.fire({
                      title: "Please check your inputs",
                      icon: "error"
                  }).then(function() {
                      window.location.replace("change.php");
                  });';
            echo '});';
            echo '</script>';
            exit();
        }
    } else {
        echo '<script>';
        echo 'document.addEventListener("DOMContentLoaded", function() {';
        echo '    Swal.fire({
                  title: "Please check your inputs",
                  icon: "error"
              }).then(function() {
                  window.location.replace("change.php");
              });';
        echo '});';
        echo '</script>';
        exit();
    }
}




// Close the connection at the end of the script
mysqli_close($conn);
?>