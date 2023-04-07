@php
    $favicon = Organization::get('favicon');
@endphp
@isset($favicon)
    <link rel="icon" type="image/x-icon" href="{{ asset("storage/{$favicon}") }}">
@endisset
