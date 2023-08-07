<div class="col-xl-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div>
                <h5 class="mb-3">Stok Barang</h5>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="avatar-md">
                        <a class="avatar-title bg-primary text-success font-size-20 rounded"
                            href="
                            @if($user->level)
                                {{url('/outlet?outlet='. $outlet .'&_'. $csrfToken . '&hal=stokBarang')}}
                            @endif
                            "><i class="icons mdi mdi-bookshelf"></i></a>
                    </div>
                    <p class="fs-1 mb-0">{{ $stokBarang->count() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div>
                <h5 class="mb-3">Order Barang</h5>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="avatar-md">
                        <a class="avatar-title bg-primary text-success font-size-20 rounded"
                            href="{{url('/orderBarang?getOrder='.$outlet.'&_'.$csrfToken.'&date='.date("Y-m-d").'&'.$csrfToken)}}"><i class="icons mdi mdi-food"></i></a>
                    </div>
                    <p class="fs-1 mb-0">{{ $orderBarang->count() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div>
                <h5 class="mb-3">Produksi Barang</h5>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="avatar-md">
                        <a class="avatar-title bg-primary text-success font-size-20 rounded"
                            href="{{url('/produksiBarang?outlet='.$outlet.'&date='.date("Y-m-d"))}}"><i class="icons mdi mdi-food-drumstick"></i></a>
                    </div>
                    <p class="fs-1 mb-0">{{ $produksi->count() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div>
                <h5 class="mb-3">Laporan</h5>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="avatar-md">
                        <a class="avatar-title bg-primary text-success font-size-20 rounded"
                            href="{{url('/laporan?outlet='.$outlet.'&date='.date("Y-m-d"))}}"><i class="icons mdi mdi-mail"></i></a>
                    </div>
                    <p class="fs-1 mb-0">{{ $laporan->count() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

