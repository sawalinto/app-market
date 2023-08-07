<div class="row p-2">
    {{-- @foreach ($ranking as $ranking) --}}
        @php
            $judul = ['Kebersihan', 'Solidaritas', 'Royalitas', 'Omset'];
            $class = ['bg-success', 'bg-info', 'bg-warning', 'bg-danger'];
            $nilai = [$ranking->kebersihan, $ranking->solidaritas, $ranking->royalitas, $ranking->omset];
            $array = array_sum($nilai);
            $star = ' <i class="mdi mdi-star"></i>';
        @endphp
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="text-center">
                            <div>
                                <a href="javascript:void(0);" class="text-primary display-5"><i
                                        class="mdi mdi-store"></i></a>
                                <h5 class="font-size-18">
                                    {{-- {{ $outadmin }} --}}
                                    {{ $ranking->outList->nama_outlet }}
                                </h5>
                            </div>
                            <div class="text-warning font-size-20">
                                {{-- @for ($i = 0; $i < 5; $i++) --}}
                                @if ($array >= 80 && $array < 160)
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                @elseif($array >= 160 && $array < 239)
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                @elseif($array >= 240 && $array < 320)
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                @elseif($array >= 320 && $array < 360)
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                @elseif($array >= 360 && $array <= 400)
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                @else
                                    <i class="mdi mdi-star-outline"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                @endif
                                {{-- @endfor --}}
                                {{-- {{ $array }} --}}
                                {{-- <i class="mdi mdi-star"></i>
                                <i class="mdi mdi-star"></i>
                                <i class="mdi mdi-star"></i>
                                <i class="mdi mdi-star-outline"></i> --}}
                            </div>

                            <div>
                                @foreach ($judul as $key => $judul)
                                    <div class="d-flex align-items-baseline justify-content-center">
                                        <span class="float-start p-2">{{ $judul }}</span>
                                        <div class="progress progress-sm flex-grow-1">
                                            <div class="progress-bar {{ $class[$key] }}" role="progressbar"
                                                aria-label="Success example" style="width: {{ $nilai[$key] }}%"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="float-end ms-2 p-2">{{ $nilai[$key] }}%</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!--end card body-->
            </div>
        </div>
    {{-- @endforeach --}}
</div>
