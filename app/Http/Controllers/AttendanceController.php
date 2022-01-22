<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employment;
use App\Models\Excuse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Attendance::all();
        $data_emp = Employment::all();
        $data_ex = Excuse::all();
        return view('attendance.index',['data'=>$datas,'data_emp'=>$data_emp,'data_ex'=>$data_ex]);
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
        $datas = Attendance::all();
        $data_emp = Employment::all();
        $data_ex = Excuse::all();
        return view('attendance.index',['data'=>$datas,'data_emp'=>$data_emp,'data_ex'=>$data_ex]);
    }

    public function excuses(Request $request)
    {
        
        $form = new Excuse;
        $form->excuses_abs = $request->excuses_abs;
        $form->from_abs = $request->from_abs;
        $form->to_abs = $request->to_abs;
        
        $form->save();
        $datas = Excuse::all();
        return view('attendance.index',['data'=>$datas]);
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
