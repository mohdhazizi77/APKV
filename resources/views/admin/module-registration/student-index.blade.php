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
            <h3>Student</h3>
        @endslot
        <li class="breadcrumb-item"><a href="{{ route('registration-index') }}"> Index</a></li>
        <li class="breadcrumb-item"><a href="#"> Student</a></li>
    @endcomponent

    <div class="container-fluid text-end">
        <a href="{{ route('student.create') }}">
            <button type="button" class="btn btn-primary float-right">
                <i class="fa fa-plus-square"></i>
            </button>
        </a>
    </div>

    <br>

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
                                        <th class="text-center" scope="col">Vocational College</th>
                                        <th class="text-center" scope="col">NRIC</th>
                                        <th class="text-center" scope="col">Name</th>
                                        <th class="text-center" scope="col">Contact Number</th>
                                        <th class="text-center" scope="col">Email</th>
                                        <th class="text-center" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listStudent as $listStudent)
                                        <tr>
                                            <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                                            <td class="text-center">{{ $listStudent->nric }}</td>
                                            <td class="text-center">{{ $listStudent->nric }}</td>
                                            <td>{{ $listStudent->name }}</td>
                                            <td class="text-center">{{ $listStudent->contact_number }}</td>
                                            <td class="text-center">{{ $listStudent->email }}</td>
                                            <td class="text-center">

                                                {{-- <form action="{{ route('config-state.destroy', $row) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE') --}}

                                                <button class="btn btn-primary" type="button"><i class="fa fa-eye"></i>
                                                </button>

                                                {{-- <a href="{{ route('config-state.edit', $row) }}"> --}}
                                                <button class="btn btn-secondary" type="button"><i
                                                        class="fa fa-edit"></i>
                                                </button>
                                                {{-- </a> --}}

                                                <button onclick="return confirm('Are you sure?')"
                                                    class="btn btn-danger sweet-2">
                                                    <i class=" fa fa-trash"></i>
                                                </button>
                                                {{-- </form> --}}
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
                    init: function() {
                        document.querySelector('.sweet-2').onclick = function() {
                            swal("Here's the title!", "...and here's the text!");
                        };


                    }
                };

                (function($) {
                    SweetAlert_custom.init()
                })(jQuery);
            }
        </script>
    @endpush
@endsection
