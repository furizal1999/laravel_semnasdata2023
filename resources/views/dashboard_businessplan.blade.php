@include('layout.header')
@include('layout.menu')
@php
    $deskripsi = "Seminar Nasional Data Science dan Business Plan Competition 2023";
@endphp
  

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form method="post" action="{{ route('guest.register.account') }}">
              @csrf
              <div class="card" style="margin: 50px 0px">
                  <div class="card-header">
                      Daftar Business Plan Competition
                  </div>
                  <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                              <label for="nama_tim" class="col-sm-4 col-form-label">Nama Tim</label>
                              <div class="col-sm-8">
                              <input type="text" name="nama_tim" class="form-control" id="nama_tim" placeholder="Nama Tim" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="nama_bisnis" class="col-sm-4 col-form-label">Nama Bisnis</label>
                              <div class="col-sm-8">
                              <input type="text" name="nama_bisnis" class="form-control" id="nama_bisnis" placeholder="Nama Bisnis" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="nama_ketua" class="col-sm-4 col-form-label">Nama Ketua</label>
                              <div class="col-sm-8">
                              <input type="text" name="nama_ketua" class="form-control" id="nama_ketua" placeholder="Nama Ketua" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="nik_ketua" class="col-sm-4 col-form-label">NIK Ketua</label>
                              <div class="col-sm-8">
                              <input type="number" name="nik_ketua" class="form-control" id="nik_ketua" placeholder="NIK Ketua" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="asal_pt_ketua" class="col-sm-4 col-form-label">Asal Perguruan Tinggi Ketua</label>
                              <div class="col-sm-8">
                              <input type="text" name="asal_pt_ketua" class="form-control" id="asal_pt_ketua" placeholder="Asal Perguruan Tinggi Ketua" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="prodi_ketua" class="col-sm-4 col-form-label">Asal Perguruan Tinggi Ketua</label>
                              <div class="col-sm-8">
                              <input type="number" name="prodi_ketua" class="form-control" id="prodi_ketua" placeholder="Asal Prodi Ketua" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="wa_ketua" class="col-sm-4 col-form-label">Nomor WA Ketua</label>
                              <div class="col-sm-8">
                              <input type="number" name="wa_ketua" class="form-control" id="wa_ketua" placeholder="Nomor WA Ketua" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" required>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                              <label for="anggota" class="col-sm-4 col-form-label">Anggota</label>
                              <div class="col-sm-8">
                                <textarea name="anggota" class="form-control" id="" cols="30" rows="6"></textarea>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="ringkasan_ide" class="col-sm-4 col-form-label">Ringkasan Ide Bisnis</label>
                              <div class="col-sm-8">
                                <textarea name="ringkasan_ide" class="form-control" id="" cols="30" rows="6"></textarea>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="file_proposal" class="col-sm-4 col-form-label">File Proposal</label>
                              <div class="col-sm-8">
                              <input type="file" name="file_proposal" class="form-control" id="file_proposal" placeholder="File Proposal" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="password" class="col-sm-4 col-form-label"></label>
                              <div class="col-sm-8">
                                  <button class="btn btn-danger btn-sm" type="reset"><i class="fa fa-times"></i> Reset</button>
                                  <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-save"></i> Daftar Business Plan</button>
                              </div>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
          </form>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
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

  @if($errors->any())
        @php
            $temp = "";
            $temp .= "<ul>";
            foreach ($errors->all() as $error){
                $temp .= "<li>".$error."</li>";
            }
            $temp .= "</ul>";
        @endphp

       <script>
            swal("Opss!", "<?php echo $temp; ?>", "error");
        </script>
  @endif

  @include('modal.modal_registrasi')
  @include('modal.modal_login')
  @include('modal.modal_registrasi_akun')
  @include('layout.footer')