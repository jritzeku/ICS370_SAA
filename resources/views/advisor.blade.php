
@extends('layouts.advisorLayout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Advisor Page') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{'Welcome back ' }}{{Auth::user()->name}}
                            <br>
                            Department: Computer Science



                        <br>
                        <br>

                            {{--<a class="btn btn-primary" href="{{url("/appointments/create")}}">Create an Appointment</a>--}}

                        <a class="btn btn-primary" href="{{url("/advisor/schedules/create")}}">Create a Schedule</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
