<?php 
        include 'Utilities/db.php';
        $myDatabase = New Database();

        try {
            $squery = "SELECT * FROM seforim LIMIT 20";
            $results = $myDatabase->getdb()->query($squery);
            $seforim = $results->fetchAll();
            $results->closeCursor();       

        } catch (PDOException $e){
            $error = "Something went wrong" . $e->getMessage();
        }
?>