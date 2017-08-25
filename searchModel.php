<?php 

    include 'Utilities/db.php';

    try {
        $query = "SELECT * FROM seforim LIMIT 20";
        $results = Db::getDb()->query($query);
        $seforim = $results->fetchAll();
        $results->closeCursor();       

    } catch (PDOException $e){
        $error = "Something went wrong" . $e->getMessage();
    }

?>