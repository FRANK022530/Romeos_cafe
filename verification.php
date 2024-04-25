<?php session_start() ?>



<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    <title>Verification</title>
</head>

<style type="text/css">
  * {
    padding: 0;
    margin: 0;
  }

  body {
    background-color: #DEDCE0;
    background-attachment: fixed;
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
  }

  table tr td {
    width: 300px;
    background-color: white;
    border-radius: 10px;
  }
   table tr td:nth-child(2) {
    
    border-radius:0px 10px 10px 0px;
  }


  .container1 img {
    width: 400px;
    height: 400px;
    border-radius: 20px 0px 0px 20px;
  }

  .container2 {
    width: 200px;
    margin: auto;
  }

  .container2 input {
    height: 30px;
    width: 200px;
    border: none;
    border-bottom: 2px solid black;
    background-color: rgba(0, 0, 0, 0);
    text-align: center;
    font-size: 20px;
  }
  .container2 h1 {
    letter-spacing: 3px;
  }

  .container2 .login {
    height: 40px;
    width: 200px;
    background-color: black;
    color: white;
    border-radius: 10px;
  }

  .login:hover {
    transform: scale(1.1);
    transition: 0.5s ease;
  }

  a {
    text-decoration: none;
    color: black;
    font-size: 13px;
    display: flex;
    margin-top: 5px;
    justify-content: center;
  }

  fieldset {
    height: 100%;
    max-height: 400px;
    background-color: white;
    border-radius: 10px;
    border: none;
  }

  fieldset legend {
    text-align: center;
    display: none;
  }

  fieldset legend img {
    height: 80px;
    width: 80px;
    border-radius: 50%;
  }

  @media screen and (min-width: 320px) and (max-width: 767px) {
    table tr td {
      background-color: rgba(0, 0, 0, 0);
    }
    fieldset legend {
      display: block;

    }

    td:nth-child(1) {
      display: none;
    }

    .container1 img {
      position: absolute;
      width: 10rem;
      height: 10rem;
    }

    table {
      height: 50%;
    }

    form
    {
        
        margin-top: 20px;
       margin-bottom: 20px;
    }
  }
</style>
<body>



</main>




<table>
    <tr>
        <td>
            <div class="container1">
                <img src="images/newlogo.jpg">
            </div>
        </td>
        
        <td>
            <fieldset>
                    <legend><img src="images/newlogo.jpg"></legend>
            <div class="container2">


                <form action="#" method="POST">

                <h1>OTP Code:</h1><br>
                
               
                <input type="text" id="otp" class="form-control" name="otp_code" required />

                <br><br><br>

                <input type="submit" value="Verify" name="verify" class="login">
               
                </form>
            
        </div>
        </fieldset>
        </td>

        
    </tr>
</table>
</body>
</html>




<?php 
 
    require_once"config.php";
 
    if(isset($_POST["verify"])){
        $otp = $_SESSION['otp'];
        $email = $_SESSION['mail'];
        $otp_code = $_POST['otp_code'];

        if($otp != $otp_code){
            ?>
           <script>
               alert("Invalid OTP code");
           </script>
           <?php
        }else{
        
            ?>
             <script>
                 alert("Please Set Your Passwrord");
                   window.location.replace("change.php");
             </script>
             <?php
        }

    }

?>