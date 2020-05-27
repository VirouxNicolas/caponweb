<?php
if(isset($_POST["action"])){
    if($_POST["action"] == 'addUser'){
        $data = array(
            'username'     => $_POST["username"],
            'email'      => $_POST["email"],
            'password'      => $_POST["password"],
        );

        $client = curl_init('http://localhost/Caponweb1/api/apiHandler.php?action=addUser');

        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $data);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);
 
    }
}

?>