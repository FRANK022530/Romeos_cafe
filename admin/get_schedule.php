<?php 
    require_once"config.php";
 ?>
<?php
session_start();

if (isset($_SESSION['mondate'])) {
    $mondate = $_SESSION['mondate'];

    // Assuming you have already established a database connection

    if (isset($_GET['employee'])) {
        $employeeName = mysqli_real_escape_string($conn, $_GET['employee']);
        
        // Query to retrieve the schedule for the selected employee
        $sql = "SELECT schedule FROM emp_selected_schedule WHERE name = '$employeeName' AND schedule LIKE '%$mondate%'";
        
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            if ($row = mysqli_fetch_assoc($result)) {
                // Split the schedule string by hyphen
                $parts = explode('-', $row['schedule']);
                
                if (count($parts) > 1) {
                    // Extract the second part and capitalize the first letter
                    $schedulePart = trim($parts[1]); // Trim any leading/trailing spaces
                    $capitalizedSchedule = ucfirst($schedulePart);
                    echo $capitalizedSchedule;
                } else {
                    echo "";
                }
            } else {
                echo "";
            }
        } else {
            echo "Error executing query: " . mysqli_error($conn);
        }
    } 
} else {
    echo "Session variable 'mondate' is not set.";
}



if (isset($_SESSION['tuedate'])) {
    $tuedate = $_SESSION['tuedate'];
    if (isset($_GET['employeee'])) {
        $employeeName = mysqli_real_escape_string($conn, $_GET['employeee']);
        $sql = "SELECT schedule FROM emp_selected_schedule WHERE name = '$employeeName' AND schedule LIKE '%$tuedate%'";
        
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            if ($row = mysqli_fetch_assoc($result)) {
                // Split the schedule string by hyphen
                $parts = explode('-', $row['schedule']);
                
                if (count($parts) > 1) {
                    // Extract the second part and capitalize the first letter
                    $schedulePart = trim($parts[1]); // Trim any leading/trailing spaces
                    $capitalizedSchedule = ucfirst($schedulePart);
                    echo $capitalizedSchedule;
                } else {
                    echo "";
                }
            } else {
                echo "";
            }
        }  else {
            echo "Error executing query: " . mysqli_error($conn);
        }
    } 
} else {
    echo "Session variable 'mondate' is not set.";
}

if (isset($_SESSION['weddate'])) {
    $weddate = $_SESSION['weddate'];
    if (isset($_GET['employeeee'])) {
        $employeeName = mysqli_real_escape_string($conn, $_GET['employeeee']);
        $sql = "SELECT schedule FROM emp_selected_schedule WHERE name = '$employeeName' AND schedule LIKE '%$weddate%'";
        
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            if ($row = mysqli_fetch_assoc($result)) {
                // Split the schedule string by hyphen
                $parts = explode('-', $row['schedule']);
                
                if (count($parts) > 1) {
                    // Extract the second part and capitalize the first letter
                    $schedulePart = trim($parts[1]); // Trim any leading/trailing spaces
                    $capitalizedSchedule = ucfirst($schedulePart);
                    echo $capitalizedSchedule;
                } else {
                    echo "";
                }
            } else {
                echo "";
            }
        }  else {
            echo "Error executing query: " . mysqli_error($conn);
        }
    } 
} else {
    echo "Session variable 'mondate' is not set.";
}

if (isset($_SESSION['thurdate'])) {
    $thurdate = $_SESSION['thurdate'];
    if (isset($_GET['employeeeee'])) {
        $employeeName = mysqli_real_escape_string($conn, $_GET['employeeeee']);
        $sql = "SELECT schedule FROM emp_selected_schedule WHERE name = '$employeeName' AND schedule LIKE '%$thurdate%'";
        
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            if ($row = mysqli_fetch_assoc($result)) {
                // Split the schedule string by hyphen
                $parts = explode('-', $row['schedule']);
                
                if (count($parts) > 1) {
                    // Extract the second part and capitalize the first letter
                    $schedulePart = trim($parts[1]); // Trim any leading/trailing spaces
                    $capitalizedSchedule = ucfirst($schedulePart);
                    echo $capitalizedSchedule;
                } else {
                    echo "";
                }
            } else {
                echo "";
            }
        }  else {
            echo "Error executing query: " . mysqli_error($conn);
        }
    } 
} else {
    echo "Session variable 'mondate' is not set.";
}

if (isset($_SESSION['fridate'])) {
    $fridate = $_SESSION['fridate'];
    if (isset($_GET['employeeeeee'])) {
        $employeeName = mysqli_real_escape_string($conn, $_GET['employeeeeee']);
        $sql = "SELECT schedule FROM emp_selected_schedule WHERE name = '$employeeName' AND schedule LIKE '%$fridate%'";
        
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            if ($row = mysqli_fetch_assoc($result)) {
                // Split the schedule string by hyphen
                $parts = explode('-', $row['schedule']);
                
                if (count($parts) > 1) {
                    // Extract the second part and capitalize the first letter
                    $schedulePart = trim($parts[1]); // Trim any leading/trailing spaces
                    $capitalizedSchedule = ucfirst($schedulePart);
                    echo $capitalizedSchedule;
                } else {
                    echo "";
                }
            } else {
                echo "";
            }
        }  else {
            echo "Error executing query: " . mysqli_error($conn);
        }
    } 
} else {
    echo "Session variable 'mondate' is not set.";
}

if (isset($_SESSION['satdate'])) {
    $satdate = $_SESSION['satdate'];
    if (isset($_GET['employeeeeeee'])) {
        $employeeName = mysqli_real_escape_string($conn, $_GET['employeeeeeee']);
        $sql = "SELECT schedule FROM emp_selected_schedule WHERE name = '$employeeName' AND schedule LIKE '%$satdate%'";
        
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            if ($row = mysqli_fetch_assoc($result)) {
                // Split the schedule string by hyphen
                $parts = explode('-', $row['schedule']);
                
                if (count($parts) > 1) {
                    // Extract the second part and capitalize the first letter
                    $schedulePart = trim($parts[1]); // Trim any leading/trailing spaces
                    $capitalizedSchedule = ucfirst($schedulePart);
                    echo $capitalizedSchedule;
                } else {
                    echo "";
                }
            } else {
                echo "";
            }
        }  else {
            echo "Error executing query: " . mysqli_error($conn);
        }
    } 
} else {
    echo "Session variable 'mondate' is not set.";
}

if (isset($_SESSION['sundate'])) {
    $sundate = $_SESSION['sundate'];
    if (isset($_GET['employeeeeeeee'])) {
        $employeeName = mysqli_real_escape_string($conn, $_GET['employeeeeeeee']);
        $sql = "SELECT schedule FROM emp_selected_schedule WHERE name = '$employeeName' AND schedule LIKE '%$sundate%'";
        
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            if ($row = mysqli_fetch_assoc($result)) {
                // Split the schedule string by hyphen
                $parts = explode('-', $row['schedule']);
                
                if (count($parts) > 1) {
                    // Extract the second part and capitalize the first letter
                    $schedulePart = trim($parts[1]); // Trim any leading/trailing spaces
                    $capitalizedSchedule = ucfirst($schedulePart);
                    echo $capitalizedSchedule;
                } else {
                    echo "";
                }
            } else {
                echo "";
            }
        }  else {
            echo "Error executing query: " . mysqli_error($conn);
        }
    } 
} else {
    echo "Session variable 'mondate' is not set.";
}


mysqli_close($conn);
?>


