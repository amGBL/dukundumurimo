<?php
include 'conn.php';
session_start();
$sql = "SELECT * FROM foods";
$re = mysqli_query($conn,$sql);

if(!$_SESSION['username']){
	header('location:manager_login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>import..</title>
</head>
<style type="text/css">
	*{
		text-transform: capitalize;
		font-family: sans-serif;
	}
	table{
		width: 70%;
		margin: 0 auto;
		position: relative;
		top: 30px;
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
	#myTable {
 		 border-collapse: collapse; 
  		 width: 100%;
  		 border: 1px solid #ddd; 
  		 font-size: 15px;
}

#myTable th, #myTable td {
     	text-align: left; 
  		padding: 12px;
  		text-align: center; 
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
    background-color: #f1f1f1;
}
a{
	text-decoration: none;
	padding: 5px;
	color: white;
	font-size: 15px;
}
button{
		background-color: blue;
		border: none;
		padding: 7px;
		border-radius: 5px;
}
.add{
	position: relative;
	top: 15px;
	margin-left: 20px;
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
	<button class="add"><a href="add_food.php">+add food</a></button>
	<table id="myTable">
		<tr>
			<th>food id</th>
			<th>food name</th>
			<th>owner name</th>
			<th>operation</th>
		</tr>
	<?php
		while ($row = mysqli_fetch_array($re)) {
		
	?>
	<tr>
		<td><?php echo $row['Food_Id']; ?></td>
		<td><?php echo $row['Food_Name']; ?></td>
		<td><?php echo $row['Food_OwnerName']; ?></td>
		<td>
			<button><a href="modify.php?Food_Id=<?php echo $row['Food_Id']; ?>">modify</a></button>
			<button style="background: red;"><a href="delete.php?Food_Id=<?php echo $row['Food_Id']; ?>">delete</a></button>
		</td>
	</tr>
	<?php
	}
	?>
	</table>
</body>
</html>