<div id="userEdit" class="modal fade" tabindex="-1" aria-labelledby="userEditLabel" aria-hidden="true"
    data-bs-scroll="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userEditLabel">Tambah Outlet Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/updateUser') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <input type="hidden" id="idUser" name="id">
                            <div class="mb-3">
                                <label for="penempatan" class="form-label font-size-13 ">Level User : <input
                                        style="border: none;" type="text" id="levelUser" name="levelUser"
                                        readonly></label>
                                <select class="form-control" name="level" data-trigger required>
                                    <option value="">Klik dan cari..</option>
                                    <option value="admin">Admin</option>
                                    <option value="ALL">ALL</option>
                                    @foreach ($outlet as $outlet)
                                        <option value="{{ $outlet->kode_outlet }}">{{ $outlet->kode_outlet }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama-outlet" class="col-form-label">Nama User</label>
                                <input type="text" class="form-control" id="namaUser" name="namaUser"
                                    placeholder="Enter your name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat-outlet" class="col-form-label">Email</label>
                                <input type="text" class="form-control" id="emailUser" name="emailUser"
                                    placeholder="Enter your email" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="penempatan" class="form-label font-size-13 ">Role: <input
                                        style="border: none;" type="text" id="roleUser" name="roleUser"
                                        readonly></label>
                                <select class="form-control" name="role" data-trigger required>
                                    <option value="">Klik dan cari..</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat-outlet" class="col-form-label">upload poto</label>
                                <input type="file" class="form-control"  name="potoUser" placeholder="">
                            </div>
                            <input type="hidden" value="" id="passwordUser" name="passwordOld">
                            <div class="form-floating form-floating-custom mb-3">
                                <input type="password" class="form-control" 
                                    placeholder="Enter Password" name="passwordNew">
                                <div class="invalid-feedback">
                                    Please Enter Password
                                </div>
                                <label for="passwordUser">Password</label>
                                <div class="form-floating-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" name="submit"
                        class="btn btn-primary waves-effect waves-light">Simpan</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
