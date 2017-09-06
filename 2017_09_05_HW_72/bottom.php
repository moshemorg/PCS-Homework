<?php

if(!empty($_SESSION["loggedIn"])) {
    $loggedIn = $_SESSION["loggedIn"];
} else {
    $loggedIn = "No Users Logged In";
}

?>

<footer>
    <br><br><br>
    <div class="text-center">
        <h5><?= $loggedIn ?></h5>
    </div>
</footer>
</body>
</html>