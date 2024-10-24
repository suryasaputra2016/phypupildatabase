<?php
    include "connection.php";

    if($_SERVER["REQUEST_METHOD"]=="GET") {
        $username = $_GET["username"];

        $query = "SELECT email FROM users WHERE username = '$username'";
        $result = $connection->query($query);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $email = $row['email'];
            }
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
</head>
<body id="body">
    <nav class="navbar navbar-expand-lg mb-5 text-bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PhyPupil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="nav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="./accountpage.php?username=<?=$username?>">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Setting</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./login.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container mb-5">
        <div class="row justify-content-center">
          <div class="col col-lg-6 col-md-8">
            <div class="card">
              <div class="card-header">
                <h2>Account Setting</h2>
              </div>
              <div class="card-body">
                <form action="./edituser.php" method="POST">
                  <div>
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" id="username" class="form-control" name="username" value=<?= $username?> required>
                  </div>
                  <br>
                  <div>
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" class="form-control" name="email" value=<?= $email?> required>
                  </div>
                  <input type="hidden" name="old-user-name" value="<?= $username?>">
                  <br>
                  <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Save Changes</button>
                  </div>
                </form>
                <br>
                <form action="./deleteconfirmation.php" method="POST">
                    <input type="hidden" name="username" value=<?= $username?>>
                    <div class="d-grid">
                      <button class="btn delete-button" type="submit">Delete Account</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer id="footer" class="text-center">
        <div class="my-3">
            <small>&copy; Surya Saputra</small>
        </div>
      </footer>
</body>
</html>