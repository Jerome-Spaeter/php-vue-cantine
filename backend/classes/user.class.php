<?php
    class User {
        // user is connected boolean
        protected $logged;

        // privilege booleans
        public $accountType;
        public $validated;
        public $deleted;

        // database location information
        public $userId;

        // user accessible data
        public $firstname;
        public $surname;
        public $gender;
        public $username;
        public $email;
        public $createdDate;

        public function createUser() {

        }
    }
?>