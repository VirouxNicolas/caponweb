<?php
class API{
    private $connect = '';

    function __construct(){
        $this->dbConnection();
    }

    function dbConnection(){
        $this->connect = new PDO("mysql:host=localhost;dbname=caponweb", "root", "");
    }

    function outputData(){
        $select = $this->connect->prepare("SELECT * FROM newsArticles ORDER BY idNews");
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
                ':description' => $_POST["description"]
            );
            $insert = $this->connect->prepare("INSERT INTO newsArticle (name, email, subject, description) VALUES (:name, :email, :subject, :description)");
            $insert->execute($data);
        }
    }

}

?>