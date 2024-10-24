<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
                <a class="nav-link" href="./index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./signup.html">Signup</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container mb-5">
        <div class="row justify-content-center">
          <div class="col col-lg-6 col-md-8">
            <?php
              if($_GET["loginfailed"]) {
                if($_GET["loginfailed"]=="emailnotfound") {
                  $failure = "Email hasn't been registered.";
                } else {
                  $failure = "Password doesn't match.";
                }
                
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Failed login atempt: '.$failure.'
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
              }
            ?>
            <div class="card">
              <div class="card-header">
                <h2>Login</h2>
              </div>
              <div class="card-body">
                <form action="./loginprocess.php" method="POST">
                  <div>
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" class="form-control" name="email" required>
                  </div>
                  <br>
                  <div>
                    <label for="username" class="form-label">Password:</label>
                    <input type="password" id="username" class="form-control" name="password" required>
                  </div>
                  <p>
                    <a href="#">Forgot password?</a>
                  </p>
                  <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Log in</button>
                  </div>
                </form>
              </div>
              <div class="card-footer">
                <p>New to PhyPupil? <a href="./signup.html">Join us</a></p>
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