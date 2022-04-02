@extends('layouts.user')

@section('title', 'Update Employment Data')
@section('heading', 'Update Employment Data')

@section('main-content')
    <div class="mb-3">
        <a href="{{ route('employment-user') }}" class="btn btn-sm btn-danger font-weight-bold mb-3">Back</a>
    </div>
    <form action="{{ route('employment-user.update', ['eid' => $data->eid]) }}" method="post">
        @csrf
        <div class="row">
            <div class="col">
                <div class="card shadow mb-3">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-bold">Employment ID</label>
                            <input value="{{ $data->eid }}" type="text" name="eid" id="eid" class="form-control"
                                placeholder="input employment-id" required>
                            <label class="font-weight-bold mt-3">Email</label>
                            <input value="{{ $data->email }}" type="text" name="email" id="email" class="form-control"
                                placeholder="input email" required>
                            <label class="font-weight-bold mt-3">Alternate Email</label>
                            <input value="{{ $data->alt_email }}" type="text" name="alt_email" id="alt-email"
                                class="form-control" placeholder="input alternate email">
                            <label class="font-weight-bold mt-3">Join Date</label>
                            <input value="{{ $data->join }}" type="date" name="join" id="join" class="form-control"
                                placeholder="input join date" required>
                            <label class="font-weight-bold mt-3">Employment Type</label> <br>
                            <select name="emp_type" required>
                                <br>
                                <option value="1">Outsourcing</option>
                                <option value="2">Regular</option>
                                <option value="{{ $data->emp_type }}" selected>
                                    @if ($data->emp_type == 1)
                                        Outsourcing
                                    @else
                                        Regular
                                    @endif
                                </option>
                            </select>

                            <br><br>
                            <label class="font-weight-bold mt-3">Work Agreement</label> <br>
                            <select name="work_agr" required>
                                <br>
                                <option value="1">Tetap</option>
                                <option value="2">Kontrak</option>
                                <option value="3">Resign</option>
                                <option value="{{ $data->work_agr }}" selected>
                                    @if ($data->work_agr == 1)
                                        Tetap
                                    @elseif($data->work_agr == 2)
                                        Kontrak
                                    @elseif($data->work_agr == 3)
                                        Resign
                                    @endif
                                </option>
                            </select>
                            <br><br>
                            <label class="font-weight-bold mt-3">Status</label> <br>
                            <select name="status" required>
                                <br>
                                <option value="1">ACTIVE</option>
                                <option value="2">OPEN INTERNSHIP</option>
                                <option value="3">BONDED INTERNSHIP</option>
                                <option value="{{ $data->status }}" selected>
                                    @if ($data->status == 1)
                                        ACTIVE
                                    @elseif($data->status == 2)
                                        OPEN INTERNSHIP
                                    @elseif($data->status == 3)
                                        BONDED INTERNSHIP
                                    @endif
                                </option>
                            </select>
                            <br>
                            <label class="font-weight-bold mt-3">Payment</label>
                            <input value="{{ $data->payment }}" type="text" name="payment" id="payment"
                                class="form-control" placeholder="input payment" required>
                            <br>
                            <label class="font-weight-bold mt-3">Work Agreement Type</label> <br>
                            <select name="work_agree_type" required>
                                <br>
                                <option value="1">PKWT</option>
                                <option value="2">PKWTT</option>
                                <option value="{{ $data->work_agr_type }}" selected>
                                    @if ($data->work_agr_type == 1)
                                        PKWT
                                    @else
                                        PKWTT
                                    @endif
                                </option>
                            </select>
                            <br>
                            <label class="font-weight-bold mt-3">Payment Type</label> <br>
                            <select name="payment_type" required>
                                <br>
                                <option value="1">Paid</option>
                                <option value="2">Unpaid</option>
                                <option value="{{ $data->payment_type }}" selected>
                                    @if ($data->payment_type == 1)
                                        Paid
                                    @else
                                        Unpaid
                                    @endif
                                </option>
                            </select>
                            <br>
                            <label class="font-weight-bold mt-3">Alternate Date</label>
                            <input value="{{ $data->alt_date }}" type="date" name="alt_date" id="alt_date"
                                class="form-control" placeholder="input alternate date" required>
                            <br>

                            <label class="font-weight-bold mt-3">Unit</label> <br>
                            <select name="unit" required>
                                <br>
                                <option value="1">Human Resource</option>
                                <option value="2">Finance</option>
                                <option value="{{ $data->unit }}" selected>
                                    @if ($data->unit == 1)
                                        Human Resource Development
                                    @else
                                        Finance
                                    @endif
                                </option>
                            </select>
                            <br>
                            <label class="font-weight-bold mt-3">Sub Unit</label> <br>
                            <select name="sub_unit" required>
                                <br>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="{{ $data->sub_unit }}" selected>
                                    @if ($data->unit == 1)
                                        Human Resource Development
                                    @else
                                        Finance
                                    @endif


                                </option>
                            </select>
                            <br>
                            <label class="font-weight-bold mt-3">Position</label> <br>
                            <select name="position" required>
                                <br>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="{{ $data->position }}" selected>
                                    @if ($data->sub_unit)
                                        Senior
                                    @else
                                        Junior
                                    @endif
                                </option>
                            </select>
                            <br>
                            <label class="font-weight-bold mt-3">Work Agreement Document</label> <br>
                            <input value="{{ $blob->name }}" type="file" name='work_agr_doc' id="work_agr_doc"
                                class="form-control" class="hidden" />
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow mb-3">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-bold">Full Name</label>
                            <input value="{{ $data->name }}" type="text" name="name" id="name" class="form-control"
                                placeholder="input full name" required><br>
                            <label class="font-weight-bold">ID(NIK)</label>
                            <input value="{{ $data->id_nik }}" type="text" name="id_nik" id="id_nik"
                                class="form-control" placeholder="input ID(NIK)" required><br>
                            <label class="font-weight-bold">Birthplace</label>
                            <input value="{{ $data->birthplace }}" type="text" name="birthplace" id="birthplace"
                                class="form-control" placeholder="input birthplace" required> <br>
                            <label class="font-weight-bold">Birtdate</label>
                            <input value="{{ $data->birthdate }}" type="date" name="birthdate" id="birthdate"
                                class="form-control" required>
                            <br>
                            <label class="font-weight-bold">Gender</label><br>
                            <select name="gender" required>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="{{ $data->position }}" selected>
                                    @if ($data->gender == 1)
                                        Male
                                    @else
                                        Female
                                    @endif
                                </option>
                            </select>
                            <br><br>
                            <label class="font-weight-bold" for="phone">Phone Number</label><br>
                            <input value="{{ $data->phone }}" type="tel" name="phone" id="phone"
                                placeholder="081 236 7891" pattern="[0-9]{4} [0-9]{4} [0-9]{3}" maxlength="13"
                                class="form-control" required />
                    
                            <br>
                            <label class="font-weight-bold">Religion</label><br>
                            <select name="religion" required>
                                <option value="1">Christ</option>
                                <option value="2">Islam</option>
                                <option value="3">Hinduism</option>
                                <option value="4">Buddhism</option>
                                <option value="5">Agnostic</option>
                                <option value="6">Ethnic Religion</option>
                                <option value="{{ $data->religion }}" selected>
                                    @if ($data->religion == 1)
                                        Christ
                                    @elseif($data->religion == 2)
                                        Islam
                                    @elseif($data->religion == 3)
                                        Hinduism
                                    @elseif($data->religion == 4)
                                        Buddhism
                                    @elseif($data->religion == 5)
                                        Agnostic
                                    @elseif($data->religion == 6)
                                        Ethnic Religion
                                    @endif
                                </option>
                            </select>
                            <br><br>
                            <label class="font-weight-bold">Province</label><br>
                            <select name="province" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option vallue="3">3</option>
                                <option value="4">4</option>
                                <option value="{{ $data->province }}" selected>
                                    @if ($data->province == 1)
                                        1
                                    @elseif($data->province == 2)
                                        2
                                    @elseif($data->province == 3)
                                        3
                                    @elseif($data->province == 4)
                                        4
                                    @endif
                                </option>
                            </select>
                            <br><br>
                            <label class="font-weight-bold">City</label><br>
                            <select name="city" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="{{ $data->city }}" selected>
                                    @if ($data->city == 1)
                                        Jakarta Selatan
                                    @elseif($data->city == 2)
                                        Jakarta Utara
                                    @elseif($data->city == 3)
                                        Jakarta Barat
                                    @elseif($data->city == 4)
                                        Jakarta Timur
                                    @endif
                                </option>
                            </select>
                            <br><br>
                            <label class="font-weight-bold">Sub District</label><br>
                            <select name="sub" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="{{ $data->sub }}" selected>
                                    @if ($data->sub == 1)
                                        Grogol Utara
                                    @elseif($data->sub == 2)
                                        Grogol Selatan
                                    @elseif($data->sub == 3)
                                        Grogol Barat
                                    @elseif($data->sub == 4)
                                        Grogol Timur
                                    @endif
                                </option>
                            </select>
                            <br><br>
                            <label class="font-weight-bold">ZIP Code</label><br>
                            <input value="{{ $data->zip }}" type="text" name="zip" id="zip" class="form-control" placeholder="input ZIP" required>
                            <br>
                            <label class="font-weight-bold">Address</label>
                            <input value="{{ $data->address }}" type="text" name="address" id="address"
                                class="form-control" placeholder="input address" required><br>
                            <label class="font-weight-bold">NPWP</label>
                            <input value="{{ $data->npwp }}" type="text" name="npwp" id="npwp" class="form-control"
                                placeholder="input npwp" required><br>
                            <label class="font-weight-bold">Marriage Status</label>
                            <input value="{{ $data->marriage }}" type="text" name="marriage" id="marriage"
                                class="form-control" placeholder="input marriage status" required><br>


                        </div>

                    </div>

                </div>
                <button type="submit"
                    class="btn btn-sm btn-danger font-weight-bold mb-3 align-content-lg-end">Submit</button>
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
@endpush
