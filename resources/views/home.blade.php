<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  @php
    $deskripsi = "Seminar Nasional Data Science dan Business Plan Competition 2023";
  @endphp
  <title>{{ $deskripsi }}</title>
  <meta name="description" content="<?= $deskripsi; ?>">
  <link rel="image_src" href="{{ asset("templates") }}/assets/img/logo/semnasdata_logo.png">
  <meta name="description" content="<?= $deskripsi; ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <link rel="canonical" href="{{ url("") }}" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Seminar Nasional" />
  <meta property="og:description" content="<?= $deskripsi; ?>" />
  <meta property="og:url" content="{{ url("") }}" />
  <meta property="og:site_name" content="Seminar Nasional" />
  <meta property="article:published_time" content="{{ date("Y-m-d") }}" />
  <meta property="og:image" content="{{ asset("templates") }}/assets/img/logo/semnasdata_logo.png" />

  <!-- Favicons -->
  <link href="{{ asset("templates") }}/assets/img/favicon.png" rel="icon">
  <link href="{{ asset("templates") }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("templates") }}/assets/vendor/aos/aos.css" rel="stylesheet">
  {{-- <link href="{{ asset("templates") }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link href="{{ asset("templates") }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset("templates") }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset("templates") }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ asset("templates") }}/assets/css/style.css" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
  <style>
    body{
     background-color: #eee;
    }

    .mt-70{
        margin-top: 70px;
    }

    .mb-70{
        margin-bottom: 70px;
    }

    .card {
        box-shadow: 0 0.46875rem 2.1875rem rgba(4,9,20,0.03), 0 0.9375rem 1.40625rem rgba(4,9,20,0.03), 0 0.25rem 0.53125rem rgba(4,9,20,0.05), 0 0.125rem 0.1875rem rgba(4,9,20,0.03);
        border-width: 0;
        transition: all .2s;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(26,54,126,0.125);
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1.25rem;
    }
    .vertical-timeline {
        width: 100%;
        position: relative;
        padding: 1.5rem 0 1rem;
    }

    .vertical-timeline::before {
        content: '';
        position: absolute;
        top: 0;
        left: 67px;
        height: 100%;
        width: 4px;
        background: #e9ecef;
        border-radius: .25rem;
    }

    .vertical-timeline-element {
        position: relative;
        margin: 0 0 1rem;
    }

    .vertical-timeline--animate .vertical-timeline-element-icon.bounce-in {
        visibility: visible;
        animation: cd-bounce-1 .8s;
    }
    .vertical-timeline-element-icon {
        position: absolute;
        top: 0;
        left: 60px;
    }

    .vertical-timeline-element-icon .badge-dot-xl {
        box-shadow: 0 0 0 5px #fff;
    }

    .badge-dot-xl {
        width: 18px;
        height: 18px;
        position: relative;
    }
    .badge:empty {
        display: none;
    }


    .badge-dot-xl::before {
        content: '';
        width: 10px;
        height: 10px;
        border-radius: .25rem;
        position: absolute;
        left: 50%;
        top: 50%;
        margin: -5px 0 0 -5px;
        background: #fff;
    }

    .vertical-timeline-element-content {
        position: relative;
        margin-left: 90px;
        font-size: .8rem;
    }

    .vertical-timeline-element-content .timeline-title {
        font-size: .8rem;
        text-transform: uppercase;
        margin: 0 0 .5rem;
        padding: 2px 0 0;
        font-weight: bold;
    }

    .vertical-timeline-element-content .vertical-timeline-element-date {
        display: block;
        position: absolute;
        left: -90px;
        top: 0;
        padding-right: 10px;
        text-align: right;
        color: #adb5bd;
        font-size: .7619rem;
        white-space: nowrap;
    }

    .vertical-timeline-element-content:after {
        content: "";
        display: table;
        clear: both;
    }
  </style>
