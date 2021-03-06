<?php
                    require('./api/db.php');
                    session_start();
                    $_SESSION = [];
                    if (isset($_POST['username'])){
                     
                        $username = stripslashes($_POST['username']); // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
                        $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
                        $password = stripslashes($_POST['password']);
                        $password = mysqli_real_escape_string($con,$password);
                        //Verifier si l'utilisateur existe ou pas
                        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
                        $result = mysqli_query($con,$query) or die(mysql_error());
                        
                        
                        $logged_in_user = mysqli_fetch_assoc($result);
                        print_r($logged_in_user);
                        
                        $id = $logged_in_user['id'];
                        print_r($id);
                        $usertype = $logged_in_user['user_type'];
                        print_r($usertype);

                            if($logged_in_user){
                              $_SESSION['id'] = $id;
                              $_SESSION['username'] = $username;
                              $_SESSION['user_type'] = $usertype;
                              header('Location: ./inc/dashboard.php?name=profile');
                            }
                            else {
                              $messageErreur =  "nom d'utilisateur ou mot de passe incorrect";
                            }
                      }
                ?>

<div class="site-section" id="connexion-section">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
                <div class="block-heading-1">
                  <h2>Connectez-vous</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 mb-5" data-aos="fade-up" data-aos-delay="100">
              <?php if(isset($messageOK)){ ?><div class="alert alert-success" role="alert"> <?php echo $messageOK; ?> </div><?php } ?>
              <?php if(isset($messageErreur)){ ?><div class="alert alert-danger" role="alert"> <?php echo $messageErreur; ?> </div><?php } ?>
                <form action="" method="post" id="contactForm" name="login">
                  <div class="form-group row">
                    <div class="col-md-6 mb-4 mb-lg-0">
                      <input type="username" class="form-control" id="username" name="username" placeholder="Nom d'utilisateur" required>
                      
                    </div>
                    <div class="col-md-6">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
                    </div>
                  </div>
    
                  <div class="form-group row">
                    <div class="col-md-12 mr-auto">
                      <input type="submit" id="form-submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Connexion">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>



