

<?php



$fname_err = $lname_err = $phone_err = $gender_err = "";



if($_SERVER['REQUEST_METHOD'] == "POST") {


	if(!empty($_POST["first_name"])) {
		$fname = validateData($_POST["first_name"]);
	} else {
		$fname_err = "First Name is required.";
	}

	if(!empty($_POST["last_name"])) {
		$lname = validateData($_POST["last_name"]);
	} else {
		$lname_err = "Last Name is required.";
	}


	if(!empty($_POST["phone_number"])) {
		$phone_number = validateData($_POST["phone_number"]);
	} else {
		$phone_err = "Phone Number is required.";
	}


	if(!empty($_POST["gender"])) {
		$gender = validateData($_POST["gender"]);
	} else {
		$gender_err = "Gender is required.";
	}


	if(empty($fname_err) && empty($lname_err) && empty($phone_err) && empty($gender_err)) {
		echo "<br/>My first name is :: $fname";
		echo "<br/>My last name is :: $lname";
		echo "<br/>My phone number is :: $phone_number";
		echo "<br/>My gender is :: $gender";
	}
}





function validateData($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);

	return $data;
}




?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Global Variables</title>
</head>
<body>


	<h1>Global Varibales</h1>



	<form method="POST" action="form.php">
		
		<br/>First Name: * <input type="text" value="<?php echo $fname ?>" name="first_name" placeholder="Enter your first name" required> <?php echo $fname_err ?>
		<br/>Last Name: *<input type="text"  value="<?php echo $lname ?>" name="last_name" placeholder="Enter your last name" required> <?php echo $lname_err ?>
		<br/>Phone Number: *<input type="text"  value="<?php echo $phone_number ?>" name="phone_number" placeholder="Enter your phone number" required> <?php echo $phone_err ?>
		<br/>Gender: *<?php echo $gender_err ?>
		<input type="radio" name="gender" value="male" <?php if(isset($gender) && $gender == "male") { echo "checked"; } ?> >Male
		<input type="radio" name="gender" value="female" <?php if(isset($gender) && $gender == "female") { echo "checked"; } ?>>Female
		<input type="radio" name="gender" value="other" <?php if(isset($gender) && $gender == "other") { echo "checked"; } ?>>Other
	
		<br/><input type="submit" value="Register" />
	</form>







	<a href="register.php?msg=my-messages&msg2=next-message">Click me</a>




</body>
</html>