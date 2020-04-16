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
                    include 'base.php';;
                  }
                  else{
                    switch($_GET['name']){
                      case 'connexion':
                        echo '<li><a href="index.php#home-section" class="nav-link">Accueil</a></li>';
                      break;
                      case 'inscription': 
                        echo '<li><a href="index.php#home-section" class="nav-link">Accueil</a></li>';
                      break;
                      case 'categorie': 
                        include 'base.php';
                      break;
                      case 'internationalContest': 
                        include 'base.php';
                      break;
                      case 'contact': 
                        include 'base.php';
                      break;
                      case 'liens': 
                        include 'base.php';
                      break;
                      case 'photos': 
                        include 'base.php';
                      break;
                      case 'news': 
                        include 'base.php';
                      break;
                      
                    }                    
                  }
                  
                  ?>
                  </ul>
              </nav>
                    
                        </div>
 
            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
 
          </div>
        </div>
 
      </header>
