<?php
require_once"config.php";
	session_start();

if (isset($_POST['r_healthCert'])) {
    $id = $_POST['id'];
$checked = $_POST['r_healthCert'];
$name = $_POST['name'];

    if ($checked == 'on') {
        $sql = "UPDATE emp_info SET r_healthCert = 'Done' WHERE id = '$id'";
    } else {
        $sql = "UPDATE emp_info SET r_healthCert = NULL WHERE id = '$id'";
    }

    $result = mysqli_query($conn, $sql);

    if ($result) {
    echo '<script>alert("Record Successfully Updated");';
    echo 'window.location.replace("emp_infos.php?id=' . $id . '&name=' . $name . '");</script>';
} else {
    echo 'Error updating database';
}

} elseif (!isset($_POST['r_healthCert'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $sql = "UPDATE emp_info SET r_healthCert = NULL WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
    echo '<script>alert("Record Successfully Updated");';
    echo 'window.location.replace("emp_infos.php?id=' . $id . '&name=' . $name . '");</script>';
} else {
    echo 'Error updating database';
}

}
?>