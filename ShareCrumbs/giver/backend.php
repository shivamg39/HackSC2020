<?php
if($_POST){
	require 'db_key.php';
	$conn = connect_db();
	if(isset($_POST['register']) ) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passwordHashed = password_hash($password, PASSWORD_BCRYPT);
		$address = $_POST['address'];
		$phone_number = $_POST['phone_number'];
	
		//sanitize your input
		$name = mysqli_real_escape_string($conn, $name);
		$email = mysqli_real_escape_string($conn, $email);
		$passwordHashed = mysqli_real_escape_string($conn, $passwordHashed);
		$address = mysqli_real_escape_string($conn, $address);
		$phone_number = mysqli_real_escape_string($conn, $phone_number);
		
		//check for existing record
		$sql = "Select sharecrumbs_giver.email From sharecrumbs_giver Where email = '$email'";
		$sql = $conn->query($sql);
		$sql = $sql->fetch_assoc();
		if($sql){
			header('location: register.php');
			exit();
		}else{
			$sql = "Insert Into sharecrumbs_giver (name, email, password, address, phone_number) VALUES ('$name', '$email', '$passwordHashed', '$address', '$phone_number')";
			$sql = $conn->query($sql);
			if($sql){
				echo "Registration succesful. You may <a href= '/'>login</a> now";
			//header('location: ./login.php');
			}
		//$sql = $sql->fetch_assoc();
		//echo $username.$email.$password;
		}
	} else if(isset($_POST['login']) ){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passwordHashed = password_hash($password, PASSWORD_BCRYPT);
		$sql = "Select * From sharecrumbs_giver Where email = '$email'";
		$sql = $conn->query($sql);
		if($sql){
			$sql = $sql->fetch_assoc();
			if(password_verify($password, $sql['password'])){
				session_start();
				
				$_SESSION['email'] = $email;
				$_SESSION['name'] = $sql['name'];
				$_SESSION['address'] = $sql['address'];
				$_SESSION['phone_number'] = $sql['phone_number'];

				echo 'You have successfully logged-in';
				header('location: ./account.php');
			}
		} else{
			header('location: ./login.php');
			exit();
		}
	}
} else {
	header('location: ./login.php');
	exit();
}
// header('location: ./login.php');
?>