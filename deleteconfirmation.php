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
                <h2>Deleting Account</h2>
              </div>
              <div class="card-body">
                <h3 class="card-text"><?= "Are you sure you want to delete account: ".$_POST["username"] ?></h3>
                <form action="./deleteuser.php" method="POST">
                  <input type="hidden" name="username" value=<?= $_POST["username"] ?>>
                  <br>
                  <div class="d-grid">
                    <button class="btn delete-button" type="submit">Delete</button>
                  </div>
                </form>

                <br>
                <form action="./dashboardredirect.php" method="POST">
                    <input type="hidden" name="username" value=<?= $_POST["username"] ?>>
                    <div class="d-grid">
                        <button class="btn delete-btn-primary">Cancel</button>
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