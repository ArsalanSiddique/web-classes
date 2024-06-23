<?php



// if($_SERVER["REQUEST_METHOD"] == "POST") {
	
// 	$first_name = $_POST['first_name'];
// 	echo "First Name :: $first_name";


// } else {
	

// 	$msg = $_GET['msg'];
// 	$msg2 = $_GET['msg2'];


// 	echo "mesage in url :: $msg";
// 	echo "<br/>mesage in url :: $msg2";

// }










if($_SERVER['REQUEST_METHOD'] == "POST") {

	$errors = [];

	if(!empty($_POST["first_name"])) {
		$fname = validateData($_POST["first_name"]);
	} else {
		$errors[] = "First Name is required.";
	}

	if(!empty($_POST["last_name"])) {
		$lname = validateData($_POST["last_name"]);
	} else {
		$errors[] = "Last Name is required.";
	}


	if(!empty($_POST["phone_number"])) {
		$phone_number = validateData($_POST["phone_number"]);
	} else {
		$errors[] = "Phone Number is required.";
	}


	if(!empty($_POST["gender"])) {
		$gender = validateData($_POST["gender"]);
	} else {
		$errors[] = "Gender is required.";
	}


	if(empty($errors)) {
		echo "<br/>My first name is :: $fname";
		echo "<br/>My last name is :: $lname";
		echo "<br/>My phone number is :: $phone_number";
		echo "<br/>My gender is :: $gender";
	} else {
		// print_r($errors);


		foreach ($errors as $key => $value) {
			echo "<br/> $value";
		}
	}
}





function validateData($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);

	return $data;
}

























?>