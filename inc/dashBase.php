<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location: ../index.php?name=connexion");
exit(); }

?>
<section id="container">
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="dashboard.php?name=profile" class="logo"><b>CAPON<span>WEB</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
      
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">

          <li><a class="logout" href="deconnexion">Déconnexion</a></li>

          <li><a class="logout" href="dashboard.php?name=deconnexion">Déconnexion</a></li>

        </ul>
      </div>
    </header>
<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          
          <h5 class="centered"><?php echo $_SESSION['username']; ?></h5>
          <li class="mt">
            <a class="" href="dashboard.php?name=profile">
              <i class="fa fa-user"></i>
              <span>Profil</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>News</span>
              </a>
            <ul class="sub">
            
            <?php if ($_SESSION['user_type'] == 'admin'){
                echo '<li><a href="dashboard.php?name=tousarticles">Tous les articles</a></li>';
              }
              else{}
              ?>

              <?php if ($_SESSION['user_type'] == 'admin'){
                echo '<li><a href="dashboard.php?name=attentelist">Article en attente</a></li>';
              }
              else{}
              ?>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Inscription Competition</span>
              </a>
            <ul class="sub">
              <li><a href="dashboard.php?name=contest">Liste des inscriptions</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Entrainement</span>
              </a>
            <ul class="sub">
            <li><a href="dashboard.php?name=entrainement">Créer un entrainement</a></li>
              <li><a href="dashboard.php?name=listentrainement">Liste des entrainements</a></li>
              <?php if ($_SESSION['user_type'] == 'admin'){
                echo '<li><a href="dashboard.php?name=dashentrainement">Administrer entrainements</a></li>';
              }
              else{}
              ?>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Utilisateur</span>
              </a>
            <ul class="sub">
            
            <?php if ($_SESSION['user_type'] == 'admin'){
                echo '<li><a href="dashboard.php?name=tousutilisateur">Tous les utilisateurs</a></li>';
              }
              else{}
              ?>

              
              
            </ul>
          </li>
          
          
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
</section>