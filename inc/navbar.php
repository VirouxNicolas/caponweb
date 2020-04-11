<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
 
        <div class="container">
          <div class="row align-items-center position-relative">
 
            <div class="site-logo">
              <a href="index.php#home-section" class="text-black"><span class="text-primary">CaponWeb</a>
            </div>
 
            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">
 
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <?php 
                  if(empty($_GET)){
                    echo '
                    <li><a href="index.php#home-section" class="nav-link">Accueil</a></li>
 
                    
                    <li class="has-children">
                      <a href="#services-section" class="nav-link">Notre club</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="#services-section" class="nav-link">Notre club</a></li>
                        <li><a href="#why-us-section" class="nav-link">Galerie photos</a></li> 
                      </ul>
                    </li>
                    <li class="has-children">
                    <a href="#about-section" class="nav-link">Le vol circulaire</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="#acrobatie" class="nav-link">Acrobatie</a></li>
                      <li><a href="#vitesse" class="nav-link">La course par équipe</a></li> 
                      <li><a href="#vitesse" class="nav-link">La vitesse</a></li>
                    </ul>
                  </li>
                    <li><a href="index.php?name=internationalContest" class="nav-link">International Contest</a></li>
                    
                    <li><a href="index.php?name=contact" class="nav-link">Contact</a></li>
                    <li><a href="#prix" class="nav-link">Devenir membre</a></li> 
 
                    <li class="has-children">
                      <a class="nav-link">Connexion</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="index.php?name=connexion" class="nav-link">Connexion</a></li>
                        <li><a href="index.php?name=inscription" class="nav-link">Inscription</a></li>
                      </ul>
                    </li>
                    
                  
                  ';
                  }
                  else{
                    echo '<li><a href="index.php#home-section" class="nav-link">Accueil</a></li>';
                  }
                  
                  ?>
                  </ul>
              </nav>
                    
                        </div>
 
            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
 
          </div>
        </div>
 
      </header>
