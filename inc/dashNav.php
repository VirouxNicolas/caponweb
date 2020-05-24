<?php 
    if(empty($_GET)){
    include 'dashBase.php';;
    } 
    else{
        switch($_GET['name']){
            
            case 'profile': 
                include 'dashBase.php';
            break;
            case 'attentelist': 
                include 'dashBase.php';
            break;
            case 'tousarticles': 
                include 'dashBase.php';
            break;
            case 'contest':
                include 'dashBase.php';
                /* include 'dash_international_contest.php'; */
            break;
            case 'tousutilisateur': 
                include 'dashBase.php';
            break;
            case 'entrainement': 
                include 'dashBase.php';
              break;
            case 'listentrainement': 
                include 'dashBase.php';
            break;
            case 'dashentrainement': 
                include 'dashBase.php';
            break;
            
        }
    }
?>