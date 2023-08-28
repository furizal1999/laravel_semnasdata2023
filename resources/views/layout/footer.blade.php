
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
                <li><a href="{{ url('/guest/home') }}#hero">Home</a></li>
                <li><a href="{{ url('/guest/home') }}#about">Latar Belakang</a></li>
                <li><a href="{{ url('/guest/home') }}#testimonials">Keynote</a></li>
                <li><a href="{{ url('/guest/home') }}#why-us">Pendaftaran</a></li>
                <li><a href="{{ url('/guest/home') }}#team">Timelines</a></li>
                <li><a href="{{ url('/guest/home') }}#sponsor">Sponsor</a></li>
                <li><a href="{{ url('/guest/home') }}#contact">Kontak</a></li>
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