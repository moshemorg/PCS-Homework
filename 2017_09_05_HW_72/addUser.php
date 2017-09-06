<?php

include 'db.php';

//$confirmation = "";

if(!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    try {
        $query = "INSERT INTO logins (username, password) VALUES (:username, :password)";

        $stmt = $db->prepare("INSERT INTO logins (username, password) VALUES (:username, :password)");
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':password', $hash);
        $stmt->execute();
        
        $logins = $stmt->fetch(); 
        
        //$confirmation = "User " . $username . " has been successfully added";

    } catch (PDOException $e){
        $error = "Something went wrong" . $e->getMessage();
    }

    //$confirmation = "User " . $username . " has been successfully added";

} 

//$_SESSION['confirmation'] = $confirmation; 

?>