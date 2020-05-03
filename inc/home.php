<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location: index.php?name=connexion");
exit(); }

?>

<div class="block__73694 site-section border-top" id="why-us-section">
    <div class="container">
        <h1 class="mb-3 bread">Bienvenue <?php echo $_SESSION['username']; ?></h1>
        <a href="index.php?name=deconnexion" class="nav-link"><button  class="btn btn-primary text-white">Deconnexion</button></a>
    </div>
    </div>
    </div>