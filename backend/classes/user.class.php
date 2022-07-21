<?php
    class User {
        // user is connected boolean
        public $connect;

        //table
        public $dbTable = "user";

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
                        ". $this->dbTable ."
                    SET
                    user_username = :username, 
                    user_firstname = :firstname,
                    user_surname = :surname,
                    user_email = :email, 
                    user_tel = :tel,
                    user_password = :password,
                    user_street = :street,
                    user_city = :city,
                    user_zipcode = :zipcode,
                    user_profile_type = :2,
                    user_inscription_date = now()";
        
            $stmt = $this->connnect->prepare($sqlQuery);
            $this->username=htmlspecialchars(strip_tags($this->username));
            $this->firstname=htmlspecialchars(strip_tags($this->firstname));
            $this->surname=htmlspecialchars(strip_tags($this->surname));
            $this->email=htmlspecialchars(strip_tags($this->email));
            $this->tel=htmlspecialchars(strip_tags($this->tel));
            $this->password=htmlspecialchars(strip_tags($this->password));
            $this->street=htmlspecialchars(strip_tags($this->street));
            $this->city=htmlspecialchars(strip_tags($this->city));
            $this->zipcode=htmlspecialchars(strip_tags($this->zipcode));
            $this->profileType=htmlspecialchars(strip_tags($this->profileType));

            $stmt->bindParam(":username", $this->username);
            $stmt->bindParam(":firstname", $this->firstname);
            $stmt->bindParam(":surname", $this->surname);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":tel", $this->tel);
            $stmt->bindParam(":password", $this->password);
            $stmt->bindParam(":street", $this->street);
            $stmt->bindParam(":city", $this->city);
            $stmt->bindParam(":zipcode", $this->zipcode);
            $stmt->bindParam(":profileType", $this->profileType);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }
    }
?>