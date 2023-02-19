<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) 
    {
    $doctor_schedules = Schedule::with('doctor')->paginate(5);

    return view('Admin.Schedules.index', compact('doctor_schedules'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors=Doctor::get();
        //$all_users_with_all_their_roles = User::with('doctors')->get();
        return view('admin.Schedules.create',compact('doctors'));
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
        'doctor_name' => 'required',
        'available_day' => 'required',
        'available_time' => 'required',
    ]);

    $user = User::firstOrCreate(['f_name' => $request->doctor_name]);

    $schedule = new Schedule;
    $schedule->doctor_id = $user->id;
    $schedule->available_day = $request->available_day;
    $schedule->available_time = $request->available_time;
    $schedule->save();

    return redirect()->route('schedules.index')
                     ->with('success', 'Schedule created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $schedule=Schedule::find($id);
        $sched=$schedule->schedule;

        return view('Admin.Schedules.show',compact('schedule','sched'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schedule=Schedule::find($id);
        return view('admin.schedules.edit',compact('schedule'));
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
            'doctor_name'=> 'required',
            'available_day'=> 'required',
            'available_time'=> 'required',


        ]);

        $user=new User;
        $user->f_name=$request->doctor_name;

        $schedule = new Schedule;
        //$schedule->doctor_id=$request->doctor_name;
        $schedule->available_day = $request->available_day;
        $schedule->available_time = $request->available_time;

        $schedule->update();

        return redirect()->route('schedules.index')
                            ->with('success','Schedule updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);

        $doctor->schedules()->delete();
        $doctor->delete();

        return redirect()->route('schedules.index')
        ->with('success','Schedule deleted successfully');
    }
}
