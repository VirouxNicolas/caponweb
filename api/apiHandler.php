<?php


include("api.php");

$apiObject = new API();

if($_GET["action"] == 'outputAllNews'){
    $data = $apiObject->outputAllNews();
}

if($_GET["action"] == 'outputValidNews'){
    $data = $apiObject->outputValidNews();
}

if($_GET["action"] == 'outputWaitingNews'){
    $data = $apiObject->outputWaitingNews();
}

if($_GET["action"] == 'outputUsers'){
    $data = $apiObject->outputUsers();
}

if($_GET["action"] == 'addNew'){
    $data = $apiObject->addNewToDo();
}

echo json_encode($data);
?>