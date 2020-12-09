@extends('layouts.advisorLayout')

@section('content')

    <h1>Create Schedule</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\SchedulesController@store', 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>

    <!--https://stackoverflow.com/questions/26973442/laravel-blade-check-box-->
    <div class="form-group">
        <label>Which days are you available?</label><br/>

        {{Form::label('monday', 'monday')}}
        {{Form::number('monday', '', ['class' => 'form-control'])}}

        {{Form::label('tuesday', 'tuesday')}}
        {{Form::number('tuesday', '', ['class' => 'form-control'])}}

        {{Form::label('wednesday', 'wednesday')}}
        {{Form::number('wednesday', '', ['class' => 'form-control'])}}

        {{Form::label('thursday', 'thursday')}}
        {{Form::number('thursday', '', ['class' => 'form-control'])}}

        {{Form::label('friday', 'friday')}}
        {{Form::number('friday', '', ['class' => 'form-control'])}}




    </div>




    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection