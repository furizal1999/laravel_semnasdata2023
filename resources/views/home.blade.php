@include('layout.header')
@php
    $deskripsi = "Seminar Nasional Data Science dan Business Plan Competition 2023";
@endphp
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
  {{-- @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif --}}
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container" data-aos="fade-up">

      <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{ asset("templates") }}/assets/img/bg/1.png" alt="" class="img-fluid">
      </div>

      <div class="hero-info" data-aos="zoom-in" data-aos-delay="100">
        <h2>{{ $deskripsi }}</h2>
        <h5 class="text-white">Diselenggarakan oleh Himpunan Mahasiswa Program Studi S1 dan S2 Informatika Universitas Ahmad Dahlan, Yogyakarta, Indonesia</h5>
        <div>
          <a href="#why-us" class="btn-services scrollto">Daftar Sekarang</a>
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
            <img src="{{ asset("templates") }}/assets/img/bg/2.png" class="img-fluid" alt="">
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
                    <img src="{{ asset("templates") }}/assets/img/speakers/ilham.jpg" class="testimonial-img p-2 m-2" alt="">
                    <h3>Ilham Bintang, S.Kom., M.Kom.</h3>
                    <h4>Data Scientist dan Machine Learning Engineer di tiket.com</h4>
                  </div>
                </div><!-- End testimonial item -->
                <div class="swiper-slide">
                  <div class="testimonial-item" align="center">
                    <img src="{{ asset("templates") }}/assets/img/speakers/herman.jpeg" class="testimonial-img p-2 m-2" alt="">
                    <h3>Herman, S.Kom., M.Sc., Ph.D.</h3>
                    <h4>Data Scientist dan Dosen Universitas Ahmad Dahlan</h4>
                  </div>
                </div><!-- End testimonial item -->
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

  <?php
    if(($notif = Session::get('notif')) && ($message = Session::get('message'))){
        if ($notif == "danger") {
    ?>
            <script>
                swal("Gagal!", "<?php echo $message; ?>", "error");
            </script>
        <?php } else { ?>
            <script>
                swal("Berhasil!", "<?php echo $message; ?>", "success");
            </script>
    <?php }
    }
    ?>

  @include('modal.modal_registrasi')
  @include('layout.footer')