
 @extends('layouts.app')


@section('content')


    @if (Auth::user()->id==2)
        <a class="btn btn-secondary float-md-right" href="{{url("/advisor")}}">Go to Advisor Page</a>
    @endif
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



                            <h1>Profile</h1><hr>

                            <h5>ID: {{Auth::user()->id}} </h5>
                            <h5>Name: {{Auth::user()->name}}</h5>


                            <p>Upload Documents</p>

                        <br>


                            <div class ="card-body">
                                <form action="" method="post">
                                    @csrf
                                    <input type="file" name="image" />
                                    <input type="submit" value="Upload" />

                                </form>
                            </div>



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



