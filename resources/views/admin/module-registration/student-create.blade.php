@extends('layouts.master')

@section('title')
    Registration
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
        <li class="breadcrumb-item"><a href="{{ route('registration-index') }}"> Index</a></li>
        <li class="breadcrumb-item"><a href="{{ route('student.index') }}">Student</a></li>
        <li class="breadcrumb-item"><a href="#">Register Student</a></li>
    @endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 center-content">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('student.store') }}">

                            @csrf

                            <div class="theme-form mega-form">

                                <div class="mb-3">
                                    <label class="col-form-label">NAME</label>
                                    <input required class="form-control" type="text" />
                                </div>

                            </div>

                            <div class="row theme-form mega-form">

                                <div class="col-xl-6 mb-3">
                                    <label class="col-form-label">NRIC</label>
                                    <input required class="form-control" pattern="[0-9]{6}[0-9]{2}[0-9]{4}" type="text"
                                        maxlength="12" />
                                </div>

                                <div class="col-xl-6 mb-3">
                                    <label class="col-form-label">DATE OF BIRTH</label>
                                    <div class="input-group">
                                        <input required class="datepicker-here form-control digits" type="text"
                                            data-language="en" />
                                    </div>
                                </div>

                            </div>

                            <div class="row theme-form mega-form">

                                <div class="col-xl-6 mb-3">
                                    <label class="col-form-label">CONTACT NUMBER</label>
                                    <input required class="form-control" type="text" />
                                </div>

                                <div class="col-xl-6 mb-3">
                                    <label class="col-form-label">EMAIL</label>
                                    <input class="form-control" type="email" />
                                </div>

                            </div>

                            <div class="row theme-form mega-form">

                                <div class="col-xl-6 mb-3">
                                    <label class="col-form-label">ETHNICITY</label>
                                    <select required class="form-control">
                                        <option disabled selected value="">--SELECT--</option>
                                        @foreach ($listEthnicity as $listEthnicity)
                                            <option value="{{ $listEthnicity->id }}">{{ $listEthnicity->parameter }}
                                            </option>
                                        @endforeach
                                        <option value="99">OTHERS</option>
                                    </select>
                                </div>

                                <div class="col-xl-6 mb-3">
                                    <label class="col-form-label">RELIGION</label>
                                    <select required class="form-control">
                                        <option disabled selected value="">--SELECT--</option>
                                        @foreach ($listReligion as $listReligion)
                                            <option value="{{ $listReligion->id }}">{{ $listReligion->parameter }}
                                            </option>
                                        @endforeach
                                        <option value="99">OTHERS</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row theme-form mega-form">

                                <div class="col-xl-12 mb-3">
                                    <label class="col-form-label">ADDRESS</label>
                                    <input required class="form-control mb-3" type="text" />
                                </div>

                            </div>

                            <div class="row theme-form mega-form">

                                <div class="col-xl-6 mb-3">
                                    <label class="col-form-label">STATE</label>
                                    <select required id="state" class="form-control">
                                        <option disabled selected value="">--SELECT--</option>
                                        @foreach ($listState as $listState)
                                            <option value="{{ $listState->id }}">{{ $listState->parameter }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-xl-4 mb-3">
                                    <label class="col-form-label">CITY</label>
                                    <select required id="city" class="form-control">
                                        <option disabled selected value="">--SELECT--</option>
                                    </select>
                                </div>

                                <div class="col-xl-2 mb-3">
                                    <label class="col-form-label">POSTCODE</label>
                                    <input required id="postcode" class="form-control" type="number" maxlength="5"
                                        oninput="this.value=this.value.slice(0,this.maxLength)" />
                                </div>

                            </div>

                            <div class="row mt-lg-5">
                                <div>
                                    <a href="{{ route('student.index') }}">
                                        <button class="btn btn-light" type="button">Cancel</button>
                                    </a>
                                    <button class="btn btn-primary btn-next float-end" type="submit">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
        <script src="{{ asset('assets/js/form-wizard/form-wizard-student.js') }}"></script>
        <script src="{{ asset('assets/js/form-wizard/jquery.backstretch.min.js') }}"></script>

        <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
        <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
        <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#state').on('change', function() {
                    let stateID = $('#state').val();
                    $('#city').empty();
                    $('#city').append(`<option disabled selected value="">Retrieving data...</option>`);
                    $.ajax({
                        type: 'GET',
                        url: 'getCity/' + stateID,
                        success: function(response) {
                            $('#city').empty();
                            $('#city').append(
                                `<option disabled selected value="">--SELECT--</option>`
                            );
                            response.data.forEach(element => {
                                $('#city').append(
                                    `<option value="${element['id']}">${element['parameter']}</option>`
                                );
                            });
                        }
                    })
                })
            })

            // function getCity() {

            //     var parameter = $('#state').val();
            //     $.ajax({
            //         type: 'GET',
            //         url: 'getCity/' + parameter,
            //         success: function(response) {
            //             if (response.data == null) {
            //                 console.log(response.data);
            //             } else {
            //                 var cityId = response.data.config_city_fk;
            //                 $('#city').val(cityId).change();
            //             }
            //         }
            //     })
            // }
        </script>
    @endpush
@endsection
