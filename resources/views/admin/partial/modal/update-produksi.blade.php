<div id="updateProduksi" class="modal fade" tabindex="-1" aria-labelledby="upbarangLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="upbarangLabel">Update Produksi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('/updateBarangList')}}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                           
                            <input type="hidden" id="id-barang" name="id">
                            <div class="mb-3">
                                <label for="kategori-barang-list" class="form-label font-size-13 ">Nama Barang: <input
                                    style="border: none;" type="text" id="kategori-barang-list" name="kategori"
                                    readonly></label>
                                <select class="form-control" data-trigger name="kategori"
                                     placeholder="Cari penempatan..">
                                    <option value="">Klik dan cari..</option>
                                    @foreach ($stok as $stoks)
                                    <option value="{{$stoks->nama_barang}}">{{$stoks->nama_barang}}</option>
                                    @endforeach
                                    
                                    
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="posisi"
                                    class="form-label font-size-13 ">Satuan: <input
                                    style="border: none;" type="text" id="satuan-barang-list" name="satuan"
                                    readonly></label>
                                <select class="form-control" data-trigger name="satuanb"
                                     placeholder="Cari penempatan..">
                                    <option value="">Klik dan cari..</option>
                                    <option value="Pcs">Pcs</option>  
                                    <option value="Gram">Gram</option>  
                                    <option value="Buah">Buah</option>  
                                    <option value="Porsi">Porsi</option>  
                                    <option value="Bungkus">Bungkus</option>  
                                    <option value="Ekor">Ekor</option>  
                                    <option value="Kotak">Kotak</option>  
                                    <option value="Dus">Dus</option>  
                                    <option value="Kaleng">Kaleng</option>  
                                    <option value="Ons">Ons</option>  
                                    <option value="Derigen">Derigen</option>  
                                    <option value="Goni">Goni</option>  
                                    <option value="Botol">Botol</option>  
                                    <option value="Lembar">Lembar</option>  
                                    <option value="Roll">Roll</option>  
                                    <option value="Unit">Unit</option>  
                                    <option value="Rim">Rim</option>  
                                    <option value="Liter">Liter</option>  
                                    <option value="Kg">Kg</option>  
                                    
                                </select>
                            </div>
                            
                           
                        </div>
                        

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->