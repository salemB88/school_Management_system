@if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Well done!</strong> {{ $message }}
    </div>
@endif




@if ($message = Session::get('error'))
    <div class="alert alert-danger" role="alert">
        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Well done!</strong> {{ $message }}
    </div>
@endif


@if ($message = Session::get('warning'))
    <div class="alert alert-secondary" role="alert">
        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Well done!</strong> {{ $message }}
    </div>
@endif


@if ($message = Session::get('info'))
    <div class="alert alert-secondary" role="alert">
        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Well done!</strong> {{ $message }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-secondary" role="alert">
        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{__('خطأ')}}</strong>



                <ul>
                    @foreach($errors->all() as $error)
                        <li>    {{$error}} </li>
                    @endforeach
                </ul>



    </div>
@endif
