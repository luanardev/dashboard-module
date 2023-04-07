@extends('layouts.master')

@section('vendor_css')
    @stack('css')
    @yield('css')
@endsection

@section('favicon')
    @include('dashboard::favicon')
@endsection

@section('body-class', 'hold-transition layout-top-nav')

@section('body')
    <div class="wrapper">

        {{-- Top Navbar --}}
        @include('dashboard::layouts.navbar')

        {{-- Content Wrapper --}}
        @include('dashboard::layouts.content')

        {{-- Control --}}
        @include('dashboard::layouts.control')

        {{-- Footer --}}
        @include('partials.footer')

    </div>
    @yield('components')
@endsection

@section('vendor_js')
    @stack('js')
    @yield('js')
@endsection
