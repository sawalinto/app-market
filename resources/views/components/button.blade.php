@props(['href' => null])
<a {{ $attributes->merge(['href' => $href]) }}  class="btn btn-primary">
    {{ $slot }}
</a>