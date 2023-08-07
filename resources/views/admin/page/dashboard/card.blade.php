<div class="row">
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-2 col-6">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="mb-3">Jmlh Karyawan</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="avatar-md">
                                    <a class="avatar-title bg-soft-success text-success font-size-20 rounded"
                                        href="{{url('/')}}"><i class="mdi mdi-human-greeting"></i></a>
                                </div>
                                <p class="fs-1 mb-0">{{ $karyawan->count() }}</p>
                            </div>
                        </div>
                    </div>
                    <!--end card body-->
                </div>
                <!--end card-->
            </div>
            <div class="col-xl-2 col-6">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="mb-3">Jmlh Outlet</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="avatar-md">
                                    <a class="avatar-title bg-soft-success text-success font-size-20 rounded"
                                        href="{{ url('?dashboard=outletList&'. $csrfToken) }}"><i
                                            class="mdi mdi-store-plus"></i></a>
                                </div>
                                <p class="fs-1 mb-0">{{ $outlet->count() }}</p>
                            </div>
                        </div>
                    </div>
                    <!--end card body-->
                </div>
                <!--end card-->
            </div>
            <div class="col-xl-2 col-6">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="mb-3">Barang Outlet</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="avatar-md">
                                    <a class="avatar-title bg-primary text-success font-size-20 rounded"
                                        href="{{ url('?dashboard=barangList&'. $csrfToken) }}"><i
                                            class="mdi mdi-food icons"></i></a>
                                </div>
                                <p class="fs-1 mb-0">{{ $barang->count() }}</p>
                            </div>
                        </div>
                    </div>
                    <!--end card body-->
                </div>
                <!--end card-->
            </div>
            <div class="col-xl-2 col-6">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="mb-3">Laporan</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="avatar-md">
                                    <a class="avatar-title bg-primary text-success font-size-20 rounded"
                                        href="{{ url('?dashboard=laporanList&'. $csrfToken) }}"><i
                                            class="mdi mdi-book icons"></i></a>
                                </div>
                                <p class="fs-1 mb-0">{{ $laporan->count() }}</p>
                            </div>
                        </div>
                    </div>
                    <!--end card body-->
                </div>
                <!--end card-->
            </div>
            <div class="col-xl-2 col-6">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="mb-3">Ranking</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="avatar-md">
                                    <a class="avatar-title bg-primary text-success font-size-20 rounded"
                                        href="{{ url('?dashboard=ranking&'. $csrfToken) }}"><i
                                            class="mdi mdi-book icons"></i></a>
                                </div>
                                <p class="fs-1 mb-0">{{ $ranking->count() }}</p>
                            </div>
                        </div>
                    </div>
                    <!--end card body-->
                </div>
                <!--end card-->
            </div>
        </div>
    </div>
    <!--end col-->
    {{-- <div class="col-xl-4"> --}}
        {{-- @include('admin.page.dashboard.store') --}}
        {{-- @include('admin.page.dashboard.store') --}}
    {{-- </div> --}}
    <!--end col-->
</div>