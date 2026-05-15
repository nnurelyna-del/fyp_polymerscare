<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Sistem PolyMersCare</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- External CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">

  <a class="navbar-brand" href="#">
    POLYMERSCARE
  </a>

  <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

    <ul class="navbar-nav align-items-center">

      <li class="nav-item">
        <a class="nav-link" href="#">PBK</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>

      <li class="nav-item ms-3">
        <a class="btn btn-login-nav" href="#">
          Login
        </a>
      </li>

    </ul>

  </div>

</nav>

<!-- MAIN SECTION -->
<section class="main-section container-fluid">

  <div class="row align-items-center w-100">

    <!-- LEFT SIDE -->
    <div class="col-lg-6 left-content">

      <h1>
        Sistem Pengurusan <br>
        Kebajikan Digital
      </h1>

      <p>
        Platform pengurusan Hal Ehwal Pelajar dalam bantuan kebajikan secara
        sistematik, cepat dan efisien.
      </p>

      <img src="https://bootstrapmade.com/demo/templates/Arsha/assets/img/hero-img.png"
           class="illustration mt-4">

    </div>

    <!-- RIGHT SIDE LOGIN -->
    <div class="col-lg-6 d-flex justify-content-center">

      <div class="login-card">

        <h2>Login</h2>

        <?php

          if(isset($_POST['login'])){

            $username = $_POST['username'];
            $password = $_POST['password'];

            if($username == "admin" && $password == "1234"){

              echo "<div class='alert alert-success'>
                      Login succesful !
                    </div>";

            } else {

              echo "<div class='alert alert-danger'>
                      Wrong password or username!
                    </div>";

            }

          }

        ?>

        <form method="POST">

          <div class="mb-3">

            <label class="form-label">
              Username
            </label>

            <input type="text"
                   name="username"
                   class="form-control"
                   placeholder="Enter username"
                   required>

          </div>

          <div class="mb-3">

            <label class="form-label">
              Password
            </label>

            <input type="password"
                   name="password"
                   class="form-control"
                   placeholder="Enter password"
                   required>

          </div>

          <div class="d-flex justify-content-between mb-4">

            <div>
              <input type="checkbox">
              Remember Me
            </div>

            <a href="#" class="forgot">
              Forgot Password?
            </a>

          </div>

          <button type="submit"
                  name="login"
                  class="btn-submit">

            LOGIN

          </button>

        </form>

      </div>

    </div>

  </div>

</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>