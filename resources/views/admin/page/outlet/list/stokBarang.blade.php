<div class="card-body">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title"> <span
                        class="text-muted fw-normal ms-2"></span></h5>
            </div>
        </div>

       
    </div>
    <!-- end row -->

    <div class="table-responsive mb-4">
        <table class="table align-middle datatable dt-responsive table-check nowrap" id="datatable-buttons"
            style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Kategory</th>
                    <th scope="col">Satuan</th>
                    
                    {{-- <th style="width: 80px; min-width: 80px;">Action</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($stokBarang as $stokBarangs)
                    @if ($user->level == 'ALL' || $user->level == $stokBarangs->kode_outlet) 
                        <tr>
                           
                            <td>{{ $i++}}</td>
                            <td>{{ $stokBarangs->nama_barang}}</td>
                            <td>{{ $stokBarangs->jumlah_stok}}</td>
                            <td>{{ $stokBarangs->barangList->kategori_barang }}</td>
                            <td>{{ $stokBarangs->barangList->satuan }}</td>
                        </tr>
                    @endif
                @endforeach
                @include('admin.partial.modal.update-barang')
               

            </tbody>
        </table>
        <!-- end table -->
    </div>
    <!-- end table responsive -->
</div>
