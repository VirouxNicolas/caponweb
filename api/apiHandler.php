<?php

include("api.php");


/**
 * Les endpoints de notre API implementée
 */
$apiObject = new API();

//recupe tous les articles dans la db
if($_GET["action"] == 'outputAllNews'){
    $data = $apiObject->outputAllNews();
}

//repere uniquement les articles qui ont été approuvé par l'administrateur
if($_GET["action"] == 'outputValidNews'){
    $data = $apiObject->outputValidNews();
}

//les articles qui n'ont pas encore été apprové
if($_GET["action"] == 'outputWaitingNews'){
    $data = $apiObject->outputWaitingNews();
}

//recupere tous les utilisateurs
if($_GET["action"] == 'outputUsers'){
    $data = $apiObject->outputUsers();
}

//recupere tous les admins
if($_GET["action"] == 'outputAdmin'){
    $data = $apiObject->outputAdmin();
}

//creer un article
if($_GET["action"] == 'addNew'){
    $data = $apiObject->addNew();
}

//creer un compte utilisateur
if($_GET["action"] == 'addUser'){
    $data = $apiObject->addUser();
}

if($_GET["action"] == 'addInscriptionContest'){
    $data = $apiObject->addInscriptionContest();
}

if($_GET["action"] == 'outputInternationalContest'){
    $data = $apiObject->outputInternationalContest();
}

if($_GET["action"] == 'updateVisibleArticle'){
    $id = $_GET["idNews"];
    $data = $apiObject->updateVisibleArticle($id);
}

if($_GET["action"] == 'deleteArticle'){
    $id = $_GET["idNews"];
    $data = $apiObject->deleteArticle($id);
}

echo json_encode($data);
?>