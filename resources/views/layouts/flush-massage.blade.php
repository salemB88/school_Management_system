@if ($message = Session::get('success'))
{{--    <div class="alert alert-success" role="alert">--}}
{{--        <button aria-label="Close" class="close" data-dismiss="alert" type="button">--}}
{{--            <span aria-hidden="true">&times;</span>--}}
{{--        </button>--}}
{{--        <strong>Well done!</strong> {{ $message }}--}}
{{--    </div>--}}

<div class="alert alert-warning alert-dismissible fade show mb-4" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
    <strong>Primary!</strong> {{$message}}
</div>


@endif




@if ($message = Session::get('error'))
    <div class="alert alert-warning alert-dismissible fade show mb-4" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
        <strong>Primary!</strong>  {{$message}}
    </div>

@endif


@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-dismissible fade show mb-4" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
        <strong>Primary!</strong>  {{$message}}
    </div>

@endif


@if ($message = Session::get('info'))
    <div class="alert alert-warning alert-dismissible fade show mb-4" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
        <strong>Primary!</strong>  {{$message}}
    </div>

@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
        <strong>Primary!</strong>



        <ul>
            @foreach($errors->all() as $error)
                <li>    {{$error}} </li>
            @endforeach
        </ul>

    </div>

@endif
