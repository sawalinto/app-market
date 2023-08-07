<div id="laporanList" class="modal fade" tabindex="-1" aria-labelledby="laporanListLabel" aria-hidden="true"
    data-bs-scroll="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="laporanListLabel">Laporan Outlet</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row" id="contentToExport">
                        <div class="col">
                            <img src="" id="imagePreview"
                                class="card-img-top" alt="..." style="max-height: 300px; object-fit: cover">
                            <div class="d-flex justify-content-between">
                                <h4 class="mt-2 d-inline-flex" id="name-user"></h4>
                                <p class=" mt-2 d-inline-flex" id="tanggal"></p>
                            </div>

                            <h5 id="judulLaporan"></h5>
                            <h6>Keterangan</h6>
                            <p id="ket">
                            
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button"  id="exportPdfButton" class="btn btn-primary waves-effect waves-light">Export
                            PDF</button>
                    </div>
                </div>
               
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
