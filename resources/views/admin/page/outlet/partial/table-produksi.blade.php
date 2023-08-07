<div class="table-responsive mb-4">
    <form action="{{url('/produksiBarang')}}" class="hstack gap-3 mb-3 filter" method="get"
        style="min-width: 200px; max-width: 400px;">
        @csrf
        <input type="hidden" name="outlet" value="{{ $outlet }}">
        {{-- <input type="hidden" name="outlet" value="{{ $outlet }}"> --}}
        <input class="form-control me-auto" type="date" name="date" value="{{ $date }}">
        <button type="submit" class="btn btn-primary">Filter</button>
        @csrf

    </form>
    <table class="table align-middle datatable dt-responsive table-check nowrap" id="datatable-buttons"
        style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Stok</th>
                <th scope="col">Out</th>
                <th scope="col" style="width: 50px">jmlh Stok</th>
                <th scope="col">Kategory</th>
                <th scope="col">Satuan</th>

                <th scope="col">Keterangan</th>
                {{-- <th style="width: 80px; min-width: 80px;">Action</th> --}}
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($produksi as $barang)
              <tr>
                <td>{{$i++}}</td>
                <td>{{date('Y-m-d', strtotime($barang->created_at))}}</td>
                <td>{{$barang->nama_Barang}}</td>
                <td>{{$barang->stok_barang}}</td>
                <td>{{$barang->jumlah_produksi}}</td>
                <td>{{$barang->jumlah_stok}}</td>
                <td>{{$barang->barangList->kategori_barang}}</td>
                <td>{{$barang->barangList->satuan}}</td>
                <td>{{$barang->keterangan}}</td>
              </tr>
            @endforeach



        </tbody>
    </table>
    <!-- end table -->
</div>
