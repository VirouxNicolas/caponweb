<?php
      require('s./db/db.php');
      if (isset($_POST['name'])){
          $name = stripslashes($_REQUEST['name']);
          $name = mysqli_real_escape_string($con,$name);

          $mail = stripslashes($_REQUEST['mail']);
          $mail = mysqli_real_escape_string($con,$mail); 

          $subject = stripslashes($_REQUEST['subject']);
          $subject = mysqli_real_escape_string($con,$subject); 

          $descriptionArticles = stripslashes($_POST['descriptionArticles']);
          $descriptionArticles = mysqli_real_escape_string($con,$descriptionArticles);
        
          $pictures = stripslashes($_POST['pictures']);
          $pictures = mysqli_real_escape_string($con,$pictures);

          $trn_date = date("Y-m-d H:i:s");
          
            $query = "call insertNews('$name', '$mail', '$subject', '$descriptionArticles', '$pictures', '1')";
         // $query = "call insertNews('a', 'b', 'c', 'd', 'e','1')";
          $result = mysqli_query($con,$query);
            if($result){
                $messageOK = "<div class='form'><h3>Formulaire à été envoyé</h3></div>";
            }else{
                $messageErreur = "Erreur";
            }
        //header('Location: news.php');    
      }
?>