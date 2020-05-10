
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
              <form method="POST" id="user_form">
              
                    <div class="form-group row">
                        <div class="col-md-6 mb-4 mb-lg-0">
                          <input type="username" class="form-control" id="username" name="username" placeholder="Nom d'utilisateur" required>
                        </div>
                      
                        <div class="col-md-6 mb-4 mb-lg-0">
                          <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 mb-4 mb-lg-0">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
                        </div>
                        <div class="col-md-6 mb-4 mb-lg-0">
                            <input type="password" class="form-control" id="mdp2" name="mdp2" placeholder="Confirmation mot de passe" required>
                        </div>
                    </div>
                    
                  <div class="form-group row">
                    <div class="col-md-12 mr-auto">
                    <input type="hidden" name="action" id="action" value="addUser" />
                    <input type="submit" id="submitNewTodo" 
                      name="submitNewTodo" class="btn btn-block btn-primary text-white py-3 px-5" value="S'inscrire'" />
                    </div>
                    
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <script>
        $(document).ready(function(){

            $('#user_form').on('submit', function(event){
                event.preventDefault();
                if($('#username').val() == ''){
                    alert('Nom d\'utilisateur field is required!');
                }else if($('#email').val() == ''){
                    alert('Mail field is required!');
                    
                }else if($('#email').val() == ''){
                    alert('Mail field is required!');
                    
                }else{
                    var formData = $(this).serialize();
                    $.ajax({
                        url: "controller/creation_users.php",
                        method: "POST",
                        data: formData,
                        success:function(data){
                            
                            $('#user_form')[0].reset();
                        }
                    });
                }
            });

        });
    </script>
