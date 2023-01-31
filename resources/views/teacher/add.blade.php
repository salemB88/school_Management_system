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


            <form action="{{ route('teacher.store') }}" method="post">
                @method('POST')
                @csrf


                <div class="row mb-4">
                    <div class="col">
                        <label for="defaultForm-email">{{__('Email')}}:</label>
                        <input type="email" name="email"   class="form-control" id="defaultForm-name"  value="{{old('email')}}" >
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col">
                        <label for="defaultForm-password">{{__('Password')}}:</label>
                        <input type="password" name="password"  class="form-control" id="defaultForm-password" value="{{old('password')}}" >
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="row mb-4">
                    <div class="col">
                        <label for="defaultForm-email">{{__('Name_ar')}}:</label>
                        <input type="text" name="name_ar"   class="form-control" id="defaultForm-name" value="{{old('name_ar')}}" >
                        @error('name_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col">
                        <label for="defaultForm-password">{{__('Name_en')}}:</label>
                        <input type="text" name="name_en"  class="form-control" id="defaultForm-password" value="{{old('name_en')}}" >
                        @error('name_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>



                <div class="row mb-4">
                    <div class="col">
                        <label for="defaultForm-father_passport_id">{{__('Specializations')}}:</label>
                        <select class="form-control mb-4" name="specialization_id">


                            <option selected disabled>{{__("SELECT")}}</option>
                            @forelse($specializations as $specialization)
                                <option value="{{$specialization->id}}" {{old('specialization_id')==$specialization->id ? 'selected' : ''}} >{{$specialization->name}}</option>
                            @empty
                                <option selected disabled>{{__("EMPTY Specialization")}}</option>
                            @endforelse
                        </select>

                        @error('specialization_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col">
                        <label for="defaultForm-father_passport_id">{{__('Gender')}}:</label>
                        <select class="form-control mb-4" name="gender_id">
                            <option selected disabled>{{__("SELECT")}}</option>
                            @forelse($genders as $gender)
                                <option value="{{$gender->id}}" {{old('gender_id')==$gender->id ? 'selected' : ''}}>{{$gender->name}}</option>
                            @empty
                                <option selected disabled>{{__("EMPTY Gander")}}</option>
                            @endforelse
                        </select>

                        @error('gender_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-4">
                <div class="col">
                    <label for="defaultForm-father_passport_id">{{__('Sections')}}:</label>
                    <select class="form-control mb-4" name="sections[]" multiple>
                        <option selected disabled>{{__("SELECT")}}</option>
                        @forelse($sections as $section)
                            <option value="{{$section->id}}" {{old('gender_id')==$section->id ? 'selected' : ''}}>{{$section->name}}</option>
                        @empty
                            <option selected disabled>{{__("EMPTY Gander")}}</option>
                        @endforelse
                    </select>

                    @error('sections')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
        </div>

                <div class="row mb-4">
                <div class="col">
                    <label for="defaultForm-email">{{__('Joining Date')}}:</label>
                    <input type="date" name="joining_date"   class="form-control" id="defaultForm-name" value="{{old('joining_date')}}">
                    @error('joining_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                </div>


                <div class="row mb-4">
                <div class="col">
                    <label for="defaultForm-email">{{__('Address')}}:</label>
                    <input type="text" name="address"   class="form-control" id="defaultForm-name"value="{{old('address')}}" >
                    @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
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
