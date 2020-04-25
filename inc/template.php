<!doctype html>
<html lang="en">

  <head>

  
    <title>Caponweb &mdash; Centre d'aeromodelisme</title>
    <!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="icon" href="./images/logo.jpg" type="image/png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>


  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include 'bande.php'; ?>
    <?php include 'navbar.php';?>
    
    <?php
        if(empty($_GET)) {
          //return true;
          include 'cover.php';
          include 'club.php';
          //include 'about.php';
          //include 'staff.php';
          include 'prix.php';
          //include 'questions.php';
          //include 'us.php';
          //include 'blog.php';
        }
        else {
          switch($_GET['name']){
            case 'connexion':
                include 'connexion.php';
            break;
            case 'inscription': 
              include 'inscription.php';
            break;
            case 'inside': 
              include 'us.php';
            break;
            case 'internationalContest': 
              include 'internationalContest.php';
            break;
            case 'contact': 
              include 'contact.php';
            break;
            case 'photos': 
              include 'photos.php';
            break;
            case 'liens': 
              include 'liens.php';
            break;
            case 'categorie': 
              include 'vitesse.php';
              include 'acrobatie.php';
              include 'team.php';
            break;
            case 'listnews': 
              include 'listnews.php';
            break; 
            case 'news': 
              include 'news.php';
            break; 
            case 'home': 
              include 'home.php';
            break; 
            case 'deconnexion': 
              include 'deconnexion.php';
            break; 
          }
        }

      ?>
    
      <?php include 'footer.php';?>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/mdp.js"></script>

    <script src="js/main.js"></script>



  </body>

</html>
