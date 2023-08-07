<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Tambah Outlet Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/createOutlet') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            {{-- <div class="form-group mb-3">
                                <label for="kode-outlet" class="col-form-label">Kode Outlet</label>
                                <input type="text" class="form-control" id="kode-outlet" name="kode_outlet" placeholder="Enter your kode">
                            </div> --}}
                            <div class="form-group mb-3">
                                <label for="nama-outlet" class="col-form-label">Nama Outlet</label>
                                <input type="text" class="form-control" name="nama_outlet"
                                    placeholder="Enter your outlet">
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat-outlet" class="col-form-label">Alamat Outlet</label>
                                <input type="text" class="form-control" name="alamat_outlet"
                                    placeholder="Enter your Alamat">
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat-outlet" class="col-form-label">No Handphone</label>
                                <input type="text" class="form-control" name="no_hp"
                                    placeholder="Enter your Alamat">
                            </div>
                            <div class="form-group mb-3">
                                <label for="billing-phone" class="col-form-label">Map</label>
                                <input type="text" class="form-control" name="map_outlet"
                                    placeholder="Enter your Phone no.">
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat-outlet" class="col-form-label">Upload Gambar</label>
                                <input type="file" class="form-control" name="gambar">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect"
                                    data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" name="submit"
                                    class="btn btn-primary waves-effect waves-light">Simpan</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
