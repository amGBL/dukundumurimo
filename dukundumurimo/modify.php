<?php
include 'conn.php';
session_start();
if ($_GET['Food_Id']) {
	$food_id = $_GET['Food_Id'];
	$sql = "SELECT * FROM foods WHERE Food_Id='$food_id'";
	$res = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($res);

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
	<title>modify..</title>
</head>
<style type="text/css">
		*{
		text-transform: capitalize;
	}
	.container{
		position: relative;
		top: 60px;
		height: 250px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

	}
	 button{
		width: 95%;
		margin-left: 20px;
	}
</style>
<body>
	<form action="" method="POST">
		<div class="container bg-light w-50">
		<h1 class="text-center">modify food</h1>
		<div class="form-group m-3">
			<input type="text" class="form-control" name="name" value="<?php echo $row['Food_Name'] ?>" required>
		</div>
		<div class="form-group m-3">
			<input type="text" class="form-control" name="owner" value="<?php echo $row['Food_OwnerName'] ?>" required>
		</div>
		<button class="btn btn-primary" type="submit" name="submit">edit</button>
	</div>
	</form>
	<?php
if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$owner = $_POST['owner'];
    $sql = "UPDATE foods SET Food_Name = '$name' , Food_OwnerName = '$owner' WHERE Food_Id = '$food_id' ";
	$res = mysqli_query($conn,$sql);

	if ($res) {
		header('location:food.php');
	}
}
?>
</body>


<?php
}
?>
</html>