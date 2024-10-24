<?php
    include "connection.php";

    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')";

        if($connection->query($query)) {
            header("Location: accountpage.php?username=".$username);
            exit();
        } else {
            echo "Failed: ".mysqli_error($connection);
        }
    }
?>