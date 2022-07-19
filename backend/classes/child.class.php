<?php
    class Child{
        public $table; // name of the table

        protected $childId;
        protected $childFirstname;
        protected $childSurname;
        protected $childDob;
        protected $childAllergies;
        protected $childBoard;
        protected $childInscriptionDate;
        protected $childValidated;
        protected $childDeleted;

        public function __construct($table, $childId, $childFirstname, $childSurname, 
        $childDob, $childAllergies, $childBoard, $childInscriptionDate, $childValidated, $childDeleted){
            $this->table = $table;
            $this->childId = $childId;
            $this->childFirstname = $childFirstname;
            $this->childSurname = $childSurname;
            $this->childDob = $childDob;
            $this->childAllergies = $childAllergies;
            $this->childBoard = $childBoard;
            $this->childInscriptionDate = $childInscriptionDate;
            $this->$childValidated = $childValidated;
            $this->childDeleted = $childDeleted;
        }
        public function get(){
            return $currentChildInformation = [
                
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
