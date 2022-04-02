@extends('layouts.admin')

@section('title', 'Attendance & Excuses')
@section('heading', 'Attendance & Excuses')

@section('main-content')

    <div class=" mb-3">
        
            
                <div class="card shadow-lg ">
                    <div class="card-body overflow">
                        <h3 class="text-center">Employment Attendance</h3>
                        <hr>
                        <table class="table table-bordered table-hover myTable">
                            <thead>
                                <th>EID</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Date</th>
                                <th>In</th>
                                <th>Out</th>
                            </thead>
                            <tbody>
                                
                                    <tr>
                                        @foreach ($data_emp as $data_emp)
                                        <td>{{ $data_emp['eid'] }}</td>
                                        <td>{{ $data_emp['name'] }}</td>
                                        <td> @if ($data_emp['position'] ==1)
                                            Senior Manager
                                            @else 
                                            Junior Manager
                                        @endif</td>
                                        @endforeach
                                        @foreach ($data_user as $data_user)
                                        <td>{{ date("d F Y", strtotime($data_user["date"])) }}</td>
                                        <td>{{ $data_user['punch_in'] }}</td>
                                        <td>{{ $data_user['punch_out'] }}</td>
                                        @endforeach
    
                                    </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            
            
                <div class="card shadow-lg mt-4">
                    <div class="card-body overflow">
                        <h3 class="text-center">Employment Excuses</h3>
                        <hr>
                        <table class="table table-bordered table-hover myTable">
                            <thead>
                                <th>EID</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Excuse</th>
                                <th>From</th>
                                <th>To</th>
                            </thead>
                            <tbody>
                                
                                    <tr>
                                        @foreach ($data_emp2 as $data_emp2)
                                        <td>{{ $data_emp2['eid'] }}</td>
                                        <td>{{ $data_emp2['name'] }}</td>
                                        <td> @if ($data_emp2['position'] ==1)
                                            Senior Manager
                                            @else 
                                            Junior Manager
                                        @endif</td>
                                        @endforeach
                                        @foreach ($data_ex as $data_ex)
                                        <td>{{ $data_ex['excuses_abs'] }}</td>
                                        <td>{{ date("d F Y", strtotime($data_ex["from_abs"])) }}</td>
                                        <td>{{ date("d F Y", strtotime($data_ex["to_abs"])) }}</td>
                                        @endforeach
    
                                    </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            
        
            
            

            

            
            
            
            <br>
            

        
    </div>


@endsection

@push('css')
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.11.3/r-2.2.9/sb-1.2.2/sp-1.4.0/datatables.min.css" />
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endpush

@push('js')
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.11.3/r-2.2.9/sb-1.2.2/sp-1.4.0/datatables.min.js"></script>
    <script src="{{ asset('js/dataTable.setup.js') }}"></script>
@endpush
