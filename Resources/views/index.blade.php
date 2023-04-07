@extends('dashboard::layouts.master')

@section("content")
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="callout callout-info">
                        <p style="font-size: 1.2rem">
                            Hello {{ auth()->user()->name }}. Welcome to {{config('app.name')}}.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    @include('dashboard::client')
                    @include("dashboard::admin")
                </div>
            </div>
        </div>
    </div>
@endsection

