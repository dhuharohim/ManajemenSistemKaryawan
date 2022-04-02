<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Attendance_user;
use App\Models\Employment;
use App\Models\Excuse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexuser()
    {
        date_default_timezone_set('Asia/Bangkok');
        
        $datas = Attendance::all();
        $data_emp = Employment::where('eid',Auth::user()->id)->first();
        $data_ex = Excuse::where('user_id',Auth::user()->id)->get();
        $data_user = Attendance_user::where('user_id',Auth::user()->id)->get();
        $data_punch = Attendance_user::where('user_id',Auth::user()->id)->first();
        $punchout_data = Attendance_user::where('user_id',Auth::user()->id)->where('date', now()->format('Y-m-d'))->first();
        
        
        return view('attendance-user.index',['data'=>$datas,'data_emp'=>$data_emp,'data_ex'=>$data_ex,'punchout_data'=>$punchout_data,'data_user'=>$data_user, 'data_punch'=>$data_punch]);
    }
    public function storeuser(Request $request){
        date_default_timezone_set('Asia/Bangkok');
        $datas = Attendance::all();
        $data_emp = Employment::where('eid',Auth::user()->id)->first();
        $data_ex = Excuse::orderBy('from_abs')->get();
        $data_user = Attendance_user::all();

        $punchout_data = Attendance_user::where('user_id',Auth::user()->id)->where('date', now()->format('Y-m-d'))->first();

        $abskaryawan = new Attendance_user();
        $abskaryawan->date = $request->date;
        $abskaryawan->punch_in = $request->punch_in;
        $abskaryawan->user_id = Auth::user()->id;
        
        $abskaryawan->save();
        return view('attendance-user.index',['data'=>$datas,'data_emp'=>$data_emp,'data_ex'=>$data_ex, 'data_user'=>$data_user, 'punchout_data'=>$punchout_data]);
    }
    public function punchout(Request $request){
        date_default_timezone_set('Asia/Bangkok');

        
        $abskaryawan = Attendance_user::where('user_id',Auth::user()->id)->where('date', now()->format('Y-m-d'))->first();
        $abskaryawan->punch_out = $request->punch_out;
        $abskaryawan->save();
        return redirect()->route('attendance.user');
    }
    
    
    public function index()
    {
        date_default_timezone_set('Asia/Bangkok');
        $datas = Attendance::all();
        $data_emp = Employment::all();
        $data_emp2 = Employment::all();
        $data_ex = Excuse::orderBy('from_abs')->get();
        $data_user = Attendance_user::all();
        return view('attendance.index',['datas'=>$datas,'data_emp'=>$data_emp,'data_ex'=>$data_ex,'data_user'=>$data_user,'data_emp2'=>$data_emp2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('attendance-form.excuse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attend = new Attendance;
        $attend->date_abs = $request->date_abs;
        $attend->time_abs = $request->time_abs;
        $attend->status_abs = $request->status_abs;

        $attend->save();
        // $datas = Attendance::all();
        // $data_emp = Employment::all();
        // $data_ex = Excuse::all();
        // return view('attendance.index',['data'=>$datas,'data_emp'=>$data_emp,'data_ex'=>$data_ex]);
        return redirect()->route('attendance');
    }

    public function excuses(Request $request)
    {
        
        $form = new Excuse;
        $form->excuses_abs = $request->excuses_abs;
        $form->from_abs = $request->from_abs;
        $form->to_abs = $request->to_abs;
        $form->user_id = Auth::user()->id;
        
        $form->save();
        // $datas = Excuse::all();
        // return view('attendance.index',['data'=>$datas]);
        return redirect()->route('attendance.user');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
