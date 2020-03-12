<?php

session_start();
if(session_destroy()) // detruire toutes les sessions
{
header("Location: connexion"); // redirection
}
?>