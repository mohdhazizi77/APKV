@extends('layouts.master')

@section('title')Registration
{{ $title }}
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/date-picker.css') }}">
@endpush

@section('content')

    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>Student Registration</h3>
        @endslot
        <li class="breadcrumb-item"><a href="{{route('registration-index')}}"> Index</a></li>
        <li class="breadcrumb-item"><a href="{{route('student-registration')}}">Student</a></li>
    @endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 center-content">
                <div class="card">
                    <div class="card-body">
                        <form class="f1" method="post">
                            <div class="f1-steps">
                                <div class="f1-progress">
                                    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3"></div>
                                </div>
                                <div class="f1-step active">
                                    <div class="f1-step-icon"><i class="fa fa-address-book"></i></div>
                                    <p>Basic Information</p>
                                </div>
                                <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-building"></i></div>
                                    <p>College</p>
                                </div>
                                <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-briefcase"></i></div>
                                    <p>Subject</p>
                                </div>
                            </div>

                            <fieldset>
                                <div class="theme-form mega-form">

                                    <div class="mb-3">
                                        <label class="col-form-label">Name</label>
                                        <input class="form-control" type="text" placeholder="Enter name"/>
                                    </div>

                                </div>

                                <div class="row theme-form mega-form">

                                    <div class="col-xl-6 mb-3">
                                        <label class="col-form-label">MyKad</label>
                                        <input class="form-control" pattern="[0-9]{6}-[0-9]{2}-[0-9]{4}" type="text"
                                               maxlength="12" placeholder="Enter MyKad"/>
                                    </div>

                                    <div class="col-xl-6 mb-3">
                                        <label class="col-form-label">Date of Birth</label>
                                        <div class="input-group">
                                            <input class="datepicker-here form-control digits" type="text"
                                                   data-language="en" placeholder="Date of birth"/>
                                        </div>
                                    </div>

                                </div>

                                <div class="row theme-form mega-form">

                                    <div class="col-xl-6 mb-3">
                                        <label class="col-form-label">Email Address</label>
                                        <input class="form-control" type="email" placeholder="Enter email address"/>
                                    </div>

                                    <div class="col-xl-6 mb-3">
                                        <label class="col-form-label">Contact Number</label>
                                        <input class="form-control" type="text" placeholder="Enter contact number"/>
                                    </div>

                                </div>

                                <div class="row theme-form mega-form">

                                    <div class="col-xl-6 mb-3">
                                        <label class="col-form-label">Ethnicity</label>
                                        <select class="form-control">
                                            <option value="0">Select ethnicity</option>
                                            @foreach($listEthnicity as $row)
                                                <option value="{{ $row->id }}">{{ $row->parameter }}</option>
                                            @endforeach
                                            <option value="99">OTHERS</option>
                                        </select>
                                    </div>

                                    <div class="col-xl-6 mb-3">
                                        <label class="col-form-label">Religion</label>
                                        <select class="form-control">
                                            <option value="0">Select religion</option>
                                            @foreach($listReligion as $row)
                                                <option value="{{ $row->id }}">{{ $row->parameter }}</option>
                                            @endforeach
                                            <option value="99">OTHERS</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row theme-form mega-form">

                                    <div class="col-xl-12 mb-3">
                                        <label class="col-form-label">Address</label>
                                        <input class="form-control mb-3" type="text" placeholder="Enter address"/>
                                    </div>

                                </div>

                                <div class="row theme-form mega-form">

                                    <div class="col-xl-2 mb-3">
                                        <label class="col-form-label">Postcode</label>
                                        <input id="postcode" class="form-control" type="text"
                                               placeholder="Enter postcode" maxlength="5" onkeyup="getCity()"/>
                                    </div>
                                    <div class="col-xl-4 mb-3">
                                        <label class="col-form-label">City</label>
                                        <select id="city" class="form-control" onchange="getState()" disabled>
                                            <option value="0">Select city</option>
                                            @foreach($listCity as $row)
                                                <option value="{{ $row->id }}">{{ $row->parameter }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <label class="col-form-label">State</label>
                                        <select id="state" class="form-control" disabled>
                                            <option value="0">Select state</option>
                                            @foreach($listState as $row)
                                                <option value="{{ $row->id }}">{{ $row->parameter }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                <div class="row mt-lg-5">
                                    <div>
                                        <a href="{{route('registration-index')}}">
                                            <button class="btn btn-secondary">Back</button>
                                        </a>
                                        <button class="btn btn-primary btn-next float-end" type="button">Next</button>
                                    </div>
                                </div>

                            </fieldset>

                            <fieldset>

                                <div class=" row theme-form mega-form">

                                    <div class="col-xl-4 mb-3">
                                        <label class="col-form-label">State</label>
                                        <select class="form-control">
                                            <option value="0">Select state</option>
                                            @foreach($listState as $row)
                                                <option value="{{ $row->id }}">{{ $row->parameter }}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="col-xl-4 mb-3">
                                        <label class="col-form-label">Postcode</label>
                                        <select class="form-control">
                                            <option value="0">Select postcode</option>
                                            <option value="1">89500</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="theme-form mega-form">

                                    <div class="mb-3">
                                        <label class="col-form-label">Name</label>
                                        <input class="form-control" type="text" placeholder="Enter name"/>
                                    </div>

                                </div>

                                <div class="row theme-form mega-form">

                                    <div class="col-xl-6 mb-3">
                                        <label class="col-form-label">MyKad</label>
                                        <input class="form-control" pattern="[0-9]{6}-[0-9]{2}-[0-9]{4}" type="text"
                                               maxlength="12" placeholder="Enter MyKad"/>
                                    </div>

                                    <div class="col-xl-6 mb-3">
                                        <label class="col-form-label">Date of Birth</label>
                                        <div class="input-group">
                                            <input class="datepicker-here form-control digits" type="text"
                                                   data-language="en" placeholder="Date of birth"/>
                                        </div>
                                    </div>

                                </div>

                                <div class="f1-buttons">
                                    <button class="btn btn-primary btn-previous" type="button">Previous</button>
                                    <button class="btn btn-primary btn-next" type="button">Next</button>
                                </div>

                            </fieldset>

                            <fieldset>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')

        <script src="{{asset('assets/js/form-wizard/form-wizard-student.js')}}"></script>
        <script src="{{asset('assets/js/form-wizard/jquery.backstretch.min.js')}}"></script>

        <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
        <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
        <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>


        <script type="text/javascript">

            function getCity() {

                var parameter = $('#postcode').val();

                $.ajax({
                    type: 'GET',
                    url: 'getCity/' + parameter,
                    success: function (response) {
                        if (response.data == null) {
                            // console.log(response.data);
                        } else {
                            var cityId = response.data.config_city_fk;
                            $('#city').val(cityId).change();
                        }
                    }
                })
            }

            function getState() {

                var cityId = $('#city').val();

                $.ajax({
                    type: 'GET',
                    url: 'getState/' + cityId,
                    success: function (response) {
                        if (response.data == null) {
                            // console.log(response.data);
                        } else {
                            var stateId = response.data.config_state_fk;
                            $('#state').val(stateId).change();
                        }
                    }
                })
            }

        </script>
    @endpush

@endsection
