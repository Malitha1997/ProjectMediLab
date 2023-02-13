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

    return view('Drug.index',compact('drugs'))
    ->with('i', ($request->input('page',1)-1)*5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Drug.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $drug=new Drug;

        $this->validate($request,[
            'drug_name'=>'required|max:100|min:5',
            'qty'=>'required|numeric|min:1|max:100',
            'issue_date' => 'required|date',
            'expire_date' => 'required|date',






    // process the valid drug quantity
    // ...






        ]);
//dd($request);
        $drug->drug_name=$request->drug_name;
        $drug->qty=$request->qty;
        $drug->issue_date=$request->issue_date;
        $drug->expire_date=$request->expire_date;

        $drug->save();

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
        $drugs=Drug::find($id);
        $drugs=$drug;

        return view('Drug.show',compact('drug','drugs'));

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
         $drug=Drug::find($id);
        return view('Drug.edit',compact('drug'));

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

        $drug->drug_name=$request->drug_name;
        $drug->qty=$request->qty;
        $drug->issue_date=Hash::make($request->issue_date);
        $drug->expire_date=$request->expire_date;


        $drug->drug()->update($drug->toArray());

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

        return redirect()->route('drugs.index')
        ->with('success','Drug deleted successfully');
        //
    }
}
