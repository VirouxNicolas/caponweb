<?php
if(isset($_POST["action"])){
    if($_POST["action"] == 'addEntrainement'){
        $data = array(
            'lieu' => $_POST["lieu"],
            'date_entrainement' => $_POST["date_entrainement"],
            'heure_debut'      => $_POST["heure_debut"],
            'heure_fin'      => $_POST["heure_fin"]
        );

        $client = curl_init('http://localhost/Caponweb1/api/apiHandler.php?action=addEntrainement');
        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $data);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);
 
    }
}

?>