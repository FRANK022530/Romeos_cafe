
	<?php
session_start();

if (!isset($_SESSION['username'])) {
    // redirect to login page if user is not logged in
    header('Location: ..//index.php');
    exit;
}
$username = $_SESSION['username'];
$name = $_SESSION['name'];

$mondate = $_SESSION['mondate'];
$tuedate = $_SESSION['tuedate'];
$weddate = $_SESSION['weddate'];
$thurdate = $_SESSION['thurdate'];
$fridate = $_SESSION['fridate'];
$satdate = $_SESSION['satdate'];
$sundate = $_SESSION['sundate'];
  ?>
  <?php 
	require_once"config.php";
 ?>

<?php 


if (isset($_POST['save'])) {
        
$query = "SELECT * FROM emp_selected_schedule WHERE name = '$name' AND (schedule LIKE '%$mondate%' OR schedule LIKE '%$tuedate%' OR schedule LIKE '%$weddate%' OR schedule LIKE '%$thurdate%' OR schedule LIKE '%$fridate%' OR schedule LIKE '%$satdate%' OR schedule LIKE '%$sundate%')";

$query_run = mysqli_query($conn, $query);

    
      if (mysqli_num_rows($query_run) > 0) {

     
      $query1 = "DELETE FROM emp_selected_schedule WHERE name = '$name' AND (schedule LIKE '%$mondate%' OR schedule LIKE '%$tuedate%' OR schedule LIKE '%$weddate%' OR schedule LIKE '%$thurdate%' OR schedule LIKE '%$fridate%' OR schedule LIKE '%$satdate%' OR schedule LIKE '%$sundate%')";

      $query_run1 = mysqli_query($conn, $query1);

        if ($query_run1) {
                  
                    if (isset($_POST['mon'])) {
                        $selected_shift = mysqli_real_escape_string($conn, $_POST['mon']);

                        $query = "INSERT INTO `emp_selected_schedule`(`name`, `schedule`) VALUES ('$name', '$selected_shift')";
                        $query_run = mysqli_query($conn, $query);

                        if ($query_run) {
                            echo '<script>alert("Updated Successfully added");</script>';
                            echo '<script>window.location.replace("schedule.php");</script>';
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }
                    }



                    if (isset($_POST['tue'])) {
                         $selected_shift = mysqli_real_escape_string($conn, $_POST['tue']);

                        $query = "INSERT INTO `emp_selected_schedule`(`name`, `schedule`) VALUES ('$name', '$selected_shift')";
                        $query_run = mysqli_query($conn, $query);

                        if ($query_run) {
                            echo '<script>alert("Updated Successfully added");</script>';
                            echo '<script>window.location.replace("schedule.php");</script>';
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }
                      }
                    if (isset($_POST['wed'])) {
                          $selected_shift = mysqli_real_escape_string($conn, $_POST['wed']);

                        $query = "INSERT INTO `emp_selected_schedule`(`name`, `schedule`) VALUES ('$name', '$selected_shift')";
                        $query_run = mysqli_query($conn, $query);

                        if ($query_run) {
                            echo '<script>alert("Updated Successfully added");</script>';
                            echo '<script>window.location.replace("schedule.php");</script>';
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }
                      }
                    if (isset($_POST['thur'])) {
                          $selected_shift = mysqli_real_escape_string($conn, $_POST['thur']);

                        $query = "INSERT INTO `emp_selected_schedule`(`name`, `schedule`) VALUES ('$name', '$selected_shift')";
                        $query_run = mysqli_query($conn, $query);

                        if ($query_run) {
                            echo '<script>alert("Updated Successfully added");</script>';
                            echo '<script>window.location.replace("schedule.php");</script>';
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }
                      }
                    if (isset($_POST['fri'])) {
                          $selected_shift = mysqli_real_escape_string($conn, $_POST['fri']);

                        $query = "INSERT INTO `emp_selected_schedule`(`name`, `schedule`) VALUES ('$name', '$selected_shift')";
                        $query_run = mysqli_query($conn, $query);

                        if ($query_run) {
                            echo '<script>alert("Updated Successfully added");</script>';
                            echo '<script>window.location.replace("schedule.php");</script>';
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }
                      }
                    if (isset($_POST['sat'])) {
                          $selected_shift = mysqli_real_escape_string($conn, $_POST['sat']);

                        $query = "INSERT INTO `emp_selected_schedule`(`name`, `schedule`) VALUES ('$name', '$selected_shift')";
                        $query_run = mysqli_query($conn, $query);

                        if ($query_run) {
                            echo '<script>alert("Updated Successfully added");</script>';
                            echo '<script>window.location.replace("schedule.php");</script>';
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }
                      }
                      if (isset($_POST['sun'])) {
                          $selected_shift = mysqli_real_escape_string($conn, $_POST['sun']);

                        $query = "INSERT INTO `emp_selected_schedule`(`name`, `schedule`) VALUES ('$name', '$selected_shift')";
                        $query_run = mysqli_query($conn, $query);

                        if ($query_run) {
                            echo '<script>alert("Updated Successfully added");</script>';
                            echo '<script>window.location.replace("schedule.php");</script>';
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }
                      }
                
        }
   
      } 


      else{
          
          
                
                    if (isset($_POST['mon'])) {
                        $mon = $_POST['mon'];
                        if (!empty($mon)) {

                            $selected_shift = mysqli_real_escape_string($conn, $mon);
                            $query = "INSERT INTO `emp_selected_schedule`(`name`, `schedule`) VALUES ('$name', '$selected_shift')";
                            $query_run = mysqli_query($conn, $query);

                        }
                    }

                    if (isset($_POST['tue'])) {
                          $tue = $_POST['tue'];
                          if (!empty($tue)) {

                            $selected_shift = mysqli_real_escape_string($conn, $tue);
                            $query = "INSERT INTO `emp_selected_schedule`(`name`, `schedule`) VALUES ('$name', '$selected_shift')";
                            $query_run = mysqli_query($conn, $query);

                         
                        }                       
                      }
                    if (isset($_POST['wed'])) {
                          $wed = $_POST['wed'];
                            if (!empty($wed)) {

                            $selected_shift = mysqli_real_escape_string($conn, $wed);
                            $query = "INSERT INTO `emp_selected_schedule`(`name`, `schedule`) VALUES ('$name', '$selected_shift')";
                            $query_run = mysqli_query($conn, $query);

                          
                        }
                      }
                    if (isset($_POST['thur'])) {
                          $thur = $_POST['thur'];

                          if (!empty($thur)) {

                            $selected_shift = mysqli_real_escape_string($conn, $thur);
                            $query = "INSERT INTO `emp_selected_schedule`(`name`, `schedule`) VALUES ('$name', '$selected_shift')";
                            $query_run = mysqli_query($conn, $query);

                          
                        }
                      }
                    if (isset($_POST['fri'])) {
                          $fri = $_POST['fri'];

                          if (!empty($fri)) {

                            $selected_shift = mysqli_real_escape_string($conn, $fri);
                            $query = "INSERT INTO `emp_selected_schedule`(`name`, `schedule`) VALUES ('$name', '$selected_shift')";
                            $query_run = mysqli_query($conn, $query);

                           
                        }
                      }
                    if (isset($_POST['sat'])) {
                          $sat = $_POST['sat'];

                          if (!empty($sat)) {

                            $selected_shift = mysqli_real_escape_string($conn, $sat);
                            $query = "INSERT INTO `emp_selected_schedule`(`name`, `schedule`) VALUES ('$name', '$selected_shift')";
                            $query_run = mysqli_query($conn, $query);

                        }  }
                          }
                      }
                    if (isset($_POST['sun'])) {
                          $sun = $_POST['sun'];

                          if (!empty($sun)) {

                            $selected_shift = mysqli_real_escape_string($conn, $sun);
                            $query = "INSERT INTO `emp_selected_schedule`(`name`, `schedule`) VALUES ('$name', '$selected_shift')";
                            $query_run = mysqli_query($conn, $query);

                            if ($query_run) {
                                echo '<script>alert("Record Successfully added");</script>';
                                echo '<script>window.location.replace("schedule.php");</script>';
                            } else {
                                echo "Error: " . mysqli_error($conn);
                            }
                        }
                      }
  

    
    

    


