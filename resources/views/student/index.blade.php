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
                            <li class="breadcrumb-item"><a href="student"> {{__('Student')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('View')}}</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->




        @endsection

@section('content')


        <div class="widget-content widget-content-area blog-create-section">


            <a class="btn btn-primary mb-3 mt-3" href="{{route('student.create')}}">{{__('Add New Student')}}</a>



            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" width="5%">
                            <div class="form-check form-check-primary">
                                <input class="form-check-input" id="custom_mixed_parent_all" type="checkbox">
                            </div>
                        </th>
                        <th scope="col">Name</th>
                        <th scope="col">Specialization</th>
                        <th scope="col">Section</th>
                        <th class="text-center" scope="col">Status</th>
                        <th class="text-center" scope="col"></th>
                    </tr>
                    <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                    </thead>
                    <tbody>


                    @forelse($students as $student)
                    <tr>
                        <td>
                            <div class="form-check form-check-primary">
                                <input class="form-check-input custom_mixed_child" type="checkbox">
                            </div>
                        </td>
                        <td>
                            <div class="media">
                                <div class="avatar me-2">
                                    <img alt="avatar" src="assets/img/profile-7.jpeg" class="rounded-circle" />
                                </div>
                                <div class="media-body align-self-center">
                                    <h6 class="mb-0"> {{$student->name}} </h6>
                                    <span> {{$student->email}} </span>
                                </div>
                            </div>
                        </td>

                        <td>

                            <span class="text-success"> {{$student->name}} </span>
                        </td>


{{--                        <td>--}}
{{--                        @forelse($teacher->sections as $section)--}}
{{--                            <span class="text-success"> {{$section->name}} </span>--}}
{{--                            @empty--}}
{{--                            @endforelse--}}
{{--                        </td>--}}


                        <td class="text-center">
                            <span class=  {{ $student->gender->name == 'male' ? "text-success" : "text-danger" }} > {{$student->gender->name}} </span>
                        </td>
                        <td class="text-center">
                            <div class="action-btns">
                                <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                </a>
                                <a href=" {{route('student.edit',$student->id)}} " class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                </a>

                                <form action="{{ route('student.destroy',$student->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf



                                    <button type="submit" onclick="return confirm('Are you Sure to delete Teacher Account?');">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>

                                    </button>

                                </form>
                            </div>
                        </td>
                    </tr>

                    @empty

                    @endforelse



                    </tbody>
                </table>
            </div>



            @endsection
        @section('js')




                <script>

                </script>
@endsection
