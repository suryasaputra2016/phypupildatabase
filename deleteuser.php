<?php
    include "connection.php";

    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $username = $_POST["username"];

        $query = "DELETE FROM users WHERE username='$username'";

        if($connection->query($query)) {
            header("Location: signup.html");
            exit();
        } else {
            echo "Failed: ".mysqli_error($connection);
        }
    }
?>