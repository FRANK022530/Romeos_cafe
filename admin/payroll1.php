<!DOCTYPE html>
<html>
<style type="text/css">
	*
	{
		padding: 0;
		margin: 0;
	}
	body
	{
		font-family: sans-serif;
		background-image: url(images/background.png);
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
	}
	table {
  border-collapse: collapse;
  width: 80%;
  margin-top:30px;

  margin-left: auto;
  margin-right: auto;
}
table th:first-child
{
	width: 150px;

}

table th, table td {
  border: 1px solid #ddd;
  padding: 8px;
}

table th {
  background-color: #37251b;
  color: white;
  font-size: 14px;
}
table td:first-child
{
text-align: left;
}
table th {
  background-color: #37251b;
  color: white;
  font-size: 14px;
}
table td:first-child
{
text-align: left;
}

table td
{
text-align:center;
font-size: 14px;
height: 20px;


}

table tr:nth-child(even) {
  background-color: #f9f9f9;
}
table tr:nth-child(odd) {
  background-color: #E5E8E8 ;
}


.search
{
	
	width: 80%;

	margin-left: auto;
	margin-right: auto;

	margin-top: 50px;

}
.search input[type="date"]
{
 height: 30px;
 width: 100px;

}
.search input[type="submit"]
{
 height: 35px;
 width: 100px;
 color: white;
 background-color: #37251b;

 border-radius: 0px 5px 5px 0px;

}
.search h1
{

display: inline;
margin-right: 370px;

}
.totalsalary
{
	text-align: right;
	background-color: #37251b;
	color: white;
}
@media screen and (min-width: 768px) and (max-width: 1199px){
		table {
			width: 10%;
		}

		.search h1 {
			margin-right: 0;
			margin-bottom: 10px;
		}

		.search input[type="date"],
		.search input[type="submit"] {
			width: 100%;
			margin-bottom: 10px;
		}
	}


		 @media screen and (max-width: 767px) {
		.search h1 {
			margin-right: 0;
			margin-bottom:10px;
			font-size: 30px;

		}

			.search input[type="date"],
		.search input[type="submit"] {
			width: 100%;
			margin-bottom: 10px;

		}

	
			table {
			width: 90%;
			
		}
		table tr th
		{
			font-size: 8px;
		}
		table tr td
		{
			font-size: 8px;
		}
	}
</style>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Romeo's Cafe</title>
</head>
<body>
	<div class="search">
        		<form method="post" action="payroll1.php">
        		<h1>Employee Payroll</h1>
        			<input type="date" name="date1">
        			<input type="date" name="date2">
        		  <input type="submit" name="submit" value="SEARCH"><br>
        		</form>
        	</div>


<?php 
if (isset($_POST['submit'])) {
	?>
 
	<table>
		<tr>
			<th>Name of Employee</th>
			<th>Basic Salary</th>
			<th>Total Hours</th>
			<th>Overtime</th> 
			<th>Night Differential</th>
			<th>Holiday Pays</th>
			<th>SSS</th>
			<th>PhilHealth</th>
			<th>Pagibig</th>
			<th>Loan</th>
			<th>Total Salary</th>
		</tr>


		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>

		</tr>

		<td colspan="11" class="totalsalary">Total Employee Salary:</td>
	</table>

 
	<?php
}
 ?>

 <table>
		<tr>
			<th>Name of Employee</th>
			<th>Basic Salary</th>
			<th>Total Hours</th>
			<th>Overtime</th> 
			<th>Night Differential</th>
			<th>Holiday Pays</th>
			<th>SSS</th>
			<th>PhilHealth</th>
			<th>Pagibig</th>
			<th>Loan</th>
			<th>Total Salary</th>
		</tr>
 

		<tr>
			<td colspan="11"> Please Select Dates First</td>


		</tr>
	
	

</body>
</html>