<div class="row">
    <div class="col-xl-8">
        <div class="row">
            @foreach ($card as $key => $cards)
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h5 class="mb-3">{{$cards}}</h5>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="avatar-md">
                                        <a class="avatar-title bg-primary text-success font-size-20 rounded"
                                            href="{{ url($url[$key]) }}"><i
                                                class="fas {{$icon[$key]}} icons"></i></a>
                                    </div>
                                    {{-- <p class="fs-1 mb-0">4</p> --}}
                                </div>
                            </div>
                        </div>
                        <!--end card body-->
                    </div>
                    <!--end card-->
                </div>
            @endforeach
        </div>
    </div>
</div>
