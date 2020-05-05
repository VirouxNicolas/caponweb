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
            
              <form method="POST" id="api_form">

              <div class="form-group row">
                        <div class="col-md-6 mb-4 mb-lg-0">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nom " required>
                        </div>
                      
                        <div class="col-md-6 mb-4 mb-lg-0">
                        <input type="text" name="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
              </div>
              
                  <div class="form-group">
                      <input type="text" name="subject" class="form-control" id="subject" placeholder="Sujet" required>
                  </div>
                  <div class="form-group row">
                      <div class="col-md-12">
                        <textarea type="message" id="descriptionArticles" name="descriptionArticles" class="form-control" placeholder="Ecrivez votre message ici" cols="30" rows="10" required></textarea>
                      </div>
                </div> 
                <div class="form-group row">
                      <div class="col-md-12">
                      <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                        <h5> Illustrer votre news avec une image</h5> <input type="file" name="imageUpload" id="imageUpload" aria-describedby="imageUpload" />
                      </div>
                    </div> 
                    
                  <input type="hidden" name="action" id="action" value="addNew" />
                  <input type="submit" id="submitNewTodo" 
                      name="submitNewTodo" class="btn btn-block btn-primary text-white py-3 px-5" value="Soumettre" />
              </form>
              </div>
            </div>
          </div>
        </div>

        <script>
        $(document).ready(function(){

            $('#api_form').on('submit', function(event){
                event.preventDefault();
                if($('#name').val() == ''){
                    alert('Nom field is required!');
                }else if($('#email').val() == ''){
                    alert('Mail field is required!');
                    
                }else{
                    var formData = $(this).serialize();
                    $.ajax({
                        url: "inc/controller.php",
                        method: "POST",
                        data: formData,
                        success:function(data){
                            //outputData();
                            $('#api_form')[0].reset();
                        }
                    });
                }
            });

        });
    </script>