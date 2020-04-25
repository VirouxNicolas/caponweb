<?php
      require('./db/db.php');
      if (isset($_REQUEST['username'])){
          $username = stripslashes($_REQUEST['username']); // enlever backslashes
          $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
          $email = stripslashes($_REQUEST['email']);
          $email = mysqli_real_escape_string($con,$email);
          $password = stripslashes($_REQUEST['password']);
          $password = mysqli_real_escape_string($con,$password);
          $mdp2 = stripslashes($_REQUEST['mdp2']);
          $mdp2 = mysqli_real_escape_string($con,$mdp2);
                    
          $trn_date = date("Y-m-d H:i:s");
          if($password == $mdp2){
                $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
                $result = mysqli_query($con,$query);
                    if($result){
                        $messageOK = "<div class='form'><h3>Demande envoyée à l'administrateur.</h3></div>";
                    }else{
                        $messageErreur = "Erreur";
                    }
          }else{
            $messageErreur = "Vos mot de passe ne sont pas identiques";
        }
          
      }
?>