if (isset($_GET['name']) && isset($_GET['date'])) {
    $name = $_GET['name'];
    $date = $_GET['date'];
    require_once('TCPDF-main/tcpdf.php');
 
    $sql = "SELECT * FROM emp_payslip_history
    WHERE name= '$name' and datePaid ='$date' ; ";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

    // Retrieve form data
    $name = $row['name'];
    $datepaid = $row['datePaid'];
    $date = $row['dates'];
    $status = $row['status'];
    $rate = $row['rate'];
    $totalhours = $row['totalHours'];
    $totalamount = $row['totalAmount'];
    $totalothours = $row['totalOTHours'];
    $totalotamount = $row['totalOTAmount'];
    $NDhour = $row['nightDeffHours'];
    $NDtotalamount = $row['nightDeffTotalAmount'];
    $RHhour = $row['RHhour'];
    $RHamount = $row['RHamount'];
    $LHhour = $row['LHhour'];
    $LHamount = $row['LHamount'];
    $sss = $row['sss'];
    $pagibig = $row['pagibig'];
    $philhealth = $row['philhealth'];
    $gt = $row['grossTaxable'];
    $lshw = $row['lessTax'];
    $totalnet = $row['netPay'];

        // Create a new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8');

        // Set document information and metadata
        $pdf->SetCreator('Romeo\'s Cafe');
        $pdf->SetAuthor('Romeo');
        $pdf->SetTitle('Payroll');
        $pdf->SetSubject('Payroll Report');
        $pdf->SetKeywords('Payroll, Report, PDF');

        // Set some language-dependent strings
        $l = array(
            'a_meta_charset' => 'UTF-8',
            'a_meta_language' => 'en',
            'w_page' => 'page',
        );

        $pdf->setLanguageArray($l);

        // Add a page
        $pdf->AddPage();

        $customCss = '<style>
        table, h1, h5 {
            margin: 0;
        }
        </style>';

        // Output the custom CSS to the PDF
        $pdf->writeHTML($customCss, true, false, true, false, '');

        // Load the logo image
        $logo = "images/newlogo.jpg";

        // Insert the logo
        $pdf->Image($logo, 20, 12, 20, '', '', '', 'T', false, 300, '', false, false, 0);

        // Set font
        $pdf->SetFont('times', '', 12);

        // Output content to PDF
        $html = '
        <br>
             <table >
                <tr> 
                  <td colspan="4"><h1 style="text-align:center;" >ROMEO\'S CAFE</h1></td>   
                 </tr>
                 <tr> 
                  <td colspan="4"><h6 style="text-align:center;" class="no-margin">Contact No: 09630187684</h6></td>   
                 </tr>
                 <tr> 
                  <td colspan="4"><h6 style="text-align:center;" class="no-margin">Unit 2, Super 9 Building, Emilio Aguinaldo Hwy, Bacoor, Philippines</h6></td>   
                 </tr>
            </table>
             <br>
             
               <hr>
           <table  >
             <tr>
                    <td colspan="4" ></td>
                </tr>
                <tr> 
                    <td style="width: 10%;">Name:</td>
                    <td style="width: 30%;"><h5>'.$name.'</h5></td>
                    <td style="width: 10%;">Date:</td>
                    <td style="width: 50%;"><h5>'.$date.'</h5></td>
                </tr>
               
                <tr>
                    <td>Position:</td>
                    <td><h5>'.$status.'</h5></td>
                    <td>Rate:</td>
                    <td><h5>'.$rate.'.00</h5></td>
                </tr>
              
                <tr>
                    <td colspan="4" ></td>
                </tr>
                <tr>
                    <td style="width: 50%;" colspan="2"  ></td>
                    <td style="width: 20%;"><h5>Hours </h5></td>
                    <td style="width: 20%;"><h5>Amount</h5></td>
                </tr>
                <tr>
                    <td colspan="2">Total Hours:</td>
                    <td>'.$totalhours.'</td>
                    <td>'.$totalamount.'</td>
                </tr>
                <tr>
                    <td colspan="2">Total Overtime:</td>
                    <td>'.$totalothours.'</td>
                    <td>'.$totalotamount.'</td>
                </tr>
                <tr>
                    <td colspan="2">Total Night Differential:</td>
                    <td>'.$NDhour.'</td>
                    <td>'.$NDtotalamount.'</td>
                </tr>
                <tr>
                    <td colspan="4" ></td>
                </tr>
                <tr>
                    <td colspan="2">Regular Holiday:</td>
                    <td>'.$RHhour.'</td>
                    <td>'.$RHamount.'</td>
                </tr>
                <tr>
                    <td colspan="2">Legal Holiday:</td>
                    <td>'.$LHhour.'</td>
                    <td>'.$LHamount.'</td>
                </tr>
                <tr>
                    <td colspan="4" ></td>
                </tr>
                <tr>
                    <td colspan="2">SSS</td>
                    <td></td>
                    <td colspan="2">'.$sss.'</td>
                </tr>
                <tr>
                    <td colspan="2">Pagibig</td>
                    <td></td>
                    <td colspan="2">'.$pagibig.'</td>
                </tr>
                <tr>
                    <td colspan="2">PhilHealth</td>
                    <td></td>
                    <td colspan="2">'.$philhealth.'</td>
                </tr>
                <tr>
                    <td colspan="4" ></td>
                </tr>
                <tr>
                    <td colspan="2">Gross Taxable:</td>
                    <td></td>
                    <td colspan="2">'.$gt.'</td>
                </tr>
                <tr>
                    <td colspan="2">Less W/H Tax:</td>
                    <td></td>
                    <td colspan="2">'.$lshw.'</td>
                </tr>

                <tr>
                    <td colspan="2">Gross After Tax:</td>
                    <td></td>
                    <td colspan="2">'.$totalnet.'</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
             <hr>
                <tr>
                    <td colspan="3" ><h4> Net Pay:</h4></td>
                    <td colspan="2" ><h4>'.$totalnet.'</h4></td>
                </tr>
                 <hr>
             
            </table>';

        $pdf->writeHTML($html, true, false, true, false, '');

        // Close and output PDF document
        ob_end_clean(); // Clean the output buffer
        $pdf->Output('payroll.pdf', 'D'); // Download the PDF file

    }
        }
    }
}
 ?>


  