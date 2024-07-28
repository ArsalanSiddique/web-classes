<?php


if(isset($_POST["register"])) {
	extract($_POST);


	//Database conection;
	$servername = "localhost";
	$host_username = "root";
	$password = "Mysql@$$$4$";
	$database_name = "erp";


	$connection = new mysqli($servername, $host_username, $password, $database_name);


	if($connection->connect_error) {
		die('Connection Failed.');
	}


	// $tmp_password = md5($password)."89B";
	// $password = md5($tmp_password);
	// $password = sha1($password);


	$password = hash('SHA256', $password)."89B";
	$password = strrev($password);


	$query = "INSERT INTO users (id, name, email, phone, password) 
				VALUES (NULL, '$name', '$email', '$phone', '$password')";


	$result = $connection->query($query);
	if($result === TRUE) {
		echo "Data inserted successfully.";
	} else {
		echo "Something went wrong. <br/>";
		echo $query;
	}


}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>


<div class="container">
	<div class="row">
		<div class="col-6 m-5">
			<div class="card">
				<div class="card-body">
					<form method="POST">
						<input type="text" name="name" class="form-control" placeholder="Name">
						<input type="email" name="email" class="form-control" placeholder="Email">
						<input type="text" name="phone" class="form-control" placeholder="Phone">
						<input type="password" name="password" class="form-control" placeholder="Password">
						<input type="password" name="comfirm-password" class="form-control" placeholder="Confirm Password">

						<input type="submit" name="register" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



</body>
</html>