<div class="site-section bg-light block-13" id="international-contest" data-aos="fade">
        <div class="container">

          <div class="text-center mb-5">
            <div class="block-heading-1">
              <h2>Publier une news</h2>
              <p>Avant d'être publiée, la news devra être approuvée par un des administrateurs du site</p>
              
            </div>
          </div>
            <form action="./inc/contact-process.php" method="post" id="contactForm">
            <div class="form-group row">
              <div class="col-md-12">
                <h5> Illustrer votre news avec une image</h5> <input type="file" name="photo" id="photo" />
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre de votre news" required>
                </div>
                
              </div>
              
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="message" id="message" name="message" class="form-control" placeholder="Ecrivez votre news ici"  rows="5"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12 mr-auto">
                  <input type="submit" id="form-submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Envoyez">
                </div>
              </div>
            </form>
          </div>

          