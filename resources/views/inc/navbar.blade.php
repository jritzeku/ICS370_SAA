<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">SAA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
            {{----}}
            {{--<li><a {{url('/')}}>Home</a></li>--}}
            {{--<li><a {{url('/about')}}>About</a></li>--}}
            {{--<li><a href={{url('/contact')}} >Contact</a></li>--}}
            {{----}}
            <li>

                <a class="nav-link" href={{url('/')}}>Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{url('/about')}}>About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{url('/contact')}}>Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{url('/appointments')}}>Appointments</a>
            </li>
        </ul>
    </div>
</nav>