<div class="card">
    <div class="card-body">
        <form action="{{ url('/createLaporan') }}" method="post"  enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $user->level }}" name="user">
            <div class="mb-3">
                <label for="penempatan" class="form-label font-size-13">Judul</label>
                <input type="text" class="form-control" name="judul" required>
            </div>
            <div class="mb-3">
                <label for="penempatan" class="form-label font-size-13 ">Upload Gambar</label>
                <input type="file" class="form-control" name="gambar">
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" required placeholder="Leave a comment here" name="keterangan" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Keterangan</label>
                  </div>
            </div>
            @if ($user->level === 'ALL' || $user->role === 'admin')
                <button type="submit" disabled name="submit"
                    class="btn btn-primary waves-effect waves-light w-100">Buat Laporan</button>
            @else
                <button type="submit" name="submit"
                    class="btn btn-primary waves-effect waves-light w-100">Buat Laporan</button>
            @endif

        </form>
    </div>
</div>
