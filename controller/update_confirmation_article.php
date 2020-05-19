<?php

//action.php

if(isset($_POST["action"]))
{
 
 if($_POST["action"] == 'updateVisibleArticle')
 {
  $api_url = "http://localhost/Caponweb1/api/apiHandler.php?action=updateVisibleArticle&idNews=".$id."";
  $client = curl_init($api_url);
  curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($client);
  echo $response;
 }
}


?>