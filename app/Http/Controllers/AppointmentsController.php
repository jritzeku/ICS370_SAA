<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
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

//        $appointments = Appointment::orderBy('title','asc')->get();
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
        return view('appointments/create');
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
        $appointment->date = $request->input('date');
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
        $appointment = App::find($id);
        return view('appointments.edit')->with('appointment',$appointment);
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
        $this->validate($request, [
            'title' =>'required',
            'body' => 'required'
        ]);

        //Create post
        $appointment = Appointment::find($id);
        $appointment->title = $request->input('title');
        $appointment->date = $request->input('date');
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
