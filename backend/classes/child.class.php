<?php
    class Child {
        public $table; // name of the table

        protected $id;
        protected $firstname;
        protected $surname;
        protected $dob;
        protected $allergies;
        protected $board;
        protected $inscriptionDate;
        protected $validated;
        protected $deleted;

        public function __construct($table, $id, $firstname, $surname, 
        $dob, $allergies, $board, $inscriptionDate, $validated, $deleted){
            $this->table = $table;
            $this->id = $id;
            $this->firstname = $firstname;
            $this->surname = $surname;
            $this->dob = $dob;
            $this->allergies = $allergies;
            $this->board = $board;
            $this->inscriptionDate = $inscriptionDate;
            $this->validated = $validated;
            $this->deleted = $deleted;
        }
        public function get(){
            return $currentInformation = [
                
            ];
        }

        public function create(){

        }
        public function delete(){

        }
        public function update(){

        }

        public function validate(){

        }
    }
?>
