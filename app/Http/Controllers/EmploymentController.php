<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employment;
use App\Models\Payroll;
use Illuminate\Support\Facades\DB;

class EmploymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Employment::all();
        return view('employment.index',['data'=>$datas]);

        $workagr = DB::table('work_agreement_doc')->get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('employment-form.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employment = new Employment;
        $employment->eid = $request->eid;
        $employment->email = $request->email;
        $employment->alt_email = $request->alt_email;
        $employment->join = $request->join;
        $employment->emp_type = $request->emp_type;
        $employment->work_agr = $request->work_agr;
        $employment->status = $request->status;
        $employment->payment = $request->payment;
        $employment->work_agr_type = $request->work_agree_type;
        $employment->payment_type = $request->payment_type;
        $employment->alt_date = $request->alt_date;
        $employment->unit = $request->unit;
        $employment->sub_unit = $request->sub_unit;
        $employment->position = $request->position;
        $employment->name = $request->name;
        $employment->id_nik = $request->id_nik;
        $employment->birthplace = $request->birthplace;
        $employment->gender = $request->gender;
        $employment->phone = $request->phone;
        $employment->religion = $request->religion;
        $employment->province = $request->province;
        $employment->city = $request->city;
        $employment->sub = $request->sub;
        $employment->zip = $request->zip;
        $employment->address = $request->address;
        $employment->npwp = $request->npwp;
        $employment->marriage = $request->marriage;
        $employment->birthdate = $request->birthdate;

        $employment->save();

        if($request->hasFile('work_agr_doc')){
            $file_name = $request->work_agr_doc->getClientOriginalName();
            DB::table('work_agreement_doc')->insert([
                'name_file'=>$request->work_agr_doc,
            ]);
        }        
        $datas = Employment::all();
        return view('employment.index',['data'=>$datas]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    public function info($id)
    {
        $employment = Employment::where('eid',$id)->first();
        $payroll= Payroll::all();
        return view('employment-form.info',['data'=>$employment ,'payroll'=>$payroll]);
    }

    public function formpayroll($id){
        $payroll = Employment::select('eid')->where('eid',$id)->first();
        return view('payroll-form.index',['payroll'=>$payroll]);
    }

    public function sendpayroll(Request $request){
        $payroll = new Payroll();
        $payroll->salary = $request->salary;
        $payroll->eff_date = $request->eff_date;
        $payroll->employments_eid = $request->eid;
        $payroll->save();

        // $payroll = Payroll::all();
        return redirect()->back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $employment = Employment::where('eid',$id)->first();
        return view('employment-form.update',['data'=>$employment]);
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
        $employment = Employment::where('eid',$id)->first();
        $employment->eid = $request->eid;
        $employment->email = $request->email;
        $employment->alt_email = $request->alt_email;
        $employment->join = $request->join;
        $employment->emp_type = $request->emp_type;
        $employment->work_agr = $request->work_agr;
        $employment->status = $request->status;
        $employment->payment = $request->payment;
        $employment->work_agr_type = $request->work_agree_type;
        $employment->payment_type = $request->payment_type;
        $employment->alt_date = $request->alt_date;
        $employment->unit = $request->unit;
        $employment->sub_unit = $request->sub_unit;
        $employment->position = $request->position;
        $employment->name = $request->name;
        $employment->id_nik = $request->id_nik;
        $employment->birthplace = $request->birthplace;
        $employment->gender = $request->gender;
        $employment->phone = $request->phone;
        $employment->religion = $request->religion;
        $employment->province = $request->province;
        $employment->city = $request->city;
        $employment->sub = $request->sub;
        $employment->zip = $request->zip;
        $employment->address = $request->address;
        $employment->npwp = $request->npwp;
        $employment->marriage = $request->marriage;
        $employment->birthdate = $request->birthdate;
        $employment->save();

        $datas = Employment::all();
        return view('employment.index',['data'=>$datas]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $employment = Employment::where('eid',$id)->first();
         $employment->delete();
         return redirect()->route('employment');
    }
}
