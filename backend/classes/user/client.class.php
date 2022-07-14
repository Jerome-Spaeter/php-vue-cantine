<?php
    class Client extends User {
        // user accessible data specific to parents
        public $address;
        public $tel;

        function __construct($username, $email, $created, $address, $tel, $is_admin, $is_super_admin)
        {
            parent::__construct($username, $email, $created, $is_admin, $is_super_admin);
            $this -> address = $address;
            $this -> tel = $tel;
        }
    }
?>