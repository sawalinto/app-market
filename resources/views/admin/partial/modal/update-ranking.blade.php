<div id="myRanking" class="modal fade" tabindex="-1" aria-labelledby="myRankingLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myRankingLabel">Edit Ranking Outlet</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/updateRanking') }}" method="post">
                @csrf
                @method('PUT')
                @php
                    
                @endphp
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <input type="hidden" id="uidRanking" name="uid">
                            <div class="form-group mb-3">
                                <label for="nama-outlet" class="col-form-label">Kebersihan</label>
                                <input type="number" class="form-control" id="kebersihan" name="kebersihan">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama-outlet" class="col-form-label">Solidaritas</label>
                                <input type="number" class="form-control" id="solidaritas" name="solidaritas">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama-outlet" class="col-form-label">Royalitas</label>
                                <input type="number" class="form-control" id="royalitas" name="royalitas">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama-outlet" class="col-form-label">Omset</label>
                                <input type="number" class="form-control" id="omset" name="omset">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" name="submit"
                        class="btn btn-primary waves-effect waves-light">Simpan</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
