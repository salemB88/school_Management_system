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
                            <li class="breadcrumb-item"><a href="#"> {{__('Main')}}</a></li>
                            <li class="breadcrumb-item"><a href="teacher"> {{__('School Teacher')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Add')}}</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->




        @endsection

@section('content')


        <div class="widget-content widget-content-area blog-create-section">


            <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">
                @method('POST')
                @csrf


                <div class="row mb-4">
                    <div class="col">
                        <label for="defaultForm-email" >{{__('Email')}}:</label>
                        <input type="email" name="email"   class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }} "
                               id="defaultForm-name"  value="{{old('email')}}" >
                    </div>


                    <div class="col">
                        <label for="defaultForm-password">{{__('Password')}}:</label>
                        <input type="password" name="password"  class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                               id="defaultForm-password" value="{{old('password')}}" >
                    </div>
                </div>


                <div class="row mb-4">
                    <div class="col">
                        <label for="defaultForm-email">{{__('Name_ar')}}:</label>
                        <input type="text" name="name_ar"   class="form-control {{ $errors->has('name_ar') ? ' is-invalid' : '' }}"
                               id="defaultForm-name" value="{{old('name_ar')}}" >
                    </div>


                    <div class="col">
                        <label for="defaultForm-password">{{__('Name_en')}}:</label>
                        <input type="text" name="name_en"  class="form-control {{ $errors->has('name_en') ? ' is-invalid' : '' }}"
                               id="defaultForm-password" value="{{old('name_en')}}" >
                    </div>
                </div>



                <div class="row mb-4">

                    <div class="col">
                        <label for="defaultForm-father_passport_id">{{__('Gender')}}:</label>
                        <select class="form-control mb-4 {{ $errors->has('gender_id') ? ' is-invalid' : '' }}"
                                name="gender_id">
                            <option selected disabled>{{__("SELECT")}}</option>
                            @forelse($genders as $gender)
                                <option value="{{$gender->id}}" {{old('gender_id')==$gender->id ? 'selected' : ''}}>{{$gender->name}}</option>
                            @empty
                                <option selected disabled>{{__("EMPTY Gander")}}</option>
                            @endforelse
                        </select>
                    </div>


                    <div class="col">
                        <label for="defaultForm-father_passport_id">{{__('Nationality')}}:</label>
                        <select class="form-control mb-4 {{ $errors->has('nationality_id') ? ' is-invalid' : '' }}"
                                name="nationality_id">
                            <option selected disabled>{{__("SELECT")}}</option>
                            @forelse($nationalities as $nationality)
                                <option value="{{$nationality->id}}" {{old('gender_id')==$nationality->id ? 'selected' : ''}}>{{$nationality->name}}</option>
                            @empty
                                <option selected disabled>{{__("EMPTY Gander")}}</option>
                            @endforelse
                        </select>
                    </div>


                    <div class="col">
                        <label for="defaultForm-father_passport_id">{{__('Blood Type')}}:</label>
                        <select class="form-control mb-4" name="blood_id" {{ $errors->has('blood_id') ? ' is-invalid' : '' }}>
                            <option selected disabled>{{__("SELECT")}}</option>
                            @forelse($bloods as $blood)
                                <option value="{{$blood->id}}" {{old('blood_id')==$blood->id ? 'selected' : ''}}>{{$blood->name}}</option>
                            @empty
                                <option selected disabled>{{__("EMPTY Blood")}}</option>
                            @endforelse
                        </select>
                    </div>



                    <div class="col">
                        <label for="defaultForm-father_passport_id">{{__('Birth Date')}}:</label>
                        <input  type="date" name="birth_date" {{ $errors->has('birth_Date') ? ' is-invalid' : '' }}
                        class="form-control" id="defaultForm-name"  value="{{old('birth_Date')}}" >
                    </div>






                </div>

                <div class="row mb-4">

                <div class="col">
                    <label for="defaultForm-father_passport_id">{{__('Grade')}}:</label>
                    <select class="form-control mb-4 {{ $errors->has('grade_id') ? ' is-invalid' : '' }}"
                            name="grade_id">
                        <option selected disabled>{{__("SELECT")}}</option>
                        @forelse($grades as $grade)
                            <option value="{{$grade->id}}" {{old('grade_id')==$grade->id ? 'selected' : ''}}>{{$grade->name}}</option>
                        @empty
                            <option selected disabled>{{__("EMPTY Grade")}}</option>
                        @endforelse
                    </select>
                </div>


                    <div class="col">
                        <label for="defaultForm-father_passport_id">{{__('Class Room')}}:</label>
                        <select class="form-control mb-4 {{ $errors->has('classroom_id') ? ' is-invalid' : '' }}"
                                name="classroom_id">
                            <option selected disabled>{{__("SELECT")}}</option>
                            @forelse($classRooms as $classRoom)
                                <option value="{{$classRoom->id}}" {{old('classroom_id')==$classRoom->id ? 'selected' : ''}}>{{$classRoom->name}}</option>
                            @empty
                                <option selected disabled>{{__("EMPTY Class Room")}}</option>
                            @endforelse
                        </select>
                    </div>


                    <div class="col">
                        <label for="defaultForm-father_passport_id">{{__('Section')}}:</label>
                        <select class="form-control mb-4 {{ $errors->has('section_id') ? ' is-invalid' : '' }}"
                                name="section_id">
                            <option selected disabled>{{__("SELECT")}}</option>
                            @forelse($sections as $section)
                                <option value="{{$section->id}}" {{old('gender_id')==$section->id ? 'selected' : ''}}>{{$section->name}}</option>
                            @empty
                                <option selected disabled>{{__("EMPTY Section")}}</option>
                            @endforelse
                        </select>
                    </div>


                    <div class="col">
                        <label for="defaultForm-father_passport_id">{{__('Parent')}}:</label>
                        <select class="form-control mb-4 {{ $errors->has('parent_id') ? ' is-invalid' : '' }}"
                                name="parent_id">
                            <option selected disabled>{{__("SELECT")}}</option>
                            @forelse($parents as $parent)
                                <option value="{{$parent->id}}" {{old('parent_id')==$parent->id ? 'selected' : ''}}>{{$parent->father_name}}</option>
                            @empty
                                <option selected disabled>{{__("EMPTY Parent")}}</option>
                            @endforelse
                        </select>
                    </div>



                    <div class="col">
                        <label for="defaultForm-father_passport_id">{{__('Academic Year')}}:</label>
                        <input  type="date" name="academic_year"   class="form-control {{ $errors->has('academic_year') ? ' is-invalid' : '' }}"
                                id="defaultForm-name"  value="{{old('academic_year')}}" >





        </div>



{{--                    <div class="multiple-file-upload">--}}
{{--                        <input type="file"--}}
{{--                               class="filepond file-upload-multiple"--}}
{{--                               name="photos[]"--}}
{{--                               accept="image/*"--}}
{{--                               multiple--}}
{{--                               data-max-files="3">--}}
{{--                    </div>--}}


                    <div class="row mb-4">

                        <input type="file" accept="image/*" multiple name="photos[]">

                    </div>

                <input type="submit"  class="btn btn-primary">


            </form>



            @endsection
        @section('js')


{{--            <!-- BEGIN PAGE LEVEL SCRIPTS -->--}}
{{--                <script src="{{ asset('assets/src/assets/js/scrollspyNav.js')}}"></script>--}}
{{--                <script src="{{ asset('assets/src/plugins/src/flatpickr/flatpickr.js')}}"></script>--}}

{{--                <script src="{{ asset('assets/src/plugins/src/flatpickr/custom-flatpickr.js')}}"></script>--}}
{{--                <!-- END PAGE LEVEL SCRIPTS -->--}}

{{--                <script>--}}
{{--                    var f1 = flatpickr(document.getElementById('basicFlatpickr'));--}}
{{--                </script>--}}
@endsection
