<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="site-section bg-light" id="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
        <div class="block-heading-1">
          <h2>Contactez-nous</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
      <?php if(isset($messageOK)){ ?><div class="alert alert-success" role="alert"> <?php echo $messageOK; ?> </div><?php } ?>
      <?php if(isset($messageErreur)){ ?><div class="alert alert-danger" role="alert"> <?php echo $messageErreur; ?> </div><?php } ?>
        <form action="./inc/contact-process.php" method="post" id="contactForm">
          <div class="form-group row">
            <div class="col-md-6 mb-4 mb-lg-0">
              <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <input type="text" class="form-control" id="email" name="email" placeholder="Adresse mail" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <textarea name="message" id="message" name="message" class="form-control" placeholder="Ecrivez votre message ici" cols="30" rows="10"></textarea>
            </div>
          </div>
          <div class="g-recaptcha" data-sitekey="6LeWNfUUAAAAAPSaJ_4myhHnA_k1G2HGX_Ap2XV-" ></div>
          <br>
          <div class="form-group row">
            <div class="col-md-6 mr-auto">
              <input type="submit" id="form-submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Envoyer">
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
        <div class="bg-white p-3 p-md-5">
          <h3 class="text-black mb-4">Info contact</h3>
          <ul class="list-unstyled footer-link">
            <li class="d-block mb-3">
              <span class="d-block text-black">Adresse:</span>
              <span>Rue Ma Campagne (lieu-dit "Tri des Hayes"), <br> 4860 WEGNEZ, <br>Belgique</span></li>
            <li class="d-block mb-3"><span class="d-block text-black">Telehone:</span><span>0475/54.75.60</span></li>
            <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@caponweb.be</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>