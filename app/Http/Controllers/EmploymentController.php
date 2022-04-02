<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employment;
use App\Models\MyBlobDocs;
use App\Models\Payroll;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
       return view('employment-form.upload',['users'=>$users]);
    }
    public function createuser()
    {
        $users = User::all();
       return view('employment-form.userupload',['users'=>$users]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->work_agr_doc->extension());

        $validated = $request->validate([
            'eid' => 'required|unique:employments',
            'id_nik' => 'required|unique:employments|max:16',
        ]);

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
        $myblob = new MyBlobDocs();
        $myblob-> name = $request->work_agr_doc->getClientOriginalName();
        $myblob-> mime = $request->work_agr_doc->extension();
        $myblob-> data = base64_encode($request->work_agr_doc);
        $myblob-> emp_eid = $employment->eid;
        $myblob->save();


              
        $datas = Employment::all();
        return view('employment.index',['data'=>$datas]);

        

    }
    public function storeuser(Request $request)
    {
        // dd($request->work_agr_doc->extension());

        $validated = $request->validate([
            'eid' => 'required|unique:employments',
            'id_nik' => 'required|unique:employments|max:16',
        ]);

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
        $myblob = new MyBlobDocs();
        $myblob-> name = $request->work_agr_doc->getClientOriginalName();
        $myblob-> mime = $request->work_agr_doc->extension();
        $myblob-> data = base64_encode($request->work_agr_doc);
        $myblob-> emp_eid = $employment->eid;
        $myblob->save();


              
        $datas = Employment::all();
        return view('employment.user',['data'=>$datas]);

        

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
        $blob = MyBlobDocs::where('emp_eid',$id)->first();
        $payroll= Payroll::all();
        return view('employment-form.info',['data'=>$employment ,'payroll'=>$payroll, 'blob'=>$blob]);
    }

    public function infouser($id){
        $employment = Employment::where('eid',$id)->first();
        $blob = MyBlobDocs::where('emp_eid',$id)->first();
        $payroll= Payroll::all();
        return view('employment-form.userinfo',['data'=>$employment ,'payroll'=>$payroll, 'blob'=>$blob]);
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
        return redirect()->route('employment-form.info',$request->eid);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blob = MyBlobDocs::where('emp_eid',$id)->first();
        $employment = Employment::where('eid',$id)->first();
        return view('employment-form.update',['data'=>$employment, 'blob'=>$blob]);
    }
    public function edituser($id)
    {
        $blob = MyBlobDocs::where('emp_eid',$id)->first();
        $employment = Employment::where('eid',$id)->first();
        return view('employment-form.userupdate',['data'=>$employment, 'blob'=>$blob]);
    }

    public function indexuser(){
        $datas = Employment::all();
        
        return view('employment.user',['data'=>$datas]);
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

        // $myblob = new MyBlobDocs();
        // $myblob-> name = $request->work_agr_doc->getClientOriginalName();
        // $myblob-> mime = $request->work_agr_doc->extension();
        // $myblob-> data = base64_encode($request->work_agr_doc);
        // $myblob-> emp_eid = $employment->eid;
        // $myblob->save();

        $datas = Employment::all();
        return view('employment.index',['data'=>$datas]);
        
    }
    public function updateuser(Request $request, $id)
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

        // $myblob = new MyBlobDocs();
        // $myblob-> name = $request->work_agr_doc->getClientOriginalName();
        // $myblob-> mime = $request->work_agr_doc->extension();
        // $myblob-> data = base64_encode($request->work_agr_doc);
        // $myblob-> emp_eid = $employment->eid;
        // $myblob->save();

        $datas = Employment::all();
        return view('employment.user',['data'=>$datas]);
        
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
