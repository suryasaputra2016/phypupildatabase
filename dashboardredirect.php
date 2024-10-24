<?php
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $username = $_POST["username"];

        header("Location: accountpage.php?username=".$username);
        exit();
    }
?>