<?php

/**
 * Class API
 */
class API{
    private $connect = '';

    /**
     * API constructor.
     */
    function __construct(){
        $this->dbConnection();
    }

    /**
     * connection à la db
     */
    function dbConnection(){
        $this->connect = new PDO("mysql:host=51.75.126.61;dbname=caponweb", "", "");
    }

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
    function outputValidNews(){
        $select = $this->connect->prepare("SELECT * FROM newsArticles WHERE confirmation = 1");
        if($select->execute()){
            while($row = $select->fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }
            return $data;
            
        }
    }

    /**
     * fonction qui recupere les articles qui sont en attente
     * @return mixed
     */
    function outputWaitingNews(){
        $select = $this->connect->prepare("SELECT * FROM newsArticles WHERE confirmation = 0");
        if($select->execute()){
            while($row = $select->fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }
            return $data;
            
        }
    }


    /**
     * fonction permettant de recuperer les utilisateurs dans bdd
     * @return mixed
     */
    function outputUsers(){
        $select = $this->connect->prepare("SELECT * FROM users ORDER BY id");
        if($select->execute()){
            while($row = $select->fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }
            return $data;
        }
    }

    function outputAdmin(){
        $select = $this->connect->prepare("SELECT * FROM users WHERE user_type = 'admin' ");
        if($select->execute()){
            while($row = $select->fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }
            return $data;
        }
    }

    function outputInternationalContest(){
        $select = $this->connect->prepare("SELECT * FROM inscription_contest");
        if($select->execute()){
            while($row = $select->fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }
            return $data;
        }
    }

    /**
     * fonction permettant d'ajouter un article dans la bdd
     * @param string name
     * @param string email
     * @param string subject
     * @param string descriptionArticles
     */
    function addNew(){
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

    /**
     * fonction permettant de créer un utilisateur
     * @param string username
     * @param string email
     * @param string password
     */
    function addUser(){
        if(isset($_POST["username"])){
            
            $test = $_POST["password"];
            $md5 = md5($test);
            $data = array(
                
                ':username' => $_POST["username"],
                ':email' => $_POST["email"],
                ':password' => $md5,
            );
            $insert = $this->connect->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
            $insert->execute($data);
        }
    }

    function addInscriptionContest(){
        if(isset($_POST["name"])){
            $data = array(
                ':name' => $_POST["name"],
                ':prenom' => $_POST["prenom"],
                ':country' => $_POST["country"],
                ':choixSJ' => $_POST["choixSJ"],
                ':licence' => $_POST["licence"],
                ':category' => $_POST["category"],
                ':email' => $_POST["email"],
                ':reservation' => $_POST["reservation"],
                ':message' => $_POST["message"]
            );
            $insert = $this->connect->prepare("INSERT INTO inscription_contest (name, prenom, country, choixSJ, licence,category, email, reservation, message) VALUES (:name, :prenom, :country, :choixSJ, :licence,:category, :email, :reservation, :message)");
            $insert->execute($data);
        }
    }

    
    function updateVisibleArticle($id){
              
        $select = $this->connect->prepare("UPDATE newsarticles SET confirmation=1 WHERE idNews=$id");
        $select->execute();
        
        $data[] = "Publier";
        return $data;

    }

    function updateCacheArticle($id){
              
        $select = $this->connect->prepare("UPDATE newsarticles SET confirmation=0 WHERE idNews=$id");
        $select->execute();
        
        $data[] = "Cacher";
        return $data;

    }

    function deleteArticle($id){
              
        $select = $this->connect->prepare("DELETE FROM newsarticles WHERE idNews=$id");
        $select->execute();
        
        $data[] = "Supprime";
    
        return $data;
    }

    function addEntrainement(){
        if(isset($_POST["lieu"])){
            $data = array(
                ':lieu' => $_POST["lieu"],
                ':date_entrainement' => $_POST["date_entrainement"],
                ':heure_debut' => $_POST["heure_debut"],
                ':heure_fin' => $_POST["heure_fin"]
            );
            $insert = $this->connect->prepare("INSERT INTO entrainement (lieu, date_entrainement, heure_debut, heure_fin, idUsers) VALUES ('Bierges','2020-09-05', '13:30','14:30',1)");
            $insert->execute($data);
        }
    }


    function updateAdminUtilisateur($id){
              
        $select = $this->connect->prepare("UPDATE users SET user_type='admin' WHERE id=$id");
        $select->execute();
        
        $data[] = "Administrateur";
        return $data;
    }

    function updateMembreUtilisateur($id){
              
        $select = $this->connect->prepare("UPDATE users SET user_type='membre' WHERE id=$id");
        $select->execute();
        
        $data[] = "Membre";
        return $data;
    }



}

?>
