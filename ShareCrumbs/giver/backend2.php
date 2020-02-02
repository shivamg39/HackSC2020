<?php
if($_POST){
	require 'database.php';
	$conn = connect_db();
	if(isset($_POST['register']) ) {
		$email = $_POST['email'];
		$itemName = $_POST['itemName'];
		$quantity = $_POST['quantity'];
		$pickupTime = $_POST['pickupTime'];

		//sanitize your input
		$email = mysqli_real_escape_string($conn, $email);
		$itemName = mysqli_real_escape_string($conn, $itemName);
		$quantity = mysqli_real_escape_string($conn, $quantity);
		$pickupTime = mysqli_real_escape_string($conn, $pickupTime);
		
		$sql = "Insert Into items (Iemail, menuItem, quantity, pickupTime) VALUES ('$email', '$itemName', '$quantity', '$pickupTime')";
		$sql = $conn->query($sql);
		if($sql){
			header('location: ./account.php');
		}
	}
} else {
	header('location: ./login.php');
	exit();
}
?>