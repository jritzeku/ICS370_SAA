@extends('layouts.app')

@section('content')
    <h1>Edit Appointment</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\SchedulesController@update',$schedule->id], 'method' => 'PUT' ]) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $schedule->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>

    <div class="form-group">
        {{Form::label('day', 'Day')}}
        {{Form::select('day',  $availDays, '' )}};
    </div>

    <div class="form-group">
        {{Form::label('time', 'Time')}}
        {{Form::text('time', '', ['class' => 'form-control', 'placeholder' => 'SchdTime'])}}
    </div>

    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $appointment->body, ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>

    {{--{{Form::hidden('_method', 'PUT')}}--}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection