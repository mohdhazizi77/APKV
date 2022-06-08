@extends('layouts.master')

@section('title')
    Registration
    {{ $title }}
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>Registration</h3>
        @endslot
        <li class="breadcrumb-item"><a href="#"> Index</a></li>
    @endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                    <a href="{{ route('student.index') }}">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center">
                                    <i data-feather="user-plus"></i>
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0 counter">Student</h5>
                                    <i class="icon-bg" data-feather="user-plus"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                    {{-- <a href="{{ route('registration-index') }}"> --}}
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center">
                                <i data-feather="package"></i>
                            </div>
                            <div class="media-body">
                                <h5 class="mb-0 counter">Subject</h5>
                                <i class="icon-bg" data-feather="package"></i>
                            </div>
                        </div>
                    </div>
                    {{-- </a> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
