@extends('layouts.master')
@section('title')
    {{__('المدارس')}}
@stop
@section('css')

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/plugins/src/stepper/bsStepper.min.css')}}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/assets/css/light/scrollspyNav.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/plugins/css/light/stepper/custom-bsStepper.css')}}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/assets/css/dark/scrollspyNav.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/plugins/css/dark/stepper/custom-bsStepper.css')}}">
    <!--  END CUSTOM STYLE FILE  -->
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
                            <li class="breadcrumb-item"><a href="class_room"> {{__('Parent')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Add')}}</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->




        @endsection

@section('content')


        <div class="widget-content widget-content-area blog-create-section">
            <livewire:add-parents />



            @endsection
        @section('js')




                <script>

                </script>

                <!-- BEGIN PAGE LEVEL SCRIPTS -->
                <script src="{{ asset('assets/src/plugins/src/stepper/bsStepper.min.js')}}"></script>
                <script src="{{ asset('assets/src/plugins/src/stepper/custom-bsStepper.min.js')}}"></script>
                <!-- END PAGE LEVEL SCRIPTS -->
@endsection
