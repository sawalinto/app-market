@extends('admin.app')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Dashboard App Market</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                @include('admin.page.dashboard.card')
                <!--end row-->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">{{$dashboard}}</h4>
                            </div>
                            @if ($dashboard === 'outletList')
                                @include('admin.page.outlet.list.outletList')
                            @elseif ($dashboard === 'barangList')
                                @include('admin.page.outlet.list.barangList')
                            @elseif ($dashboard === 'laporanList')
                                @include('admin.page.outlet.list.laporanList')
                            @elseif ($dashboard === 'ranking')
                                @include('admin.page.dashboard.store')
                            @else
                                @include('admin.page.outlet.list.userList')
                            @endif

                        </div>
                    </div>
                    <!--end col-->
                </div>
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Dason.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
