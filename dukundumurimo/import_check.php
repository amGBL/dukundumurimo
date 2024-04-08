<?php
	include 'conn.php';
	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$date = $_POST['date'];
		$quantity = $_POST['quantity'];

		$sql = "INSERT INTO import VALUES ('','$id','$date','$quantity')";
		$re = mysqli_query($conn,$sql);

		if ($re) {
			header('location:import.php');
		}else{
			echo "error";
		}
	}
?>