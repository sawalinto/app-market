
<div class="row">
    <div class="col-xl-4 col-sm-12">
        <div class="card-body card-table">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <h5 class="card-title"> <span class="text-muted fw-normal ms-2"></span>Kategory</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    @include('admin.page.superadmin.partial.new-kategory')
                </div>
            </div>
            <!-- end row -->
            <div class="table-responsive mb-4">
                <table class="table align-middle datatable dt-responsive table-check nowrap datatable-buttons"
                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 30px">No</th>
                            <th scope="col">Kategori</th>
                            <th style="width: 80px; min-width: 80px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategory as $key => $kategorys)
                            @if ($user->level == 'ALL')
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $kategorys->kategory }}</td>
                                    <td>
                                        <button type="button" id="modalOutlet"
                                            class="btn btn-primary modal-outlet  waves-effect waves-light" 
                                            data-uid="{{$kategorys->uid_kategory}}" data-kategory="{{$kategorys->kategory}}"
                                            data-bs-toggle="modal" data-bs-target="#updateKategory"><i
                                                class="mdi mdi-pencil icons font-size-16 text-success me-1"></i></button>
        
                                        <a href="{{ url('/hapusKategory/' . $kategorys->uid_kategory) }}" type="button"
                                            class="button btn btn-danger   waves-effect waves-light"><i style="color:white"
                                                class="mdi mdi-trash-can icons font-size-16 text-success me-1"></i></a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        @include('admin.page.superadmin.partial.update-kategory')
        
        
                    </tbody>
                </table>
                <!-- end table -->
            </div>
            <!-- end table responsive -->
        </div>
        
    </div>
    <div class="col-xl-4 col-sm-12">
        <div class="card-body card-table">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <h5 class="card-title"> <span class="text-muted fw-normal ms-2"></span>Satuan</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    @include('admin.page.superadmin.partial.new-satuan')
                </div>
            </div>
            <!-- end row -->
            <div class="table-responsive mb-4">
                <table class="table align-middle datatable dt-responsive table-check nowrap datatable-buttons" 
                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 30px">No</th>
                            <th scope="col">Kategori</th>
                            <th style="width: 80px; min-width: 80px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($satuan as $key => $satuans)
                                <tr>
        
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $satuans->satuan }}</td>
                                    <td>
                                        <button type="button" id="modalOutlet"
                                            class="btn btn-primary modal-outlet  waves-effect waves-light" 
                                            data-uid="{{$satuans->uid_satuan}}" data-satuan="{{$satuans->satuan}}"
                                            data-bs-toggle="modal" data-bs-target="#updateSatuan"><i
                                                class="mdi mdi-pencil icons font-size-16 text-success me-1"></i></button>
                                        <a href="{{ url('/hapusSatuan/' . $satuans->uid_satuan) }}" type="button"
                                            class="button btn btn-danger   waves-effect waves-light"><i style="color:white"
                                                class="mdi mdi-trash-can icons font-size-16 text-success me-1"></i></a>
                                    </td>
                                </tr>
                        @endforeach
                        @include('admin.page.superadmin.partial.update-satuan')
        
        
                    </tbody>
                </table>
                <!-- end table -->
            </div>
            <!-- end table responsive -->
        </div>
        
    </div>
    <div class="col-xl-4 col-sm-12">
        <div class="card-body card-table">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <h5 class="card-title"> <span class="text-muted fw-normal ms-2"></span>Posisi</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    @include('admin.page.superadmin.partial.new-posisi')
                </div>
            </div>
            <!-- end row -->
            <div class="table-responsive mb-4">
                <table class="table align-middle datatable dt-responsive table-check nowrap datatable-buttons" 
                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 30px">No</th>
                            <th scope="col">Kategori</th>
                            <th style="width: 80px; min-width: 80px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posisi as $key => $posisis)
                                <tr>
        
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $posisis->posisi }}</td>
                                    <td>
                                        <button type="button" id="modalPOsisi"
                                            class="btn btn-primary modal-outlet  waves-effect waves-light" 
                                            data-uid="{{$posisis->uid_posisi}}" data-posisi="{{$posisis->posisi}}"
                                            data-bs-toggle="modal" data-bs-target="#updatePosisi"><i
                                                class="mdi mdi-pencil icons font-size-16 text-success me-1"></i></button>
                                        <a href="{{ url('/hapusPosisi/' . $posisis->uid_posisi) }}" type="button"
                                            class="button btn btn-danger   waves-effect waves-light"><i style="color:white"
                                                class="mdi mdi-trash-can icons font-size-16 text-success me-1"></i></a>
                                    </td>
                                </tr>
                        @endforeach
                        @include('admin.page.superadmin.partial.update-posisi')
        
        
                    </tbody>
                </table>
                <!-- end table -->
            </div>
            <!-- end table responsive -->
        </div>
        
    </div>
</div>