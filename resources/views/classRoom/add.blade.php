@extends('layouts.master')
@section('title')
    {{__('المدارس')}}
@stop
@section('css')

@endsection
@section('page-header')


    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">

        <div class="layout-px-spacing">

            <div class="middle-content container-xxl p-0">

                <!-- BREADCRUMB -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard"> {{__('Main')}}</a></li>
                            <li class="breadcrumb-item"><a href="class_room"> {{__('Class Room')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Add')}}</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->




        @endsection

@section('content')


        <div class="widget-content widget-content-area blog-create-section">


            <form action="{{ route('class_room.store') }}" method="post">
                @method('POST')
                @csrf
                <div class="form-group mb-4">
                    <label for="formGroupExampleInput">{{__('Class Room:')}}</label>
                    <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="" required>
                </div>

                <!-- Default Input -->
                <label for="formGroupExampleInput">{{__('Grade:')}}</label>

                <select class="form-control mb-4" name="grade_id">
                    @forelse($grades as $grade)
                    <option value="{{$grade->id}}">{{$grade->name}}</option>
                    @empty
                        <option selected disabled>{{__("EMPTY GRADES")}}</option>
                    @endforelse
                </select>

                <div class="form-group mb-4">
                    <label for="formGroupExampleInput2">{{__('Description:')}}</label>
                    <input type="text" name="description" class="form-control" id="blog-description" placeholder="">
                </div>



                <input type="submit"  value="{{__('SAVE')}}" class="btn btn-primary">
            </form>




            @endsection
        @section('js')




                <script>

                </script>
@endsection
