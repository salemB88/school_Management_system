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
                            <li class="breadcrumb-item"><a href="#"> {{__('Main')}}</a></li>
                            <li class="breadcrumb-item"><a href="#"> {{__('School Grade')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('View')}}</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->




        @endsection

@section('content')


        <div class="widget-content widget-content-area blog-create-section">
            <a class="btn btn-primary" href="{{route('grade.create')}}">{{__('Add Grades')}}</a>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{__('Name')}}</th>
                        <th scope="col">{{__('Description')}}</th>
                        <th class="text-center" scope="col">{{__('Number of Classes')}}</th>
                        <th class="text-center" scope="col"></th>
                    </tr>
                    <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                    </thead>
                    <tbody>

                        @php
                        $count=0;
                        @endphp
                        @forelse($grades as $grade)
                            <tr>
                            <td>      <p class="mb-0">{{$count++}}</p>    </td>
                            <td>      <p class="mb-0">{{$grade->name}}</p>    </td>
                            <td>      <p class="mb-0">{{$grade->description}}</p>    </td>
                                <td>      <p class="mb-0">0</p>    </td>

                        <td class="text-center">
                            <div class="action-btns">
                                <a href="" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                </a>

                                <!-- Button trigger modal -->
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary mr-2" data-id="{{$grade->id}}" data-name="{{$grade->name}}" data-description="{{$grade->description}}"  data-bs-toggle="modal" data-bs-target="#grade-edit"{{$grade->id}}>
                                        Launch modal
                                    </button>
                                </div>
                 </div>
                        </td>
                            </tr>
                        @empty
                        @endforelse




                    </tbody>
                </table>
            </div>















            <!-- Start edit model -->
            <div class="modal fade" id="grade-edit{{$grade->id}}" tabindex="" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{__('Edit Grade Information')}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <svg> ... </svg>
                            </button>
                        </div>
                        <div class="modal-body">



                            <form action="{{ route('grade.store') }}" method="post">
                                @method('POST')
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">{{__('Grade Name')}}</label>
                                    <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput2">{{__('Description')}}</label>
                                    <input type="text" name="description" class="form-control" id="blog-description" placeholder="">
                                </div>
                                <input type="submit"  class="btn btn-primary">
                            </form>



                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end edit model -->




            @endsection
        @section('js')


            <!--  BEGIN CUSTOM SCRIPT FILE  -->
                <script src="../src/assets/js/scrollspyNav.js"></script>
                <!--  END CUSTOM SCRIPT FILE  -->
                <script>


                    $('#grade-edit').on('modal', function(event) {
                        alert('s')
                        var button = $(event.relatedTarget)
                        var id = button.data('id')
                        alert(id);
                        var name = button.data('name')
                        var modal = $(this)
                        modal.find('.modal-body #id').val(id);
                        modal.find('.modal-body #name').val(name);
                    })

                </script>
                <script>

                    function addVideoInModal(btnSelector, videoSource, modalSelector, iframeHeight, iframeWidth, iframeContainer) {
                        var myModal = new bootstrap.Modal(document.getElementById(modalSelector), {
                            keyboard: false
                        })
                        document.querySelector(btnSelector).addEventListener('click', function() {
                            var src = videoSource;
                            myModal.show('show');
                            var ifrm = document.createElement("iframe");
                            ifrm.setAttribute("src", src);
                            ifrm.setAttribute('width', iframeWidth);
                            ifrm.setAttribute('height', iframeHeight);
                            ifrm.style.border = "0";
                            ifrm.setAttribute("allow", "encrypted-media");
                            document.querySelector(iframeContainer).appendChild(ifrm);
                        })
                    }

                    addVideoInModal('#yt-video-link', 'https://www.youtube.com/embed/YE7VzlLtp-4', 'videoMedia1', '315', '560', '.yt-container')

                    addVideoInModal('#vimeo-video-link', 'https://player.vimeo.com/video/1084537', 'videoMedia2', '315', '560', '.vimeo-container')

                </script>

@endsection
