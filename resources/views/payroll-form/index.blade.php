@extends('layouts.admin')

@section('title', 'Payroll')
@section('heading', 'Payroll Form')

@section('main-content')
<a href="{{ url()->previous() }}" class="btn btn-sm btn-danger font-weight-bold mb-3">Back</a>
<form action="{{ route('send.payroll') }}" method="post">
    @csrf
    <div class="card shadow mb-3">
        <div class="card-body">
            <div class="form-group">
                <label class="font-weight-bold">Salary</label>
                <input type="number" name="salary" id="salary" class="form-control" placeholder="input salary" required>
                <br>
                <label class="font-weight-bold">Effective Date</label>
                <input type="date" name="eff_date" id="eff_date" class="form-control" required>
                <input type="hidden" value="{{ $payroll->eid }}" name="eid" id="eid" class="form-control" required>
            </div>
        </div>
    </div>
    
    <button type="submit" class="btn btn-sm btn-info font-weight-bold mb-3 align-content-lg-end">Submit</button>
</form>
@endsection