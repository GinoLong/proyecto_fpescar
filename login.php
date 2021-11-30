<?php

    require 'alert.php';
    require_once 'class\DB.php';
    
    session_start();

    if (!empty($_SESSION)) {
        header('Location: publicar.php');
    }

    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        
        $link = Database::getConnection();
        
        if (!$link) {
            echo 'asd';
        die;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $username = $_POST['username'];

            $query = "SELECT
                    usuario,
                    contrasena
                FROM 
                    usuarios 
                WHERE usuario = :username";

            $statement = $link->prepare($query);

            $statement->bindParam(':username', $username, PDO::PARAM_STR);

            $statement->execute();
        
            if ($statement->rowCount() === 1) {
                $arrayUsuario = $statement->fetch(PDO::FETCH_ASSOC);
                $contrasena = $arrayUsuario['contrasena'];
            
                if ($_POST['password'] === $contrasena) {
                    $_SESSION['usuario'] = $arrayUsuario['usuario'];
                    header('Location: publicar.php');
                    die;
                } else {
                    $usuarioEncontrado = false;
                }
            } else {
                $usuarioEncontrado = false;
            }    
        }
    }

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Proyecto Final</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Valera - v4.6.0
    * Template URL: https://bootstrapmade.com/valera-free-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center ">
        <div class="container-fluid d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="index.php">OFICIOS</a></h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
            <li><a class="nav-link scrollto" href="#about">Acerca de Nosotros</a></li>
            <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
            <li><a class="nav-link scrollto" href="#team">Equipo</a></li>
            <li><a class="nav-link scrollto" href="#pricing">Precios</a></li>
            <li><a class="nav-link scrollto" href="buscar.php">Buscar</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <main id="main">

    
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Iniciar Sesión</h5>
            <form action="login.php" method="post">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="username" name="username" placeholder="name@example.com">
                <label for="floatingInput">E-mail</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Recordar contraseña
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Ingresar</button>
              </div>
              <hr class="my-4">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


        <!-- <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Login</h2>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <form action="login.php" method="post" class="php-login-form">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="username" class="form-control" placeholder="Nombre" required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit">Log In!</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

            </section> -->

    </main>

    <?php
    include 'incompleto\__footer.php';

