@extends('layouts.master')

@section('title')System Configuration
{{ $title }}
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/sweetalert2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
@endpush

@section('content')

    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>City Configuration</h3>
        @endslot
        <li class="breadcrumb-item"><a href="{{ route('system-configuration-index') }}"> Index</a></li>
        <li class="breadcrumb-item"><a href="{{ route('config-city') }}"> City</a></li>
        <li class="breadcrumb-item"><a href="{{ route('config-city-create') }}"> Create City</a></li>
    @endcomponent
               
    <div class="container-fluid">

       
    </div>

@endsection
