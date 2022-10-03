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




    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{asset('assets/src/assets/css/light/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/src/assets/css/light/components/accordions.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/src/assets/css/dark/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/src/assets/css/dark/components/accordions.css')}}" rel="stylesheet" type="text/css" />
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
                            <li class="breadcrumb-item"><a href="grade"> {{__('School Grade')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('View')}}</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->




        @endsection

@section('content')

@php
$num="mon";
@endphp





                    <a class="btn btn-primary mb-3 mt-3" href="{{route('grade.create')}}">{{__('Add New Grades')}}</a>

                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            {{__('Operation')}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <li><a class="dropdown-item" href="#">{{__('Export Data To Excel File')}}</a></li>
                            <li><a class="dropdown-item" href="#">  {{__('Import Data From Excel File')}}</a></li>
                        </ul>
                    </div>
        <div class="widget-content widget-content-area blog-create-section">
            <div id="toggleAccordion" class="accordion">

                @forelse($grades as $grade)
                    <div class="card">
                        <div class="card-header" id="...">
                            <section class="mb-0 mt-0">
                                <div role="menu" class="collapsed btn-info" data-bs-toggle="collapse" data-bs-target="#{{str_replace(' ','',$grade->name)}}" aria-expanded="false" aria-controls="defaultAccordionOne">
                                    {{$grade->name}} <div class="icons"><svg> ... </svg></div>
                                </div>

                            </section>


                        </div>

                        <div id="{{str_replace(' ','',$grade->name)}}" class="collapse" aria-labelledby="..." data-bs-parent="#toggleAccordion">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">{{__('Name')}}</th>
                                            <th scope="col">{{__('Status')}}</th>
                                            <th class="text-center" scope="col">{{__('Number of Section')}}</th>
                                            <th class="text-center" scope="col"></th>
                                        </tr>
                                        <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                                        </thead>
                                        <tbody>

                                        @php
                                            $count=0;
                                        @endphp
                                        @forelse($grade->class_rooms as $class_room)
                                            <tr>
                                                <td>      <p class="mb-0">{{$count++}}</p>    </td>
                                                <td>      <p class="mb-0">{{$class_room->name}}</p>    </td>
                                                <td>      <p class="mb-0">{{$class_room->description}}</p>    </td>
                                                <td>      <p class="mb-0"> {{count($class_room->sections)}}</p>   </td>

                                                <td class="text-center">
                                                    <div class="action-btns">
                                                        <a href="" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                        </a>


{{--                                                        <a href="" class="action-btn btn-view bs-tooltip me-2" data-bs-toggle="modal" data-bs-target="#grade-edit" data-placement="top" title="View"--}}
{{--                                                           data-id="{{$grade->id}}" data-name="{{$grade->name}}" data-description="{{$grade->description}}">--}}
{{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>                                </a>--}}

{{--                                                        <a href="" class="action-btn btn-delete bs-tooltip" data-bs-toggle="modal" data-bs-target="#grade-delete" data-placement="top" title="Delete"--}}
{{--                                                           data-id="{{$grade->id}}" data-name="{{$grade->name}}">--}}
{{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>--}}
{{--                                                        </a>--}}
                                                    </div>

                                                </td>






                                            </tr>






                                        @empty
                                            <tr>     <td colspan="4" class="text-center">     <h1>Empty</h1> </td></tr>

                                        @endforelse




                                        </tbody>
                                    </table>


                                        <div class="btn-group mt-10" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                {{__('Grade Operation')}}
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">

                                                <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#grade-edit" data-placement="top" title="View" data-id="{{$grade->id}}" data-name="{{$grade->name}}" data-description="{{$grade->description}}">{{__('Edit Grade')}}</a></li>
                                                <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#grade-delete" data-placement="top" title="Delete" data-id="{{$grade->id}}" data-name="{{$grade->name}}">  {{__('Delete Grade')}}</a></li>


                                                    </ul>
                                                </div>




                                        </div>

                                    </div>
                                </div>
                            </div>


                        @empty

                        @endforelse



                    </div>















                    <!-- Start edit  garde model -->
                    <div class="modal fade" id="grade-edit" tabindex="" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{__('Edit Grade Information')}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <svg> ... </svg>
                                    </button>
                                </div>
                                <div class="modal-body">



                                    <form action="grade/update" method="post">
                                        @method('patch')


                                        @csrf

                                        <input type="hidden" name="id" id="id">

                                        <div class="form-group mb-4">
                                            <label for="formGroupExampleInput">{{__('Grade Name')}}</label>
                                            <input type="text" name="name" id="name" class="form-control" id="formGroupExampleInput" placeholder="">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="formGroupExampleInput2">{{__('Description')}}</label>
                                            <input type="text" name="description" class="form-control" id="blog-description" placeholder="">
                                        </div>


                                <div class="modal-footer">
                                    <button class="btn" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                    <button type="submit"  class="btn btn-primary">Save</button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- end edit garde model -->





                        <!-- Start delete  garde model -->
                        <div class="modal fade" id="grade-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{__('Edit Grade Information')}}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            <svg> ... </svg>
                                        </button>
                                    </div>
                                    <div class="modal-body">



                                        <form action="grade/destroy" method="post">
                                            @method('DELETE')


                                            @csrf

                                            <input type="hidden" name="id" id="id">

                                            <div class="form-group mb-4">
                                                <label for="formGroupExampleInput">{{__('Are You Sure To Delete Grade:')}}</label>
                                                <input type="text" name="name" id="name" class="form-control" id="formGroupExampleInput" placeholder="" disabled>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i>{{__('Cancel')}}</button>
                                                <button type="submit"  class="btn btn-danger">{{__('Delete')}}</button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                            <!-- end delete garde model -->





                        @endsection
                @section('js')


                    <!--  BEGIN CUSTOM SCRIPT FILE  -->
                        <script src="../src/assets/js/scrollspyNav.js"></script>

                        <!-- BEGIN PAGE LEVEL SCRIPTS -->
                        <script src="../src/assets/js/scrollspyNav.js"></script>
                        <!-- END PAGE LEVEL SCRIPTS -->

                        <!--  END CUSTOM SCRIPT FILE  -->
                        <script>

                            // $('#grade-edit-button').click(function () {
                            //     alert('d')
                            //     $('#bookId').val($(this).data('id'));
                            //     $('#addBookDialog').modal('show');
                            // });


                            $('#grade-edit').on('show.bs.modal', function(event) {


                                var button = $(event.relatedTarget)
                                var id = button.data('id')
                                var name = button.data('name')
                                var description = button.data('description')
                                var modal = $(this)
                                modal.find('.modal-body #id').val(id);
                                modal.find('.modal-body #name').val(name);
                                modal.find('.modal-body #description').val(description);
                            })

                            $('#grade-delete').on('show.bs.modal', function(event) {

                                var button = $(event.relatedTarget)
                                var id = button.data('id')
                                var name = button.data('name')

                                var modal = $(this)
                                modal.find('.modal-body #id').val(id);
                                modal.find('.modal-body #name').val(name);

                            })







                        </script>


        @endsection
