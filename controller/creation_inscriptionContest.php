<?php
if(isset($_POST["action"])){
    if($_POST["action"] == 'addInscriptionContest'){
        $data = array(
            'name' => $_POST["name"],
            'prenom' => $_POST["prenom"],
            'country' => $_POST["country"],
            'choixSJ' => $_POST["choixSJ"],
            'licence' => $_POST["licence"],
            'category' => $_POST["category"],
            'email' => $_POST["email"],
            'reservation' => $_POST["reservation"],
            'message' => $_POST["message"]
        );
        $client = curl_init('http://51.75.126.61/api/apiHandler.php?action=addInscriptionContest');
        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $data);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);
 
    }
}

?>