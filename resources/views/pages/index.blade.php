@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">

        <h1>Welcome to SAA </h1>
        <p>This is an application for setting schedules among students and advisors.</p>
        <p><a class="btn btn-primary btn-lg" href= {{url('/login')}}  role="button">Login</a>
            <a class="btn btn-success btn-lg"href= {{url('/register')}}  role="button">Register</a>
        </p>
    </div>
@endsection