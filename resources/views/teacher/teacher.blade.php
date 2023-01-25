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

<h1>Hello</h1>



            @endsection
        @section('js')




                <script>

                </script>
@endsection
