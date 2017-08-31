<?php

class Database {

    private $db;
    private static $instance;

    private function __construct() {
        $cs = "mysql:host=localhost;dbname=test"; 
        $user = "username"; 
        $password = "password"; 
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

        Try {            
            $this->db = new PDO("mysql:host=localhost;dbname=test", "username", "password", $options);
        } catch (PDOException $e){
            $error = "Something went wrong" . $e->getMessage();
        }
    }

    private function __clone() {}

    public static function getDb() {
        if(empty(Database::$instance)) {
            Database::$instance = new Database();
        }
        return Database::$instance;
    }


    public function getdbOld() {
        return $this->db;
    }

}

?>