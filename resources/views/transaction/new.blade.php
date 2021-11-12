@extends('layouts.admin')

@section('title', 'New Transaction')
@section('heading', 'New Transaction')

@section('main-content')
<div class="mb-3">
    <a href="{{ route('transaction.history') }}" class="btn btn-sm btn-danger font-weight-bold mb-3">Back</a>
    <form action="" method="post">
        <div class="row">
            <div class="col-lg-4">
                <div class="card shadow mb-3">
                    <div class="card-body">                        
                        <div class="form-group">
                            <label for="customer" class="font-weight-bold">Customer</label>
                            <select name="customer" id="customer" class="form-control" data-live-search="true">
                                <option value="" disabled selected> -- Choose Customer -- </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="transaction_date" class="font-weight-bold">Transaction Date</label>
                            <input type="date" name="transaction_date" id="transaction_date" class="form-control" value="{{ date('Y-m-d') }}">
                        </div>
                        <div class="form-group">
                            <label for="payment_option" class="font-weight-bold">Payment Option</label>
                            <select name="payment_option" id="payment_option" class="form-control" data-live-search="true">
                                <option value="" disabled selected> -- Choose Payment Option -- </option>
                                <option value="cash">Cash</option>
                                <option value="credit">Credit</option>
                            </select>
                        </div>                        
                    </div>
                </div>
                <div class="card shadow mb-3">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-bold bg">Product</label>
                            <select id="product_selector" class="form-control" data-live-search="true">
                                <option value="" disabled selected> -- Select Product -- </option>
                            </select>                            
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Price</label>
                            <br>
                            <label class="font-weight-bold">Threshold Price: USD 1.000.000,00</label>
                            <input type="number" class="form-control" id="price_selector">                            
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10">
                                <label class="font-weight-bold">Quantity</label>
                                <input type="number" id="quantity_selector" class="form-control">
                            </div>
                            <input type="text" class="col-md-2 form-control-plaintext align-self-end font-weight-bold text-center" value="Kg" disabled>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-sm btn-primary font-weight-bold">Add Product</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card shadow mb-3">
                    <div class="card-body">
                        <h3 class="font-weight-bold text-center">Product List</h3>
                        <hr>
                        <div class="table-responsive">
                            <table id="table" class="table table-bordered tabel-hover w-100">
                                <thead class="thead-light text-center">
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="wrap-width text-center">1</td>
                                        <td class="wrap-width">
                                            <p class="m-0">Tinta Padat</p>
                                            <input name="product_name[]" type="text" value="Tinta Padat" hidden>
                                        </td>
                                        <td class="wrap-width text-right">
                                            <p class="m-0">35</p>
                                            <input name="product_quantity[]" type="number" value="35" hidden>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <p class="m-0">IDR</p>
                                                <p class="m-0">150,000.00</p>
                                            </div>
                                            <input name="product_price[]" type="text" value="150000" hidden>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <p class="m-0">IDR</p>
                                                <p class="m-0">150,000.00</p>
                                            </div>
                                            <input name="product_price[]" type="text" value="150000" hidden>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h4 class="font-weight-bold">Total</h4>
                            <h4 class="font-weight-bold">IDR 500,000,000.00</h4>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-success font-weight-bold">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

@push('css')
    {{-- Bootstrap Select -- Searchable Dropdown --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    
    {{-- General --}}
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endpush

@push('js')    
    {{-- Bootstrap Select -- Searchable Dropdown --}}
    {{-- Latest compiled and minified JavaScript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    {{-- (Optional) Latest compiled and minified JavaScript translation files --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>

    {{-- Bootstrap Select -- Setup --}}
    <script src="{{ asset('js/bootstrap-select.setup.js') }}"></script>
@endpush


 

