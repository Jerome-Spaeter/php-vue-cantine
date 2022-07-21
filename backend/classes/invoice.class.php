<?php
    class Invoice {
        // database location
        const DBTABLE = 'invoice';

        // pdo
        private $connect;

        // foreign keys
        public $childId;

        // invoice data
        public $amount;
        public $date;

        // Paid date
        private $paid ='';

        public function __construct($db){
            $this->connect = $db;
        }
        
        public function createInvoice(){
            $sqlQuery = "INSERT INTO
                        ". Invoice::DBTABLE ."
                    SET
                    fk_child_id = :childId,
                    invoice_amount = :amount, 
                    invoice_period = :period,
                    invoice_date = now()";

                $stmt = $this->connect->prepare($sqlQuery);
                $this->childId=htmlspecialchars(strip_tags($this->childId));
                $this->amount=htmlspecialchars(strip_tags($this->amount));

                // this month
                $period = date('m');

                $stmt->bindParam(":childId", $this->childId);
                $stmt->bindParam(":amount", $this->amount);
                $stmt->bindParam(":period", $period);
                
                if($stmt->execute()){
                    return true;
                }
                return false;
            }
    }
?>