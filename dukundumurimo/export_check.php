<?php
	include 'conn.php';
	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$date = $_POST['date'];
		$quantity = $_POST['quantity'];

		$sql2 = "SELECT Quantity FROM import WHERE Food_Id = '$id'";
		$res1 = mysqli_query($conn,$sql2);
		$row = mysqli_fetch_array($res1);

		if ($row['Quantity'] < $quantity) {
		$em = "The Quantity you have in your stock doesn't match with Quantity you need to export!!?";
		header("location:export.php?error=$em");

		}else{
		$sql1 = "UPDATE import SET Quantity = Quantity - '$quantity' WHERE  Food_Id = '$id'";
		$res = mysqli_query($conn, $sql1);

		if ($res) {
			$sql = "INSERT INTO export VALUES ('','$id','$date','$quantity')";
			$re = mysqli_query($conn,$sql);
				if ($re) {
			header('location:export.php');
		}else{
			echo "error";
		}
	}
		}

	

	
	}
?>