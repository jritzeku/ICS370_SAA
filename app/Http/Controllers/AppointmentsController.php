<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;


class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$appointments = Appointment::orderBy('title','asc')->get();
        $appointments = Appointment::orderBy('created_at','asc')->paginate(1);
        return view('appointments.index')->with('appointments', $appointments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $days = Schedule::find(1);

        $availDays = array();

        if($days->monday ==1){
            array_push($availDays, 1);
        }

        if($days->tuesday ==1){
            array_push($availDays, 2);
        }

        if($days->wednesday ==1){
            array_push($availDays, 3);
        }

        if($days->thursday ==1){
            array_push($availDays, 4);
        }

        if($days->friday ==1){
            array_push($availDays, 5);
        }

        return view('appointments/create')->with('availDays', $availDays);
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
           'title' =>'required',
           'body' => 'required'
        ]);

        //Create post
        $appointment = new Appointment;
        $appointment->title = $request->input('title');

        //TODO: schedule MUST be available!!!   ??drop down from teh schdule??
        $appointment->day = $request->input('day');

        $appointment->time = $request->input('time');



        $appointment->body = $request->input('body');
        $appointment->user_id = auth()->user()->id;



        $appointment->save();

        return redirect('/appointments')->with('success', 'Appointment has been Created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       // return Appointment::find($id);  //just returns json array of data
        $appointment = Appointment::find($id);
        return view('appointments.show')->with('appointment',$appointment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $days = Schedule::find(1);
        $availDays = array();

        if($days->monday ==1){
            array_push($availDays, 1);
        }

        if($days->tuesday ==1){
            array_push($availDays, 2);
        }

        if($days->wednesday ==1){
            array_push($availDays, 3);
        }

        if($days->thursday ==1){
            array_push($availDays, 4);
        }

        if($days->friday ==1){
            array_push($availDays, 5);
        }

        $appointment = Appointment::find($id);
        //need to also pass another variable to view:  https://stackoverflow.com/questions/20110757/laravel-pass-more-than-one-variable-to-view
        return view('appointments.edit')->with('appointment',$appointment)->with( 'availDays', $availDays);
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
            'title' =>'required',
            'body' => 'required'
        ]);

        //Create post
        $appointment = Appointment::find($id);
        $appointment->title = $request->input('title');
        $appointment->day = $request->input('day');
        $appointment->time = $request->input('time');
        $appointment->body = $request->input('body');
        $appointment->user_id = auth()->user()->id;
        $appointment->save();

        return redirect('/appointments')->with('success', 'Appointment has been Edited!');

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
