@extends('layouts.admin')

@section('title', 'Payroll')
@section('heading', 'Payroll Form')

@section('main-content')

<form action="{{ route('send.payroll') }}" method="post">
    @csrf
    <div class="col-5">
        <div class="card shadow mb-3">
            <div class="card-body overflow">
                <div class="form-group">
                    <label class="font-weight-bold">Salary</label>
                    <input type="number" name="salary" id="salary" class="form-control" placeholder="input salary" required>
                    <br>
                    <label class="font-weight-bold">Effective Date</label>
                    <input type="date" name="eff_date" id="eff_date" class="form-control" required>
                    <input type="hidden" value="{{ $payroll->eid }}" name="eid" id="eid" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-sm btn-lg btn-primary font-weight-bold float-right ml-2">Submit</button>
        <a href="{{ url()->previous() }}" class="btn btn-sm btn-secondary font-weight-bold float-right">Back</a>
            </div>
        </div>
        
    </div>
    <div class="col-8">

    </div>
    
    
    
</form>
@endsection