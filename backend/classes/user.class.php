<?php
    class User {
        // user is connected boolean
        public $logged;

        // privilege booleans
        public $is_admin;
        public $is_super_admin;

        // user accessible data
        public $username;
        public $email;
        public $created;

        public function __construct(string $username, string $email, string $created, bool $is_admin, bool $is_super_admin) 
        {
            //Requires booleans
            $this -> is_admin = $is_admin;
            $this -> is_super_admin = $is_super_admin;

            // requires strings
            $this -> username = $username;
            $this -> email = $email;
            $this -> created = $created;
        }
    }
?>