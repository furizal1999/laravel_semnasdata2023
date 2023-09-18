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
              <div class="card" style="margin: 50px 0px">
                  <div class="card-header">
                      Daftar Business Plan Competition
                  </div>
                  <div class="card-body">
                      <form method="post" action="{{ route('businessplan.home.register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="nama_tim" class="col-sm-4 col-form-label">Nama Tim</label>
                                <div class="col-sm-8">
                                <input type="text" name="nama_tim" value="<?php if(isset($getBpcData->nama_tim)){echo $getBpcData->nama_tim; } ?>" class="form-control" id="nama_tim" placeholder="Nama Tim" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_bisnis" class="col-sm-4 col-form-label">Nama Bisnis</label>
                                <div class="col-sm-8">
                                <input type="text" name="nama_bisnis" value="<?php if(isset($getBpcData->nama_bisnis)){echo $getBpcData->nama_bisnis; } ?>" class="form-control" id="nama_bisnis" placeholder="Nama Bisnis" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_ketua" class="col-sm-4 col-form-label">Nama Ketua</label>
                                <div class="col-sm-8">
                                <input type="text" name="nama_ketua" value="<?php if(isset($getBpcData->nama_ketua)){echo $getBpcData->nama_ketua; } ?>" class="form-control" id="nama_ketua" placeholder="Nama Ketua" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nik_ketua" class="col-sm-4 col-form-label">NIK Ketua</label>
                                <div class="col-sm-8">
                                <input type="number" name="nik_ketua" value="<?php if(isset($getBpcData->nik_ketua)){echo $getBpcData->nik_ketua; } ?>" class="form-control" id="nik_ketua" placeholder="NIK Ketua" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="asal_pt_ketua" class="col-sm-4 col-form-label">Asal Perguruan Tinggi Ketua</label>
                                <div class="col-sm-8">
                                <input type="text" name="asal_pt_ketua" value="<?php if(isset($getBpcData->asal_pt_ketua)){echo $getBpcData->asal_pt_ketua; } ?>" class="form-control" id="asal_pt_ketua" placeholder="Asal Perguruan Tinggi Ketua" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="prodi_ketua" class="col-sm-4 col-form-label">Asal Program Studi Ketua</label>
                                <div class="col-sm-8">
                                <input type="text" name="prodi_ketua" value="<?php if(isset($getBpcData->prodi_ketua)){echo $getBpcData->prodi_ketua; } ?>" class="form-control" id="prodi_ketua" placeholder="Asal Prodi Ketua" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nomor_wa_ketua" class="col-sm-4 col-form-label">Nomor WA Ketua</label>
                                <div class="col-sm-8">
                                <input type="number" name="nomor_wa_ketua" value="<?php if(isset($getBpcData->nomor_wa_ketua)){echo $getBpcData->nomor_wa_ketua; } ?>" class="form-control" id="nomor_wa_ketua" placeholder="Nomor WA Ketua" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" required>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="anggota" class="col-sm-4 col-form-label">Anggota</label>
                                <div class="col-sm-8">
                                  <textarea name="anggota" class="form-control" id="" cols="30" rows="6"><?php if(isset($getBpcData->anggota)){echo $getBpcData->anggota; } ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ringkasan_ide_bisnis" class="col-sm-4 col-form-label">Ringkasan Ide Bisnis</label>
                                <div class="col-sm-8">
                                  <textarea name="ringkasan_ide_bisnis" class="form-control" id="" cols="30" rows="6"><?php if(isset($getBpcData->ringkasan_ide_bisnis)){echo $getBpcData->ringkasan_ide_bisnis; } ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="file_proposal" class="col-sm-4 col-form-label">File Proposal <b class="text-danger">*.pdf</b></label>
                                <div class="col-sm-8">
                                  <div class="row" align="left">
                                    <div class="col-sm-9">
                                      <input type="file" name="file_proposal" class="form-control" accept="application/pdf" id="file_proposal" placeholder="File Proposal" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" @php if(!isset($getBpcData->file_proposal) || (isset($getBpcData->file_proposal) && $getBpcData->file_proposal==NULL)){ echo "required"; } @endphp>
                                    </div>
                                    <div class="col-sm-2">
                                      @if (isset($getBpcData->file_proposal) && $getBpcData->file_proposal!=NULL)
                                        <a href="{{ asset(env('FOLDER_ASSET').'img/proposal').'/'.$getBpcData->file_proposal }}" class="btn btn-success" target="_BLANK"><i class="fas fa-eye"></i></a>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="file_bukti_bayar" class="col-sm-4 col-form-label">Bukti bayar <b class="text-danger">*.pdf, *.jpg, *.jpeg, *.png</b></label>
                                <div class="col-sm-8">
                                  <div class="row" align="left">
                                    <div class="col-sm-9">
                                      <input type="file" name="file_bukti_bayar" class="form-control" accept="application/pdf, image/jpeg, image/png, image/jpg" id="file_bukti_bayar" placeholder="File Proposal" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" @php if(!isset($getBpcData->file_bukti_bayar) || (isset($getBpcData->file_bukti_bayar) && $getBpcData->file_bukti_bayar==NULL)){ echo "required"; } @endphp>
                                    </div>
                                    <div class="col-sm-2">
                                      @if (isset($getBpcData->file_bukti_bayar) && $getBpcData->file_bukti_bayar!=NULL)
                                        <a href="{{ asset(env('FOLDER_ASSET').'img/bukti_bayar').'/'.$getBpcData->file_bukti_bayar }}" class="btn btn-success" target="_BLANK"><i class="fas fa-eye"></i></a>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="file_surat_pernyataan" class="col-sm-4 col-form-label">Surat Pernyataan Keaslian Ide <b class="text-danger">*.pdf</b></label>
                                <div class="col-sm-8">
                                  <div class="row" align="left">
                                    <div class="col-sm-9">
                                      <input type="file" name="file_surat_pernyataan" class="form-control" accept="application/pdf" id="file_surat_pernyataan" placeholder="File Proposal" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" @php if(!isset($getBpcData->file_surat_pernyataan) || (isset($getBpcData->file_surat_pernyataan) && $getBpcData->file_surat_pernyataan==NULL)){ echo "required"; } @endphp>
                                    </div>
                                    <div class="col-sm-2">
                                      @if (isset($getBpcData->file_surat_pernyataan) && $getBpcData->file_surat_pernyataan!=NULL)
                                        <a href="{{ asset(env('FOLDER_ASSET').'img/surat_pernyataan').'/'.$getBpcData->file_surat_pernyataan }}" class="btn btn-success" target="_BLANK"><i class="fas fa-eye"></i></a>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                </div>
                                <div class="col-sm-8">
                                    <hr>
                                    @php
                                        date_default_timezone_set('Asia/Jakarta');
                                        $now = new DateTime(); // Waktu saat ini
                                        $targetDate = new DateTime("2023-09-16 23:59:59"); // Tanggal target
                                    @endphp
                                    @if ((($now > $targetDate) && isset($getBpcData->status_submit)) && $getBpcData->status_submit!="Submit")
                                      <small>Info: <i class="text-white bg-danger rounded p-2">Pendaftaran sudah berakhir.</i></small>
                                    @elseif (!isset($getBpcData->status_submit) || (isset($getBpcData->status_submit) && $getBpcData->status_submit=="Draft"))
                                      <button class="btn btn-primary btn-sm" type="submit" name="bpc_register" value="yes"><i class="fa fa-save"></i> Draft</button>
                                    @else
                                      <b class="text-danger">Info:</b><br>
                                      <ul>
                                        <li><small><i class="text-white bg-success rounded p-1">Proposal anda sudah diajukan.</i></small></li>
                                        <li><small>Silahkan join ke dalam <a href="https://chat.whatsapp.com/K0ePEguknoyA0ZiI4DSTSn" target="_BLANK">WhatsApp Group</a> untuk informasi selanjutnya.</small></li>
                                      </ul>
                                    @endif
                                </div>
                            </div>
                          </div>
                        </div>
                      </form>
                      
                      @if ((isset($getBpcData->status_submit) && $getBpcData->status_submit=="Draft") && !(($now > $targetDate) && $getBpcData->status_submit!="Submit"))
                        <hr>
                        <form action="{{ route('businessplan.home.submit') }}" method="post">
                          @csrf
                          <label for="">Jika pengajuan anda sudah siap, silahkan tekan tombol submit dibawah ini untuk menyerahkan. Setelah diserahkan, pengajuan anda tidak dapat diubah lagi.</label>
                          <input type="hidden" name="id_peserta_bpc" value="{{ $getBpcData->id_peserta_bpc }}">
                          <button class="btn btn-success btn-sm" type="submit" name="bpc_submit" value="yes"><i class="fa fa-check-circle"></i> Submit</button>
                        </form>
                      @endif
                  </div>
              </div>
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