<?php
    require './classes/user.class.php';

    class Client extends User {
        // user accessible data specific to parents
        public $connect;
        public $deleted= 0;
        public $validated= 0;
        private $profileType = 2;
        public $username;
        public $firstname;
        public $surname;
        public $password;
        
        public $email;
        public $tel;
        
        public $street;
        public $city;
        public $zipcode;
        public $inscriptionDate;

        public function createUser(){
            $sqlQuery = "INSERT INTO
                        ". User::DBTABLE ."
                    SET
                    user_validated = :validated,
                    user_deleted = :deleted,
                    user_username = :username, 
                    user_firstname = :firstname,
                    user_surname = :surname,
                    user_email = :email, 
                    user_tel = :tel,
                    user_password = :password,
                    user_street = :street,
                    user_city = :city,
                    user_zipcode = :zipcode,
                    user_profile_type = :profileType,
                    user_inscription_date = now();";

                $stmt = $this->connect->prepare($sqlQuery);
                $this->username=htmlspecialchars(strip_tags($this->username));
                $this->firstname=htmlspecialchars(strip_tags($this->firstname));
                $this->surname=htmlspecialchars(strip_tags($this->surname));
                $this->email=htmlspecialchars(strip_tags($this->email));
                $this->tel=htmlspecialchars(strip_tags($this->tel));
                $this->password=htmlspecialchars(strip_tags($this->password));
                $this->street=htmlspecialchars(strip_tags($this->street));
                $this->city=htmlspecialchars(strip_tags($this->city));
                $this->zipcode=htmlspecialchars(strip_tags($this->zipcode));
                $this->deleted=htmlspecialchars(strip_tags($this->deleted));
                $this->validated=htmlspecialchars(strip_tags($this->validated));

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
                $stmt->bindParam(":deleted", $this->deleted);
                $stmt->bindParam(":validated", $this->validated);
            
                if($stmt->execute()){
                    return true;
                }
                return false;
            }

        // returns object
        public function getClient() {
            $sqlQuery= "SELECT * FROM " 
            . User::DBTABLE .
            " WHERE 
            user_id = :userId;"; 

            $res = $this->connect->prepare($sqlQuery);
            $this->userId=htmlspecialchars(strip_tags($this->userId));

            $res->bindParam(":userId", $this->userId);
            $res -> setFetchMode(PDO::FETCH_ASSOC);
            // On exécute la requête :
            $res -> execute();
            /* On récupère le résultat de la requête (1 seul résultat possible puisque le champ user_login est déclaré 'unique' dans la table users) et on le sotcke dans un tableau :
            */
            $tab = $res -> fetchAll();
            return $tab;
        }    
    }   
?>