<?php

if(!empty($_COOKIE["LastVisited"])) {
    $lastVisit = "<h2>Welcome Back!</h2><br><h3>You last Visited on " . $_COOKIE["LastVisited"] . "</h3>";
} else {
    $lastVisit = "<h2>Welcome!</h2><br><h3>We love our 1st time users!</h3>";
}

setCookie("LastVisited", date('l, F j, Y \a\t g:i a'), time() + 60*60*90);




?>