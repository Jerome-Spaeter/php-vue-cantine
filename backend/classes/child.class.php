<?php
    class Child {
        const DBTABLE = 'child'; // name of the table

        public $connect;

        public $childId;
        public $clientId;
        public $firstname;
        public $surname;
        public $dob;
        public $allergies;
        public $board;
        public $inscriptionDate;
        public $validated = 0;
        public $deleted = 0;

        public function __construct($db) {
            $this->connect = $db;
        }

        public function createChild(){
            $sqlQuery = "INSERT INTO
                        ". $this->dbTable ."
                    SET
                    fk_client_id = :clientId,
                    child_firstname = :firstname,
                    child_surname = :surname,
                    child_dob = :dob,
                    child_allergies = :allergies,
                    child_board = :board,
                    child_inscription_date = now(),
                    child_deleted = :deleted,
                    child_validated = :validated;";

            $stmt = $this->connect->prepare($sqlQuery);
            $this->clientId=htmlspecialchars(strip_tags($this->clientId));
            $this->firstname=htmlspecialchars(strip_tags($this->firstname));
            $this->surname=htmlspecialchars(strip_tags($this->surname));
            $this->dob=htmlspecialchars(strip_tags($this->dob));
            $this->allergies=htmlspecialchars(strip_tags($this->allergies));
            $this->board=htmlspecialchars(strip_tags($this->board));

            $stmt->bindParam(":clientId", $this->clientId);
            $stmt->bindParam(":firstname", $this->firstname);
            $stmt->bindParam(":surname", $this->surname);
            $stmt->bindParam(":dob", $this->dob);
            $stmt->bindParam(":allergies", $this->allergies);
            $stmt->bindParam(":board", $this->board);
            $stmt->bindParam(":deleted", $this->deleted);
            $stmt->bindParam(":validated", $this->validated);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }

        public function getChildren(){       
            $sqlQuery= "SELECT * FROM " 
            . Child::DBTABLE .
            " WHERE 
            fk_client_id = :clientId;"; 
            
            $res = $this->connect->prepare($sqlQuery);
            $this->clientId=htmlspecialchars(strip_tags($this->clientId));

            $res->bindParam(":clientId", $this->clientId);
            $res -> setFetchMode(PDO::FETCH_ASSOC);
            // On exécute la requête :
            $res -> execute();
            /* On récupère le résultat de la requête (1 seul résultat possible puisque le champ user_login est déclaré 'unique' dans la table users) et on le sotcke dans un tableau :
            */
            $tab = $res -> fetchAll();
            return $tab;
        }

        public function delete(){

        }
        public function update(){

        }

        public function validate(){

        }
    }
?>