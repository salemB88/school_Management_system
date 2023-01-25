@extends('layouts.master')
@section('title')
    {{__('المدارس')}}
@stop
@section('css')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('assets/src/plugins/src/animate/animate.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('assets/src/assets/css/light/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/src/assets/css/light/components/carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/src/assets/css/light/components/modal.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/src/assets/css/light/components/tabs.css')}}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/src/assets/css/dark/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/src/assets/css/dark/components/carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/src/assets/css/dark/components/modal.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/src/assets/css/dark/components/tabs.css')}}" rel="stylesheet" type="text/css">
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
                            <li class="breadcrumb-item"><a href="class_room"> {{__('Class Room')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('View')}}</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->




                @endsection

                @section('content')

                    <livewire:show-posts />
                    @endsection
                    @section('js')


                        <!--  BEGIN CUSTOM SCRIPT FILE  -->
                            <script src="../src/assets/js/scrollspyNav.js"></script>

                            <!--  END CUSTOM SCRIPT FILE  -->
                            <script>

                                // $('#grade-edit-button').click(function () {
                                //     alert('d')
                                //     $('#bookId').val($(this).data('id'));
                                //     $('#addBookDialog').modal('show');
                                // });


                                $('#class-room-edit').on('show.bs.modal', function(event) {


                                    var button = $(event.relatedTarget)
                                    var id = button.data('id')
                                    var name = button.data('name')
                                    var description = button.data('description')
                                    var grade_id = button.data('grade_id')
                                    var modal = $(this)
                                    modal.find('.modal-body #id').val(id);
                                    modal.find('.modal-body #name').val(name);
                                    modal.find('.modal-body #grade_id').val(grade_id);
                                    modal.find('.modal-body .description').val(description);
                                })

                                $('#class-room-delete').on('show.bs.modal', function(event) {

                                    var button = $(event.relatedTarget)
                                    var id = button.data('id')
                                    var name = button.data('name')

                                    var modal = $(this)
                                    modal.find('.modal-body #id').val(id);
                                    modal.find('.modal-body #name').val(name);

                                })





                            </script>


                        @endsection



