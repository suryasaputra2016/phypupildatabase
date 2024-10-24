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
                } else {
                    echo "<h1>Welcome Back</h1>";
                    echo "<p>".$row["username"]."</p>";
                    echo "<p>".$row["password"]."</p>";
                }
            }
        }
    }
?>