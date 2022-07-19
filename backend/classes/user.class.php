<?php
    class User {
        // user is connected boolean
        private $connect;

        //table
        private $dbTable = "user";
        
        // privilege booleans
        protected $profileType;
        protected $validated;
        protected $deleted;

        protected $userId;

        // user accessible data
        protected $username;
        protected $firstname;
        protected $surname;
        protected $gender;
        protected $email;
        protected $tel;
        protected $password;
        protected $street;
        protected $zipcode;
        protected $city;
        protected $inscriptionDate;

        public function __construct($db){
            $this->connect = $db;
        }

        public function createUser(){
            $sqlQuery = "INSERT INTO
                        ". $this->dbTable ."
                    SET
                    username = :username, 
                    firstname = :firstname,
                    surname = :surname,
                    gender = :gender,
                    email = :email, 
                    tel = :tel,
                    password = :password,
                    street = :street,
                    city = :city,
                    zipcode = :zipcode,
                    profileType = :profileType,
                    inscriptionDate = now()";
        
            $stmt = $this->connnect->prepare($sqlQuery);
            $this->username=htmlspecialchars(strip_tags($this->username));
            $this->firstname=htmlspecialchars(strip_tags($this->firstname));
            $this->surname=htmlspecialchars(strip_tags($this->surname));
            $this->gender=htmlspecialchars(strip_tags($this->gender));
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
            $stmt->bindParam(":gender", $this->gender);
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