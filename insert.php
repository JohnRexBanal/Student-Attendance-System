<?php
include("connection.php");

if(isset($_POST['submit'])){
	$firstname = $_POST['firstname'];
	$middle_initial = $_POST['middle_initial'];
	$lastname = $_POST['lastname'];
	$bdate = $_POST['birthdate'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	if(!empty($firstname) || !empty($middle_initial) || !empty($lastname) || !empty($gender) || !empty($address) || !empty($email) || !empty($phone)){

	$dbhost = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "registeredstud";

	//create connection to database
	$conn = new mysqli($dbhost, $dbUsername, $dbPassword, $dbname);

	if(mysqli_connect_error()){ 
		die('Connection Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){ //checks if the email is validd
			echo "<span class='form-err'>Write a valid e-mail address</span> ";
	
	}else{
		$SELECT = "SELECT email From students Where email = ? Limit 1";
		$INSERT = "INSERT Into students (firstname,	middle_initial, lastname, birthdate, gender, address, email, phone) values(?, ?, ?, ?, ?, ?, ?, ?)";

		//prepare statement 
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;

		if($rnum == 0){
			$stmt->close();
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sssssssi", $firstname, $middle_initial, $lastname, $bdate, $gender, $address, $email, $phone);
			$stmt->execute();
			echo "<span class='form-succ'>New Record Inserted Successfully!</span>";
		}else{
			echo "<span class='form-err'>Someone already used this email</span>"; 

		}
		$stmt->close();
		$conn->close();
	}

}else{
	echo "<span class='form-error'>All fields are required</span>";
	die();
}

}





?>