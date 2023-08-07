<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link href="{{ asset('admin/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    @include('admin.partial.link')
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>



</head>

<body data-topbar="dark">
    <div id="layout-wrapper">
        @php
            $isAuth = url('/login');
            $isRegis = url('/register');
            $url = request()->url();
        @endphp
        @includeWhen($isAuth !== $url && $isRegis !== $url, 'admin.partial.header')
        @includeWhen($isAuth !== $url && $isRegis !== $url, 'admin.partial.vertikal-menu')
        <div class="section">

            @yield('content')


            @includeWhen($isAuth !== $url && $isRegis !== $url, 'admin.partial.footer')
        </div>
    </div>

    @include('admin.partial.right-bar')



    <script src="{{ asset('admin/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('admin/libs/feather-icons/feather.min.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('admin/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Plugins js-->
    <script src="{{ asset('admin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('admin/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}">
    </script>

    <script src="{{ asset('admin/js/pages/allchart.js') }}"></script>

    <script src="{{ asset('admin/libs/chart.js/Chart.bundle.min.js') }}"></script>




    {{-- choice picker --}}
    <script src="{{ asset('admin/js/pages/form-advanced.init.js') }}"></script>
    <script src="{{ asset('admin/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
    <script src="{{ asset('admin/libs/pace-js/pace.min.js') }}"></script>


    <script src="{{ asset('admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src=" asset('admin/js/pages/ecommerce-cart.init.js')"></script>
    <!-- Sweet Alerts js -->
    <script src="{{ asset('admin/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <!-- init js -->



    {{-- <script>
        var myModal = document.getElementByClass('modal-karyawan')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
        })
    </script> --}}
    <script src="{{ asset('admin/js/app.js') }}"></script>
    @if ($msg = Session::get('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Horeee!!!',
                text: '{{ $msg }}',
                timer: 3000,
                showConfirmButton: false
            })
        </script>
    @endif
    <script>
        $(document).ready(function() {
            $("#datatable").DataTable(),
                $("#datatable-buttons")
                .DataTable({

                    // buttons: ["print", "excel", "pdf"],
                    buttons: [{
                            extend: 'print',
                            text: 'Cetak',
                            exportOptions: {
                                columns: ':not(:last-child)' // Menghilangkan kolom terakhir dari cetakan
                            }
                        },
                        {
                            extend: 'excel',
                            text: 'Excel',
                            exportOptions: {
                                columns: ':not(:last-child)' // Menghilangkan kolom terakhir dari file Excel
                            }
                        },
                        {
                            extend: 'pdf',
                            text: 'PDF',
                            exportOptions: {
                                columns: ':not(:last-child)' // Menghilangkan kolom terakhir dari file Excel
                            }
                        },
                    ]

                })
                .buttons()
                .container()
                .appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
                $(".dataTables_length select").addClass("form-select form-select-sm");
        });
        $(document).ready(function() {
            $(".datatable-buttons")
                .DataTable({
                    // lengthChange: !1,
                    buttons: ["print", "excel", "pdf"],
                })
                .buttons()
                .container()
                .appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
                $(".dataTables_length select").addClass("form-select form-select-sm");
        });


        $(document).ready(function() {
            $(document).on('click', '.button', function() {
                var getLink = $(this).attr('href');
                Swal.fire({
                    title: "Yakin hapus data?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonColor: '#3085d6',
                    cancelButtonText: "Batal"
                }).then(result => {
                    //jika klik ya maka arahkan ke proses.php
                    if (result.isConfirmed) {
                        window.location.href = getLink;
                    }
                });
                return false;
            });
        });
        $(document).ready(function() {
            $(document).on('click', '.update', function() {
                var getLink = $(this).attr('href');
                Swal.fire({
                    title: "Yakin Orderan Ditolak?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonColor: '#3085d6',
                    cancelButtonText: "Batal"
                }).then(result => {
                    //jika klik ya maka arahkan ke proses.php
                    if (result.isConfirmed) {
                        window.location.href = getLink;
                    }
                });
                return false;
            });
        });
    </script>
    <script src="{{ asset('admin/js/mystyle.js') }}"></script>
    <script>
        // $(document).ready(function() {
        //     $('option[value="kitchen"]').prop('selected', true);
        // });
    </script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script> --}}

    <script>
        function exportToPdf() {
            // Mendapatkan elemen div dengan ID "contentToExport"
            const contentToExport = document.getElementById('contentToExport');

            // Menggunakan html2canvas untuk mengubah konten menjadi gambar
            html2canvas(contentToExport).then(function(canvas) {
                const imgData = canvas.toDataURL('image/png');

                // Mengatur ukuran halaman PDF sesuai dengan ukuran konten yang diekspor
                const pdf = new jsPDF({
                    orientation: 'portrait',
                    unit: 'mm',
                    format: 'a4'
                });

                // Menambahkan gambar ke halaman PDF
                pdf.addImage(imgData, 'PNG', 10, 10, 190, 280);
                pdf.save('export_download.pdf');
            });
        }

        // Attach event listener to the button
        const exportPdfButton = document.getElementById('exportPdfButton');
        exportPdfButton.addEventListener('click', exportToPdf);
    </script>
</body>


</html>
