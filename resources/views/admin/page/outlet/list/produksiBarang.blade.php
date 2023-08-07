@extends('admin.app')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <a href="{{url('/outlet?outlet='.$outlet.'&_'. $crsf)}}" class="btn btn-primary"><p class="text-light m-0"><i class="fas fa-chevron-circle-left"></i>  Kembali</p></a>
                            {{-- <x-button href="{{url('/')}}">Tes</x-button> --}}
                            <h4>Produksi Barang Cabang </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-xl-3">
                       @include('admin.page.outlet.partial.tambah-produksi')
                    </div>
                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                @include('admin.page.outlet.partial.table-produksi')
                            </div>
                        </div>
                    </div>
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
