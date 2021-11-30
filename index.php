<?php
  session_start();

  if (!empty($_SESSION)) {
    $href = 'logout.php';
    $sesion = 'Salir';
  } else {
    $href = 'login.php';
    $sesion = 'Iniciar';
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Oficios</title>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Oficios</h1>
      <h2>Encontrá un trabajo, o publica el tuyo!</h2>
      <a href="publicar.php" class="btn-get-started scrollto">Empieza!</a>
    </div>
  </section>
  <!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">Oficios</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul class="">
          <li><a class="nav-link scrollto" href="#about">Acerca de Nosotros</a></li>
          <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
          <li><a class="nav-link scrollto" href="#team">Equipo</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Precios</a></li>
          <li><a class="nav-link scrollto" href="buscar.php">Buscar</a></li>
          <li><a class="nav-link scrollto" href="<?= $href ?>"><?= $sesion ?></a></li>
        </ul> 

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Featured Section ======= -->
    <section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
        <div class="section-title">
          <h2>Destacados</h2>
        </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="swiper-slide">
                        <div class="carousel-item active">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1560427183-4efd29c38997?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80">
                                        <div class="card-body">
                                            <h4 class="card-title">Arnulfio Perez</h4>
                                            <p>⭐⭐⭐⭐⭐</p>
                                            <p class="card-text">Panadero</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1555963966-b7ae5404b6ed?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80">
                                        <div class="card-body">
                                            <h4 class="card-title">Eduardo Remezzano</h4>
                                            <p>⭐⭐⭐⭐⭐</p>
                                            <p class="card-text">Electricista</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1561297331-a9c00b9c2c44?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80">
                                        <div class="card-body">
                                            <h4 class="card-title">Mariana Metarral</h4>
                                            <p>⭐⭐⭐⭐⭐</p>
                                            <p class="card-text">Carpintera</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- End Featured Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Servicios</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><span>Obtenga mas visibilidad</span></h4>
              <p class="description"><a href="#pricing">Patrocine su empleo</a> para que lo vean las personas adecuadas.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #e9bf06;"></i></div>
              <h4 class="title"><span>Encuentre personas de calidad</span></h4>
              <p class="description">Mediante el uso de un sistema de calificaciones, puede saber que tan recomendable es un usuario.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><span>Califique sus habilidades</span></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="fade-down">
          <h2>Precios</h2>
          <p>A continuación puede elegir uno de nuestros 3 planes</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box" data-aos="zoom-in" data-aos-delay="200">
            <h3>Gratis</h3>
            <h4>$0<span>por mes</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Lorem ipsum dolor sit amet.</li>
              <li><i class="bx bx-check"></i> Lorem ipsum dolor sit.</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
              <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <a href="#" class="get-started-btn">Comienza</a>
          </div>

          <div class="col-lg-4 box featured" data-aos="zoom-in" data-aos-delay="100">
            <h3>Gold</h3>
            <h4>$199<span>por mes</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Comienza</a>
          </div>

          <div class="col-lg-4 box" data-aos="zoom-in" data-aos-delay="200">
            <h3>Bronze</h3>
            <h4>$49<span>por mes</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Comienza</a>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Testimonials Section ======= -->

    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonios</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quería controlar yo cómo captar a los clientes. Antes lo intentaba a través de un blog pero no era suficiente. Ahora tengo una estrategia para hacerlo a través de Oficios.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Ezequiel Puerta</h3>
                <h4>Panadero</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    La pagina misma me ayudo desde el primer paso de creación de mi perfil hasta ponerlo en marcha.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Elvira Castaño</h3>
                <h4>Electricista</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    No sabía cómo acercarme a las redes sociales, pero gracias a Oficios, ahora tengo claridad y herramientas prácticas para seguir exponiendo mi perfil.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Leonor Benavente</h3>
                <h4>Jardinera</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Oficios me permite exhibir mi experiencia y tabajos de manera ágil a aquellas empresas que pueden ser clientes y me permite ser encontrado por ellos.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Ibon Prieto</h3>
                <h4>Programador Full-Stack</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Aprender cómo funciona Oficios es muy sencillo, cómo hacer contactos, cómo hacer crecer mi red de contactos para generar demanda.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Marcel Taboada</h3>
                <h4>Gasista</h4>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> 


<!-- ======= About Section ======= -->
<section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Acerca de Nosotros</h2>
        </div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui quidem iure hic obcaecati suscipit, ut, neque alias possimus enim unde culpa eaque, est voluptatibus expedita saepe odit quos praesentium perferendis magnam animi. Corrupti cupiditate alias qui sed quasi a. Consequatur rerum perspiciatis laudantium ipsam optio a, ab totam. Aliquid maxime provident fugit placeat recusandae quos ratione neque libero perferendis ab. Eos, distinctio. Explicabo, dolore eius. Praesentium perferendis, fugit est omnis iure odit magni quas. Autem consequuntur sequi expedita excepturi tempora iure voluptate nostrum illo! Aperiam iusto libero ducimus fugit iste rerum eligendi, tenetur at, ad reiciendis facere mollitia modi magnam.
<!--
        <div class="row content">
          <div class="col-lg-12 ">
            <p>
              Somos un grupo que tiene como objetivo crear una página web para brindarles a personas autónomas la oportunidad de ofrecer sus servicios y/o buscar un trabajo particular.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> 1) Crea tu cuenta de manera gratuita.</li>
              <li><i class="ri-check-double-line"></i> 2) Crea tu publicación.</li>
              <li><i class="ri-check-double-line"></i> 3) Busca una publicación.</li>
            </ul>
          </div>
          <div class="col-lg-12 pt-4 pt-lg-0">
            <p>
              Creada a fines del 2021, nuestro objetivo es contar con un espacio simple y accesible.
            </p>
            <a href="#" class="btn-learn-more">Mas información</a>
          </div>
        </div>
