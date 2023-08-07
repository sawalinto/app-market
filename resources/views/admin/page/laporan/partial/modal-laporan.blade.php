<div id="modalLaporan" class="modal fade" tabindex="-1" aria-labelledby="modalLaporan" aria-hidden="true"
    data-bs-scroll="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLaporan">Ubah Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/updateLaporan') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <input type="hidden" id="uid" name="uid">
                            <div class="form-group mb-3">
                                <label for="judul" class="col-form-label">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    placeholder="Judul Laporan">
                            </div>
                            <div class="form-group mb-3">
                                <div class="mb-3">
                                    <label for="penempatan" class="form-label font-size-13 ">Ubah Gambar</label>
                                    <input type="file" class="form-control" name="gambar">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" required placeholder="Leave a comment here" name="keterangan" id="keterangan" style="height: 100px"></textarea>
                                    <label for="keterangan">Keterangan</label>
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
