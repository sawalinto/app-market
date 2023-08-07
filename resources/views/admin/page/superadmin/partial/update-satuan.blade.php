<div id="updateSatuan" class="modal fade" tabindex="-1" aria-labelledby="updateSatuanLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateSatuanLabel">Update Satuan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('/updateSatuan')}}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <input type="hidden" id="uidSatuan" name="uidSatuan">
                            <div class="form-group mb-3">
                                <label for="nama-outlet" class="col-form-label">Nama Kategory</label>
                                <input type="text" class="form-control" id="namaSatuan" name="namaSatuan" placeholder="Enter your satuan">
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