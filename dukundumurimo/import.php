<?php
	include 'conn.php';
	session_start();
	$sql = "SELECT * FROM import";
	$re = mysqli_query($conn,$sql);

	if(!$_SESSION['username']){
		header('location:manager_login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- <link rel="stylesheet" type="text/css" href="boot-5/css/bootstrap.min.css"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>import..</title>
</head>
<style type="text/css">
	*{
		text-transform: capitalize;
		font-family: sans-serif;
	}
	.container{
		display: grid;
		grid-template-columns: repeat(2, 1fr);
		position: relative;
    top: 45px;
	}
	input{
		padding: 5px;
		border-radius: 5px;
		border: 1px solid silver;
		width: 60%;
		margin: 0.2rem auto;
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
			<a href="report.php">General report</a>
			<a href="logout.php">logout</a>
		</ul>

	</div>
	<hr>
	<div class="container">
		<div class="form">			
			<form action="import_check.php" method="POST">
			<div>
				<input type="number" name="id" placeholder="food_id" required>
			</div>
			<div>
				<input type="date" name="date" placeholder="import_date" required style="width: 405px;">
			</div>
			<div>
				<input type="number" name="quantity" placeholder="quantity" required>
			</div>
			<button type="submit" name="submit">import</button>
			</form>

		</div>
		<div class="table">
			<table id="myTable">
				<tr>
					<th>food_id</th>
					<th>import_date</th>
					<th>quantity</th>
				</tr>
				<?php
				while ($row = mysqli_fetch_array($re)) {
				?>
				<tr>
					<td><?php echo $row['Food_Id']; ?></td>
					<td><?php echo $row['ImportDate']; ?></td>
					<td><?php echo $row['I_Quantity']; ?></td>
				</tr>
				<?php
				}
				?>
			</table>
		</div>
	</div>

</body>
</html>