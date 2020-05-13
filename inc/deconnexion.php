<?php

session_start();
if(session_destroy()) // detruire toutes les sessions
{
header("Location: https://test.caponweb.be/index.php#home-section"); // redirection
}
?>