@extends('admin.app')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Outlet Fritto Chicken
                               @include('admin.partial.molecul.cek-outlet')
                                @if ($user->level === 'ALL')
                                    {{ $outadmin }}
                                @endif
                            </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-8">
                        <div class="row">
                            @include('admin.page.outlet.partial.card-outlet')
                        </div>
                        <!--end row-->


                        <!--end row-->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Top Transection</h4>
                                    </div>
                                    @if ($stok === 'stokBarang')
                                    
                                        @include('admin.page.outlet.list.stokBarang')
                                    @else
                                        @include('admin.page.outlet.list.userList')
                                    @endif


                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end col-->

                    <div class="col-xl-4">
                      @include('admin.page.outlet.partial.store')
                        <!--end card-->

                      @include('admin.page.outlet.partial.map')
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

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
