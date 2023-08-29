<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <form method="post" action="{{ route('guest.login') }}">
            @csrf
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email Anda" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password Anda" oninvalid="this.setCustomValidity('Isian Tidak Boleh Kosong')" oninput="setCustomValidity('')" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <button class="btn btn-danger btn-sm" type="reset"><i class="fa fa-times"></i> Reset</button>
                            <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-user"></i> Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>