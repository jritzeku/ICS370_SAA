@extends('layouts.app')

@section('content')

    <h1>{{$title}}</h1>
    @if(count($benefits) > 0)
        <ul>
            <ul class="list-group">
                @foreach($benefits as $benefit)
                    <li class="list-group-item">{{$benefit}}</li>

                @endforeach
            </ul>
        </ul>
    @endif

@endsection


