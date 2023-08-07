<div class="card-body">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title"> <span
                        class="text-muted fw-normal ms-2"></span></h5>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <div>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="apps-contacts-list.html" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="List"><i class="bx bx-list-ul"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="apps-contacts-grid.html" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Grid"><i class="bx bx-grid-alt"></i></a>
                        </li>
                    </ul>
                </div>
                <div>
                    <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#myModal"><i class="bx bx-plus me-1"></i> Add New</button>
                    @include('admin.partial.modal.modal-barang')
                </div>

               
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
                    <th scope="col">Kode</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Kategory</th>
                    <th scope="col">Satuan</th>
                    
                    <th style="width: 80px; min-width: 80px;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $barangs)
                    @if ($user->level == 'ALL') 
                        <tr>
                           
                            <td>{{ $i++}}</td>
                            <td>{{ $barangs->kode_barang }}</td>
                            <td>{{ $barangs->nama_barang}}</td>
                            <td>{{ $barangs->kategori_barang }}</td>
                            <td>{{ $barangs->satuan }}</td>
                            <td>
                                <button type="button" id="modalOutlet"
                                class="btn btn-primary modal-outlet  waves-effect waves-light"
                              
                                {{-- data-kode="{{$barangs->kode_outlet}}" --}}
                                data-id="{{ $barangs->id }}" 
                                data-nama="{{ $barangs->nama_barang }}" 
                                data-kategori="{{ $barangs->kategori_barang }}"
                                data-satuan="{{ $barangs->satuan }}"
                                  data-bs-toggle="modal"
                                data-bs-target="#upbarang"><i
                                    class="mdi mdi-pencil icons font-size-16 text-success me-1"></i>Edit</button>

                                <a href="{{ url('/hapusBarangList/' . $barangs->uid_barang) }}" type="button"
                                    class="button btn btn-danger   waves-effect waves-light"><i style="color:white"
                                        class="mdi mdi-trash-can icons font-size-16 text-success me-1"></i>Hapus</a>
                            </td>
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
