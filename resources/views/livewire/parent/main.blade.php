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


                    <livewire:add-parents />


                @endsection
                @section('js')

                    <script src="{{ asset('assets/src/plugins/src/table/datatable/datatables.js')}}"></script>


                    <script>
                        /**
                         * ====================
                         * Multiple File Upload
                         * ====================
                         */
                        // We want to preview images, so we register
                        // the Image Preview plugin, We also register
                        // exif orientation (to correct mobile image
                        // orientation) and size validation, to prevent
                        // large files from being added
                        FilePond.registerPlugin(
                            FilePondPluginImagePreview,
                            FilePondPluginImageExifOrientation,
                            FilePondPluginFileValidateSize,
                            // FilePondPluginImageEdit
                        );
                        // Select the file input and use
                        // create() to turn it into a pond
                        FilePond.create(
                            document.querySelector('.file-upload-multiple')
                        );
                    </script>
                        <script>
                            $('#zero-config').DataTable({
                            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                            "<'table-responsive'tr>" +
                            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                            "oLanguage": {
                            "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                            "sInfo": "Showing page _PAGE_ of _PAGES_",
                            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                            "sSearchPlaceholder": "Search...",
                            "sLengthMenu": "Results :  _MENU_",
                        },
                            "stripeClasses": [],
                            "lengthMenu": [7, 10, 20, 50],
                            "pageLength": 10
                        });
                    </script>

                    <!-- BEGIN PAGE LEVEL SCRIPTS -->
                    <script src="{{ asset('assets/src/plugins/src/stepper/bsStepper.min.js')}}"></script>
                    <script src="{{ asset('assets/src/plugins/src/stepper/custom-bsStepper.min.js')}}"></script>
                    <!-- END PAGE LEVEL SCRIPTS -->
@endsection
