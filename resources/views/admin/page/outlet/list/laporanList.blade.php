<div class="row p-3">
    @foreach ($laporan as $key => $laporan)
        <div class="col-xl-2 col-sm-6">
            <div class="card"
                style="background: rgb(255,255,255);
    background: linear-gradient(-180deg, rgba(255,255,255,1) 18%, rgba(106,106,255,1) 81%, rgba(9,0,162,1) 100%);">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <img style="object-fit: cover" src="storage/laporan/{{$laporan->image}}" alt=""
                                class="avatar-lg rounded-circle img-thumbnail">
                        </div>
                        <div class="flex-1 ms-3">
                            <h5 class="font-size-15 mb-1"><a href="#"
                                    class="text-dark">{{ $laporan->user->name }}</a></h5>
                            {{-- <p class="text-muted mb-0">Supervisor</p> --}}
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        <p class=" mb-0" style="color: white">
                            {{ $laporan->judul }}</p>
                    </div>
                </div>
                <div class="btn-group" role="group">
                    <a href="{{ url('/hapusLaporan/'.$laporan->uid_laporan) }}" type="button" class="button btn btn-danger text-truncate"><i
                            class="fas fa-trash me-1"></i></a>

                    <button class="btn btn-primary text-truncate" data-user="{{ $laporan->user->name }}"
                        data-judul="{{ $laporan->judul }}" data-gambar="{{ $laporan->image }}"
                        data-date="{{$laporan->created_at}}"
                        data-keterangan="{{ $laporan->keterangan }}" data-bs-toggle="modal"
                        data-bs-target="#laporanList"><i class="fas fa-eye me-1"></i></button>
                    @include('admin.partial.modal.modal-laporan')
                </div>
            </div>
            <!-- end card -->
        </div>
    @endforeach

</div>
