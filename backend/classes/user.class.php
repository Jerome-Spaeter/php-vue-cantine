<?php
    class User {
        // user is connected boolean
        public $logged;

        // privilege booleans
        protected $isAdmin;
        protected $isSuperAdmin;
        protected $validated;
        protected $deleted;

        // database location information
        protected $table;
        protected $userId;

        // user accessible data
        protected $firstname;
        protected $surname;
        protected $gender;
        protected $username;
        protected $email;
        protected $createdDate;

        public function __construct(
            $isAdmin, $isSuperAdmin, $validated, 
            $deleted, $table, $userId, 
            $firstname, $surname, $gender, 
            $username, $email, $createdDate
            ) 
        {
            //Requires booleans
            $this -> isAdmin = $isAdmin;
            $this -> isSuperAdmin = $isSuperAdmin;
            $this -> validated = $validated;
            $this -> deleted = $deleted;

            // requires strings
            $this -> table = $table;
            $this -> userId = $userId;

            // user accessible data
            $this -> firstname = $firstname;
            $this -> surname = $surname;
            $this -> gender = $gender;
            $this -> username = $username;
            $this -> email = $email;
            $this -> createdDate = $createdDate;
        }

    }
?>