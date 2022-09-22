@extends('layouts.master')
@section('title')
    {{__('الفواتير')}}
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
                            <li class="breadcrumb-item"><a href="#">App</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->




        @endsection

@section('content')


        <div class="widget-content widget-content-area blog-create-section">

            <div class="row mb-4">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="post-title" placeholder="Post Title">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-sm-12">
                    <label>Content</label>
                    <div id="blog-description"></div>
                </div>
            </div>


@endsection
        @section('js')




                <script>

                </script>
@endsection
