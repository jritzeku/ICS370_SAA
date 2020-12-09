




@extends('layouts.advisorLayout')

@section('content')

    <h1>Schedules</h1>

    @if(count($schedules) > 0)
        @foreach($schedules as $schedule)
            <div class ="card card-body bg-light">
                <!--todo: does url start with advisor? -->
                {{--<h3> <a href = {{url("/appointments/{$appointment->id}")}}> {{$appointment->title}}</a></h3>--}}

                <h3> <a href = {{url("/advisor/schedules/{$schedule->id}")}}> {{$schedule->title}}</a></h3>
                <small>Created at:  {{$schedule->created_at}}</small>
            </div>
        @endforeach

        {{--todo: add pagination code here if wnted--}}
    @else
        <p>No schedules set</p>
    @endif

@endsection()