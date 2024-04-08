<?php
include 'conn.php';
if ($_GET['Food_Id']) {
	$food_id = $_GET['Food_Id'];
	$sql = "DELETE FROM foods WHERE Food_Id = '$food_id' ";
	$res = mysqli_query($conn,$sql);

	if ($res) {
		header('location:food.php');
	}
}
?>