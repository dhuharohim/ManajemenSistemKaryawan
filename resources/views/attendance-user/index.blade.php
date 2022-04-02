@extends('layouts.user')

@section('title', 'User Attendance')
@section('heading', 'User Attendance')

@section('main-content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
        <script src="{{ asset('js/sidewrapper.override.js') }}"></script>
        <link rel="stylesheet" type="text/css"
            href="https://cdn.datatables.net/v/bs4/dt-1.11.3/r-2.2.9/sb-1.2.2/sp-1.4.0/datatables.min.css" />
        <link rel="stylesheet" href="{{ asset('css/table.css') }}">
        <script type="text/javascript"
                src="https://cdn.datatables.net/v/bs4/dt-1.11.3/r-2.2.9/sb-1.2.2/sp-1.4.0/datatables.min.js"></script>
        <script src="{{ asset('js/dataTable.setup.js') }}"></script>
    </head>

    <body>
        <style>
            .punch-hours {
                align-items: center;
                background-color: #f9f9f9;
                border: 5px solid #e3e3e3;
                border-radius: 50%;
                display: flex;

                height: 120px;
                justify-content: center;
                margin: 0 auto;
                width: 120px;
            }

            .punch-info {
                margin-bottom: 20px;
                margin-top: 20px;
            }

            .smallt {
                font-size: 12px;

            }

            .punch-det {
                background-color: #f9f9f9;
                border: 1px solid #e3e3e3;
                border-radius: 4px;
                margin-bottom: 5px;
                padding: 2px 5px;

            }

            .punch-det h6 {
                line-height: 20px;
                margin-bottom: 0;
            }

            .punch-det p {
                color: #727272;
                font-size: 14px;
                margin-bottom: 0;
            }

            .timerDisplay {
                position: relative;
                padding: 40px 0;
                font-family: Arial, Helvetica, sans-serif;
                color: #000000;
                font-weight: bold;
                font-size: 12px;
                display: flex;
                align-items: center;
                justify-content: space-around;
                border-radius: 5px;

            }

        </style>
        <div class="mb-3 mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3">
                        <div class="card shadow-lg">
                            <div class="card-body overflow">

                                <h3 class="card-title text-center text-bold mt-2">
                                    Timesheet
                                </h3>
                                <hr>
                                
                                <div class="punch-info">
                                    <div class="punch-hours">
                                        <div class="timerDisplay">
                                            00 : 00 : 00 : 000
                                        </div>
                                    </div>
                                    <script>
                                       
                                    </script>
                                </div>
                                @if (!$punchout_data)
                                    <form action="{{ route('attendance-user.store') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="date" value="{{ date('Y-m-d') }}">
                                        <input type="hidden" name="punch_in" value="{{ now()->format('H:i:s') }}">



                                        <button type="submit"
                                            class="button1 btn-outline-danger btn-sm btn-block font-weight-bold">
                                            Punch In
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('punchout') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="punch_out" value="{{ now()->format('H:i:s') }}">
                                        <button type="submit"
                                            class="button1 btn-outline-danger btn-sm btn-block font-weight-bold">
                                            Punch Out
                                        </button>
                                    </form>
                                @endif
                                <button type="button" class="btn btn-danger btn-sm btn-block font-weight-bold mt-2"
                                    data-toggle="modal" data-target="#exampleModal">
                                    Make Leave Excuse
                                </button>


                                <script>
                                    $('.button1').click(function() {
                                        var $this = $(this);
                                        $this.toggleClass('button1');
                                        if ($this.hasClass('button1')) {
                                            $this.text('Punch In');
                                            $(this).css("color", "#dc3545");
                                            $(this).css("background-color", "#efefef");
                                        } else {
                                            $this.text('Punch Out');
                                            $(this).css("color", "white");
                                            $(this).css("background-color", "#dc3545");
                                        }
                                    });
                                </script>
                            </div>
                        </div>

                    </div>
                    <div class="col-8">
                        <div class="card shadow-lg">
                            <div class="card-body overflow">
                                <h4 class="text-center">My Attendance</h4>
                                <hr>
                                <table class="table table-bordered table-hover myTable">
                                    <thead>
                                        <th>No</th>
                                        <th>Date</th>
                                        <th>In</th>
                                        <th>Out</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_user as $data_user)
                                            <tr>
                                                <td class="number"></td>
                                                <td>{{ date('d F Y', strtotime($data_user['date'])) }}</td>
                                                <td> {{ $data_user->punch_in }}</td>
                                                <td>{{ $data_user->punch_out }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <script>
                                        var a = document.getElementsByClassName("number");
                                        for (var i = 0; i < a.length; i++) {
                                            a[i].innerHTML = (i + 1);
                                        }
                                    </script>
                                </table>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Make Leave Excuse</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('attendance-form.store') }}" method="post">
                                            @csrf
                                            <div class="card shadow mb-3">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label class="font-weight-bold">Excuse Leave </label>
                                                        <input type="text" name="excuses_abs" id="excuses_abs"
                                                            class="form-control" placeholder="input reason here" required>
                                                        <br>
                                                        <label class="font-weight-bold">From </label>
                                                        <input type="date" name="from_abs" id="from_abs"
                                                            class="form-control" required>
                                                        <br>
                                                        <label class="font-weight-bold">To </label>
                                                        <input type="date" name="to_abs" id="to_abs" class="form-control"
                                                            required>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit"
                                                    class="btn btn-primary font-weight-bold float-right">Submit</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-4 shadow-lg">
                            <div class="card-body overflow">
                                <h4 class="text-center">My Excuses</h4>
                                <hr>
                                <table class="table table-bordered table-hover myTable">
                                    <thead>
                                        <th>Excuses</th>
                                        <th>From</th>
                                        <th>To</th>

                                    </thead>
                                    <tbody>
                                        @foreach ($data_ex as $datas)
                                            <tr>
                                                <td>{{ $datas['excuses_abs'] }}</td>
                                                <td>{{ date('d F Y', strtotime($datas['from_abs'])) }}</td>
                                                <td> {{ date('d F Y', strtotime($datas['to_abs'])) }}</td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>




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
