<?php
    class Child {
        private $dbTable = 'child'; // name of the table

        public $connect;

        public $childId;
        public $parentId;
        public $firstname;
        public $surname;
        public $dob;
        public $allergies;
        public $board;
        public $inscriptionDate;
        public $validated = false;
        public $deleted = false;

        public function __construct($db) {
            $this->connect = $db;
        }

        public function createChild(){
            $sqlQuery = "INSERT INTO
                        ". $this->dbTable ."
                    SET
                    fk_parent_id = :parentId,
                    child_firstname = :firstname,
                    child_surname = :surname,
                    child_dob = :dob,
                    child_allergies = :allergies,
                    child_board = :board,
                    child_inscription_date = now(),
                    child_deleted = :deleted,
                    child_validated = :validated;";

            $stmt = $this->connect->prepare($sqlQuery);
            $this->parentId=htmlspecialchars(strip_tags($this->parentId));
            $this->firstname=htmlspecialchars(strip_tags($this->firstname));
            $this->surname=htmlspecialchars(strip_tags($this->surname));
            $this->dob=htmlspecialchars(strip_tags($this->dob));
            $this->allergies=htmlspecialchars(strip_tags($this->allergies));
            $this->board=htmlspecialchars(strip_tags($this->board));

            $stmt->bindParam(":parentId", $this->parentId);
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

        public function get(){       

            return $currentChildInformation = [
            'firstname' => $this-> firstname,
            'surname' => $this-> surname,
            'dob' => $this-> dob,
            'allergies' => $this-> allergies,
            'board' => $this-> board,
            'inscriptionDate' => $this-> inscriptionDate,
            'validated' => $this-> validated,
            'deleted' => $this-> deleted,
            ];

        }

        public function delete(){

        }
        public function update(){

        }

        public function validate(){

        }
    }
?>