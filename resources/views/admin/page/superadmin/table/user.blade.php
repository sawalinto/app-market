<div class="card-body">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title"> <span class="text-muted fw-normal ms-2"></span>User</h5>
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
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUser"><i
                            class="bx bx-plus me-1"></i> Add New</button>
                    @include('admin.page.superadmin.partial.modal-user')
                </div>

                <div class="dropdown">
                    <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bx bx-dots-horizontal-rounded"></i>
                    </a>

                    {{-- <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul> --}}
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
                    <th scope="col">Level</th>
                    <th scope="col">Nama</th>
                    <th scope="col">email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Gambar</th>

                    <th style="width: 80px; min-width: 80px;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $users)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $users->level }}</td>
                        <td>{{ $users->name }}</td>
                        <td>{{ $users->email }}</td>
                        <td>{{ $users->role }}</td>
                        <td> <img style="object-fit: cover" src="storage/user/{{$users->gambar}}" alt=""
                            class="avatar-lg rounded-circle img-thumbnail"></td>
                        <td>
                            <button type="button" id="modalOutlet"
                                class="btn btn-primary modal-outlet  waves-effect waves-light"
                                data-id={{ $users->id }} data-level="{{ $users->level }}"
                                data-nama="{{ $users->name }}" data-email="{{ $users->email }}"
                                data-role="{{ $users->role }}" data-password="{{ $users->password }}"
                                data-bs-toggle="modal" data-bs-target="#userEdit"><i
                                    class="mdi mdi-pencil icons font-size-16 text-success me-1"></i>Edit</button>

                            <a href="{{ url('/hapusUser/' . $users->created_at.'/?'.$csrfToken) }}" type="button"
                                class="button btn btn-danger   waves-effect waves-light"><i style="color:white"
                                    class="mdi mdi-trash-can icons font-size-16 text-success me-1"></i>Hapus</a>
                        </td>
                    </tr>
                @endforeach
                @include('admin.page.superadmin.partial.update-user')


            </tbody>
        </table>
        <!-- end table -->
    </div>
    <!-- end table responsive -->
</div>
