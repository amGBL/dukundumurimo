<?php
include 'conn.php';
session_start();
if(!$_SESSION['username']){
	header('location:manager_login.php');
}

$sql = "SELECT foods.Food_Name,foods.Food_OwnerName,import.ImportDate,import.I_Quantity,export.ExportDate,export.Quantity FROM foods,
import,export WHERE export.E_Id = import.I_Id";
$re = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>report..</title>
</head>
<style>
*{
		text-transform: capitalize;
		font-family: sans-serif;
	}
	#myTable {
 		 border-collapse: collapse; 
  		 width: 100%;
  		 border: 1px solid #ddd; 
  		 font-size: 15px;

}

#myTable th, #myTable td {
     	text-align: left; 
  		padding: 12px; 
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
    background-color: #f1f1f1;
}
ul{
		text-align: center;
	}
	ul a{
		text-decoration: none;
		padding: 70px;
		position: relative;
		top: 15px;
		color: black;
		font-weight: bold;
	}
	.nav{
		/*background-color: white;*/
		height: 30px;
		width: 100%;
		position: relative;
		top: -15px;
	}
</style>
<body>
<div class="nav">
		<ul>
			<a href="home.php">home</a>
			<a href="import.php">import</a>
			<a href="export.php">export</a>
			<a href="food.php">food</a>
			<a href="report.php">report</a>
			<a href="logout.php">logout</a>
		</ul>

	</div>
	<hr>
	<table id="myTable">
		<tr>
			<th>Food_Name</th>
			<th>Food_OwnerName</th>
			<th>import_date</th>
			<th>import quantity
			</th>
			<th>exportDate</th>
			<th>export quantity</th>
		</tr>
		<?php
		while($row = mysqli_fetch_array($re)){
		?>
		<tr>
		<td><?php echo $row['Food_Name']; ?></td>
		<td><?php echo $row['Food_OwnerName']; ?></td>
		<td><?php echo $row['ImportDate']; ?></td>
		<td><?php echo $row['I_Quantity']; ?></td>
		<td><?php echo $row['ExportDate']; ?></td>
		<td><?php echo $row['Quantity']; ?></td>
		</tr>
		<?php
			}
		?>
	</table>
</body>
</html>