@foreach ($outletmid as $outlets)
@if ($outlets->kode_outlet == $user->level)
    {{ $outlets->nama_outlet }}
@endif
@endforeach