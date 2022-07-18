<?php
    class Client extends User {
        // user accessible data specific to parents
        protected $tel;
        protected $street;
        protected $city;
        protected $zipcode;

        function __construct(
            bool $is_admin, bool $is_super_admin, bool $validated, bool $deleted, string $username, string $email, string $created, string $tel, string $street, string $city, string $zipcode
            )
        {
            parent::__construct($is_admin, $is_super_admin, $validated, $deleted, $username, $email, $created);
            $this -> tel = $tel;
            $this -> street = $street;
            $this -> city = $city;
            $this -> zipcode = $zipcode;
        }
    }
?>