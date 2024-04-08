<?php

include 'conn.php';
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$owner = $_POST['owner'];

	$sql = "INSERT INTO foods VALUES ('$id','$name','$owner')";
	$res = mysqli_query($conn,$sql);

	if ($res) {
		header('location:food.php');
	}
}
?>