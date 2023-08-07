<div class="card">
    <div class="card-body">
        <form action="{{ url('/createProduksi') }}" method="post">
            @csrf
            <input type="hidden" value="{{ $user->level }}" name="user">
            <div class="mb-3">
                <label for="penempatan" class="form-label font-size-13 ">Barang Produksi</label>
                <select class="form-control" data-trigger name="namaBarang" required>
                    <option value="">Klik dan cari..</option>
                    @foreach ($stok as $stoks)
                        <option value="{{ $stoks->nama_barang }}">{{ $stoks->nama_barang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="stokBarang" class="form-label font-size-13 ">Sisa Stok</label>
                <input type="number" class="form-control" id="stokBarang" name="stok">
            </div>
            <div class="mb-3">
                <label for="penempatan" class="form-label font-size-13 ">Jumlah Produksi</label>
                <div class="input-wrapper">
                    <button type="button" class="btn btn-primary btn-minus">-</button>
                    <input class="form-control" type="number" min="1" max="1000" step="1"
                        value="0" id="quantity" name="jumlah" required>
                    <button type="button" class="btn btn-primary btn-plus">+</button>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" required placeholder="Leave a comment here" name="keterangan" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Keterangan</label>
                  </div>
            </div>
            @if ($user->level === 'ALL')
                <button type="submit" disabled name="submit"
                    class="btn btn-primary waves-effect waves-light w-100">Simpan</button>
            @else
                <button type="submit" name="submit"
                    class="btn btn-primary waves-effect waves-light w-100">Simpan</button>
            @endif

        </form>
    </div>
</div>

<script>
    // Fungsi untuk menampilkan stok barang berdasarkan nama barang yang dipilih
    function showStok(selectedNamaBarang) {
        var stokBarang = '';
        @foreach ($stok as $stoks)
            if ("{{ $stoks->nama_barang }}" === selectedNamaBarang) {
                stokBarang = "{{ $stoks->jumlah_stok }}";
            }
        @endforeach
        // Memasukkan nilai stok ke dalam input hidden
        $('#stokBarang').val(stokBarang);
    }

    // Event listener untuk memanggil fungsi showStok saat select berubah
    $('[name="namaBarang"]').on('change', function () {
        showStok($(this).val());
    });
</script>
