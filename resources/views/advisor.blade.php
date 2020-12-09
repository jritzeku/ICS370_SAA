
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

                        {{ __('You are logged in as advisor!') }}


                        <br>
                        <br>

                        <a class="btn btn-primary" href="{{url("/appointments/create")}}">Create a Schedule</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
