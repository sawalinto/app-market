<div class="card">

    <div class="card-body">
        <div>
            <div class="border-bottom border-light pb-2">
                <h5 class="card-title">Peta Lokasi</h5>
                <div class="d-flex justify-content-between">
                    <p class="text-muted mb-0">{{ $outadmin }}</p>
                    {{-- <span class="text-muted">$50,000</span> --}}
                </div>
            </div>
            <div class="mt-2">
                <iframe src="https://www.google.com/maps/embed?pb={{ $map }}" width="100%" height="350"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!--end card body-->
</div>
