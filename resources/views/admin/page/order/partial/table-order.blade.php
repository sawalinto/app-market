    <div class="table-responsive mb-4">
        <form action="{{ url('/orderBarang') }}" class="hstack gap-3 mb-3 filter" method="get"
            style="min-width: 200px; max-width: 400px;">
            @csrf
            <input type="hidden" name="getOrder" value="{{ $getOrder }}">
            <input class="form-control me-auto" type="date" name="date" value="{{ $date }}">
            <button type="submit" class="btn btn-primary">Filter</button>
            @csrf

        </form>
        <table class="table align-middle datatable dt-responsive table-check nowrap" id="datatable-buttons"
            style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Sisa</th>
                    <th scope="col">Pesan</th>
                    <th scope="col">Kategory</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Status</th>
                    <th style="width: 80px; min-width: 80px;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orderList as $order)
                    @if ($user->level === 'ALL' || $user->level === $order->outlet_order)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ date('Y/m/d', strtotime($order->created_at)) }}</td>
                            <td>{{ $order->nama_barang }}</td>
                            <td>{{ $order->sisa_barang }}</td>
                            <td>{{ $order->jumlah_order }}</td>
                            <td>{{ $order->barangList->kategori_barang }}
                            </td>
                            <td>{{ $order->satuan }}</td>
                            <td>
                                <button type="button"
                                    class="btn
                                @if ($order->status === 'Pending') btn-secondary
                                @elseif($order->status === 'Selesai')
                                    btn-warning text-dark
                                @elseif($order->status === 'Disetujui')
                                    btn-primary
                                @elseif($order->status === 'Ditolak')
                                    btn-danger 
                                    @else btn-info @endif btn-sm btn-rounded">
                                    {{ $order->status }}
                                </button>
                            </td>
                            <td>
                                @if ($user->level === 'ALL')
                                    @php
                                        // dd($order->status);
                                        $status = $order->status === 'Pending' ? 'Disetujui' : ($order->status === 'Ditolak' ? 'Disetujui' : '');
                                        $tolak = $order->status === 'Ditolak' ? 'd-none' : 'btn-danger';
                                    @endphp
                                    @if ($order->status === 'Pending' || $order->status === 'Ditolak')
                                        <a type="button"
                                            href="{{ url('/updatePending/' . $order->uid_order . '?action=' . $status . '&getOrder=' . $order->outlet_order) }}"
                                            class=" btn {{ $order->status === 'Disetujui' ? 'd-none' : 'btn-primary' }} modal-outlet  waves-effect waves-light"><i
                                                class="fas fa-check-circle icons font-size-16 text-success me-1"></i>{{ $order->status === 'Pending' ? 'Setujui' : 'Setujui' }}</a>
                                        <a href="{{ url('/updatePending/' . $order->uid_order . '?action=Ditolak&getOrder=' . $order->outlet_order) }}"
                                            class="update {{ $tolak }} btn  waves-effect waves-light">
                                            <i style="color:white"
                                                class="fas fa-times-circle icons font-size-16 text-success me-1"></i>
                                            Tolak
                                        </a>
                                    @elseif($order->status === 'Selesai')
                                        <a class="btn btn-warning waves-effect waves-light text-dark">
                                            <i class=" fas fa-check-circle  font-size-16 text-dark me-1"></i>
                                            Berhasil
                                        </a>
                                    @elseif($order->status === 'Disetujui')
                                        <a href="{{ url('/updatePending/' . $order->uid_order . '?action=Ditolak&getOrder=' . $order->outlet_order) }}"
                                            class="update {{ $tolak }} btn  waves-effect waves-light">
                                            <i style="color:white"
                                                class="fas fa-times-circle icons font-size-16 text-success me-1"></i>
                                            Tolak
                                        </a>
                                    @endif
                                @elseif($order->status === 'Disetujui')
                                    <a href="{{ url('/updatePending/' . $order->uid_order . '?action=Selesai&getOrder=' . $user->level) }}"
                                        class="btn btn-primary waves-effect waves-light">
                                        <i style="color:white"
                                            class="fas fa-check-circle icons font-size-16 text-success me-1"></i>
                                        Selesai
                                    </a>
                                @elseif($order->status === 'Selesai')
                                    <a class="btn btn-warning waves-effect waves-light text-dark">
                                        <i class=" fas fa-check-circle  font-size-16 text-dark me-1"></i>
                                        Berhasil
                                    </a>
                                @else
                                    <a href="{{ url('/hapusOrder/' . $order->uid_order) }}" type="button"
                                        class="button btn btn-danger   waves-effect waves-light"><i style="color:white"
                                            class="mdi mdi-trash-can icons font-size-16 text-success me-1"></i>Hapus</a>
                                @endif


                            </td>
                        </tr>
                    @endif
                @endforeach
                {{-- @include('admin.partial.modal.update-barang') --}}


            </tbody>
        </table>
        <!-- end table -->
    </div>
