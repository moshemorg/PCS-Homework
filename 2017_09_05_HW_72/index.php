<?php

require 'autoloader.php';
require 'httpsonly.php';
session_start();

$action = "addUserView";
If(!empty($_GET["action"])) {
    $action = $_GET["action"];
}

include 'top.php';

switch($action) {
    case "addUserView":
        include "addUserView.php";
        break;
    case "addUser":
        include "addUser.php";
        header("Location: index.php?action=addUserView");
        break;
    case "loginView":
        include "loginView.php";
        break;
    case "login":
        include "login.php";
        break;
    case "logout":
        include "logout.php";
        break;
    default:
?>
    <div class="text-center">
        <h2>Dont know how to <?= $action ?></h2>
    </div>
<?php
    break;
}

include 'bottom.php';

?>