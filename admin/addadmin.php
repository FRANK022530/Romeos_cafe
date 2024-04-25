
<?php 
	require_once"config.php";
 ?>

<!DOCTYPE html>

<html>
<head>
	<title></title>
	
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css">
	  <link rel="icon" href="images/newlogo.jpg" type="jpg">
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
	font-family: sans-serif;
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


		width: 200px;
		margin: auto;
		
	}

	.container2 input
	{
		height: 30px; 
		width: 200px;
		border: none;
		border-bottom:2px solid black;
		background-color: rgb(0,0,0,0);
	
	}
	.container2 h2
	{
		letter-spacing: 3px;
	}

	.container2 button
	{
		height: 40px; 
		width: 200px;
		background-color:black;
		color: white;
		border-radius: 10px;
	}
	.login:hover
	{
		transform: scale(1.1);z-index:;
		transition: .5s ease;
		z-index:;
	}
	a{
		text-decoration: none;
		color: black;
		font-size: 13px;

		display: flex;
		margin-top: 5px;
		justify-content: center;
	}
	
</style>


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

				<h2>Create Admin Account</h2><br><br>
				
				<input type="type" name="name" required placeholder="Fullname:"><br><br>
				
				<input type="type" name="username" required placeholder="Username:"><br><br>
				
				<input type="password" name="password" required placeholder="Password:"><br><br>
				<input type="password" name="cpassword" required placeholder="Confirm Password:"><br><br><br>


				<button type="submit" name="addadmin">NEXT</button>
				
				</form>
		</div>
		</td>
		
	</tr>
</table>
	
</body>
</html>