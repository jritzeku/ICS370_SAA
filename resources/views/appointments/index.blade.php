@extends('layouts.app')

@section('content')

    <h1>Appointments</h1>

    @if(count($appointments) > 0)
        @foreach($appointments as $appointment)
            <div class ="card card-body bg-light">
                <h3> <a href = {{url("/appointments/{$appointment->id}")}}> {{$appointment->title}}</a></h3>

                <small>Set on {{$appointment->created_at}} by {{$appointment->user['name']}}</small>

            </div>
        @endforeach

        {{$appointments->links()}}
    @else
        <p>No schedules set</p>
    @endif

@endsection()