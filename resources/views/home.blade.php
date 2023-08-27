<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Seminar Nasional</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset("templates") }}/assets/img/favicon.png" rel="icon">
  <link href="{{ asset("templates") }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("templates") }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset("templates") }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset("templates") }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset("templates") }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset("templates") }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ asset("templates") }}/assets/css/style.css" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an text logo -->
        <h1><a href="#">Seminar & Workshop</a></h1>
        {{-- <a href="index.html"><img src="{{ asset("templates") }}/assets/img/logo.png" alt="" class="img-fluid"></a> --}}
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Keynote</a></li>
          <li><a class="nav-link scrollto" href="#why-us">Kelas</a></li>
          <li><a class="nav-link scrollto" href="#team">Daftar</a></li>
          <li><a class="nav-link scrollto" href="#sponsor">Sponsor</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container" data-aos="fade-up">

      <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{ asset("templates") }}/assets/img/hero-img.svg" alt="" class="img-fluid">
      </div>

      <div class="hero-info" data-aos="zoom-in" data-aos-delay="100">
        <h2>Seminar & Workshop Nasional Data Science 2023</h2>
        <h5 class="text-white">Diselenggarakan oleh Himpunan Mahasiswa Program Studi Informatika dan S2 Informatika Universitas Ahmad Dahlan, Yogyakarta, Indonesia</h5>
        <div>
          <a href="#team" class="btn-services scrollto">Daftar Sekarang</a>
        </div>
      </div>

    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Tentang Kami</h3>
        </header>

        <div class="row about-extra p-1">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="{{ asset("templates") }}/assets/img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0" data-aos="fade-left">
            <h4>Latar Belakang</h4>
            <p>
              Dalam era digital, data menjadi aset berharga yang mengubah bisnis, penelitian, dan pengambilan keputusan. Ilmu Data memainkan peran kunci dengan mengumpulkan, menyimpan, dan menganalisis data dalam skala besar, membuka peluang inovasi dan wawasan baru. Seminar Nasional Data Science menjadi platform penting bagi akademisi, peneliti, praktisi, dan pengambil keputusan untuk bertukar pengetahuan. Seminar membahas tren terkini dalam analisis data, penerapan di berbagai sektor, serta tantangan etika dan privasi. Harapannya, seminar ini memberikan pemahaman mendalam tentang bagaimana Data Science membentuk perubahan dalam industri dan ilmu pengetahuan, sambil mendorong kolaborasi lintas disiplin dalam mengoptimalkan potensi data modern.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg">
      <div class="container" data-aso="zoom-in">

        <header class="section-header">
          <h3>Keynote Speakers</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item" align="center">
                    <img src="{{ asset("templates") }}/assets/img/nadiem.png" class="testimonial-img p-2 m-2" alt="">
                    <h3>Nadiem Anwar Makarim, B.A., M.B.A.</h3>
                    <h4>Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi</h4>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item" align="center">
                    <img src="{{ asset("templates") }}/assets/img/mahfud-md.jpeg" class="testimonial-img p-2 m-2" alt="">
                    <h3>Prof. Dr. Mohammad Mahfud MD., S.H., S.U., M.I.P.</h3>
                    <h4>Menteri Koordinator Bidang Politik, Hukum, dan Keamanan Republik Indonesia</h4>
                   
                  </div>
                </div><!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    

    <!-- ======= Why Us Section ======= -->
    <section id="why-us">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>Kelas Workshop</h3>
          <p>Kelas yang dibuka pada Seminar dan Workshop Science 2023 ini.</p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="100">
              <i class="fas fa-solid fa-chart-line icon-classes"></i>
              <div class="card-body">
                <h5 class="card-title">Data Analysis</h5>
                <p class="card-text">Data analysis (analisis data) adalah proses pengumpulan, pembersihan, transformasi, dan penafsiran data untuk mendapatkan pemahaman yang lebih baik tentang pola, tren, dan informasi yang terkandung dalam data tersebut.</p>
                <a href="#team" class="readmore">Daftar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
              <i class="fas fa-solid fa-brain icon-classes"></i>
              <div class="card-body">
                <h5 class="card-title">Machine Learning</h5>
                <p class="card-text">Machine Learning (Pembelajaran Mesin) adalah cabang dari kecerdasan buatan (Artificial Intelligence) yang berfokus pada pengembangan algoritma dan model statistik yang memungkinkan komputer untuk belajar dari data dan pengalaman.</p>
                <a href="#team" class="readmore">Daftar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="300">
              <i class="fas fa-solid fa-database icon-classes"></i>
              <div class="card-body">
                <h5 class="card-title">Big Data</h5>
                <p class="card-text">Big Data (Data Besar) merujuk pada volume, kecepatan, dan keragaman data yang sangat besar dan kompleks yang tidak dapat dengan mudah diolah menggunakan metode tradisional pemrosesan data. Data ini memiliki ukuran yang sangat besar.</p>
                <a href="#team" class="readmore">Daftar</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Team Section ======= -->
    {{-- <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3>Daftar</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group col-lg-6 mt-3 mt-lg-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                        </div>
                        <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Terima kasih atas partisipasinya!</div>
                        </div>
                        <div class="text-center"><button class="btn btn-primary p-4 rounded" type="submit" title="Send Message">Send Message</button></div>
                    </form>
                </div>
            </div>

        </div>

      </div>
    </section> --}}
    <!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <section id="sponsor" class="section-bg">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3>Sponsor</h3>
          <p>Kami sangat berterima kasih kepada para sponsor yang telah berperan penting dalam kesuksesan acara ini. Berikut ini adalah daftar para sponsor yang telah memberikan dukungan mereka yang luar biasa.</p>
        </div>

        <div class="row g-0 clients-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ asset("templates") }}/assets/img/clients/sponsor.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ asset("templates") }}/assets/img/clients/sponsor.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ asset("templates") }}/assets/img/clients/sponsor.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ asset("templates") }}/assets/img/clients/sponsor.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ asset("templates") }}/assets/img/clients/sponsor.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ asset("templates") }}/assets/img/clients/sponsor.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ asset("templates") }}/assets/img/clients/sponsor.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ asset("templates") }}/assets/img/clients/sponsor.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Clients Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h3>Daftar</h3>
        </div>

        <div class="row">

          <div class="col-lg-10">
            <div class="row">
              <div class="col-md-5 info">
                <i class="bi bi-geo-alt"></i>
                <p>Universitas Ahmad Dahlan</p>
              </div>
              <div class="col-md-4 info">
                <i class="bi bi-envelope"></i>
                <p>furizal.dev@gmail.com</p>
              </div>
              <div class="col-md-3 info">
                <i class="bi bi-phone"></i>
                <p>+62 823 8609 2684</p>
              </div>
            </div>

            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group col-lg-6 mt-3 mt-lg-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Seminar & Workshop</h3>
            <p>Diselenggarakan oleh Himpunan Mahasiswa Program Studi Informatika dan S2 Informatika Universitas Ahmad Dahlan, Yogyakarta, Indonesia.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.5891799531287!2d110.38054627473879!3d-7.833229577815928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5701a2ae1c23%3A0x173dbeeddc56d9e!2sUniversitas%20Ahmad%20Dahlan%20-%20Kampus%204!5e0!3m2!1sid!2sid!4v1686371076926!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 200px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Link Lain</h4>
            <ul>
                <li><a href="#hero">Home</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#testimonials">Keynote</a></li>
                <li><a href="#why-us">Kelas</a></li>
                <li><a href="#team">Daftar</a></li>
                <li><a href="#sponsor">Sponsor</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Hubungi Kami</h4>
            <p>
              Jl. Ringroad Selatan, Kragilan, Tamanan, Kec. Banguntapan <br>
              Kabupaten Bantul, Daerah Istimewa Yogyakarta 55191<br>
              Indonesia <br>
              <strong>Phone:</strong> +62 823 8609 2684<br>
              <strong>Email:</strong> furizal.dev@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright Himpunan Mahasiswa Informatika & S2 Informatika Universitas Ahmad Dahlan, Yogyakarta
      </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset("templates") }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset("templates") }}/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset("templates") }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset("templates") }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset("templates") }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset("templates") }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset("templates") }}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("templates") }}/assets/js/main.js"></script>

</body>

</html>