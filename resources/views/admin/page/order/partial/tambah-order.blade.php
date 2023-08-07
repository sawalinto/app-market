<div class="card">
    <div class="card-body">
        <form action="{{ url('/createOrder') }}" method="post">
            @csrf
            <input type="hidden" value="{{ $user->level }}" name="user">
            <div class="mb-3">
                <label for="penempatan" class="form-label font-size-13 ">Nama Barang</label>
                <select class="form-control" data-trigger name="namaBarang" required>
                    <option value="">Klik dan cari..</option>
                    @foreach ($barangList as $barang)
                        <option value="{{ $barang->nama_barang }}">{{ $barang->nama_barang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="penempatan" class="form-label font-size-13 ">Jumlah Barang</label>
                <div class="input-wrapper">
                    <button type="button" class="btn btn-primary btn-minus">-</button>
                    <input class="form-control" type="number" min="1" max="1000" step="1"
                        value="0" id="quantity" name="jumlah" required>
                    <button type="button" class="btn btn-primary btn-plus">+</button>
                </div>
            </div>
            @if ($user->level === 'ALL')
                <button type="submit" disabled name="submit"
                    class="btn btn-primary waves-effect waves-light w-100">Pesan Barang</button>
            @else
                <button type="submit" name="submit"
                    class="btn btn-primary waves-effect waves-light w-100">Pesan Barang</button>
            @endif

        </form>
    </div>
</div>
