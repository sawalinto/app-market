<div class="card-body">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Jumlah Karyawan <span
                        class="text-muted fw-normal ms-2">{{ $karyawan->count() }}</span></h5>
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
                    @if ($user->level === 'ALL')
                        <button href="#" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#myModal"><i
                                class="bx bx-plus me-1"></i> Add New</button>
                    @endif

                    @include('admin.partial.modal.modal-karyawan')
                </div>

                <div class="dropdown">
                    <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bx bx-dots-horizontal-rounded"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
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
                    <th scope="col-4">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Penempatan</th>
                    <th scope="col-3">Domisili</th>
                    <th scope="col">No.Hp</th>
                    <th scope="col">T.Masuk</th>
                    <th scope="col">T.Lahir</th>
                    @if ($user->level === 'ALL')
                        <th scope="col">Action</th>
                    @endif

                </tr>
            </thead>
            <tbody>
                @foreach ($karyawan as $karyawans)
                    @if ($karyawans->kode_outlet === $user->level)
                        <tr>
                            <td>
                                <img style="object-fit: cover !important;" src="{{ asset('storage/photos/' . $karyawans->poto) }}" alt=""
                                    class="avatar-sm rounded-circle me-2">
                                <a href="#" class="text-body">{{ $karyawans->nama_karyawan }}</a>
                            </td>
                            <td>{{ $karyawans->posisi }}</td>
                            <td>{{ $karyawans->penempatan }}</td>
                            <td>{{ $karyawans->domisili }}</td>
                            <td>{{ $karyawans->no_hp }}</td>
                            <td>{{ $karyawans->t_masuk }}</td>
                            <td>{{ $karyawans->t_lahir }}</td>

                        </tr>
                    @endif
                @endforeach
                @foreach ($karyawan as $karyawans)
                    @if ($user->level == 'ALL')
                        <tr>
                            <td>
                                <img src="{{ asset('storage/photos/' . $karyawans->poto) }}" alt=""
                                    class="avatar-sm rounded-circle me-2">
                                <a  class="text-body">{{ $karyawans->nama_karyawan }}</a>
                            </td>
                            <td>{{ $karyawans->posisi }}</td>
                            <td>{{ $karyawans->penempatan }}</td>
                            <td>{{ $karyawans->domisili }}</td>
                            <td>{{ $karyawans->no_hp }}</td>
                            <td>{{ $karyawans->t_masuk }}</td>
                            <td>{{ $karyawans->t_lahir }}</td>
                            <td>

                                <button type="button" id="modalKaryawan"
                                    class="btn btn-primary modal-karyawan  waves-effect waves-light"
                                    data-uid="{{ $karyawans->uid_karyawan }}"
                                    data-kode="{{$karyawans->kode_outlet}}"
                                    data-nama="{{ $karyawans->nama_karyawan }}" data-posisi="{{ $karyawans->posisi }}"
                                    data-penempatan="{{ $karyawans->penempatan }}"
                                    data-domisili="{{ $karyawans->domisili }}" data-hp="{{ $karyawans->no_hp }}"
                                    data-masuk="{{ $karyawans->t_masuk }}" data-lahir="{{ $karyawans->t_lahir }}"
                                    data-poto="{{ $karyawans->poto }}" data-bs-toggle="modal"
                                    data-bs-target="#myUpdate"><i
                                        class="mdi mdi-pencil icons font-size-16 text-success me-1"></i>Edit</button>
                                <a href="{{ url('/hapusKaryawan/' . $karyawans->uid_karyawan) }}" type="button"
                                    class="button btn btn-danger   waves-effect waves-light"><i style="color:white"
                                        class="mdi mdi-trash-can icons font-size-16 text-success me-1"></i>Hapus</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
                @include('admin.partial.modal.update-karyawan')
            </tbody>
        </table>
        <!-- end table -->
    </div>
    <!-- end table responsive -->
</div>
