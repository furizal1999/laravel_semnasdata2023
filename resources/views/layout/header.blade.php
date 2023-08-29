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
  <link href="{{ asset("templates") }}/assets/img/logo/semnasdata_logo.png" rel="icon">
  <link href="{{ asset("templates") }}/assets/img/logo/semnasdata_logo.png" rel="apple-touch-icon">

    <!-- Sweet alert2 CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
    <!-- sweet alert2 JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    
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