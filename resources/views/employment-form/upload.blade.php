@extends('layouts.admin')

@section('title', 'Upload Employment Data')
@section('heading', 'Upload Employment Data')

@section('main-content')
<div class="mb-3">
    <a href="{{ route('employment') }}" class="btn btn-sm btn-danger font-weight-bold mb-3">Back</a>
</div>
<form enctype="multipart/form-data" action="{{ route('employment-form.store') }}" method="post">
    
    <div class="row">
        <div class="col">
            <div class="card shadow mb-3">
                <div class="card-body">                        
                    <div class="form-group">
                        <label class="font-weight-bold">Employment ID</label>
                        <input type="text" name="eid" id="eid" class="form-control" placeholder="input employment-id" required> 
                        <label class="font-weight-bold mt-3">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="input email" required> 
                        <label class="font-weight-bold mt-3">Alternate Email</label>
                        <input type="text" name="alt_email" id="alt-email" class="form-control" placeholder="input alternate email"> 
                        <label class="font-weight-bold mt-3">Join Date</label>
                        <input type="date" name="join" id="join" class="form-control" placeholder="input join date" required>
                        <label class="font-weight-bold mt-3">Employment Type</label> <br>
                        <select name="emp_type" required>
                            <br>
                            <option value="1">Outsourcing</option>
                            <option value="2">Regular</option>
                        </select>
                        
                        <br><br>
                        <label class="font-weight-bold mt-3">Work Agreement</label> <br>
                        <select name="work_agr" required>
                            <br>
                            <option value="1">Tetap</option>
                            <option value="2">Kontrak</option>
                            <option value="3">Resign</option>
                        </select>
                        <br><br>
                        <label class="font-weight-bold mt-3">Status</label> <br>
                        <select name="status" required>
                            <br>
                            <option value="1">ACTIVE</option>
                            <option value="2">OPEN INTERNSHIP</option>
                            <option value="3">BONDED INTERNSHIP</option>
                        </select>
                        <br>
                        <label class="font-weight-bold mt-3">Payment</label>
                        <input type="text" name="payment" id="payment" class="form-control" placeholder="input payment" required>
                        <br>
                        <label class="font-weight-bold mt-3">Work Agreement Type</label> <br>
                        <select name="work_agree_type" required>
                            <br>
                            <option value="1">PKWT</option>
                            <option value="2">PKWTT</option>
                        </select>
                        <br>
                        <label class="font-weight-bold mt-3">Payment Type</label> <br>
                        <select name="payment_type" required>
                            <br>
                            <option value="1">Paid</option>
                            <option value="2">Unpaid</option>
                        </select>
                        <br>
                        <label class="font-weight-bold mt-3">Alternate Date</label>
                        <input type="date" name="alt_date" id="alt_date" class="form-control" placeholder="input alternate date" required>
                        <br>

                        <label class="font-weight-bold mt-3">Unit</label> <br>
                        <select name="unit" required>
                            <br>
                            <option value="1">Human Resource</option>
                            <option value="2">Finance</option>
                        </select>
                        <br>
                        <label class="font-weight-bold mt-3">Sub Unit</label> <br>
                        <select name="sub_unit" required>
                            <br>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <br>
                        <label class="font-weight-bold mt-3">Position</label> <br>
                        <select name="position" required>
                            <br>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <br>
                        <label class="font-weight-bold mt-3">Work Agreement Document</label> <br>
                        <input type="file" name='work_agr_doc' id="work_agr_doc" class="form-control"/>
                    

                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow mb-3">
                <div class="card-body">
                    <div class="form-group">
                        <label class="font-weight-bold">Full Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="input full name" required><br>
                        <label class="font-weight-bold">ID(NIK)</label>
                        <input type="text" name="id_nik" id="id_nik" class="form-control" placeholder="input ID(NIK)" required><br>
                        <label class="font-weight-bold">Birthplace</label>
                        <input type="text" name="birthplace" id="birthplace" class="form-control" placeholder="input birthplace" required> <br>
                        <label class="font-weight-bold">Birtdate</label>
                        <input type="date" name="birthdate" id="birthdate" class="form-control" required>
                        <br>
                        <label class="font-weight-bold">Gender</label><br>
                        <select name="gender" required>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                        <br><br>
                        <label class="font-weight-bold" for="phone">Phone Number</label><br>
                        <input type="tel" name="phone" id="phone" placeholder="081 236 7891" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" maxlength="12"  class="form-control" required/> 
                        <br>
                        <label class="font-weight-bold">Religion</label><br>
                        <select name="religion" required>
                            <option value="1">Christ</option>
                            <option value="2">Islam</option>
                            <option value="3">Hinduism</option>
                            <option value="4">Buddhism</option>
                            <option value="5">Agnostic</option>
                            <option value="6">Ethnic Religion</option>
                        </select> 
                        <br><br>  
                        <label class="font-weight-bold">Province</label><br>
                        <select name="province" id="input" required>
                            <option value="">Choose Province</option>
                            <option value="1">Aceh</option>
                            <option value="2">Bali</option>
                            <option value="3">Bangka Belitung</option>
                            <option value="4">Banten</option>
                            <option value="5">Bengkulu</option>
                            <option value="6">Daerah Istimewa Yogyakarta</option>
                            <option value="7">Daerah Khusus ibukota Jakarta</option>
                            <option value="8">Gorontalo</option>
                            <option value="9">Jambi</option>
                            <option value="10">Jawa Barat</option>
                            <option value="11">Jawa Tengah</option>
                            <option value="12">Jawa Timur</option>
                            <option value="13">Kalimantan Barat</option>
                            <option value="14">Kalimantan Selatan</option>
                            <option value="15">Kalimantan Tengah</option>
                            <option value="16">Kalimantan Timur</option>
                            <option value="17">Kalimantan Utara</option>
                            <option value="18">Kepulauan Riau</option>
                            <option value="19">Lampung</option>
                            <option value="20">Maluku</option>
                            <option value="21">Maluku Utara</option>
                            <option value="22">Nusa Tenggara Barat</option>
                            <option value="23">Nusa Tenggara Timur</option>
                            <option value="24">Papua</option>
                            <option value="25">Papua Barat</option>
                            <option value="26">Sulawesi Barat</option>
                            <option value="27">Sulawesi Selatan</option>
                            <option value="28">Sulawesi Tengah</option>
                            <option value="29">Sulawesi Tenggara</option>
                            <option value="30">Sulawesi Utara</option>
                            <option value="31">Sumatera Barat</option>
                            <option value="32">Sumatera Selatan</option>
                            <option value="33">Sumatera Utara</option>
                        </select>
                        <br><br>
                         
                        <label class="font-weight-bold">City</label><br>
                        <div>
                            <select name="city" class="form-control" id="output">
                                <option value="">Choose City</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                
                            </select>
                        </div>
                        
                        <br><br>  
                        <label class="font-weight-bold">Sub District</label><br>
                        <select name="sub" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <br><br>  
                        <label class="font-weight-bold">ZIP Code</label><br>
                        <select name="zip" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <br><br>
                        <label class="font-weight-bold">Address</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="input address" required><br>
                        <label class="font-weight-bold">NPWP</label>
                        <input type="text" name="npwp" id="npwp" class="form-control" placeholder="input npwp" required><br>
                        <label class="font-weight-bold">Marriage Status</label>
                        <input type="text" name="marriage" id="marriage" class="form-control" placeholder="input marriage status" required><br>

                        
                    </div>
                    
                </div>
                
            </div>
            
            <button type="submit" class="btn btn-sm btn-danger font-weight-bold mb-3 align-content-lg-end">Submit</button>
        </div>
        
    </div>
    @csrf
</form>         

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
    <script>
        $( "#input" ).change(function(e) {
        var a = document.getElementById("input").value;
        var b = document.getElementById("output");
        var option = '';
        var arr = [];
        if(a=='1')
        {
            arr=["Maharashtra","Delhi"];
            console.log(arr);
        }
        else if(a=='2')
        {
            arr=["Washington","Texas","New York"];
            console.log(arr);
        }
        else if(a=='3')
        {
            arr=["Washington"];
            console.log(arr);
        }
        else if(a=='4')
        {
            arr=["Texas"];
            console.log(arr);
        }
        else if(a=='5')
        {
            arr=["New York"];
            console.log(arr);
        }
        else
        {
            console.log('')
        }
        for(var i=0;i<arr.length;i++)
        {
            option = '<option value="'+ arr[i] + '">' + arr[i] + '</option>';
            console.log(option);
        }
        console.log($('#output'))
        $('#output').append(option);
        });
    
    </script> 
    
@endpush


 

