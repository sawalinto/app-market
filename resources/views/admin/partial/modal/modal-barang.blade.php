<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Tambah Barang Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/createBarang') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            {{-- <div class="form-group mb-3">
                                <label for="kode-outlet" class="col-form-label">Kode Outlet</label>
                                <input type="text" class="form-control" id="kode-outlet" name="kode_outlet" placeholder="Enter your kode">
                            </div> --}}
                            <div class="form-group mb-3">
                                <label for="nama-outlet" class="col-form-label">Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang"
                                    placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                                <label for="posisi" class="form-label font-size-13 ">Kategori</label>
                                <select class="form-control" data-trigger name="kategori"
                                    placeholder="Cari penempatan..">
                                    <option value="">Klik dan cari..</option>
                                    @foreach ($kategori as $kategori)
                                        <option value="{{ $kategori->kategory }}">{{ $kategori->kategory }}</option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="posisi" class="form-label font-size-13 ">Satuan</label>
                                <select class="form-control" data-trigger name="satuan"
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
