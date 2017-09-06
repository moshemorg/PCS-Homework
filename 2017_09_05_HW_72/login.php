<?php

include 'db.php';

if(!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $query = "SELECT password FROM logins WHERE username = :username";

        $stmt = $db->prepare("SELECT password FROM logins WHERE username = :username");
        $stmt->bindValue(':username', $username);
        $stmt->execute();
        $hash = $stmt->fetchColumn(); 
        
    } catch (PDOException $e){
        $error = "Something went wrong" . $e->getMessage();
    }

    if(!password_verify($password, $hash)) {
?>
        <div class="text-center">
            <h2>Incorrect Login Info</h2>
            <h3><a href="index.php?action=loginView">Try Again</a></h3>
        </div>

<?php } else { ?>

        <div class="text-center">
            <h2>Welcome <?= $username ?></h2>
            <h2>You are now logged in</h2>
        </div>

<?php
        if(!empty($_SESSION["loggedIn"])) {
            $loggedIn = $_SESSION["loggedIn"] . ", " . $username;
        } else {
            $loggedIn = "Users Logged In: " . $username;
        }        
        $_SESSION["loggedIn"] = $loggedIn;
    }

} else {
    header("Location: index.php?action=loginView");
}

?>