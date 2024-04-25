<?php 
	require_once"config.php";
 ?>
 <?php
	session_start();

	$username=$_SESSION['username'];
  ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	 
	   <link rel="icon" href="images/newlogo.jpg" type="jpg">
	<title>SET PASSWORD</title>
</head>
<style type="text/css">
	*
	{
		padding: 0;
		margin: 0;

	}

body
{
	    background-color: #DEDCE0;
    background-attachment: fixed;
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
}

	table
	{
		
		margin: auto;
		margin-top: 100px;

		border-radius:10px;
	backdrop-filter: blur(20px);
	box-shadow: 10px 10px 30px rgba(0,0,0,0.2);
	border-radius: 10px;


	}
	table tr td
	{
		width: 300px;
	}
	.container1 img
	{
		width: 400px;
		height: 400px;
		border-radius: 20px 0px 0px 20px;
		

	}
	.container2
	{


		width: 250px;
		margin: auto;
		
	}
	.container2 h1
	{
		margin-bottom: 15px;
	}

	.container2 input
	{
		height: 40px; 
		width: 200px;
		margin: 5px;



		border: none;
		border-bottom:2px solid black;
		background-color: rgb(0,0,0,0);
	
	}
	select
	{
		height: 40px; 
		width: 200px;
		margin: 5px;


		border: none;
		border-bottom:2px solid black;
		background-color: rgb(0,0,0,0);
		
	}


	.container2 .submit
	{
		height: 40px; 
		width: 150px;
		background-color:black;
		color: white;
		border-radius:10px;
		margin-top: 30px;




	}

	form a
 		{

 	
 			color:black;
            font-weight: bolder;
            font-size:20px;

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

<body>

<table>
	<tr>
		<td>
			<div class="container1">
				<img src="images/newlogo.jpg">
			</div>
		</td>
		<td>
			<div class="container2">
	<form action="process.php" method="POST">
			<h1>Set Password</h1>
			<input type="hidden" name="username" value="<?php echo $username?>"><br>
			<a href=""><i class="fa fa-unlock-alt" aria-hidden="true"></i></a>
			<input type="password" name="password" placeholder=" New password:"><br>
			  <a href=""><i class="fa fa-unlock-alt" aria-hidden="true"></i></a>
			<input type="password" name="confirmpassword" placeholder="Confirm password:"><br>
			<input class="submit" type="submit" name="set" value="SET">
		
			

		</form>
		</div>
		</td>
		
	</tr>
</table>

</body>
</html>