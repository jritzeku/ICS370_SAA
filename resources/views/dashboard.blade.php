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

                    {{ __('You are logged in!') }}

                    <br>
                    <br>


                        NAME: TOM <br>

                        STUDENT ID: 324324<br>

                        RESUME: (not uploaded)<br>

                        <a class="btn btn-primary" href="{{url("/appointments/create")}}">Upload Reums</a>
                        <br><br>
                    <a class="btn btn-primary" href="{{url("/appointments/create")}}">Create a Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection






{{--@extends('layouts.app')--}}

{{--@section('content')--}}
    {{--<h1>Edit Appointment</h1>--}}
    {{--{!! Form::open(['action' => ['App\Http\Controllers\AppointmentsController@update',$appointment->id], 'method' => 'PUT' ]) !!}--}}
    {{--<div class="form-group">--}}
        {{--{{Form::label('title', 'Title')}}--}}
        {{--{{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--{{Form::label('body', 'Body')}}--}}
        {{--{{Form::textarea('body', $post->body, ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}--}}
    {{--</div>--}}

    {{--{{Form::hidden('_method', 'PUT')}}--}}
    {{--{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}--}}
    {{--{!! Form::close() !!}--}}
{{--@endsection--}}