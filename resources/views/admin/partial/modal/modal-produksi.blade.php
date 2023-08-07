<div id="modalProduksi" class="modal fade" tabindex="-1" aria-labelledby="modalProduksiLabel" aria-hidden="true"
    data-bs-scroll="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalProduksiLabel">Update Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/updateBarangList') }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col">

                            <input type="hidden" id="id-barang" name="id">
                            <div class="mb-3">
                                <label for="modal-produksi" class="form-label font-size-13 ">Nama Barang: <input
                                        style="border: none;" type="text" id="modal-produksi" name="produksi"
                                        readonly></label>
                                <select class="form-control" data-trigger name="kategori"
                                    placeholder="Cari penempatan..">
                                    <option value="">Klik dan cari..</option>
                                    @foreach ($stok as $stoks)
                                        <option value="Daging">{{ $stoks->nama_barang }}</option>
                                    @endforeach
                                </select>
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
