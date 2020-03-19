<?php

$con = mysqli_connect("localhost","root","","caponweb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Impossible de se connecter à la base de données: " . mysqli_connect_error();
  }
?>