<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="{{ route('guest.register.seminar') }}" method="POST">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pendaftaran Seminar Nasional</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
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
                            <input type="number" class="form-control" name="wa" id="wa" placeholder="No. WhatsApp" @required(true)>
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
                            <input type="text" class="form-control" name="nama_pt" id="nama_pt" placeholder="Nama Perguruan Tinggi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="prodi" class="col-sm-4 col-form-label">Nama Program Studi <small class="text-sm text-danger">(Optional)</small></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="prodi" id="prodi" placeholder="Nama Program Studi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-4 col-form-label">Alamat Peserta</label>
                        <div class="col-sm-8">
                            <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat Peserta" @required(true)></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keikutsertaan" class="col-sm-4 col-form-label">Keikutsertaan</label>
                        <div class="col-sm-8">
                            <select name="keikutsertaan" id="keikutsertaan" class="form-control" @required(true)>
                                <option value="">--Pilih--</option>
                                @php
                                    use App\Models\Home;
                                @endphp
                                @if (app(Home::class)->checkPesertaSeminar("Offline")<200)
                                    <option value="Offline">Offline</option>
                                @endif
                                <option value="Online">Online</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
            </div> 
        </form>
      
    </div>
  </div>
</div>