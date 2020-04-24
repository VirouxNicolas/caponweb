<?php
      require('./db/db.php');
      $extensions_arr = array("jpg","jpeg","png","gif");

      if (isset($_POST['name'])){
          $name = stripslashes($_REQUEST['name']);
          $name = mysqli_real_escape_string($con,$name);

          $mail = stripslashes($_REQUEST['mail']);
          $mail = mysqli_real_escape_string($con,$mail); 

          $subject = stripslashes($_REQUEST['subject']);
          $subject = mysqli_real_escape_string($con,$subject); 

          $descriptionArticles = stripslashes($_POST['descriptionArticles']);
          $descriptionArticles = mysqli_real_escape_string($con,$descriptionArticles);

          $pictures = $_FILES['imageUpload']['name'];
          $folder = './images/NewsImagesBDD/';
          $tmp_name = $_FILES["imageUpload"]["tmp_name"];

          $trn_date = date("Y-m-d H:i:s");
          
            $query = "call insertNews('$name', '$mail', '$subject', '$descriptionArticles', '$pictures', '0')";
         // $query = "call insertNews('a', 'b', 'c', 'd', 'e','1')";
          $result = mysqli_query($con,$query);
            if($result &&  move_uploaded_file($tmp_name, $folder.$pictures)){
                $messageOK = "Formulaire a été envoyé";
            }else{
                $messageErreur = "Votre fichier n'est pas une image, seul les extensions Jpg, png et gif sont acceptées";
            }
        //header('Location: news.php');    
      }
?>