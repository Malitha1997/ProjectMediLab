<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test_bill;


class TestBillController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

            $patients_test_bills = DB::table('patients')
                ->join('test_bills', 'patients.id', '=', 'test_bills.patients_id')
                ->select('patients.*', 'test_bills.id as tst_id', 'patients.*')
                ->paginate(5);

            return view('admin.TestBills.index', compact('patients_test_bills'))
                 ->with('i', ($request->input('page', 1) - 1) * 5);

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.TestBills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'e_mail'=>'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'credit_card_number'=> 'required|max:16',
            'state'=> 'required|string|min:1|max:255',
            'expire_monnth'=> 'required|string|min:1|max:255',
            'expire_year'=> 'required|numeric',
            'cvv'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{3}$/',

        ]);

        $test_bills =new Test_bill;

        $test_bills->e_mail = $request->e_mail;
        $test_bills->credit_card_number = $request->credit_card_number;
        $test_bills->state = $request->state;
        $test_bills->expire_monnth = $request->expire_monnth;
        $test_bills->expire_year = $request->expire_year;
        $test_bills->cvv = Hash::make($request->cvv);

        $Test_bill->save();

        $patient = new patient;

        $patient->e_mail = $request->e_mail;
        $patient->credit_card_number = $request->credit_card_number;
        $patient->state = $request->state;
        $patient->expire_monnth = $request->expire_monnth;
        $patient->expire_year = $request->expire_year;
        $patient->cvv= $request->cvv;

        $user->patient()->save($patient);

        $user->assignRole('patient');

        return redirect()->route('admin.TestBills.create')
            ->with('success','TestBill created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::find($id);
        $bill_user=$user->Test_bills;

        return view('admin.TestBills.show',compact('user','bill_user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Test_bills=Test_bills::find($id);

        return view('admin.TestBills.edit',compact('Test_bill'));
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
        request()->validate([
            'e_mail'=>'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'credit_card_number'=> 'required|max:16',
            'state'=> 'required|string|min:1|max:255',
            'expire_monnth'=> 'required|string|min:1|max:255',
            'expire_year'=> 'required|numeric',
            'cvv'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{3}$/',
        ]);

        $test_bills =new Test_Bills;

        $test_bills->e_mail = $request->e_mail;
        $test_bills->credit_card_number = $request->credit_card_number;
        $test_bills->state = $request->state;
        $test_bills->expire_monnth = $request->expire_monnth;
        $test_bills->expire_year = $request->expire_year;
        $test_bills->cvv = Hash::make($request->cvv);

        $Test_bill->save();

        $patient = new patient;

        $patient->e_mail = $request->e_mail;
        $patient->credit_card_number = $request->credit_card_number;
        $patient->state = $request->state;
        $patient->expire_monnth = $request->expire_monnth;
        $patient->expire_year = $request->expire_year;
        $patient->cvv= $request->cvv;

        $user->patient()->save($patient);

        $user->assignRole('patient');

        return redirect()->route('admin.TestBills.index')
            ->with('success','TestBill created successfully.');

    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

        {
            $patient = User::find($id);

            $patient->test_bills()->delete();
            $patient->delete();

            return redirect()->route('admin.TestBills.index')
            ->with('success','Test bill deleted successfully');
        }

}
