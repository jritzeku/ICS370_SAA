<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function index()
    {


        //store all schedules in this collection
       // $schedules = Schedule::all();

        $schedules = Schedule::orderBy('title','desc')->get();

        //call our view, and pass our collection as arg.
        return view('schedules.index')->with('schedules', $schedules);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $working_days = array( 0 => 'Mon', 1 => 'Tue', 2 => 'Wed',
//            3 => 'Thu', 4 => 'Fri', 5 => 'Sat', 6 => 'Sun' );

        return view('schedules.create');
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
            'title' =>'required'
        ]);

        //https://appdividend.com/2018/02/01/laravel-tutorial-example-scratch/


        //Create schedule
        $schedule = new Schedule;
        $schedule->title = $request->input('title');
        $schedule->monday = $request->input('monday');
        $schedule->tuesday = $request->input('tuesday');
        $schedule->wednesday = $request->input('wednesday');
        $schedule->thursday = $request->input('thursday');
        $schedule->friday = $request->input('friday');


        //  $appointment->user_id = auth()->user()->id;
        $schedule->save();

        return redirect('/advisor/schedules')->with('success', 'Schedule has been Created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $schedule = Schedule::find($id);

        return view('schedules.show')->with('schedule',$schedule);


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
