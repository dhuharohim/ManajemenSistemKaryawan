@extends('layouts.admin')

@section('title', 'Partner Management')
@section('heading', 'Partner Management')

@section('main-content')
<div class="mb-3">
    <div id="customer-table" class="mb-3">
        <a href="{{ route('transaction.new') }}" class="btn btn-sm btn-primary mb-3">New Transaction</a>
        <div class="card">
            <div class="card-body w-100">
                <h3 class="text-center">Customer Table</h3>
                <hr>
                <table class="table table-bordered table-hover myTable">
                    <thead>
                        <tr>
                            <th class="wrap-width text-center">No.</th>
                            <th class="text-center">Invoice</th>
                            <th class="text-center">Customer</th>
                            <th class="text-center">Due Date</th>
                            <th class="wrap-width text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">No.</td>
                            <td class="text-center">Invoice</td>
                            <td class="text-center">Customer</td>
                            <td class="text-center">Due Date</td>
                            <td class="wrap-width text-center">Action</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="supplier-table">
        <a href="{{ route('transaction.new') }}" class="btn btn-sm btn-primary mb-3">New Transaction</a>
        <div class="card">
            <div class="card-body w-100">
                <h3 class="text-center">Supplier Table</h3>
                <hr>
                <table class="table table-bordered table-hover myTable">
                    <thead>
                        <tr>
                            <th class="wrap-width text-center">No.</th>
                            <th class="text-center">Invoice</th>
                            <th class="text-center">Customer</th>
                            <th class="text-center">Due Date</th>
                            <th class="wrap-width text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">No.</td>
                            <td class="text-center">Invoice</td>
                            <td class="text-center">Customer</td>
                            <td class="text-center">Due Date</td>
                            <td class="wrap-width text-center">Action</td>
                        </tr>
                    </tbody>
                </table>
            </div>
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