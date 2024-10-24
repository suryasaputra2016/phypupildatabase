<?php
    include "connection.php";

    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $oldusername = $_POST["old-user-name"];

        $query = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')";

        $query = "UPDATE users SET username='$username', email='$email' WHERE username='$oldusername'";

        if($connection->query($query)) {
            header("Location: loginpage.php?username=".$username);
            exit();
        } else {
            echo "Failed: ".mysqli_error($connection);
        }
    }
?>