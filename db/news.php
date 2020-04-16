<?php
    // Connect to database
    include("db.php");
    $request_method = $_SERVER["REQUEST_METHOD"];

 

    function getNews()
    {
        global $con;
        $query = "SELECT * FROM newsarticles ";
        $response = array();
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_array($result))
        {
            $response[] = $row;
        }
        header('Content-Type: application/json');
        echo json_encode($response, JSON_PRETTY_PRINT);
    }

    function getvalidnews($id=0)
    {
        global $con;
        $query = "SELECT * FROM newsarticles";
        if($id != 0)
        {
            $query .= " WHERE confirmation=".$id." LIMIT 1";
        }
        $response = array();
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_array($result))
        {
            $response[] = $row;
        }
        header('Content-Type: application/json');
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
    
    switch($request_method)
    {
        
        case 'GET':
            // Retrive Products
            if(!empty($_GET["id"]))
			{
				$id=intval($_GET["id"]);
				getvalidnews($id);
			}
            else
            {
                getNews();
            }
            break;
        default:
            // Invalid Request Method
            header("HTTP/1.0 405 Method Not Allowed");
            break;

    }
?>