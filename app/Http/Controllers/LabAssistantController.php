<?php



namespace App\Http\Controllers;



use App\Models\User;

use App\Models\Doctor;
use App\Models\Lab_assistant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class LabAssistantController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    function __construct()

    {

         /*$this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);

         $this->middleware('permission:product-create', ['only' => ['create','store']]);

         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);

         $this->middleware('permission:product-delete', ['only' => ['destroy']]);*/

    }

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {
        $user_lab_assistants = DB::table('users')
        ->join('lab_assistants', 'users.id', '=', 'lab_assistants.user_id')
        ->select('users.*' ,'users.id as usr_id', 'lab_assistants.*')
        ->paginate(10);

        return view('admin.lab_assistants.index',compact('user_lab_assistants'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
        return view('admin.lab_assistants.create');
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
            'f_name'=> 'required|string|min:1|max:255',
            'l_name'=> 'required|string|min:1|max:255',
            'email'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'telno'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',
            'password' => 'required|same:confirm-password',
            'address_line1'=> 'required',
            'address_line2'=> 'required',
            'address_line3'=> 'required',
            'nic'=> 'required|min:9|max:12',
            'age'=> 'required|numeric|min:1|max:120',
            'qualification'=>'required'
        ]);

        $user = new User;

        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        $lab_assistant = new Lab_assistant;

        $lab_assistant->address_line1 = $request->address_line1;
        $lab_assistant->address_line2 = $request->address_line2;
        $lab_assistant->address_line3 = $request->address_line3;
        $lab_assistant->telno = $request->telno;
        $lab_assistant->nic = $request->nic;
        $lab_assistant->age = $request->age;
        $lab_assistant->qualification = $request->qualification;

        $user->lab_assistant()->save($lab_assistant);

        $user->assignRole('Lab assistant');

        return redirect()->route('lab_assistants.index')
                        ->with('success','Lab Assistant created successfully.');
    }



    /**

     * Display the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {
        $user=User::find($id);
        $luser=$user->user;

        return view('admin.lab_assistants.show',compact('user','luser'));
    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {
        $lab_assistant=Lab_assistant::find($id);
        return view('admin.lab_assistants.edit',compact('lab_assistant'));
    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)

    {
        request()->validate([
            'f_name'=> 'required|min:1|max:255',
            'l_name'=> 'required|min:1|max:255',
            'email'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'telno'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',
            'password' => 'required|same:confirm-password',
            'address_line1'=> 'required',
            'address_line2'=> 'required',
            'address_line3'=> 'required',
            'nic'=> 'required|min:9|max:12',
            'age'=> 'required|numeric',
            'qualification'=>'required'
        ]);

        $user = User::find($id);

        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->update();

        $doctor = new Doctor;

        $lab_assistant->address_line1 = $request->address_line1;
        $lab_assistant->address_line2 = $request->address_line2;
        $lab_assistant->address_line3 = $request->address_line3;
        $lab_assistant->city = $request->city;
        $lab_assistant->nic = $request->nic;
        $lab_assistant->age = $request->age;
        $lab_assistant->qualification = $request->qualification;

        $user->lab_assistant()->update($lab_assistant->toArray());

        return redirect()->route('lab_assistants.index')
                        ->with('success','Lab Assistant updated successfully.');
    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    { //dd($id);

        $user = User::find($id);

        $user->lab_assistant()->delete();
        $user->delete();

        return redirect()->route('lab_assistants.index')
        ->with('success','Lab Assistant deleted successfully');
    }

}
