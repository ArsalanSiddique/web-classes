<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD Operation</title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


	<div class="conainer">
		<div class="row">
			<div class="col-8">
				<div class="card">
					<div class="card-body">
						<form action="register.php" method="POST">
							<input type="text" name="name" class="form-control" placeholder="Name">
							<input type="text" name="email" class="form-control" placeholder="Email">
							<input type="text" name="country" class="form-control" placeholder="Country">
							<input type="text" name="city" class="form-control" placeholder="City">
							<input type="text" name="zipcode" class="form-control" placeholder="Zip Code">
							<input type="date" name="doj" class="form-control">

							<input type="submit" name="register" class="btn btn-success mt-1">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>