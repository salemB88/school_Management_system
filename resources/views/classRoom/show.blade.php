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


        <div class="widget-content widget-content-area blog-create-section">
<h3>{{__('Students Information Of Section')}}</h3>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">{{__('ID')}}</th>
                        <th scope="col">{{__('Name')}}</th>
                        <th class="text-center" scope="col"></th>
                    </tr>
                    <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                    </thead>
                    <tbody>

                        @php
                        $count=0;
                        @endphp
                        @forelse($section as $sectionInfo)
                            <tr>
                            <td>      <p class="mb-0">{{$sectionInfo->id}}</p>    </td>
                            <td>      <p class="mb-0">{{$sectionInfo->name}}</p>    </td>

                                <td>      <p class="mb-0">0</p>    </td>

                        <td class="text-center">
                            <div class="action-btns">
                                <a href="" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                </a>


                                <a href="" class="action-btn btn-view bs-tooltip me-2" data-bs-toggle="modal" data-bs-target="#class-room-edit" data-placement="top" title="View"
                                   data-id="{{$classRoom->id}}" data-name="{{$classRoom->name}}" data-description="{{$classRoom->description}}" data-grade_id="{{$classRoom->grade_id}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>                                </a>

                                <a href="" class="action-btn btn-delete bs-tooltip" data-bs-toggle="modal" data-bs-target="#class-room-delete" data-placement="top" title="Delete"
                                   data-id="{{$classRoom->id}}" data-name="{{$classRoom->name}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                </a>
                 </div>
                        </td>

                            </tr>

                        @empty
                            <tr>     <td colspan="4" class="text-center">     <h1>Empty</h1> </td></tr>

                        @endforelse




                    </tbody>
                </table>

            </div>















            <!-- Start edit  classroom model -->
            <div class="modal fade" id="class-room-edit" tabindex="" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{__('Edit Class Room Information')}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <svg> ... </svg>
                            </button>
                        </div>
                        <div class="modal-body">



                            <form action="class_room/update" method="post">
                                @method('patch')
                                    @csrf

                                    <div class="form-group mb-4">
                                        <input type="hidden" name="id" id="id">

                                        <label for="formGroupExampleInput">{{__('Class Room:')}}</label>
                                        <input type="text" name="name" id="name" class="form-control" id="formGroupExampleInput" placeholder="" required>
                                    </div>

                                    <!-- Default Input -->
                                    <label for="formGroupExampleInput">{{__('Grade:')}}</label>

                                    <select class="form-control mb-4" name="grade_id" id="grade_id">
                                        @forelse($grades as $grade)
                                            <option value="{{$grade->id}}">{{$grade->name}}</option>
                                        @empty
                                            <option selected disabled>{{__("EMPTY GRADES")}}</option>
                                        @endforelse
                                    </select>

                                    <div class="form-group mb-4">
                                        <label for="formGroupExampleInput2">{{__('Description:')}}</label>
                                        <input type="text" name="description" class="form-control description" id="blog-description" placeholder="">
                                    </div>



                                    <input type="submit"  value="{{__('SAVE')}}" class="btn btn-primary">
                                </form>

                    </div>
                </div>
            </div>
            </div>
            <!-- end edit classroom model -->





            <!-- Start add multi  classroom model -->
            <div class="modal fade" id="add-multi" tabindex="" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{__('Edit Class Room Information')}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <svg> ... </svg>
                            </button>
                        </div>
                        <div class="modal-body">



                            <form action="class_room/create" method="post">
                                @method('POST')
                                @csrf

                                <div class="form-group mb-4">
                                    <input type="hidden" name="id" id="id">

                                    <label for="formGroupExampleInput">{{__('Class Room:')}}</label>
                                    <input type="text" name="name" id="name" class="form-control" id="formGroupExampleInput" placeholder="" required>


                                <!-- Default Input -->
                                <label for="formGroupExampleInput">{{__('Grade:')}}</label>

                                <select class="form-control mb-4" name="grade_id" id="grade_id">
                                    @forelse($grades as $grade)
                                        <option value="{{$grade->id}}">{{$grade->name}}</option>
                                    @empty
                                        <option selected disabled>{{__("EMPTY GRADES")}}</option>
                                    @endforelse
                                </select>

                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput2">{{__('Description:')}}</label>
                                    <input type="text" name="description" class="form-control description" id="blog-description" placeholder="">
                                </div>



                                <input type="submit"  value="{{__('SAVE')}}" class="btn btn-primary">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end edit garde model -->







            <!-- Start delete  classroom model -->
                <div class="modal fade" id="class-room-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{__('Delete CLass Room From')}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <svg> ... </svg>
                                </button>
                            </div>
                            <div class="modal-body">



                                <form action="class_room/destroy" method="post">
                                    @method('DELETE')


                                    @csrf

                                    <input type="hidden" name="id" id="id">

                                    <div class="form-group mb-4">
                                        <label for="formGroupExampleInput">{{__('Are You Sure To Delete Class Room:')}}</label>
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
                    <!-- end classroom garde model -->





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



                    $('#add-multi').on('show.bs.modal', function(event) {

                    })
                    // $("#add-multi").click(function (){
                    //     $('#myTable').append('<tr><td>my data</td><td>more data</td></tr>');
                    // })


                </script>


@endsection
