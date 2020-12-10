


@extends('layouts.advisorLayout')

@section('content')


    {{--<a href="/schedules/" class="btn btn-default">Go back</a>--}}


    <h3>{{$schedule->title}}</h3><br>
    <hr>


    <h5>Availability</h5> <br>

    <h7> Monday:  @if(($schedule->monday) == 1)   available   @else <strong>UNAVAILABLE</strong> @endif</h7><br><br>
    <h7>Tuesday:  @if(($schedule->tuesday) == 1)   available   @else <strong>UNAVAILABLE</strong> @endif</h7><br><br>
    <h7>Wednesday:  @if(($schedule->wednesday) == 1)   available    @else <strong>UNAVAILABLE</strong> @endif</h7><br><br>
    <h7>Thursday:  @if(($schedule->thursday) == 1)   available    @else <strong>UNAVAILABLE</strong> @endif</h7><br><br>
    <h7>Friday:  @if(($schedule->friday) == 1)   available   @else <strong>UNAVAILABLE</strong> @endif</h7><br><br>





    {{--<td><a class ="btn btn-outline-dark" href= {{url("/appointments/{$appointment->id}/edit")}} >Edit </a></td>--}}
    {{----}}

    <a class ="btn btn-outline-dark" href= {{url("/schedules/{$schedule->id}/edit")}} >Edit </a>

    {{----}}
    {{--<a href="/schedules/{{$schedule->id}}/edit" class="btn btn-default">Edittt</a>--}}


    {{--@if(count($schedules) > 0)--}}
        {{--@foreach($schedules as $appointment)--}}
            {{--<div class ="card card-body bg-light">--}}
                {{--<h3> <a href = {{url("/schedules/{$appointment->id}")}}> {{$appointment->title}}</a></h3>--}}
                {{--<small>Set on {{$appointment->created_at}}</small>--}}
            {{--</div>--}}
        {{--@endforeach--}}

        {{--{{$schedules->links()}}--}}
    {{--@else--}}
        {{--<p>No schedules set</p>--}}
    {{--@endif--}}


@endsection()



{{--@extends('layouts.app')--}}

{{--@section('content')--}}

    {{--<hr>--}}

    {{--<h1>{{$appointment->title}}</h1>--}}
    {{--<br>--}}

    {{--<div>--}}

        {{--Date: {{$appointment->date}} <br>--}}
        {{--Time: {{$appointment->time}}  <br> <br>--}}
        {{--Appointment Comments: <br> {{$appointment->body}}--}}


        {{--<ul>--}}
            {{--<li>Date: {{$appointment->date}} </li>--}}
            {{--<li>Comments: {{$appointment->body}} </li>--}}
        {{--</ul>--}}
        {{--<hr>--}}
        {{--<a href="/schedules/{{$appointment->id}}/edit" class="btn btn-default">Edit</a>--}}


    {{--</div>--}}




{{--@endsection()--}}