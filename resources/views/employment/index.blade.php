@extends('layouts.admin')

@section('title', 'Partner Management')
@section('heading', 'Partner Management')

@section('main-content')
<div class="mb-3">
    <div id="customer-table" class="mb-3">
        <a href="{{ route('employment-form.upload') }}" class="btn btn-sm btn-primary mb-3">Upload Data</a>
        <div class="card">
            <div class="card-body overflow">
                <h3 class="text-center">Employment Data</h3>
                <hr>
                <table class="table table-bordered table-hover myTable"  id="tableEmployment">
                    <thead>
                        <tr>
                            <th class="text-center">EID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Position</th>
                            <th class="text-center">Status</th>
                            <th class=" text-center">Join Date</th>
                            
                            <th class="text-center">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $datas)
                        <tr>
                            <td>{{ $datas['eid'] }}</td>
                            <td>{{ $datas['name'] }}</td>
                            <td>{{ $datas['position'] }}</td>
                            <td>{{ $datas['status'] }}</td>
                            <td>{{ date("d F Y", strtotime($datas["join"])) }}</td>
                            
                            <td>
                                <a class="btn btn-info" href="{{ route('employment-form.edit',['eid'=>$datas->eid]) }}">Update</a>
                                <a onclick="return  confirm('are you sure?')" class="btn btn-danger" href="{{ route('employment-form.delete',['eid'=>$datas->eid])  }}">Delete</a>
                                <a class="btn btn-primary" href="{{ route('employment-form.info',['eid'=>$datas->eid])  }}">Info</a>
                            </td>
                            
                            
                        </tr>
                            
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
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

