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
          {{-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li> --}}
          <li><a class="nav-link scrollto" href="{{ url('/guest/home') }}#about">Latar Belakang</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/guest/home') }}#testimonials">Keynote</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/guest/home') }}#team">Timelines</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/guest/home') }}#why-us">Pendaftaran</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/guest/home') }}#sponsor">Sponsor</a></li>
          @if (null!==Session::get('login_semnasdata') && Session::get('login_semnasdata')==true)
            <li><a class="nav-link scrollto text-success" href="{{ route('businessplan.home') }}">Dashboard</a></li>
            <li><a class="nav-link scrollto text-danger" href="{{ route('user.logout') }}">Logout</a></li>
          @else
            <li><a href="#" class="nav-link scrollto" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Login</a></li>
          @endif
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->