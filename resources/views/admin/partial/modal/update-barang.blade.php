<div id="upbarang" class="modal fade" tabindex="-1" aria-labelledby="upbarangLabel" aria-hidden="true"
    data-bs-scroll="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="upbarangLabel">Update Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/updateBarangList') }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <input type="hidden" id="id-barang" name="id">
                            <div class="form-group mb-3">
                                <label for="outlet-nama" class="col-form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang"
                                    placeholder="Masukan Nama Barang">
                            </div>
                            <div class="mb-3">
                                <label for="kategori-barang-list" class="form-label font-size-13 ">Kategori: <input
                                        style="border: none;" type="text" id="kategori-barang-list" name="kategori"
                                        readonly></label>
                                <select class="form-control" data-trigger name="kategori"
                                    placeholder="Cari penempatan..">
                                    <option value="">Klik dan cari..</option>
                                    @foreach ($kategori as $kategori)
                                        <option value="{{ $kategori->kategory }}">{{ $kategori->kategory }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="posisi" class="form-label font-size-13 ">Satuan: <input
                                        style="border: none;" type="text" id="satuan-barang-list" name="satuan"
                                        readonly></label>
                                <select class="form-control" data-trigger name="satuanb"
                                    placeholder="Cari penempatan..">
                                    <option value="">Klik dan cari..</option>
                                    @foreach ($satuan as $satuan)
                                        <option value="{{ $satuan->satuan }}">{{ $satuan->satuan }}</option>
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
