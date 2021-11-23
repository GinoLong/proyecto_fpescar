<?php

    require 'alert.php';
    require_once 'class\DB.php';

    session_start();
    if (session_status() === PHP_SESSION_ACTIVE) {
        header('Location: publicar.php');
    };

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

        <h1 class="logo me-auto me-lg-0"><a href="index.php">PLACEHOLDER</a></h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
            <li><a class="nav-link scrollto" href="#about">Acerca de Nosotros</a></li>
            <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
            <li><a class="nav-link scrollto" href="#team">Equipo</a></li>
            <li><a class="nav-link scrollto" href="#pricing">Precios</a></li>
            <li><a class="nav-link scrollto" href="#contact">Buscar</a></li>
            <li><a class="nav-link scrollto" href="#contact">Publicar</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <?php

        if (isset($usuarioEncontrado) && $usuarioEncontrado === false) {
            echo getAlert('Atención', 'Usuario y/o contraseña incorrectos', 'danger');
        }

    ?>

    <main id="main">

        <section id="contact" class="contact">

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

            </section>

    </main>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

