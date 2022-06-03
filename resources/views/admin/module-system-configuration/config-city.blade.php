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
       @endcomponent
               
    <div class="container-fluid">
        <a href="{{ route('config-city-create') }}">
            <button type="button" class="btn btn-primary float-right">
                        <i class="fa fa-plus-square"></i>
            </button>
        </a>
    </div>

    <div class="container-fluid">

        <div class="row">

            <div class="col-sm-12">
                <div class="card">

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-hover" id="basic-1">
                                <thead class="bg-primary">
                                <tr>
                                    <th class="text-center" scope="col">#</th>
                                    <th scope="col">State</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Description</th>
                                    <th class="text-center" scope="col">Index</th>
                                    <th class="text-center" scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($dataCity as $row)
                                    <tr>
                                        <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $row->state }}</td>
                                        <td>{{ $row->parameter }}</td>
                                        <td>{{ $row->description }}</td>
                                        <td class="text-center">{{ $row->index }}</td>
                                        <td class="text-center">

                                            <button class="btn btn-secondary"><i
                                                    class="fa fa-edit"></i>
                                            </button>

                                            <button class="btn btn-danger sweet-2" type="button" onclick="isDelete()">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>


        <script type="text/javascript">

            function isDelete() {

                var SweetAlert_custom = {
                    init: function () {
                        document.querySelector('.sweet-2').onclick = function () {
                            swal("Here's the title!", "...and here's the text!");
                        };


                    }
                };

                (function ($) {
                    SweetAlert_custom.init()
                })(jQuery);
            }

        </script>
    @endpush

@endsection
