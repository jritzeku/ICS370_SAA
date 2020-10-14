
<!--
-if there is error, loop thru errors and if exists, print them
-->
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif


@if(session('success'))
    <div class="alert alert-success">  <!--should be green-->
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger"> <!--should be red-->
        {{session('error')}}
    </div>
@endif


