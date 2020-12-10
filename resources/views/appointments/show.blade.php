@extends('layouts.app')

@section('content')

    <hr>

    <h1>{{$appointment->title}}</h1>
    <br>

    <div>

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
        <td><a class ="btn btn-outline-dark" href= {{url("/appointments/{$appointment->id}/edit")}} >Edit </a></td>

        {{--{!!Form::open(['action' => ['App\Http\Controllers\AppointmentController@destroy', $appointment->id], 'method' => 'DELETE', 'class'  => 'float-right' ])!!}--}}
        {{--{{Form::hidden('_method', 'DELETE')}}--}}
        {{--{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}--}}
        {{--{!!Form::close() !!}--}}


        {{--@if(!Auth::guest())--}}
        {{--@if(Auth::user()->id == $appointment->user_id)--}}
        {{--<a class="btn btn-secondary" href= {{url("/appointments/{$appointment->id}/edit")}} >Edit</a>--}}

        {{--{!!Form::open(['action' => ['App\Http\Controllers\AppointmentController@destroy', $appointment->id], 'method' => 'DELETE', 'class'  => 'float-right' ])!!}--}}
        {{--{{Form::hidden('_method', 'DELETE')}}--}}
        {{--{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}--}}
        {{--{!!Form::close() !!}--}}

        {{--@endif--}}
        {{--@endif--}}



    </div>




@endsection()