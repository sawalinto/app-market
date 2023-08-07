<div id="mySatuan" class="modal fade" tabindex="-1" aria-labelledby="mySatuanLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mySatuanLabel">Tambah Satuan Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('/createSatuan')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group mb-3">
                                <label for="nama-outlet" class="col-form-label">Nama Satuan</label>
                                <input type="text" class="form-control"  name="namaSatuan" placeholder="Enter your Satuan">
                            </div>
                        </div>
                        

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>