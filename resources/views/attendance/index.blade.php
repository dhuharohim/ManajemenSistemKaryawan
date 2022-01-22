@extends('layouts.admin')

@section('title', 'Attendance')
@section('heading', 'Attendance')

@section('main-content')

    <div class="container mb-3">
        <div class="table_attendance mb-3">
            <div class="card">
                <div class="card-body overflow">
                    <h3>Profile</h3>
                    <br>
                    
                    <table class="table table-hover">
                        @foreach($data_emp as $datas)
                        <tr>
                            <td>
                                EID
                            </td>
                            <td>
                                {{ $datas['eid'] }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Name
                            </td>
                            <td>
                                {{ $datas['name'] }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Position
                            </td>
                            <td>
                                {{ $datas['position'] }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Join Date
                            </td>
                            <td>
                                {{ date("d F Y", strtotime($datas["join"])) }}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    
                
                </div>

            </div>
            <div class="card mt-5">
                <div class="card-body overflow">
                    <h3>My Attendance</h3>
                    <br>
                    <table class="table table-bordered table-hover myTable">
                        <thead>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            
                        </thead>
                        <tbody>
                            @foreach ($data as $datas)
                            <tr>
                                <td>{{ date("d F Y", strtotime($datas["date_abs"])) }}</td>
                                <td>{{ $datas['time_abs'] }}</td>
                                <td> {{ $datas['status_abs'] }}</td>
                                    
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <form action="{{ route('attendance.store') }}" method="post">
                @csrf
                <input type="hidden" name="date_abs" value="{{ date('Y-m-d') }}">
                <input type="hidden" name="time_abs" value="{{ date('H:i:s') }}">
                <input type="hidden" name="status_abs" value="Hadir">

                <button class="btn btn-primary">Make Attendance</button>
            </form>

            <div class="card mt-5">
                <div class="card-body overflow">
                    <h3>My Excuses</h3>
                    <br>
                    <table class="table table-bordered table-hover myTable">
                        <thead>
                            <th>Excuses</th>
                            <th>From</th>
                            <th>To</th>
                            
                        </thead>
                        <tbody>
                            @foreach($data_ex as $datas)
                            <tr>
                                <td>{{ $datas['excuses_abs'] }}</td>
                                <td>{{ date("d F Y", strtotime($datas["from_abs"])) }}</td>
                                <td> {{ date("d F Y", strtotime($datas["to_abs"])) }}</td>
                                    
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="{{ route('attendance-form.excuse') }}" class="btn btn-sm btn-danger mt-3">Make Leave Excuse</a>
        </div>
    </div>


@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/r-2.2.9/sb-1.2.2/sp-1.4.0/datatables.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endpush

@push('js')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/r-2.2.9/sb-1.2.2/sp-1.4.0/datatables.min.js"></script>
    <script src="{{ asset('js/dataTable.setup.js') }}"></script>
@endpush