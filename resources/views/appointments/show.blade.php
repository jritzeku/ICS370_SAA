@extends('layouts.app')

@section('content')

    <hr>

    <h1>{{$appointment->title}}</h1>
    <br>

    <div>

        {{--Date: {{$appointment->date}} <br>--}}
        {{--Time: {{$appointment->time}}  <br> <br>--}}
        {{--Appointment Comments: <br> {{$appointment->body}}--}}


        <ul>
            <li>Date: {{$appointment->date}} </li>
            <li>Time: {{$appointment->time}} </li>
            <li>Comments: {{$appointment->body}} </li>
        </ul>


    </div>


@endsection()