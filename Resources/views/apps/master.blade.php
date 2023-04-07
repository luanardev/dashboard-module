@extends('layouts.app')

@section('favicon')
    @include('dashboard::favicon')
@endsection

@section('control')
    @include('dashboard::apps.control')
@endsection

@section('navbar')
    @include('dashboard::apps.navbar')
@endsection



@section('css')
    @livewireAlertStyles
@endsection

@section('js')
    @livewireAlertScripts
@endsection
