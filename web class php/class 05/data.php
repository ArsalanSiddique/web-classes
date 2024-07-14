<?php




if(isset($_POST["email"]) && empty($_POST["email"])) {
	// email field is missing, redirect back with error message.
    header("Location: index.php?error=email");
}

if(isset($_POST["password"]) && empty($_POST["password"])) {
	// password field is missing, redirect back with error message.
    header("Location: index.php?error=password");
}


echo $_POST["email"];
echo $_POST["password"];


echo "Login successfully.";




?>