<?php 
    if(empty($_GET)){
    include 'dashBase.php';;
    } 
    else{
        switch($_GET['name']){
            case 'entrainement': 
                include 'dashBase.php';
              break;
            case 'profile': 
                include 'dashBase.php';
            break;
            case 'contest':
                include 'dashBase.php';
                /* include 'dash_international_contest.php'; */
            break;
        }
    }
?>