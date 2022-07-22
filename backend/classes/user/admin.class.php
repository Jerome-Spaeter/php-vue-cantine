<?php
    require './classes/user.class.php';

    class Admin extends User {

        public $connect;
        public $deleted= 1;

        private $profileType = 1;
        public $username;
        public $firstname;
        public $surname;
        public $password;
        public $email;

        public function createAdmin() {
            $sqlQuery = "INSERT INTO
                        ". User::DBTABLE ."
                    SET
                    user_deleted = :deleted,
                    user_username = :username, 
                    user_firstname = :firstname,
                    user_surname = :surname,
                    user_email = :email, 
                    user_profile_type = :profileType,
                    user_password = :password;";

                $stmt = $this->connect->prepare($sqlQuery);
                $this->username=htmlspecialchars(strip_tags($this->username));
                $this->firstname=htmlspecialchars(strip_tags($this->firstname));
                $this->surname=htmlspecialchars(strip_tags($this->surname));
                $this->email=htmlspecialchars(strip_tags($this->email));
                $this->password=htmlspecialchars(strip_tags($this->password));
                $this->deleted=htmlspecialchars(strip_tags($this->deleted));

                $stmt->bindParam(":username", $this->username);
                $stmt->bindParam(":firstname", $this->firstname);
                $stmt->bindParam(":surname", $this->surname);
                $stmt->bindParam(":email", $this->email);
                $stmt->bindParam(":password", $this->password);
                $stmt->bindParam(":deleted", $this->deleted);
                $stmt->profileType(":profileType", $this->profilType);
            
                if($stmt->execute()){
                    return true;
                }
                return false;
            }

            public function getCurrentUserInformation() {
                return $currentUserInformation = [
                    'username' => $this -> username,
                    'firstname' => $this -> firstname,
                    'surname' => $this -> surname,
                    'email' => $this -> email,
                    'password' => $this -> password
                ];
            }  
        }

        // public function getClients() {
            
        // }

        // public function deleteClient() {
            
        // }

        // public function validateInscription() {
            
        // }

        // public function validateDeletion() {
            
        // }
    // }
?>