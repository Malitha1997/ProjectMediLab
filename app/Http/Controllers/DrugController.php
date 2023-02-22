<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    $drugs = Drug::with('patients')->get();

    return view('admin.drugs.index',compact('drugs'))
    ->with('i', ($request->input('page',1)-1)*5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.drugs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $drugs=new Drug;

        $this->validate($request,[
            'drug_name'=>'required|max:100|min:2',
            'qty'=>'required|numeric|min:1|max:100',
            'issue_date' => 'required|date',
            'expire_date' => 'required|date',
        ]);
//dd($request);
        $drugs->drug_name=$request->drug_name;
        $drugs->qty=$request->qty;
        $drugs->issue_date=$request->issue_date;
        $drugs->expire_date=$request->expire_date;

        $drugs->save();

        $drugs->patients()->attach($request->patient);

        //$data=Drug::all();
        return redirect()->route('drugs.index')
                        ->with('success','Drug created successfully.');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $drugs = Drug::find($id);
        return view('admin.drugs.show', compact('drugs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $drugs=Drug::find($id);
        return view('admin.drugs.edit',compact('drugs'));

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
        //$drug=new Drug;

        request()->validate([
            'drug_name'=>['required|max:100|min:5'],
            'qty'=>['required|numeric|min:1|max:100'],
            'issue_date' => ['required|date' ],
            'expire_date' => ['required|date']
        ]);

        $drugs->drug_name=$request->drug_name;
        $drugs->qty=$request->qty;
        $drugs->issue_date=Hash::make($request->issue_date);
        $drugs->expire_date=$request->expire_date;


        $drugs->drug()->update($drugs->toArray());

        return redirect()->route('drugs.index')
                        ->with('success','Drug updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drug = Drug::find($id);

        $drug->drug()->delete();
        $drug->delete();

        return redirect()->route('admin.drugs.index')
        ->with('success','Drug deleted successfully');

    }

    public function patientIndex(Request $request)
    {
        $drugs = Drug::with('patients')->get();

    return view('patient.drugs.index',compact('drugs'))
    ->with('i', ($request->input('page',1)-1)*5);

    }

    public function patientShow($id)
    {
        $drugs=Drug::find($id);
        $drugs=$drug;

        return view('patient.drugs.show',compact('drug','drugs'));

    }
}
