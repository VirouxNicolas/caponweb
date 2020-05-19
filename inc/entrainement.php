 <section id="main-content">
      <section class="wrapper">
        
        <div class="site-section" id="connexion-section">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
                <div class="block-heading-1">
                  <h2>Creation d'un entrainement </h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 mb-5" data-aos="fade-up" data-aos-delay="100">
            
              <form method="POST" id="api_entrainement">

              <div class="form-group row">
                        <div class="col-md-6 mb-4 mb-lg-0">
                        <input type="text" name="lieu" class="form-control" id="lieu" placeholder="Lieu ">
                        </div>
                      
                        <div class="col-md-6 mb-4 mb-lg-0">
                        <input type="date" name="date_entrainement" class="form-control" id="date_entrainement" required>
                        </div>
              </div>
              
              <div class="form-group">
              Heure de début:
                      <input type="time" name="heure_debut" class="form-control" id="heure_debut" placeholder="Heure début" required>
                  </div>
                  <div class="form-group">
              Heure de fin:
                      <input type="time" name="heure_fin" class="form-control" id="heure_fin" placeholder="Heure fin" required>
                  </div>
 
                  <input type="hidden" name="action" id="action" value="addEntrainement" />
                  <input type="submit" id="submitNewTodo" 
                      name="submitNewTodo" class="btn btn-block btn-primary text-white py-3 px-5" value="Créer entrainement" />
                      </div>

              </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>

    <script>
        $(document).ready(function(){

            $('#api_entrainement').on('submit', function(event){
                event.preventDefault();
                if($('#lieu').val() == ''){
                    alert('Un lieu est requis!');
                }else{
                    var formData = $(this).serialize();
                    $.ajax({
                        url: "controller/creation_entrainement.php",
                        method: "POST",
                        data: formData,
                        success:function(data){
                            //outputData();
                            $('#api_entrainement')[0].reset();
                        }
                    });
                }
            });

        });
    </script>