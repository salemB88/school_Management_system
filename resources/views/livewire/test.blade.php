
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



    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/plugins/src/table/datatable/datatables.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/plugins/css/light/table/datatable/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/plugins/css/dark/table/datatable/dt-global_style.css')}}">
    <!-- END PAGE LEVEL STYLES -->

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




<div>
    @livewireScripts
<button wire:click="test">Do Something</button>

</div>
@endsection
