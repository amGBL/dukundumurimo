
<?php
session_start();
if(!$_SESSION['username']){
	header('location:manager_login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home..</title>
</head>
<style type="text/css">
	*{
		text-transform: capitalize;
	}
	body{
		font-family: sans-serif;
		background-color: whitesmoke;
	}
	.container{
		text-align: center;
		position: relative;
		top: 30vh;
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
	<div class="container">
		<h1>WELCOME TO DUKUNDUMURIMO COMPANY LTD.</h1>
	</div>
</body>
</html>