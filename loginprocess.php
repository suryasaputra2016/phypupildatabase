<?php
    include "connection.php";

    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "SELECT username, password FROM users WHERE email = '$email'";
        $result = $connection->query($query);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($row["password"] !== $password) {
                    echo "<p>Password not matched</p>";
                    header("Location: login.php?loginfailed=passwordnotmatch");
                    exit();
                } else {
                    header("Location: accountpage.php?username=".$row["username"]);
                    exit();
                }
            }
        } else {
            echo "<p>Password not matched</p>";
                    header("Location: login.php?loginfailed=emailnotfound");
                    exit();
        }
    }
?>