<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Tambah Karyawan Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/createKaryawan') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group mb-3">
                                <label for="nama-outlet" class="col-form-label">Nama Karyawan</label>
                                <input type="text" class="form-control" id="nama-outlet" name="nama_karyawan"
                                    placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label for="penempatan"
                                    class="form-label font-size-13 ">Penempatan</label>
                                <select class="form-control" data-trigger name="penempatan"
                                    id="penempatan" placeholder="Cari penempatan.." required>
                                    <option value="">Klik dan cari..</option>
                                    @foreach ($outlet as $cabang)
                                        <option value="{{$cabang->kode_outlet}}">{{$cabang->nama_outlet}}</option>                                        
                                    @endforeach
                                    
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="domisili" class="col-form-label">Domisili</label>
                                <input type="text" class="form-control" id="domisili" name="domisili"
                                    placeholder="Masukan Domisili.." required>
                            </div>
                            <div class="mb-3">
                                <label for="posisi"
                                    class="form-label font-size-13 ">Posisi/Jabatan</label>
                                <select class="form-control" data-trigger name="posisi"
                                    id="posisi" placeholder="Cari penempatan.." required>
                                    <option value="">Klik dan cari..</option>
                                @foreach ($posisi as $posisi)
                                <option value="{{$posisi->posisi}}">{{$posisi->posisi}}</option>  
                                @endforeach
                                     
                                    
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="datepiceker-basic" class="col-form-label">Tanggal Masuk Kerja</label>
                                <input type="date" class="form-control" id="datepicker-basic " name="t_masuk"
                                    placeholder="Masukan Tanggal Kerja" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="t_lahir"
                                    placeholder="Enter your Phone no." required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="billing-phone" class="col-form-label">No. Hp/Wa</label>
                                <input type="number" class="form-control" id="billing-phone" name="no_hp"
                                    placeholder="Enter your Phone no.Hp" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="img" class="col-form-label">Upload Gambar</label>
                                <input type="file" class="form-control" id="img" name="poto" required>
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
