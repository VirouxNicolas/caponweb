<?php
   $client = curl_init('http://51.75.126.61/api/apiHandler.php?action=outputValidNews');
    curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($client);
    $result = json_decode($response);
 
    $output = '';
 
    if(count($result) > 0){
        foreach($result as $row){
            echo "<h2 class='mb-4 text-black'>$row->subject</h2>";
            echo "<p>$row->descriptionArticles</p>";
            echo "<ul class=' list-unstyled mt-5'>";
            echo "<li> <u> Auteur : </u>$row->name</li>";
            echo "<li> <u> Email : </u>$row->mail</li>";
            echo "</ul>";
            echo "<hr>";
            
            
        }
    }else{
        $output .= '<tr><td colspan="3" align="center">Not found!</td></tr>';
    }
 
    echo $output;
?>