-->
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Our Values Section ======= -->
    <section id="our-values" class="our-values">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card" style='background-image: url("assets/img/our-values-1.jpg");'>
              <div class="card-body">
                <h5 class="card-title"><a href="">Nuestra Misión</a></h5>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, consequuntur<!--Nuestra misión es organizar las publicaciones de las personas para que todos puedan acceder a ellas y aprovecharlas.--></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="card" style='background-image: url("assets/img/our-values-2.jpg");'>
              <div class="card-body">
                <h5 class="card-title"><a href="">Nuestro Plan</a></h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nobis ipsam porro dolor molestiae eius doloremque nam animi minus at<!--Actualmente contamos con un sistema simple de publicación y busqueda centrado en el País. Nuestro plan es extendernos a nivel mundial y a diversas plataformas.--></p>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("assets/img/our-values-3.jpg");'>
              <div class="card-body">
                <h5 class="card-title"><a href="">Nuestra Visión</a></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At eos sed incidunt, sint voluptatibus fuga quia rem quidem nobis? Quaerat.<!--Crear oportunidades económicas para cada miembro del mercado laboral gracias al desarrollo continuo del primer gráfico económico del mundo.--></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("assets/img/our-values-4.jpg");'>
              <div class="card-body">
                <h5 class="card-title"><a href="">Nuestros Valores</a></h5>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti esse voluptatum tempore aut nihil quos quis iste deserunt excepturi, mollitia repellat corrupti libero atque cum doloribus fuga, culpa accusantium fugit facilis magni voluptates ipsa. Quo dolor repellat enim dolorum sunt.<!--
                  <Priorizar a los miembros de nuestra comunidad.<br>
                  Integrar oficios en una red profesional.<br>
                  Asegurarnos que el contenido que las personas ven en Oficios sea auténtico.<br>
                  Estamos comprometidos a hacer de Oficios un sitio web seguro.<br>
                  Atención al cliente, innovación y facilidad de uso.<br>-->
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Our Values Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Equipo</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row d-flex justify-content-center">

          <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Didier Carrascal</h4>
                <span>Analista en Sistemas</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Enzo Molinari</h4>
                <span>Desarrollador web Full-Stack</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Gaspar Krbavcic</h4>
                <span>Desarrollador web Full-Stack</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Gino Long</h4>
                <span>Desarrollador web Full-Stack</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-5.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Mauro Fuentes</h4>
                <span>Desarrollador web Full-Stack</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->



    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Preguntas Frecuentes</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section>
    <!-- End Frequently Asked Questions Section -->

  </main>
  <!-- End #main -->

  <?php
  include 'incompleto\__footer.php';