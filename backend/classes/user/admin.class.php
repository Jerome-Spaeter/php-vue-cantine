<?php
    class Admin extends User {
        public function __construct(
            $accountType, $table, $userId, $firstname, $surname, 
            $gender, $username, $email, $createdDate
            ) 
            {
            $this -> accountType = $accountType;
            $this -> table = $table;
            $this -> userId = $userId;
            $this -> firstname = $firstname;
            $this -> surname = $surname;
            $this -> gender = $gender;
            $this -> username = $username;
            $this -> email = $email;
            $this -> createdDate = $createdDate;
        }

        public function getClients() {
            
        }

        public function deleteClient() {
            
        }

        public function validateInscription() {
            
        }

        public function validateDeletion() {
            
        }
    }
?>