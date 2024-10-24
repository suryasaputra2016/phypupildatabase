<?php
    include "connection.php";

    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $query = $_POST["query"];

        $query = "INSERT INTO inquiries(fullname, email, subject, body) VALUES ('$fullname', '$email', '$subject', '$query')";

        if($connection->query($query)) {
            header("Location: contact.php?inquiry=sent");
            exit();
        } else {
            echo "Failed: ".mysqli_error($connection);
        }
    }
?>