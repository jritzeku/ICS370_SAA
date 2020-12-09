@extends('layouts.app')

@section('content')
    <h1>Create Appointment </h1>
    {!! Form::open(['action' => 'App\Http\Controllers\AppointmentsController@store', 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>

    <div class="form-group">
        {{Form::label('date', 'Date')}}
        {{Form::text('date', '', ['class' => 'form-control', 'placeholder' => 'Appointment Date'])}}
    </div>

    <div class="form-group">
        {{Form::label('time', 'Time')}}
        {{Form::text('time', '', ['class' => 'form-control', 'placeholder' => 'Appointment Time'])}}
    </div>

    <div class="form-group">
        {{Form::label('day', 'Day')}}
        {{Form::text('day', '', ['class' => 'form-control', 'placeholder' => 'Select Day'])}}
    </div>


    {{--<div class="form-group">--}}

        {{--{!! Form::Label('day', 'Day') !!}--}}

        {{--{!! Form::select('product_id', $products, $selectedID, ['class' => 'form-control']) !!}--}}


    {{--</div>--}}


    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>

    <div class ="form-group">
        {{Form::file('cover_image')}}
    </div>

    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection