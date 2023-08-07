<div id="modalUser" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Tambah User Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('/createUser')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="penempatan" class="form-label font-size-13 ">Level User</label>
                                <select class="form-control" data-trigger name="levelUser" required>
                                    <option value="">Klik dan cari..</option>
                                    <option value="ALL">ALL</option>
                                    @foreach ($outlet as $outlet)
                                        <option value="{{ $outlet->kode_outlet}}">{{ $outlet->kode_outlet}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama-outlet" class="col-form-label">Nama User</label>
                                <input type="text" class="form-control"  name="namaUser" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat-outlet" class="col-form-label">Email</label>
                                <input type="text" class="form-control"  name="emailUser" placeholder="Enter your email" required>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="penempatan" class="form-label font-size-13 ">Role</label>
                                <select class="form-control" data-trigger name="roleUser" required>
                                    <option value="">Klik dan cari..</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat-outlet" class="col-form-label">upload poto</label>
                                <input type="file" class="form-control"  name="potoUser" placeholder="" required>
                            </div>
                            <div class="form-floating form-floating-custom mb-3">
                                <input type="password" class="form-control" id="input-password" placeholder="Enter Password" name="passwordUser" required>
                                <div class="invalid-feedback">
                                    Please Enter Password
                                </div> 
                                <label for="input-password">Password</label>
                                <div class="form-floating-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->