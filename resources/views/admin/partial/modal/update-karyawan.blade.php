<div class="modal fade" id="myUpdate" tabindex="-1" aria-labelledby="myUpdateLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myUpdateLabel">Update Data Karyawan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ url('/updateKaryawan') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <input type="hidden" id="uidKaryawan" name="uidKaryawan">
                            <div class="form-group mb-3">
                                <label for="nama-outlet" class="col-form-label">Nama Karyawan</label>
                                <input type="text" class="form-control" id="namaKaryawan" name="nama_karyawan"
                                    placeholder="Enter your name">
                            </div>

                            <div class="mb-3">
                                <label for="penempatan" class="form-label font-size-13 ">Penempatan : <input
                                        style="border: none;" type="text" id="lok" name="penempatan" readonly>
                                </label>
                                <select class="form-control" data-trigger name="opti">
                                    <option value="">Klik dan cari..</option>
                                    @foreach ($outlet as $cabang)
                                        <option value="{{ $cabang->nama_outlet }}">{{ $cabang->nama_outlet }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="domisili" class="col-form-label">Domisili</label>
                                <input type="text" class="form-control" id="domisili" name="domisili"
                                    placeholder="Masukan Domisili..">
                            </div>

                            <div class="mb-3">
                                <label for="posisi" class="form-label font-size-13 ">Posisi/Jabatan: <input
                                        style="border: none;" type="text" id="pos" name="posisi"
                                        readonly></label>
                                <select class="form-control kit" data-trigger name="pos"
                                    placeholder="Cari penempatan..">
                                    <option value="">Klik dan cari..</option>
                                    @foreach ($posisi as $posisi)
                                        <option value="{{ $posisi->posisi }}">{{ $posisi->posisi }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group mb-3">
                                <label for="datepiceker-basic" class="col-form-label">Tanggal Masuk Kerja</label>
                                <input type="date" class="form-control" id="masuk" name="t_masuk"
                                    placeholder="Masukan Tanggal Kerja">
                            </div>
                            <div class="form-group mb-3">
                                <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="t_lahir"
                                    placeholder="Enter your Phone no.">
                            </div>

                            <div class="form-group mb-3">
                                <label for="hp" class="col-form-label">No. Hp/Wa</label>
                                <input type="text" class="form-control" id="hp" name="no_hp"
                                    placeholder="Enter your Phone no.Hp">
                            </div>

                            <div class="form-group mb-3">
                                <label for="img" class="col-form-label">Upload Gambar</label>
                                <input type="file" class="form-control" name="poto">
                                {{-- <input type="hidden" class="form-control" id="poto" name="poto"> --}}
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
