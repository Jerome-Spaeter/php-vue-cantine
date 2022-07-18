<?php
    class User {
        // user is connected boolean
        public $logged;

        // privilege booleans
        protected $is_admin;
        protected $is_super_admin;
        protected $validated;
        protected $deleted;

        // user accessible data
        protected $username;
        protected $email;
        protected $created;

        public function __construct(bool $is_admin, bool $is_super_admin, bool $validated, bool $deleted, string $username, string $email, string $created) 
        {
            //Requires booleans
            $this -> is_admin = $is_admin;
            $this -> is_super_admin = $is_super_admin;
            $this -> validated = $validated;
            $this -> deleted = $deleted;

            // requires strings
            $this -> username = $username;
            $this -> email = $email;
            $this -> created = $created;
        }
    }
?>