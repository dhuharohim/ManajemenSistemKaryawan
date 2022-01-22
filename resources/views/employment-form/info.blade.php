@extends('layouts.admin')

@section('title', 'Information')
@section('heading', 'Information')

@section('main-content')
<div class="mb-3">
    <a href="{{ route('employment') }}" class="btn btn-sm btn-danger font-weight-bold mb-3">Back</a>
</div>
<div class="mb-3 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-3">
               
            </div>
            <div class="col">
                <div class="card">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Employment Data</a>
                          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Personal Data</a>
                          <a class="nav-item nav-link" id="nav-payroll-tab" data-toggle="tab" href="#nav-payroll" role="tab" aria-controls="nav-payroll" aria-selected="false">Payroll</a>
                        </div>
                    </nav>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="card">
                    photo
                </div>
            </div>
            <div class="col">
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
                                        {{ $data->emp_type }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Work Agreement
                                    </td>
                                    <td>
                                        {{ $data->work_agr }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Status
                                    </td>
                                    <td>
                                        {{ $data->status }}
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
                                        {{ $data->work_agr_type }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Payment Type
                                    </td>
                                    <td>
                                        {{ $data->payment_type }}
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
                                        {{ $data->unit }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Sub Unit
                                    </td>
                                    <td>
                                        {{ $data->sub_unit }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Position
                                    </td>
                                    <td>
                                        {{ $data->position }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Work Agreement Document
                                    </td>
                                    <td>
                                        {{ $data->work_agr_doc }}
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
                                        {{ $data->gender }}
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
                                        {{ $data->religion }}
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
                                    @foreach($payroll as $payrolls)
                                    <tr>
                                        <td class="salary">{{ $payrolls['salary'] }}</td>
                                        <td>{{ $payrolls['eff_date'] }}</td>
                                        <td id="changes">
                                            
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                            
                        </div>
                        <a type="submit" class="btn btn-danger mt-2" onclick="changes()">Generate Changes</a>
                        <span><a href="{{ route('form.payroll',['eid'=>$data->eid]) }}" class="btn btn-info mt-2">Add Salary</a></span>
                        <script>
                            function changes(){
                                var a = document.getElementsByClassName("salary");

                                console.log(a[a.length-1].innerHTML);
                                
                            }
                            

                        </script>
                        
                        
                    </div>
                </div>
                
            </div>
        </div>
            
        
    </div>
</div>

@endsection