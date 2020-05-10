<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Caponweb</title>

  <!-- Favicons -->
  <link href="../css/dashboard/img/logo.jpg" rel="icon">
  <link href="../css/dashboard/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="../css/dashboard/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../css/dashboard/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="../css/dashboard/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="../css/dashboard/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="../css/dashboard/css/style.css" rel="stylesheet">
  <link href="../css/dashboard/css/style-responsive.css" rel="stylesheet">
  <script src="../css/dashboard/lib/chart-master/Chart.js"></script>

</head>

<body>
<?php include 'dashNav.php';?>
<?php
        if(empty($_GET)) {
          //return true;
          include 'profile.php';
        }
        else {
          switch($_GET['name']){
            case 'entrainement':
                include 'entrainement.php';
            break;
            case 'profile':
              include 'profile.php';
            break;
            case 'contest':
              include 'dash_international_contest.php';
            break;
        }
    }

  ?>
    
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <?php include 'dashJs.php'; ?>
</body>

</html>
