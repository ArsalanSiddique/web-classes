<?php


if(isset($_POST["login"])) {
	extract($_POST);


	$servername = "localhost";
	//Database conection;
	$host_username = "root";
	$password = "Mysql@$$$4$";
	$database_name = "erp";


	$connection = new mysqli($servername, $host_username, $password, $database_name);


	if($connection->connect_error) {
		die('Connection Failed.');
	}



	$query = "select * from users where email = '$email'";
	$result = $connection->query($query);
	



	if($result->num_rows > 0) {
		$user = $result->fetch_assoc();
		$db_hashed_password = $user['password'];

		$password = hash('SHA256', $password)."89B";
		$hashed_password = strrev($password);


		if($db_hashed_password == $hashed_password) {
			echo "User login successfully.";
		} else {
			echo "Invalid email or password.";
		}
	} else {
		echo "Invalid email or password.";
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
						<input type="email" name="email" class="form-control" placeholder="Email">
						<input type="password" name="password" class="form-control" placeholder="Password">

						<input type="submit" value="Login" name="login" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



</body>
</html>