<?php include 'processNews.php';?>
   <div class="site-section" id="connexion-section">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
                <div class="block-heading-1">
                  <h2>Creation d'un article </h2>
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
                          <input type="username" class="form-control" id="name" name="name" placeholder="Nom de l'auteur" required>
                        </div>
                      
                        <div class="col-md-6 mb-4 mb-lg-0">
                          <input type="email" class="form-control" id="mail" name="mail" placeholder="E-mail" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 mb-4 mb-lg-0">
                          <input type="text" class="form-control" id="subject" name="subject" placeholder="Titre de l'article" required>
                        </div>
                    </div> 
                    <div class="form-group row">
                      <div class="col-md-12">
                        <textarea type="message" id="descriptionArticles" name="descriptionArticles" class="form-control" placeholder="Ecrivez votre message ici" cols="30" rows="10"></textarea>
                      </div>
                    </div> 
                    <div class="form-group row">
                      <div class="col-md-12">
                        <h5> Illustrer votre news avec une image</h5> <input type="file" name="pictures" id="pictures" />
                      </div>
                    </div>                  
                    <div class="form-group row">
                      <div class="col-md-12 mr-auto">
                        <input type="submit" id="form-submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Soumettre">
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
