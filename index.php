<?php
require_once "helpers/helpers.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo name() ?></title>
  <meta name="description" content="<?= $data['page_description'] ?? ''; ?>">
  <meta name="keywords" content="<?= $data['page_keywords'] ?? ''; ?>">
  <meta name="robots" content="noindex, nofollow">

  <!-- Favicons -->
  <link rel="icon" href="<?= media(); ?>/img/favicon.png">
  <link rel="apple-touch-icon" href="<?= media(); ?>/img/apple-touch-icon.png">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>vendors/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>vendors/aos/aos.css">
  <link rel="stylesheet" href="<?= base_url(); ?>vendors/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>vendors/glightbox/css/glightbox.min.css">

  <!-- Main CSS -->
  <link rel="stylesheet" href="<?= media(); ?>/css/main.css">
  <link rel="stylesheet" href="<?= media(); ?>/css/redes.css">
</head>


<body class="index-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div
      class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- <img src="assets/img/logo2.png" alt=""> -->
        <!-- Nombre para DESKTOP (lg y xl) -->
        <h1 class="sitename d-none d-lg-block" style="font-size:16px; font-weight:bold ;">
          <?php echo name_D(); ?>
        </h1>
        <!-- Nombre para TABLETS (md) -->
        <h1 class="sitename d-none d-md-block d-lg-none" style="font-size:16px;">
          <?php echo name(); ?>
        </h1>
        <!-- Nombre para MÓVILES (xs y sm) -->
        <h1 class="sitename d-block d-md-none" style="font-size:16px;">
          <?php echo name(); ?>
        </h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Inicio</a></li>
          <li><a href="#about">Acerca de</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#customers">Clientes</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <a class="btn-getstarted" href="#contact">Contacto</a>
    </div>
  </header>

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <div class="hero-content">
              <h1>¡Te Ofrecemos!</h1>
              <p>Servicio de reparación y mantenimiento de contenedores, venta de contenedores , servicio de
                transportes.</p>
              <div class="hero-buttons">
                <a href="#services" class="btn btn-primary">Más Información</a>
              </div>
              <div class="hero-stats">
                <div class="hero-socials sleek-socials">
                  <a href="#" class="social-box"><i class="bi bi-linkedin"></i></a>
                  <a href="#" class="social-box"><i class="bi bi-twitter-x"></i></a>
                  <a href="#" class="social-box"><i class="bi bi-github"></i></a>
                  <a href="#" class="social-box"><i class="bi bi-discord"></i></a>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="hero-visual">
              <div class="hero-image">
                <img src="assets/img/misc/misc-16.jpg" alt="Digital Agency Hero" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hero-bg-elements">
        <div class="bg-shape shape-1"></div>
        <div class="bg-shape shape-2"></div>
        <div class="bg-particles"></div>
      </div>
    </section>
    <!-- /Hero Section -->


    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-5 align-items-center">

          <!-- Imagen -->
          <div class="col-lg-5 col-md-6 col-sm-12">
            <div class="h-100">
              <img src="assets/img/about/about.png" class="img-fluid w-100 h-100 custom-img-style" alt="about-image">
            </div>
          </div>

          <!-- Contenido -->
          <div class="col-lg-7 col-md-6 col-sm-12 bg-logo">
            <h1 class="mb-4 text-primary">SANLOMAR GROUP S.A.C.</h1>
            <p class="mb-4 text-justify">
              Somos una empresa operadora en Paita dedicada a ofrecer soluciones rápidas y
              confiables en logística, transporte y reparación de contenedores. Ayudamos a que cada operación avance sin
              interrupciones, con eficiencia y soporte especializado.
            </p>

            <!-- Tabs -->
            <div class="content" data-aos="fade-left" data-aos-delay="300">
              <div class="tabulation-2 mt-4">

                <!-- Encabezados de Tabs -->
                <ul class="nav nav-pills nav-fill d-md-flex d-block">
                  <li class="nav-item mb-md-0 mb-2">
                    <a class="nav-link active py-2" data-bs-toggle="tab" href="#mision">Misión Empresarial</a>
                  </li>
                  <li class="nav-item px-lg-2 mb-md-0 mb-2">
                    <a class="nav-link py-2" data-bs-toggle="tab" href="#vision">Visión Empresarial</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link py-2 mb-md-0 mb-2" data-bs-toggle="tab" href="#valores">Valores</a>
                  </li>
                </ul>

                <!-- Contenido de Tabs -->
                <div class="tab-content rounded mt-2">

                  <!-- Misión -->
                  <div class="tab-pane container p-0 active" id="mision">
                    <p class="text-justify">
                      Nuestra misión es satisfacer las necesidades de nuestros clientes y superar sus
                      expectativas, brindando servicios y productos de alta calidad con resultados
                      respaldados por nuestro capital humano.
                    </p>
                  </div>

                  <!-- Visión -->
                  <div class="tab-pane container p-0 fade" id="vision">
                    <p class="text-justify">
                      Nuestra visión es convertirnos en una marca reconocida a nivel nacional e
                      internacional como operador logístico y proveedor de soluciones para contenedores,
                      estableciendo nuevos estándares de excelencia y sostenibilidad en la industria.
                    </p>
                  </div>
                  <!-- Valores -->
                  <div class="tab-pane container p-0 fade" id="valores">
                    <div class="row text-justify valores-grid">
                      <div class="col-sm-4 mb-2">
                        <p><i class="bi bi-check-circle-fill text-primary me-2"></i> Profesionalismo.</p>
                      </div>

                      <div class="col-sm-4 mb-2">
                        <p><i class="bi bi-check-circle-fill text-primary me-2"></i> Eficiencia.</p>
                      </div>

                      <div class="col-sm-4 mb-2">
                        <p><i class="bi bi-check-circle-fill text-primary me-2"></i> Responsabilidad.</p>
                      </div>

                      <div class="col-sm-4 mb-0">
                        <p><i class="bi bi-check-circle-fill text-primary me-2"></i> Transparencia.</p>
                      </div>

                      <div class="col-sm-4 mb-0">
                        <p><i class="bi bi-check-circle-fill text-primary me-2"></i> Compromiso.</p>
                      </div>

                      <div class="col-sm-4 mb-0">
                        <p><i class="bi bi-check-circle-fill text-primary me-2"></i> Seguridad Operativa.</p>
                      </div>
                    </div>
                  </div>


                </div>
              </div>

              <a class="btn btn-primary rounded-pill py-2 px-3 mt-3" href="#">
                Más Información
              </a>

            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- /About Section -->


    <!-- Services Section -->
    <section id="services" class="services section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Servicios</h2>
        <p>Servicios de apoyo logístico y gestión de transporte adaptados a tus necesidades.</p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-tools"></i>
              </div>
              <h4><a href="service-details.html">Reparación de Contenedores</a></h4>
              <p>Servicio especializado en reparación estructural y corrección de daños en contenedores marítimos.</p>
              <div class="service-badge">Más Solicitado</div>
              <a href="service-details.html" class="service-link">
                <span class="btn btn-primary rounded-pill py-2 px-3 mt-3">Ver Más
                  <i class="bi bi-arrow-right"></i></span>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-wrench-adjustable"></i>
              </div>
              <h4><a href="service-details.html">Mantenimiento de Contenedores</a></h4>
              <p>Mantenimiento preventivo y correctivo para asegurar el buen estado y prolongar la vida útil de los
                contenedores.</p>
              <a href="service-details.html" class="service-link">
                <span class="btn btn-primary rounded-pill py-2 px-3 mt-3">Ver Más
                  <i class="bi bi-arrow-right"></i></span>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-box-seam"></i>
              </div>
              <h4><a href="service-details.html">Venta de Contenedores</a></h4>
              <p>Disponemos de nuevos contenedores y usados de diferentes tamaños según las necesidades del cliente.</p>
              <a href="service-details.html" class="service-link">
                <span class="btn btn-primary rounded-pill py-2 px-3 mt-3">Ver Más
                  <i class="bi bi-arrow-right"></i></span>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-truck"></i>
              </div>
              <h4><a href="service-details.html">Servicio de Transporte</a></h4>
              <p>Transporte seguro y eficiente de contenedores dentro y fuera del terminal portuario.</p>
              <a href="service-details.html" class="service-link">
                <span class="btn btn-primary rounded-pill py-2 px-3 mt-3">Ver Más
                  <i class="bi bi-arrow-right"></i></span>
              </a>
            </div>
          </div>

        </div>


        <div class="row mt-5">
          <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="services-cta">
              <h3>¿Necesitas Servicios Especializados en Contenedores?</h3>
              <p>Estamos listos para ayudarte con soluciones confiables, rápidas y certificadas.</p>
              <a href="#" class="btn btn-primary">Contáctanos Hoy</a>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- /Services Section -->


    <!-- customers Section
    <section id="customers" class="customers section">
      <div class="container section-title" data-aos="fade-up">
        <h2>customers</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="customers-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 4000
              },
              "slidesPerView": 1,
              "centeredSlides": true,
              "spaceBetween": 20,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 1.5,
                  "spaceBetween": 30
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 40
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="100">
                <div class="testimonial-header">
                  <div class="user-avatar">
                    <img src="assets/img/person/person-f-12.webp" alt="Profile Image">
                  </div>
                  <div class="user-info">
                    <h3>Jennifer Martinez</h3>
                    <span class="user-role">Product Designer</span>
                    <div class="rating">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <div class="testimonial-content">
                  <div class="quote-mark">
                    <i class="bi bi-quote"></i>
                  </div>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                    est laborum consectetur adipiscing elit.</p>
                </div>
                <div class="testimonial-footer">
                  <div class="company-badge">
                    <i class="bi bi-building"></i>
                    <span>TechCorp</span>
                  </div>
                  <div class="verified-badge">
                    <i class="bi bi-patch-check-fill"></i>
                    <span>Verified</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="200">
                <div class="testimonial-header">
                  <div class="user-avatar">
                    <img src="assets/img/person/person-m-11.webp" alt="Profile Image">
                  </div>
                  <div class="user-info">
                    <h3>Alexander Chen</h3>
                    <span class="user-role">Frontend Engineer</span>
                    <div class="rating">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <div class="testimonial-content">
                  <div class="quote-mark">
                    <i class="bi bi-quote"></i>
                  </div>
                  <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                </div>
                <div class="testimonial-footer">
                  <div class="company-badge">
                    <i class="bi bi-building"></i>
                    <span>InnovateLab</span>
                  </div>
                  <div class="verified-badge">
                    <i class="bi bi-patch-check-fill"></i>
                    <span>Verified</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="300">
                <div class="testimonial-header">
                  <div class="user-avatar">
                    <img src="assets/img/person/person-f-8.webp" alt="Profile Image">
                  </div>
                  <div class="user-info">
                    <h3>Rachel Taylor</h3>
                    <span class="user-role">Marketing Lead</span>
                    <div class="rating">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <div class="testimonial-content">
                  <div class="quote-mark">
                    <i class="bi bi-quote"></i>
                  </div>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur excepteur sint occaecat cupidatat non proident.</p>
                </div>
                <div class="testimonial-footer">
                  <div class="company-badge">
                    <i class="bi bi-building"></i>
                    <span>GrowthCo</span>
                  </div>
                  <div class="verified-badge">
                    <i class="bi bi-patch-check-fill"></i>
                    <span>Verified</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="100">
                <div class="testimonial-header">
                  <div class="user-avatar">
                    <img src="assets/img/person/person-m-14.webp" alt="Profile Image">
                  </div>
                  <div class="user-info">
                    <h3>Christopher Lee</h3>
                    <span class="user-role">VP Engineering</span>
                    <div class="rating">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <div class="testimonial-content">
                  <div class="quote-mark">
                    <i class="bi bi-quote"></i>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua enim ad minim veniam.</p>
                </div>
                <div class="testimonial-footer">
                  <div class="company-badge">
                    <i class="bi bi-building"></i>
                    <span>DevStream</span>
                  </div>
                  <div class="verified-badge">
                    <i class="bi bi-patch-check-fill"></i>
                    <span>Verified</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="200">
                <div class="testimonial-header">
                  <div class="user-avatar">
                    <img src="assets/img/person/person-f-5.webp" alt="Profile Image">
                  </div>
                  <div class="user-info">
                    <h3>Amanda Rodriguez</h3>
                    <span class="user-role">UX Researcher</span>
                    <div class="rating">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <div class="testimonial-content">
                  <div class="quote-mark">
                    <i class="bi bi-quote"></i>
                  </div>
                  <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure
                    dolor in reprehenderit in voluptate velit esse.</p>
                </div>
                <div class="testimonial-footer">
                  <div class="company-badge">
                    <i class="bi bi-building"></i>
                    <span>UserFirst</span>
                  </div>
                  <div class="verified-badge">
                    <i class="bi bi-patch-check-fill"></i>
                    <span>Verified</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section>
     /customers Section -->

 <!-- Contact Section 
    <section id="contact" class="contact section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center">
          <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
            <div class="contact-form-card">
              <div class="form-header">
                <div class="header-icon">
                  <i class="bi bi-chat-dots-fill"></i>
                </div>
                <h3>Let's Start a Conversation</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                  excepteur sint.</p>
              </div>

              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                  </div>
                  <div class="col-md-6 mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                  </div>
                </div>

                <div class="mb-3">
                  <input type="text" class="form-control" name="subject" placeholder="What's this about?" required="">
                </div>

                <div class="mb-4">
                  <textarea class="form-control" name="message" rows="4"
                    placeholder="Tell us more about your project..." required=""></textarea>
                </div>

                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <button type="submit" class="submit-btn">
                  <span>Send Message</span>
                  <i class="bi bi-send-fill"></i>
                </button>
              </form>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
            <div class="contact-info-area">
              <div class="info-header">
                <h3>Ready to Transform Your Ideas?</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium
                  totam rem aperiam eaque ipsa quae ab illo inventore.</p>
              </div>

              <div class="contact-methods">
                <div class="method-card" data-aos="zoom-in" data-aos-delay="250">
                  <div class="card-icon">
                    <i class="bi bi-envelope-at"></i>
                  </div>
                  <div class="card-content">
                    <h5>Email Us</h5>
                    <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                        data-cfemail="c6aea3aaaaa986b6b4a9a2b3a5b2a2a3aba9e8a5a9ab">[email&#160;protected]</a></p>
                    <span class="response-time">Response in 2-4 hours</span>
                  </div>
                </div>

                <div class="method-card" data-aos="zoom-in" data-aos-delay="300">
                  <div class="card-icon">
                    <i class="bi bi-telephone"></i>
                  </div>
                  <div class="card-content">
                    <h5>Call Us</h5>
                    <p>+1 (555) 987-6543</p>
                    <span class="response-time">Available 9AM - 6PM EST</span>
                  </div>
                </div>

                <div class="method-card" data-aos="zoom-in" data-aos-delay="350">
                  <div class="card-icon">
                    <i class="bi bi-geo-alt"></i>
                  </div>
                  <div class="card-content">
                    <h5>Visit Our Office</h5>
                    <p>4821 Broadway Street, New York, NY 10013</p>
                    <span class="response-time">Open Monday - Friday</span>
                  </div>
                </div>
              </div>

              <div class="additional-info" data-aos="fade-up" data-aos-delay="400">
                <div class="info-stats">
                  <div class="stat-item">
                    <div class="stat-number">24h</div>
                    <div class="stat-label">Average Response</div>
                  </div>
                  <div class="stat-item">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Client Satisfaction</div>
                  </div>
                  <div class="stat-item">
                    <div class="stat-number">150+</div>
                    <div class="stat-label">Projects Delivered</div>
                  </div>
                </div>

                <div class="social-connect">
                  <h6>Connect With Us</h6>
                  <div class="social-links">
                    <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-github"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-discord"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 /Contact Section -->

  </main>
<!-- /footer Section
  <footer id="footer" class="footer position-relative dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Clarity</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                  data-cfemail="761f18101936130e171b061a135815191b">[email&#160;protected]</a></span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href="#">Molestiae accusamus iure</a></li>
            <li><a href="#">Excepturi dignissimos</a></li>
            <li><a href="#">Suscipit distinctio</a></li>
            <li><a href="#">Dilecta</a></li>
            <li><a href="#">Sit quas consectetur</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href="#">Ipsam</a></li>
            <li><a href="#">Laudantium dolorum</a></li>
            <li><a href="#">Dinera</a></li>
            <li><a href="#">Trodelas</a></li>
            <li><a href="#">Flexo</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Clarity</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>
/footer Section -->

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>vendors/php-email-form/validate.js"></script>
  <script src="<?= base_url(); ?>vendors/aos/aos.js"></script>
  <script src="<?= base_url(); ?>vendors/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url(); ?>vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="<?= base_url(); ?>vendors/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url(); ?>vendors/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url(); ?>vendors/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
    integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
    data-cf-beacon='{"version":"2024.11.0","token":"68c5ca450bae485a842ff76066d69420","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
    crossorigin="anonymous"></script>
</body>

</html>