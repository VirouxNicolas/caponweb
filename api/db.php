<?php
	$server = "51.75.126.61";
<<<<<<< Updated upstream
	$username = "admin";
	$password = "";
=======
	$username = "youraccount";
	$password = "password";
>>>>>>> Stashed changes
	$db = "caponweb";
	$con = mysqli_connect($server, $username, $password, $db);
	if (mysqli_connect_errno())
  {
  echo "Impossible de se connecter à la base de données: " . mysqli_connect_error();
  }
?>