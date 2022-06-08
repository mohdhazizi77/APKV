@extends('layouts.master')

@section('title')
    System Configuration
    {{ $title }}
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
@endpush

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>State Configuration</h3>
        @endslot
        <li class="breadcrumb-item"><a href="{{ route('system-configuration-index') }}"> Index</a></li>
        <li class="breadcrumb-item"><a href="{{ route('config-state.index') }}"> State</a></li>
        <li class="breadcrumb-item"><a href="#"> Update State</a></li>
    @endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <div class="card">

                    <form class="form theme-form" action="{{ route('config-state.update', $configState->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col">

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Parameter</label>
                                        <div class="col-sm-9">
                                            <input name="parameter" class="form-control" type="text"
                                                value="{{ $configState->parameter }}" />
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Index</label>
                                        <div class="col-sm-9">
                                            <input name="index" class="form-control digits" type="number"
                                                value="{{ $configState->index }}" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea name="description" class="form-control" rows="3" cols="5">{{ $configState->description }}</textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <br>
                            <div class="col-sm-9 offset-sm-3 text-end">
                                <a href="{{ route('config-state.index') }}">
                                    <input class="btn btn-light" type="button" value="Cancel" />
                                </a>
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
