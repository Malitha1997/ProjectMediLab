<?php

namespace App\Http\Controllers;

use App\Models\Doctor;

use App\Models\Lab_assistant;
use App\Models\Report;
use App\Models\Test_bill;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;




class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*function __construct()
    {
         $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
         $this->middleware('permission:role-create', ['only' => ['create','store']]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $reports = Report::with(['testBill.doctor.labAssistant'])->get();
        return view('reports.index', compact('reports'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$reports=Report::get();
        return view('admin.reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $this->validate($request, [
        'patient_name' => 'required|min:1|max:255',
        'description' => 'required',
        'doctor_name' => 'required',
        'lab_assistant_name' => 'required',
        'test_bill_id' => 'required|numeric',
        'report_file' => 'required',
    ]);
    //dd($request);

    $user = User::where('name', $request->patient_name)->first();
        if ($user) {
        $patient = Patient::firstOrCreate(['user_id' => $user->id]);
        } else {
        // handle error or redirect with error message
        }

        $report = new Report;
        $report->description = $request->description;

        if ($request->hasFile('report_file')) {
        $file = $request->file('report_file');
        $fileName = time().'.'.$file->extension();
        $file->storeAs('public/reports', $fileName);
        $report->photo_path = 'public/reports/'.$fileName;
        }

        $user = User::firstOrCreate(['f_name' => $request->doctor_name]);
        $user = User::firstOrCreate(['f_name' => $request->patient_name]);
        $user = User::firstOrCreate(['f_name' => $request->lab_assistant_name]);

        $report->doctor_id = $user->id;
        $report->lab_assistant_id = $user->id;
        $report->test_bill_id = $request->test_bill_id;
        $report->patient_id = $user->id;
        $report->save();
        return redirect()->route('reports.index')
        ->with('success','Report created successfully.');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Reports =reports::find($id);
        return view('admin.reports.show',compact('Reports'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Reports =reports::find($id);
        return view('admin.reports.edit',compact('Reports'));
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
        $this->validate($request, [
        'patient_name' => 'required',
        'description'=>'required',
        'doctor_id' => 'required',
        'lab_assistant_id' => 'required',
        'test_bill_id' => 'required',
        'report_file' => 'required|file|mimes:pdf,jpeg,png,jpg,gif,svg|max:2048',


        ]);


        $report = new Report;
    $report->description = $request->description;

    if ($request->hasFile('report_file')) {
        $file = $request->file('report_file');
        $fileName = time().'.'.$file->extension();
        $file->storeAs('public/reports', $fileName);
        $report->photo_path = 'public/reports/'.$fileName;
    }

    $report->patient_id = $request->patient_name;
    $report->doctor_id = $request->doctor_id;
    $report->lab_assistant_id = $request->lab_assistant_id;
    $report->test_bill_id = $request->test_bill_id;
    $report->update();

    return redirect()->route('reports.index')
                    ->with('success','Report updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("Reports")->where('id',$id)->delete();
        return redirect()->route('reports.index')
                        ->wth('success','Report deleted successfully');
    }

    public function labassistantCreate()
    {
        //$reports=Report::get();
        return view('Lab Assistant.reports.create');
    }

    public function labassistantIndex(Request $request)
    {
        $reports = Report::with(['testBill.doctor.labAssistant'])->get();
        return view('Lab Assistant.reports.index', compact('reports'));

    }
}
