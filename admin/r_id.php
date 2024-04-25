<?php
require_once"config.php";
	session_start();

if (isset($_POST['r_id'])) {
    $id = $_POST['id'];
$checked = $_POST['r_id'];
$name = $_POST['name'];

    if ($checked == 'on') {
        $sql = "UPDATE emp_info SET r_id = 'Done' WHERE id = '$id'";
    } else {
        $sql = "UPDATE emp_info SET r_id = NULL WHERE id = '$id'";
    }

    $result = mysqli_query($conn, $sql);

    if ($result) {
    echo '<script>alert("Record Successfully Updated");';
    echo 'window.location.replace("emp_infos.php?id=' . $id . '&name=' . $name . '");</script>';
} else {
    echo 'Error updating database';
}

} elseif (!isset($_POST['r_id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $sql = "UPDATE emp_info SET r_id = NULL WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
    echo '<script>alert("Record Successfully Updated");';
    echo 'window.location.replace("emp_infos.php?id=' . $id . '&name=' . $name . '");</script>';
} else {
    echo 'Error updating database';
}

}
?>