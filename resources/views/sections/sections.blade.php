@extends('layouts.master')
@section('title')
    {{__('المدارس')}}
@stop
@section('css')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('assets/src/plugins/src/animate/animate.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('assets/src/assets/css/light/scrollspyNav.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/src/assets/css/light/components/carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/src/assets/css/light/components/modal.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/src/assets/css/light/components/tabs.css')}}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/src/assets/css/dark/scrollspyNav.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/src/assets/css/dark/components/carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/src/assets/css/dark/components/modal.css')}}" rel="stylesheet" type="text/css"/>
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
                            <li class="breadcrumb-item"><a href="sections"> {{__('Sections')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('View')}}</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->


                @endsection

                @section('content')

                    <a class="btn btn-primary mb-3 mt-3" data-bs-toggle="modal" data-bs-target="#section-add"
                       data-placement="top">{{__('Add Section')}}</a>
                    <a class="btn btn-primary mb-3 mt-3" data-bs-toggle="modal" data-bs-target="#class-room-edit"
                       data-placement="top" title="View">{{__('Add multi Grades')}}</a>

                    <div class="widget-content widget-content-area blog-create-section">

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{__('Name')}}</th>
                                    <th scope="col">{{__('Class Room')}}</th>

                                    <th scope="col">{{__('Status')}}</th>
                                    <th class="text-center" scope="col">{{__('Number of Student')}}</th>
                                    <th class="text-center" scope="col"></th>
                                </tr>
                                <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                                </thead>
                                <tbody>

                                @php
                                    $count=0;
                                @endphp
                                @forelse($sections as $section)
                                    <tr>
                                        <td><p class="mb-0">{{$count++}}</p></td>
                                        <td><p class="mb-0">{{$section->name}}</p></td>
                                        <td><p class="mb-0">{{$section->classRoom->name}}</p></td>

                                        <td><span
                                                class="badge badge-light-{{$section->status ==0 ? 'danger':'success'}}">{{$section->status ==0 ? __('Inactive'): __('Active')}}</span>
                                        </td>
                                        <td><p class="mb-0">0</p></td>

                                        <td class="text-center">
                                            <div class="action-btns">
                                                <a href="" class="action-btn btn-view bs-tooltip me-2"
                                                   data-toggle="tooltip" data-placement="top" title="View">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </a>


                                                <a href="" class="action-btn btn-view bs-tooltip me-2"
                                                   data-placement="top" title="View" data-bs-toggle="modal"
                                                   data-bs-target="#edit{{ $section->id }}" data-placement="top">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-edit-2">
                                                        <path
                                                            d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                    </svg>
                                                </a>

                                                {{-- <a href="" class="action-btn btn-delete bs-tooltip" data-bs-toggle="modal" data-bs-target="#section-delete" data-placement="top" title="Delete"
                                                   data-id="{{$section->id}}" data-name="{{$section->name}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                </a> --}}
                                            </div>
                                        </td>

                                    </tr>















                                    <!-- Start section add  model -->
                                    <div class="modal fade" id="section-add" tabindex="" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="exampleModalLabel">{{__('Add Section')}}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                        <svg> ...</svg>
                                                    </button>
                                                </div>
                                                <div class="modal-body">


                                                    <form action="{{route('section.store')}}" method="post">
                                                        @method('POST')


                                                        @csrf

                                                        <input type="hidden" name="id" id="id">

                                                        <div class="form-group mb-4">
                                                            <label
                                                                for="formGroupExampleInput">{{__('Section Name:')}}</label>
                                                            <input type="text" name="name" id="name"
                                                                   class="form-control" id="formGroupExampleInput"
                                                                   placeholder="" required>
                                                        </div>


                                                        <label for="formGroupExampleInput">{{__('Class Room:')}}</label>
                                                        <select class="form-control mb-4" name="classRoom_id" required>
                                                            @forelse($classRooms as $classRoom)
                                                                <option
                                                                    value="{{$classRoom->id}}">{{$classRoom->name}}</option>
                                                            @empty
                                                                <option selected
                                                                        disabled>{{__("EMPTY GRADES")}}</option>
                                                            @endforelse
                                                        </select>

                                                        <div class="form-group mb-4">
                                                            <label
                                                                for="formGroupExampleInput2">{{__('Status:')}}</label>
                                                            <select class="form-control mb-4" name="status" required>

                                                                <option value="0">{{__("Inactive")}}</option>
                                                                <option value="1">{{__("Active")}}</option>
                                                            </select>
                                                        </div>


                                                        <div class="modal-footer">
                                                            <button class="btn" data-bs-dismiss="modal"><i
                                                                    class="flaticon-cancel-12"></i> Discard
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end section add  model -->






                                    <!-- Start section edit  model -->
                                    <div class="modal fade" id="edit{{ $section->id }}" tabindex="" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header btn-light-primary">
                                                    <h5 class="modal-title b"
                                                        id="exampleModalLabel">{{__('sections.edit')}}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close">


                                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                                            <path
                                                                d="M10.185,1.417c-4.741,0-8.583,3.842-8.583,8.583c0,4.74,3.842,8.582,8.583,8.582S18.768,14.74,18.768,10C18.768,5.259,14.926,1.417,10.185,1.417 M10.185,17.68c-4.235,0-7.679-3.445-7.679-7.68c0-4.235,3.444-7.679,7.679-7.679S17.864,5.765,17.864,10C17.864,14.234,14.42,17.68,10.185,17.68 M10.824,10l2.842-2.844c0.178-0.176,0.178-0.46,0-0.637c-0.177-0.178-0.461-0.178-0.637,0l-2.844,2.841L7.341,6.52c-0.176-0.178-0.46-0.178-0.637,0c-0.178,0.176-0.178,0.461,0,0.637L9.546,10l-2.841,2.844c-0.178,0.176-0.178,0.461,0,0.637c0.178,0.178,0.459,0.178,0.637,0l2.844-2.841l2.844,2.841c0.178,0.178,0.459,0.178,0.637,0c0.178-0.176,0.178-0.461,0-0.637L10.824,10z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <form action="{{Route('section.update',$section->id)}}"
                                                          method="post">
                                                        @method('patch')
                                                        @csrf

                                                        <input type="hidden" name="id" id="id">

                                                        <div class="form-group mb-4">
                                                            <label
                                                                for="formGroupExampleInput">{{__('Section Name:')}}</label>
                                                            <input type="text" name="name" id="name"
                                                                   class="form-control" id="formGroupExampleInput"
                                                                   placeholder="" value="{{ $section->name }}" required>
                                                        </div>


                                                        <label for="formGroupExampleInput">{{__('Class Room:')}}</label>
                                                        <select class="form-control mb-4" id="classRoom_id"
                                                                name="classRoom_id" required>
                                                            @forelse($classRooms as $classRoom)
                                                                <option value="{{$classRoom->id}}"
                                                                    {{ $classRoom->id == $section->classRoom_id ? 'selected' : ''  }} >{{$classRoom->name}}</option>
                                                            @empty
                                                                <option selected
                                                                        disabled>{{__("EMPTY GRADES")}}</option>
                                                            @endforelse
                                                        </select>

                                                        <div class="form-group mb-4">
                                                            <label
                                                                for="formGroupExampleInput2">{{__('Status:')}}</label>
                                                            <select class="form-control mb-4" id="status" name="status"
                                                                    required>

                                                                <option
                                                                    value="0" {{ $section->status == 0  ? 'selected' : ''  }} >{{__("Inactive")}}</option>
                                                                <option
                                                                    value="1" {{ $section->status == 1 ? 'selected' : ''  }} >{{__("Active")}}</option>
                                                            </select>
                                                        </div>


                                                        <div class="form-group mb-4">
                                                            <label
                                                                for="formGroupExampleInput2">{{__('section.teachers:')}}</label>
                                                            <select class="form-control mb-4" id="teachers"
                                                                    name="teachers[]" multiple>


                                                                @forelse($teachers  as $teacher)
                                                                    <option
                                                                        value="{{ $teacher->id }}" {{ $section->teachers->contains('id',$teacher->id) ? 'selected' : '' }}> {{ $teacher->name}} </option>
                                                                @empty

                                                                @endforelse


                                                            </select>
                                                        </div>


                                                        <div class="modal-footer">
                                                            <button class="btn" data-bs-dismiss="modal"><i
                                                                    class="flaticon-cancel-12"></i> Discard
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end section edit  model -->






                                    <!-- Start delete  classroom model -->
                                    <div class="modal fade" id="section-delete" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="exampleModalLabel">{{__('Delete CLass Room From')}}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                        <svg> ...</svg>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <form action="section/destroy" method="post">
                                                        @method('DELETE')


                                                        @csrf

                                                        <input type="hidden" name="id" id="id">

                                                        <div class="form-group mb-4">
                                                            <label
                                                                for="formGroupExampleInput">{{__('Are You Sure To Delete Section:')}}</label>
                                                            <input type="text" name="name" id="name"
                                                                   class="form-control" id="formGroupExampleInput"
                                                                   placeholder="" disabled>
                                                        </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button class="btn" data-bs-dismiss="modal"><i
                                                            class="flaticon-cancel-12"></i>{{__('Cancel')}}</button>
                                                    <button type="submit"
                                                            class="btn btn-danger">{{__('Delete')}}</button>
                                                </div>

                                                </form>


                                            </div>
                                        </div>
                                    </div>


                                    <!-- end classroom garde model -->



                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center"><h1>Empty</h1></td>
                                    </tr>

                                @endforelse


                                </tbody>
                            </table>


                        </div>


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


                                // $('#section-edit').on('show.bs.modal', function(event) {


                                //     var button = $(event.relatedTarget)
                                //     var id = button.data('id')
                                //     var name = button.data('name')
                                //     var status = button.data('status')
                                //     var class_id = button.data('class_room')

                                //     var modal = $(this)
                                //     modal.find('.modal-body #id').val(id);
                                //     modal.find('.modal-body #name').val(name);
                                //     modal.find('.modal-body #classRoom_id').val(class_id);
                                //     modal.find('.modal-body #status').val(status);
                                // })

                                $('#section-delete').on('show.bs.modal', function (event) {

                                    var button = $(event.relatedTarget)
                                    var id = button.data('id')
                                    var name = button.data('name')

                                    var modal = $(this)
                                    modal.find('.modal-body #id').val(id);
                                    modal.find('.modal-body #name').val(name);

                                })


                                $('#add-multi').on('show.bs.modal', function (event) {

                                    alert('s')

                                    // var button = $(event.relatedTarget)
                                    // var id = button.data('id')
                                    // var name = button.data('name')
                                    // var description = button.data('description')
                                    // var grade_id = button.data('grade_id')
                                    // var modal = $(this)
                                    // modal.find('.modal-body #id').val(id);
                                    // modal.find('.modal-body #name').val(name);
                                    // modal.find('.modal-body #grade_id').val(grade_id);
                                    // modal.find('.modal-body .description').val(description);
                                })
                                // $("#add-multi").click(function (){
                                //     $('#myTable').append('<tr><td>my data</td><td>more data</td></tr>');
                                // })


                            </script>


@endsection
