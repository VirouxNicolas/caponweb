<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$db = "caponweb";
	$con = mysqli_connect($server, $username, $password, $db);
	if (mysqli_connect_errno())
  {
  echo "Impossible de se connecter à la base de données: " . mysqli_connect_error();
  }
?>