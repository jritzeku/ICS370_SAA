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
            <li>Date: {{$appointment->day}} </li>
            <li>Time: {{$appointment->time}} </li>
            <li>Comments: {{$appointment->body}} </li><br>
            <li>Meeting Location/Zoom link:
                <br><br>

                <a href="https://us04web.zoom.us/j/6989847786?pwd=OVlKZWg1U3JsSnhBRXAvTkkxTkdzZz09" target="_blank">  Join Zoom Meeting </a>

                <br>
                Meeting ID: 648 184 7286
                Passcode: dfjdklfjdf</li>
        </ul>
        <hr>
        <a href="/appointments/{{$appointment->id}}/edit" class="btn btn-default">Edit</a>


    </div>




@endsection()