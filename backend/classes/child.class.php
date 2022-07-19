<?php
class Child {
        public $table; // name of the table

        protected $childId;
        protected $firstname;
        protected $surname;
        protected $dob;
        protected $allergies;
        protected $board;
        protected $inscriptionDate;
        protected $validated;
        protected $deleted;

        public function createChild(){
        //    <code to be added>
        }

        public function get(){       
                return $currentChildInformation = [
                'firstname' => $this-> firstname,
                'surname' => $this-> surname,
                'dob' => $this-> dob,
                'allergies' => $this-> allergies,
                'board' => $this-> board,
                'inscriptionDate' => $this-> inscriptionDate,
                'validated' => $this-> validated,
                'deleted' => $this-> deleted,
                ];
        }

        public function delete(){

        }
        public function update(){

        }

        public function validate(){

        }
        }
?>