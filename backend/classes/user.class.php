<?php
    class User {
        // user is connected boolean
        public $connect;

        //table
        const DBTABLE = "user";

        public $userId;

        // user accessible data
        public $username;
        public $firstname;
        public $surname;
        public $password;
        
        public function __construct($db){
            $this->connect = $db;
        }

        public function createUser(){
            $sqlQuery = "INSERT INTO
                        ". User::DBTABLE ."
                    SET
                    user_username = :username, 
                    user_firstname = :firstname,
                    user_surname = :surname,
                    user_password = :password,";
        
            $stmt = $this->connnect->prepare($sqlQuery);
            $this->username=htmlspecialchars(strip_tags($this->username));
            $this->firstname=htmlspecialchars(strip_tags($this->firstname));
            $this->surname=htmlspecialchars(strip_tags($this->surname));
            $this->password=htmlspecialchars(strip_tags($this->password));

            $stmt->bindParam(":username", $this->username);
            $stmt->bindParam(":firstname", $this->firstname);
            $stmt->bindParam(":surname", $this->surname);
            $stmt->bindParam(":password", $this->password);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }
    }
?>