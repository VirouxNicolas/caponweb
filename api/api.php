<?php
class API{
    private $connect = '';

    function __construct(){
        $this->dbConnection();
    }

    function dbConnection(){
        $this->connect = new PDO("mysql:host=localhost;dbname=caponweb", "root", "");
    }

    function outputAllNews(){
        $select = $this->connect->prepare("SELECT * FROM newsArticles ORDER BY idNews");
        if($select->execute()){
            while($row = $select->fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }
            return $data;
            /* header('Content-Type: application/json');
            echo json_encode($data, JSON_PRETTY_PRINT); */
            
        }
    }
    
    function outputValidNews(){
        $select = $this->connect->prepare("SELECT * FROM newsArticles WHERE confirmation = 1");
        if($select->execute()){
            while($row = $select->fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }
            return $data;
            
        }
    }

    function outputWaitingNews(){
        $select = $this->connect->prepare("SELECT * FROM newsArticles WHERE confirmation = 0");
        if($select->execute()){
            while($row = $select->fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }
            return $data;
            
        }
    }

   

    function outputUsers(){
        $select = $this->connect->prepare("SELECT * FROM users ORDER BY id");
        if($select->execute()){
            while($row = $select->fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }
            return $data;
        }
    }

    function addNewToDo(){
        if(isset($_POST["name"])){
            $data = array(
                ':name' => $_POST["name"],
                ':email' => $_POST["email"],
                ':subject' => $_POST["subject"],
                ':descriptionArticles' => $_POST["descriptionArticles"]
            );
            $insert = $this->connect->prepare("INSERT INTO newsarticles (name, mail, subject, descriptionArticles, confirmation) VALUES (:name, :email, :subject, :descriptionArticles, 0)");
            $insert->execute($data);
        }
    }

}

?>