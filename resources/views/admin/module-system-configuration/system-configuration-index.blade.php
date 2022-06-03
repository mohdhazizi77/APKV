@extends('layouts.master')

@section('title')System Configuration
{{ $title }}
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>System Configuration</h3>
        @endslot
        <li class="breadcrumb-item"><a href="{{ route('system-configuration-index') }}"> Index</a></li>
    @endcomponent

    <div class="container-fluid">

        <div class="row">

            <div class="col-sm-3 col-xl-3 col-lg-3">
                <div class="card o-hidden border-0">
                    <a href="{{ route('config-state') }}">
                        <div class="bg-secondary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center">
                                    <i data-feather="map"></i>
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0 counter">State</h5>
                                    <i class="icon-bg" data-feather="map"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-3 col-xl-3 col-lg-3">
                <div class="card o-hidden border-0">
                    <a href="{{ route('system-configuration-index') }}">
                        <div class="bg-secondary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center">
                                    <i data-feather="compass"></i>
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0 counter">City</h5>
                                    <i class="icon-bg" data-feather="compass"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-3 col-xl-3 col-lg-3">
                <div class="card o-hidden border-0">
                    <a href="{{ route('system-configuration-index') }}">
                        <div class="bg-secondary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center">
                                    <i data-feather="map-pin"></i>
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0 counter">Postcode</h5>
                                    <i class="icon-bg" data-feather="map-pin"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    </div>

@endsection
