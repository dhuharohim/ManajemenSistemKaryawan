@extends('layouts.user')

@section('title', 'Information')
@section('heading', 'Information')

@section('main-content')
    <div class="mb-3">
        <a href="{{ route('employment-user') }}" class="btn btn-secondary font-weight-bold mb-3">Back</a>
    </div>
    <div class="mb-3 mt-3">
        <style>
            /* -----
    SVG Icons - svgicons.sparkk.fr
    ----- */

            .svg-icon {
                width: 120px;
                height: 120px;
            }

            .svg-icon path,
            .svg-icon polygon,
            .svg-icon rect {
                fill: #4a4a4a;
            }

            .svg-icon circle {
                stroke: #4691f6;
                stroke-width: 1;
            }

        </style>
        <div class="container">
            <div class="row">
                <div class="col-2">

                </div>
                <div class="col-8">
                    <div class="card">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                    role="tab" aria-controls="nav-home" aria-selected="true">Employment Data</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">Personal Data</a>
                                <a class="nav-item nav-link" id="nav-payroll-tab" data-toggle="tab" href="#nav-payroll"
                                    role="tab" aria-controls="nav-payroll" aria-selected="false">Payroll</a>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <div class="card">
                        <center>
                            <svg class="svg-icon" style="text-align: center;" viewBox="0 0 20 20">
                            
                                <path fill="none"
                                    d="M16.853,8.355V5.888c0-3.015-2.467-5.482-5.482-5.482H8.629c-3.015,0-5.482,2.467-5.482,5.482v2.467l-2.741,7.127c0,1.371,4.295,4.112,9.594,4.112s9.594-2.741,9.594-4.112L16.853,8.355z M5.888,17.367c-0.284,0-0.514-0.23-0.514-0.514c0-0.284,0.23-0.514,0.514-0.514c0.284,0,0.514,0.23,0.514,0.514C6.402,17.137,6.173,17.367,5.888,17.367z M5.203,10c0-0.377,0.19-0.928,0.423-1.225c0,0,0.651-0.831,1.976-0.831c0.672,0,1.141,0.309,1.141,0.309C9.057,8.46,9.315,8.938,9.315,9.315v1.028c0,0.188-0.308,0.343-0.685,0.343H5.888C5.511,10.685,5.203,10.377,5.203,10z M7.944,16.853H7.259v-1.371l0.685-0.685V16.853z M9.657,16.853H8.629v-2.741h1.028V16.853zM8.972,13.426v-1.028c0-0.568,0.46-1.028,1.028-1.028c0.568,0,1.028,0.46,1.028,1.028v1.028H8.972z M11.371,16.853h-1.028v-2.741h1.028V16.853z M12.741,16.853h-0.685v-2.056l0.685,0.685V16.853z M14.112,17.367c-0.284,0-0.514-0.23-0.514-0.514c0-0.284,0.23-0.514,0.514-0.514c0.284,0,0.514,0.23,0.514,0.514C14.626,17.137,14.396,17.367,14.112,17.367z M14.112,10.685h-2.741c-0.377,0-0.685-0.154-0.685-0.343V9.315c0-0.377,0.258-0.855,0.572-1.062c0,0,0.469-0.309,1.141-0.309c1.325,0,1.976,0.831,1.976,0.831c0.232,0.297,0.423,0.848,0.423,1.225S14.489,10.685,14.112,10.685z M18.347,15.801c-0.041,0.016-0.083,0.023-0.124,0.023c-0.137,0-0.267-0.083-0.319-0.218l-2.492-6.401c-0.659-1.647-1.474-2.289-2.905-2.289c-0.95,0-1.746,0.589-1.754,0.595c-0.422,0.317-1.084,0.316-1.507,0C9.239,7.505,8.435,6.916,7.492,6.916c-1.431,0-2.246,0.642-2.906,2.292l-2.491,6.398c-0.069,0.176-0.268,0.264-0.443,0.195c-0.176-0.068-0.264-0.267-0.195-0.444l2.492-6.401c0.765-1.911,1.824-2.726,3.543-2.726c1.176,0,2.125,0.702,2.165,0.731c0.179,0.135,0.506,0.135,0.685,0c0.04-0.029,0.99-0.731,2.165-0.731c1.719,0,2.779,0.814,3.542,2.723l2.493,6.404C18.611,15.534,18.524,15.733,18.347,15.801z">
                                </path>
                            </svg>
                        </center>
                        
                    </div>
                        
                    
                </div>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="card">
                                <table class="table table-hover">
                                    <tr>
                                        <td>
                                            EID
                                        </td>
                                        <td>
                                            {{ $data->eid }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Email
                                        </td>
                                        <td>
                                            {{ $data->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Alternate Email
                                        </td>
                                        <td>
                                            {{ $data->alt_email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Join Date
                                        </td>
                                        <td>
                                            {{ $data->join }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Employment Type
                                        </td>
                                        <td>

                                            @if ($data->emp_type == 1)
                                                Outsourcing
                                            @else
                                                Regular
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Work Agreement
                                        </td>
                                        <td>

                                            @if ($data->work_agr == 1)
                                                Tetap
                                            @elseif($data->work_agr == 2)
                                                Kontrak
                                            @else
                                                Resign
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Status
                                        </td>
                                        <td>

                                            @if ($data->status == 1)
                                                ACTIVE
                                            @elseif($data->status == 2)
                                                OPEN INTERNSHIP
                                            @else
                                                BONDED INTERNSHIP
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Payment
                                        </td>
                                        <td>
                                            {{ $data->payment }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Work Agreement Type
                                        </td>
                                        <td>

                                            @if ($data->work_agr_type)
                                                PKWT
                                            @else
                                                PKWTT
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Payment Type
                                        </td>
                                        <td>

                                            @if ($data->payment_type)
                                                Paid
                                            @else
                                                Unpaid
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Alternate Date
                                        </td>
                                        <td>
                                            {{ $data->alt_date }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Unit
                                        </td>
                                        <td>

                                            @if ($data->unit == 1)
                                                Human Resource Development
                                            @else
                                                Finance
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Sub Unit
                                        </td>
                                        <td>

                                            @if ($data->sub_unit)
                                                Senior
                                            @else
                                                Junior
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Position
                                        </td>
                                        <td>

                                            @if ($data->position == 1)
                                                Senior Manager
                                            @else
                                                Junior Manager
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Work Agreement Document
                                        </td>
                                        <td>
                                            {{ $blob->name }}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="card">
                                <table class="table table-hover">
                                    <tr>
                                        <td>
                                            Full Name
                                        </td>
                                        <td>
                                            {{ $data->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ID(NIK)
                                        </td>
                                        <td>
                                            {{ $data->id_nik }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Birthplace
                                        </td>
                                        <td>
                                            {{ $data->birthplace }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Gender
                                        </td>
                                        <td>
                                            @if ($data->gender == 1)
                                                Male
                                            @else
                                                Female
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Phone Number
                                        </td>
                                        <td>
                                            {{ $data->phone }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Religion
                                        </td>
                                        <td>
                                            @if ($data->religion == 1)
                                                Christ
                                            @elseif($data->religion == 2)
                                                Islam
                                            @elseif($data->religion == 3)
                                                Hinduism
                                            @elseif($data->religion == 4)
                                                Buddhism
                                            @elseif($data->religion == 5)
                                                Agnostic
                                            @elseif($data->religion == 6)
                                                Ethnic Religion
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Province
                                        </td>
                                        <td>
                                            {{ $data->province }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            City
                                        </td>
                                        <td>
                                            {{ $data->city }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Sub District
                                        </td>
                                        <td>
                                            {{ $data->sub }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ZIP Code
                                        </td>
                                        <td>
                                            {{ $data->zip }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Address
                                        </td>
                                        <td>
                                            {{ $data->address }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            NPWP
                                        </td>
                                        <td>
                                            {{ $data->npwp }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Marriage Status
                                        </td>
                                        <td>
                                            {{ $data->marriage }}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-payroll" role="tabpanel" aria-labelledby="nav-payroll-tab">
                            <div class="card">
                                <table class="table table-hover" id="table-payroll">

                                    <thead>
                                        <tr>
                                            <th>Salary</th>
                                            <th>Effective Date</th>
                                            <th>Changes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($payroll as $key => $payrolls)
                                            <tr>
                                                <td class="salary">{{ $payrolls['salary'] }}</td>
                                                <td>{{ $payrolls['eff_date'] }}</td>
                                                <td class="changes">
                                                    @if ($key != 0)
                                                        {{ round((($payrolls['salary'] - $payroll[$key - 1]['salary']) / $payrolls['salary']) * 100, 2) }}%
                                                    @endif
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>

                            </div>

                            <span><a href="{{ route('form.payroll', ['eid' => $data->eid]) }}" class="btn btn-info mt-2">Add
                                    Salary</a></span>


                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>

@endsection
