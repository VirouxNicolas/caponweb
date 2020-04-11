<?php
      require('./db/db.php');
      if (isset($_REQUEST['username'])){
          $username = stripslashes($_REQUEST['username']); // enlever backslashes
          $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
          $email = stripslashes($_REQUEST['email']);
          $email = mysqli_real_escape_string($con,$email);
          $password = stripslashes($_REQUEST['password']);
          $password = mysqli_real_escape_string($con,$password);
                    
          $trn_date = date("Y-m-d H:i:s");
          $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
          $result = mysqli_query($con,$query);
            if($result){
                $messageOK = "<div class='form'><h3>Demande envoyée à l'administrateur.</h3></div>";
            }else{
                $messageErreur = "maxime t'es une pute";
            }
      }
?>
    <div class="site-section" id="connexion-section">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
                <div class="block-heading-1">
                  <h2>Inscription au site </h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 mb-5" data-aos="fade-up" data-aos-delay="100">
              <?php if(isset($messageOK)){ ?><div class="alert alert-success" role="alert"> <?php echo $messageOK; ?> </div><?php } ?>
              <?php if(isset($messageErreur)){ ?><div class="alert alert-danger" role="alert"> <?php echo $messageErreur; ?> </div><?php } ?>
                <form action="" method="post" id="login-form" name="login">
                    <div class="form-group row">
                        <div class="col-md-6 mb-4 mb-lg-0">
                          <input type="username" class="form-control" id="username" name="username" placeholder="Nom d'utilisateur" required>
                        </div>
                      
                        <div class="col-md-6 mb-4 mb-lg-0">
                          <input type="email" class="form-control" id="username" name="email" placeholder="E-mail" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 mb-4 mb-lg-0">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    
                  <div class="form-group row">
                    <div class="col-md-12 mr-auto">
                      <input type="submit" id="form-submit" class="btn btn-block btn-primary text-white py-3 px-5" value="S'inscrire">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
