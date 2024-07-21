<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




$username = $useremail = $usercountry = $usercity = $userzipcode = $userdoj = "";
$username_err = $useremail_err = $usercountry_err = $usercity_err = $userzipcode_err = $userdoj_err = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if(!empty($_POST['name'])){
		$username = validatedata($_POST['name']);
	}
	else{
		$username_err = "Please Input Username";
	}

	if(!empty($_POST['email'])){
		$useremail = validatedata($_POST['email']);
	}
	else{
		$useremail_err = "Please Input Email";
	}

	if(!empty($_POST['country'])){
		$usercountry = validatedata($_POST['country']);
	}
	else{
		$usercountry_err = "Please Input country";
	}

	if(!empty($_POST['city'])){
		$usercity = validatedata($_POST['city']);
	}
	else{
		$usercity_err = "Please Input city";
	}

	
	if(!empty($_POST['zipcode'])){
		$userzipcode = validatedata($_POST['zipcode']);
	}
	else{
		$userzipcode_err = "Please Input Username";
	}

	if(!empty($_POST['doj'])){
		$userdoj = validatedata($_POST['doj']);
	}
	else{
		$userdoj_err = "Please Input Date of Joining";
	}







	//Database conection;
	$servername = "127.0.0.1";
	$host_username = "root";
	$password = "Mysql@$$$4$";
	$database_name = "ali_dev";


	$connection = new mysqli($servername, $host_username, $password, $database_name);


	if($connection->connect_error) {
		die('Connection Failed.');
	}


	$query = "INSERT INTO users (id, name, email, country, city, zipcode, doj) 
				VALUES (NULL, '".$username."', '".$useremail."', '".$usercountry."', '".$usercity."', '".$userzipcode."', '".$userdoj."')";


	$result = $connection->query($query);
	if($result === TRUE) {
		echo "Data inserted successfully.";
	} else {
		echo "Something went wrong. <br/>";
		echo $query;
	}













}


function validatedata($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);

	return $data;
}



?>