<?php
    session_start();
    require_once 'class\DB.php';
    include_once 'funciones.php';

    $dir = 'assets\\img\\trabajos\\';
    $trabajosFotos = scandir($dir);
    array_splice($trabajosFotos, 0, 1);
    array_splice($trabajosFotos, 0, 1);
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

        <h1 class="logo me-auto me-lg-0"><a href="index.php">OFICIOS</a></h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
            <li><a class="nav-link scrollto" href="index.php#about">Acerca de Nosotros</a></li>
            <li><a class="nav-link scrollto" href="index.php#services">Servicios</a></li>
            <li><a class="nav-link scrollto" href="index.php#team">Equipo</a></li>
            <li><a class="nav-link scrollto" href="index.php#pricing">Precios</a></li>
            <li><a class="nav-link scrollto" href="#">Buscar</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <main id="main">
        <?php
            $statement = Database::getStatement('SELECT nombre, descripcion FROM cat_trabajo ORDER BY nombre ASC');
            $statement->execute();

            // $count = 1;

            // while ($statement->fetch(PDO::FETCH_ASSOC)) {
            //     echo $count;
            //     $count++;
            // }
        ?>

        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    
                        <?php
                            $trabajos = $statement->fetchAll(PDO::FETCH_ASSOC);

                            $count = 0;

                            foreach ($trabajos as $trabajo) {
                                getCard($trabajo['nombre'], $trabajo['descripcion'], $dir.$trabajosFotos[$count]);
                                $count++;
                            }


                            // echo '<pre>';
                            // print_r($trabajo);
                            // echo '</pre>';
                            
                        ?>
                                
                </div>
            </div>
        </section>


    </main>

    <?php
    include 'incompleto\__footer.php';

