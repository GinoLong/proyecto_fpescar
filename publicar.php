<?php
session_start();

require_once "class\DB.php";

if (empty($_SESSION)) {
    header('Location: login.php');
}

$link = Database::getConnection();
if (!$link) {
    echo 'No se pudo conectar';
    die;
}

$query = "INSERT INTO "
?>

<!DOCTYPE html>
<html lang="en">

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
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php#about">Acerca de Nosotros</a></li>
                    <li><a class="nav-link scrollto" href="index.php#services">Servicios</a></li>
                    <li><a class="nav-link scrollto" href="index.php#team">Equipo</a></li>
                    <li><a class="nav-link scrollto" href="index.php#pricing">Precios</a></li>
                    <li><a class="nav-link scrollto" href="buscar.php">Buscar</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <!-- End Header -->

    <main id="main">
        <section id="publish" class="publish">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Publique</h2>
                    <p>su trabajo</p>
                </div>

                <form action="forms/publish.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                    <div class="row">

                        <!-- Titulo -->
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Título" data-rule="minlen:3" data-msg="Ingrese por lo menos 3 carácteres">
                            <div class="validate"></div>
                        </div>

                        <!-- Ubicacion -->
                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                            <input type="text" name="ubicacion" class="form-control" id="ubicacion" placeholder="Ubicación" data-rule="minlen:3" data-msg="Ingrese por lo menos 3 carácteres">
                            <div class="validate"></div>
                        </div>

                        <!-- Metodos de Pago -->
                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>

                        <!-- Categoria -->
                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <select name="categoria" id="categoria" class="form-control">
                                <option value=""></option>
                                <option value="Electricista">Electricista</option>
                                <option value="Carpintero">Carpintero</option>
                            </select>
                            <!-- <input type="text" name="categoria" class="form-control" id="categoria" placeholder="categoria" data-rule="minlen:4" data-msg="Please enter at least 4 chars"> -->
                            <div class="validate"></div>
                        </div>


                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>


                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                            <div class="validate"></div>
                        </div>
                    </div>

                    <!-- Descripción -->
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Descripción"></textarea>
                        <div class="validate"></div>
                    </div>

                    <!-- <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
                </div> -->
                    <div class="text-center"><button type="submit">Publicar</button></div>
                </form>

            </div>
        </section><!-- End Book A Table Section -->

    </main>

    <?php
    include 'incompleto\__footer.php';