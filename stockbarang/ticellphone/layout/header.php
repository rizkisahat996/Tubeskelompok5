<?php session_start(); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>TI Phone Cell</title>
</head>

<body>

  <!-- Navbar Component -->
  <div class="container-fluid border sticky-top navbar-main mb-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand mx-3" href="webhp.html">
          <h3>TI Phone Cell</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-2">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Menu
              </a>
              <ul class="dropdown-menu my-2" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item px-2" href="#iphone">IPhone</a></li>
                <li><a class="dropdown-item px-2" href="#samsung">SAMSUNG</a></li>
                <li><a class="dropdown-item px-2" href="#xiaomi">Xiaomi</a></li>
                <li><a class="dropdown-item px-2" href="#oppo">OPPO</a></li>
              </ul>
            </li>




              <?php  if (!isset($_SESSION['username'])) : ?><a href="../akun/login-user.php"><button class="mx-2 my-2 btn btn-outline-success">Login</button></a><?php endif ?>
            </li>
            <li>
              <?php  if (!isset($_SESSION['username'])) : ?>
                <a href="../akun/signup-user.php">
                <button class="mx-2 my-2 btn btn-outline-primary">Register</button>
                </a>
                <?php endif ?>
            </li>

            <li class="nav-item">
            <?php  if (isset($_SESSION['username'])) : ?>
            <a class="nav-item" href="../akun/logout.php" data-toggle="modal" data-target="#logoutModal"><button class="btn btn-outline-primary">Logout</button></a>
            <?php endif ?>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </div>