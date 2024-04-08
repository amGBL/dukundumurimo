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
	<link rel="stylesheet" type="text/css" href="boot-5/css/bootstrap.min.css">
	<title>login...</title>
</head>
<style type="text/css">
	*{
		text-transform: capitalize;
	}
	.container{
		position: relative;
		top: 60px;
		height: 300px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

	}
	 button{
		width: 95%;
		margin-left: 20px;
	}
</style>
<body>
	<form action="add_food_check.php" method="POST">
		<div class="container bg-light w-50">
		<h1 class="text-center">add food</h1>
		<div class="form-group m-3">
			<input type="number" class="form-control" name="id" placeholder="food id......" required>
		</div>
		<div class="form-group m-3">
			<input type="text" class="form-control" name="name" placeholder="food name......" required>
		</div>
		<div class="form-group m-3">
			<input type="text" class="form-control" name="owner" placeholder="owner name....." required>
		</div>
		<button class="btn btn-primary" type="submit" name="submit">add food</button>
	</div>
	</form>
</body>
</html>