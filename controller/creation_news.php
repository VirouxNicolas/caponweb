<?php
if(isset($_POST["action"])){
    if($_POST["action"] == 'addNew'){
        $data = array(
            'name'     => $_POST["name"],
            'email'      => $_POST["email"],
            'subject'      => $_POST["subject"],
            'descriptionArticles'      => $_POST["descriptionArticles"]
        );

        $client = curl_init('http://localhost/Caponweb1/api/apiHandler.php?action=addNew');

        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $data);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);
 
    }
}

?>