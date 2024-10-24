<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <script src="assets/js/contact.js" defer></script>
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
                  <a class="nav-link active" aria-current="page" href="#">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./signup.html">Signup</a>
                  </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
            <?php
              if($_GET["inquiry"]) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    your inquiry has been sent successfully
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
              }
            ?>
        <div class="row">
            <div class="col col-lg-6 col-md-3"></div>
            <div class="col col-lg-6 col-md-9 col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Our Contact</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text">PhyPupil is a physics tutoring and learning service. We aim to teach physics to everyone who are curious and interested in learning about the universe.</p>
                        <hr>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col col-1">
                                        <span class="material-symbols-outlined">location_on</span>
                                    </div>
                                    <div class="col col-11">
                                        <p>Business District Blok A1 No. 1 Jl. Utara Selatan, Pondok Panjang Tangan, Kota Selatan Provinsi 15418</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col col-1">
                                        <span class="material-symbols-outlined">call</span>
                                    </div>
                                    <div class="col col-11">
                                        <a href="#">(021)-123456</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col col-1">
                                        <span class="material-symbols-outlined">mail</span>
                                    </div>
                                    <div class="col col-11">
                                        <a href="mailto:admin@phypupil.com">admin@phypupil.com</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-grid">
                                    <button class="btn btn-primary" id="show-contact-form-button">Get in touch</button></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      </div>

    <div class="row bg-body-tertiary my-5">
        <br>
        <br>
        <br>
    </div>

      <div class="container mb-5">
        <div class="row">
            <div class="col col-lg-6 col-md-9 col-12">
                <div class="card">
                    <div class="card-header"><h2>Send us Your Business Inquiry</h2></div>
                    <div class="card-body">
                        <form action="./addinquiry.php" method="POST">
                            <div>
                                <label for="fullname" class="form-label">Full name:</label>
                                <input 
                                    type="text" 
                                    id="fullname" 
                                    placeholder="e.g. John Smith" 
                                    required 
                                    class="form-control"
                                    name="fullname">
                            </div>
                            <br>
                            <div>
                                <label for="email" class="form-label">Email:</label>
                                <input 
                                    type="text" 
                                    id="email" 
                                    placeholder="youremail@domain.org"
                                    required 
                                    class="form-control"
                                    name="email">
                            </div>
                            <br>
                            <div>
                                <label for="subject" class="form-label">Subject:</label>
                                <input 
                                    type="text" 
                                    id="subject"
                                    placeholder="Topic" 
                                    required 
                                    class="form-control"
                                    name="subject">
                            </div>
                            <br>
                            <div>
                                <label for="query" class="form-label">Inquiry:</label>
                                <textarea 
                                    name="query" 
                                    id="query" 
                                    placeholder="How can we help?" 
                                    required 
                                    class="form-control"
                                    name="query"
                                ></textarea>
                            </div>
                            <br>
                            <div class="d-grid">
                                <button class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col col-lg-6 col-md-3"></div>
        </div>
      </div>

      <footer id="footer" class="text-center">
        <div class="my-3">
            <small>&copy; Surya Saputra</small>
        </div>
      </footer>
</body>
</html>