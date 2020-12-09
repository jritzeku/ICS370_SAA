{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Dashboard') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--{{ __('You are logged in!') }}--}}

                    {{--<br>--}}
                    {{--<br>--}}
                        {{--<h1>Student Profile</h1><hr>--}}

                        {{--<h5>StudentID: {{Auth::user()->id}} </h5>--}}
                        {{--<h5>Name: {{Auth::user()->name}}</h5>--}}
                        {{--<h5>Major: Undeclared </h5><br><br>--}}


                        {{--RESUME: (not uploaded)<br>--}}
                        {{--<br>--}}

                        {{--<a class="btn btn-primary" href="{{url("/schedules/create")}}">Upload Reums</a>--}}
                        {{--<br><br>--}}
                    {{--<a class="btn btn-primary" href="{{url("/appointments/create")}}">Create Appointment</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}




@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                            <br>
                            <br>

                            <h1>Student Profile</h1><hr>

                            <h5>StudentID: {{Auth::user()->id}} </h5>
                            <h5>Name: {{Auth::user()->name}}</h5>
                            <h5>Major: Undeclared </h5><br><br>


                            RESUME: (not uploaded)<br>
                            <br>


                        <br>
                        <br>



                        <hr>

                        <h3>Your Appointments</h3>
                        @if(count($appointments)>0)

                            <table class="table table-striped">
                                <tr>
                                    <th>Title </th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($appointments as $appointment)
                                    <tr>
                                        <td>{{$appointment->title}} </td>
                                        <td><a class ="btn btn-outline-dark" href= {{url("/appointments/{$appointment->id}/edit")}} >Edit </a></td>

                                        <td>

                                            {!!Form::open(['action' => ['App\Http\Controllers\AppointmentsController@destroy', $appointment->id], 'method' => 'DELETE', 'class'  => 'float-right' ])!!}
                                            {{--{{Form::hidden('_method', 'DELETE')}}--}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close() !!}


                                        </td>
                                    </tr>
                                @endforeach

                            </table>

                        @else
                            <p>You have no appointments</p>
                        @endif


                            <a class="btn btn-primary" href="{{url("/appointments/create")}}">Create an Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



