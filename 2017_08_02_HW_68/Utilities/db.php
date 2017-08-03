<?php

class Database {

    private $db;

    public function __construct ($cs = "mysql:host=localhost;dbname=test", 
                                    $user = "username", 
                                    $password = "password", 
                                    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]) {
        Try {            
            $this->db = new PDO("mysql:host=localhost;dbname=test", "username", "password", $options);
        } catch (PDOException $e){
            $error = "Something went wrong" . $e->getMessage();
        }

    }

    public function getdb() {
        return $this->db;
    }

}

?>