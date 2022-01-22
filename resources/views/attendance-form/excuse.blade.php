@extends('layouts.admin')

@section('title', 'Leave Excuse Form')
@section('heading', 'Leave Excuse Form')

@section('main-content')
<a href="{{ route('attendance') }}" class="btn btn-sm btn-danger font-weight-bold mb-3">Back</a>
<form action="{{ route('attendance-form.excuse.store') }}" method="post">
    @csrf
    <div class="card shadow mb-3">
        <div class="card-body">
            <div class="form-group">
                <label class="font-weight-bold">Excuse Leave </label>
                <input type="text" name="excuses_abs" id="excuses_abs" class="form-control" placeholder="input reason here" required>
                <br>
                <label class="font-weight-bold">From </label>
                <input type="date" name="from_abs" id="from_abs" class="form-control" required>
                <br>
                <label class="font-weight-bold">To </label>
                <input type="date" name="to_abs" id="to_abs" class="form-control" required>
            </div>
            
        </div>
        
    </div>
    
    <button type="submit" class="btn btn-sm btn-info font-weight-bold mb-3 align-content-lg-end">Submit</button>
</form>
    
    
    
@endsection
