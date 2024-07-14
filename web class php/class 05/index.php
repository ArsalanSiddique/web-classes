<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<style type="text/css">
		.red {
			color: red;
		}
	</style>
</head>
<body>

	<form action="data.php" method="POST">
		
		<input type="text" name="email" required>
		<?php
			if(isset($_REQUEST['error']) && $_REQUEST['error'] == "email") {
				echo "<span class='red'>Email field is required</span>";
			}
		?>

		<input type="password" name="password" required>
		<?php
			if(isset($_REQUEST['error']) && $_REQUEST['error'] == "password") {
				echo "<span class='red'>Password field is required</span>";
			}
		?>

		<input type="submit" name="submit">
	</form>

</body>
</html>