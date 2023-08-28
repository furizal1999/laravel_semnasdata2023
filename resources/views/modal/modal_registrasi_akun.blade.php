<!-- Modal -->
<div class="modal fade" id="akunModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <form method="post" action="{{ route('guest.register.account') }}">
            @csrf
            <div class="card">
                <div class="card-header">
                    Daftar Akun
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="konf_password" class="col-sm-4 col-form-label">Konfirmasi Password</label>
                        <div class="col-sm-8">
                        <input type="password" name="konf_password" class="form-control" id="konf_password" placeholder="Konfirmasi password" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" required>
                        </div>
                    </div>
                    <input type="hidden" name="level" class="form-control" value="2">
                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <button class="btn btn-danger btn-sm" type="reset"><i class="fa fa-times"></i> Reset</button>
                            <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-user"></i> Daftar Akun</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>