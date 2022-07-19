<?php
    require './classes/user.class.php';
    class Client extends User {
        // user accessible data specific to parents
        public $tel;
        public $street;
        public $city;
        public $zipcode;

        public function createClient(){

        }

        // returns object
        public function getCurrentUserInformation() {
            return $currentUserInformation = [
                'firstname' => $this -> firstname,
                'surname' => $this -> surname,
                'gender' => $this -> gender,
                'username' => $this -> username,
                'email' => $this -> email,
                'createdDate' => $this -> createdDate,
                'tel' => $this -> tel,
                'street' => $this -> street,
                'city' => $this -> city,
                'zipcode' => $this -> zipcode
            ];
        }

        // returns integer which identifies this user in the database
        public function prepareDelete() {
            return $this -> userId;
        }

        public function updateCurrentUser($email, $tel, $street, $city, $zipcode) {
            $this -> email = $email;
            $this -> tel = $tel;
            $this -> street = $street;
            $this -> city = $city;
            $this -> zipcode = $zipcode;
        }
    }
?>