</head>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an text logo -->
        <h1><a href="#">Seminar Nasional</a></h1>
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
        <h2>{{ $deskripsi }}</h2>
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
          <h3>Latar Belakang</h3>
        </header>

        <div class="row about-extra p-1">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{ asset("templates") }}/assets/img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-5 pt-lg-0" data-aos="fade-left">
            <p align="justify">
              Dalam era digital yang terus berkembang, data telah muncul sebagai aset berharga yang mengubah berbagai bidang kehidupan, mulai dari bisnis dan industri hingga penelitian ilmiah dan pengambilan keputusan pemerintah. Kemampuan untuk mengumpulkan, menyimpan, dan menganalisis data dalam skala besar telah membuka pintu bagi wawasan baru dan peluang inovasi yang tak terbatas. Salah satu disiplin yang berada di pusat revolusi ini adalah Ilmu data, yang tidak hanya memberikan kemampuan untuk memahami pola dalam data, tetapi juga memberdayakan pengambilan keputusan yang lebih cerdas dan terinformasi. Oleh karena itu, pelaksanaan Seminar Nasional Data Science menjadi langkah penting dalam memfasilitasi pertukaran pengetahuan, gagasan, dan pengalaman di antara para akademisi, peneliti, praktisi, dan pengambil keputusan yang tertarik dalam memahami lebih dalam bagaimana Ilmu data membentuk masa depan yang didukung oleh bukti dan informasi yang kuat. Melalui seminar ini, para peserta akan dapat menjelajahi perkembangan terbaru dalam metodologi analisis data, tren penerapan di berbagai sektor, serta tantangan etika dan privasi yang muncul seiring dengan kemajuan ini.
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
                    <h3>Herman, S.Kom., M.Sc., Ph.D.</h3>
                    <h4>Data Scientist dan Dosen Universitas Ahmad Dahlan</h4>
                  </div>
                </div><!-- End testimonial item -->

                {{-- <div class="swiper-slide">
                  <div class="testimonial-item" align="center">
                    <img src="{{ asset("templates") }}/assets/img/mahfud-md.jpeg" class="testimonial-img p-2 m-2" alt="">
                    <h3>Prof. Dr. Mohammad Mahfud MD., S.H., S.U., M.I.P.</h3>
                    <h4>Menteri Koordinator Bidang Politik, Hukum, dan Keamanan Republik Indonesia</h4>
                   
                  </div>
                </div><!-- End testimonial item --> --}}

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    
    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3>Timelines</h3>
        </div>
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <div class="row d-flex justify-content-center mt-70 mb-70">

          <div class="col-md-6">

            <div class="main-card mb-3">
              <div class="card-body">
                  <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                      <div class="vertical-timeline-item vertical-timeline-element">
                          <div>
                              <span class="vertical-timeline-element-icon bounce-in">
                                  <i class="badge badge-dot badge-dot-xl badge-success"> </i>
                              </span>
                              <div class="vertical-timeline-element-content bounce-in">
                                  <h4 class="timeline-title">Pendaftaran</h4>
                                  <p>Pendaftaran seminar dan Business Plan Competition</p>
                                  <span class="vertical-timeline-element-date">28 Agus -<br>16 Sept</span>
                              </div>
                          </div>
                      </div>
                      <div class="vertical-timeline-item vertical-timeline-element">
                          <div>
                              <span class="vertical-timeline-element-icon bounce-in">
                                  <i class="badge badge-dot badge-dot-xl badge-warning"> </i>
                              </span>
                              <div class="vertical-timeline-element-content bounce-in">
                                  <h4 class="timeline-title">Seleksi</h4>
                                  <p>Seleksi Administrasi Business Plan Competition</p>
                                  <span class="vertical-timeline-element-date">18-23 Sept</span>
                              </div>
                          </div>
                      </div>
                      <div class="vertical-timeline-item vertical-timeline-element">
                          <div>
                              <span class="vertical-timeline-element-icon bounce-in">
                                  <i class="badge badge-dot badge-dot-xl badge-danger"> </i>
                              </span>
                              <div class="vertical-timeline-element-content bounce-in">
                                  <h4 class="timeline-title">Pengumuman</h4>
                                  <p>Pengumuman Finalis Business Plan Competition</p>
                                  <span class="vertical-timeline-element-date">25 Sept</span>
                              </div>
                          </div>
                      </div>
                      <div class="vertical-timeline-item vertical-timeline-element">
                          <div>
                              <span class="vertical-timeline-element-icon bounce-in">
                                  <i class="badge badge-dot badge-dot-xl badge-primary"> </i>
                              </span>
                              <div class="vertical-timeline-element-content bounce-in">
                                  <h4 class="timeline-title">Technical Meeting</h4>
                                  <p>Pelaksanaan Technical Meeting Business Plan Competition</p>
                                  <span class="vertical-timeline-element-date">9 Okto</span>
                              </div>
                          </div>
                      </div>
                      <div class="vertical-timeline-item vertical-timeline-element">
                          <div>
                              <span class="vertical-timeline-element-icon bounce-in">
                                  <i class="badge badge-dot badge-dot-xl badge-info"> </i>
                              </span>
                              <div class="vertical-timeline-element-content bounce-in">
                                  <h4 class="timeline-title">Seminar</h4>
                                  <p>Pelaksanaan Seminar Nasional dan Presentase Business Plan Competition</p>
                                  <span class="vertical-timeline-element-date">12 Okto</span>
                              </div>
                          </div>
                      </div>                      
                  </div>
              </div>
          </div>        

        </div> </div>
                  <!-- end card -->
              </div>
          </div>
          </div>


      </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>Pendaftaran</h3>
          <hr color="white" width="300px">
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="100">
              <i class="fas fa-solid fa-brain icon-classes"></i>
              <div class="card-body">
                <h5 class="card-title">Seminar Nasional</h5>
                <p>Seminar Nasional Data Science dilaksanakan secara blanded (Online dan Offline) dengan peserta mahasiswa dan umum. Kuota offline 200 peserta.</p>
                <a href="#" class="readmore" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Daftar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
              <i class="fas fa-solid fa-chart-line icon-classes"></i>
              <div class="card-body">
                <h5 class="card-title">Business Plan</h5>
                <p class="card-text">Peserta Business Plan Competition adalah mahasiswa dan umum yang terdiri max 5 peserta dalam 1 team ide bisnis (1 ketua dan 4 Anggota).</p>
                <a href="#team" class="readmore">Daftar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="300">
              <i class="fas fa-solid fa-database icon-classes"></i>
              <div class="card-body">
                <h5 class="card-title">Sponsorship</h5>
                <p class="card-text">Kesempatan menjadi sponsorship diberikan kepada perusahaan, organisasi atau individu yang ingin berkontribusi berupa materi/produk.</p>
                <a href="#team" class="readmore">Daftar</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

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

  </main><!-- End #main -->

  @include('modal.modal_registrasi')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h5>{{ $deskripsi }}</h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.5891799531287!2d110.38054627473879!3d-7.833229577815928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5701a2ae1c23%3A0x173dbeeddc56d9e!2sUniversitas%20Ahmad%20Dahlan%20-%20Kampus%204!5e0!3m2!1sid!2sid!4v1686371076926!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 200px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Link Lain</h4>
            <ul>
                <li><a href="#hero">Home</a></li>
                <li><a href="#about">Latar Belakang</a></li>
                <li><a href="#testimonials">Keynote</a></li>
                <li><a href="#why-us">Pendaftaran</a></li>
                <li><a href="#team">Timelines</a></li>
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
              <strong>WA 1:</strong> +62 857 6470 9798 (Gusti)<br>
              <strong>WA 2:</strong> +62 857 7222 2000 (Dhea)<br>
              <strong>Email:</strong> infosemnasdata@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="https://instagram.com/semnasdata?igshid=NTc4MTIwNjQ2YQ==" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright Himpunan Mahasiswa S1 & S2 Informatika Universitas Ahmad Dahlan, Yogyakarta
      </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset("templates") }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset("templates") }}/assets/vendor/aos/aos.js"></script>
  {{-- <script src="{{ asset("templates") }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script src="{{ asset("templates") }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset("templates") }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset("templates") }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset("templates") }}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("templates") }}/assets/js/main.js"></script>

</body>

</html>