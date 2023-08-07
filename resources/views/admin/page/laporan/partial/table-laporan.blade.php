    <div class="table-responsive mb-4">
        <form action="{{ url('/laporan') }}" class="hstack gap-3 mb-3 filter" method="get"
            style="min-width: 200px; max-width: 400px;">
            @csrf
            <input type="hidden" name="outlet" value="{{ $outlet }}">
            <input class="form-control me-auto" type="date" name="date" value="{{ $date }}">
            <button type="submit" class="btn btn-primary">Filter</button>
            @csrf
        </form>
        <table class="table align-middle datatable dt-responsive table-check nowrap" id="datatable-buttons"
            style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Judul Laporan</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Gambar</th>
                    <th style="width: 80px; min-width: 80px;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laporan as $key => $laporan)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ date('H:i:s', strtotime($laporan->created_at)) }}</td>
                        <td>{{ $laporan->judul }}</td>
                        <td>@php
                            echo substr($laporan->keterangan, 0, 6) . '...';
                        @endphp</td>
                        <td> <img style="object-fit: cover !important;" class="avatar-md rounded-circle me-2"
                                src="{{ asset('storage/laporan/' . $laporan->image) }}" alt=""> </td>
                        <td>
                            <button type="button" data-uid="{{ $laporan->uid_laporan }}"
                                data-judul="{{ $laporan->judul }}" data-keterangan="{{ $laporan->keterangan }}"
                                data-bs-toggle="modal" data-bs-target="#modalLaporan"
                                class=" btn btn-primary modal-outlet  waves-effect waves-light"><i
                                    class="fas fa-pen icons font-size-16 text-success me-1"></i></button>

                            <a href="{{ url('/hapusLaporan/' . $laporan->uid_laporan) }}"
                                class="button  btn btn-danger  waves-effect waves-light">
                                <i style="color:white" class="fas fa-trash icons font-size-16 text-success me-1"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                @include('admin.page.laporan.partial.modal-laporan')


            </tbody>
        </table>
        <!-- end table -->
    </div>
