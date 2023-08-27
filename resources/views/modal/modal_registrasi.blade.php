<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="" method="POST">
           <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pendaftaran Seminar Nasional</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="nama_peserta" class="col-sm-4 col-form-label">Nama Peserta</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Nama Peserta" id="nama_peserta" name="nama_peserta" @required(true)>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nim" class="col-sm-4 col-form-label">NIM/NIK</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nim" id="nim" placeholder="NIM" @required(true)>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="wa" class="col-sm-4 col-form-label">No. WhatsApp</label>
                    <div class="col-sm-8">
                        <input type="wa" class="form-control" name="wa" id="wa" placeholder="No. WhatsApp" @required(true)>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" @required(true)>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_pt" class="col-sm-4 col-form-label">Nama Perguruan Tinggi <small class="text-sm text-danger">(Optional)</small></label>
                    <div class="col-sm-8">
                        <input type="nama_pt" class="form-control" name="nama_pt" id="nama_pt" placeholder="Nama Perguruan Tinggi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_prodi" class="col-sm-4 col-form-label">Nama Program Studi <small class="text-sm text-danger">(Optional)</small></label>
                    <div class="col-sm-8">
                        <input type="nama_prodi" class="form-control" name="nama_prodi" id="nama_prodi" placeholder="Nama Program Studi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat_peserta" class="col-sm-4 col-form-label">Alamat Peserta</label>
                    <div class="col-sm-8">
                        <textarea name="alamat_peserta" id="alamat_peserta" class="form-control" placeholder="Alamat Peserta"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Daftar Sekarang</button>
            </div> 
        </form>
      
    </div>
  </div>
</div>