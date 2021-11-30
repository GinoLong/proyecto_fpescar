<?php

    require 'alert.php';
    require_once 'class\DB.php';

    // print_r($_POST);
    
    // session_start();

    // if (!empty($_SESSION)) {
    //     header('Location: publicar.php');
    // }

    if (!empty($_POST['apellido'])) {
        
        $link = Database::getConnection();
        
        if (!$link) {
            echo 'Error';
        die;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $usuario = $_POST['nombre'];

            $query = "SELECT usuario FROM usuarios WHERE usuario = :usuario";

            $statement = $link->prepare($query);

            $statement->bindParam(':usuario', $usuario, PDO::PARAM_STR);

            $statement->execute();

            if ($statement->rowCount() === 0) {

                $usuario = $_POST['usuario'];
                $contrasena =$_POST['contrasena'];
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $email = $_POST['email'];

                $queryInsert = "
                    INSERT INTO 
                        usuarios (id_usuario, usuario, contrasena, nombre, apellido, mail)
                    VALUES 
                        (DEFAULT, ':usuario', ':contrasena', ':nombre', ':apellido', ':email')";
                
            } else {
                
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

    <main>
        <section class="vh-100">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                        <h2 class="text-uppercase text-center mb-5">Crear cuenta</h2>

                        <form action="crearCuenta.php" method="post">

                            <div class="form-floating mb-3">
                                <input type="text" id="usuario" name="usuario" placeholder="usuario" class="form-control" />
                                <label class="form-label" for="usuario">Usuario</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="form-control" />
                                <label class="form-label" for="nombre">Nombre</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" id="apellido" name="apellido" placeholder="Apellido" class="form-control" />
                                <label class="form-label" for="apellido">Apellido</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" class="form-control" />
                                <label class="form-label" for="contrasena">Contraseña</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" id="contrasenaRepeticion" name="contrasenaRepeticion" placeholder="Repita su contraseña" class="form-control" />
                                <label class="form-label" for="contrasenaRepeticion">Repita su contraseña</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" id="email" name="email" placeholder="E-Mail" class="form-control" />
                                <label class="form-label" for="form3Example3cg">E-mail</label>
                            </div>


                            <div class="form-check d-flex justify-content-center mb-5">
                                <input
                                    class="form-check-input me-2"
                                    type="checkbox"
                                    value=""
                                    id="form2Example3cg"
                                />
                                <label class="form-check-label" for="form2Example3g">
                                    Acepto los <a href="#!" class="text-body"><u>términos y condiciones</u></a>
                                </label>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Registrar</button>
                            </div>

                            <p class="text-center text-muted mt-5 mb-0">¿Ya tiene una cuenta? <a href="login.php" class="fw-bold text-body"><u>Inicie sesión</u></a></p>

                        </form>

                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
    </main>

    <?php
    include 'incompleto\__footer.php';