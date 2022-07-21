<?php
    class DatabaseHandler {
        // URL
        const DBURL = 'localhost';
        // quelle bdd viser
        const DBNAME = 'php-vue-cantine';
        // username
        private $username = 'dev';
        // pw
        private $password = '123';

        // instance of pdo
        public $connection;

        // connects to db and returns the connection response.
        public function connectToDatabase() {
            // close any previous connections
            $this -> connection = null;
            try{
                // prepares the connection
                $this -> connection = new PDO("mysql:host=". DatabaseHandler::DBURL."; dbname=" . DatabaseHandler::DBNAME, $this -> username, $this -> password);
                // executes the connection
                $this -> connection -> exec("set names utf8");
                echo 'db connection successful';
            } catch (PDOException $exception) {
                echo 'db connection unsuccessful' . $exception -> getMessage();
            }
            return $this -> connection;
        }
    }
?>