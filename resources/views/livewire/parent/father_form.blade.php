
@if($currentStep==1)
{{--    <div id="defaultStep-one" class="content" role="tabpanel">--}}

<form enctype="multipart/form-data">


            <div class="row mb-4">
                <div class="col">
                <label for="defaultForm-email">{{__('Email')}}:</label>
                <input type="email" name="email"  wire:model="email" class="form-control" id="defaultForm-name" >
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


                <div class="col">
                <label for="defaultForm-password">{{__('Password')}}:</label>
                <input type="password" name="password" wire:model="password" class="form-control" id="defaultForm-password" >
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>


            </div>

            <div class="row mb-4">
                <div class="col">
                    <label for="defaultForm-father_name">{{__('Father Name English')}}:</label>
                    <input type="text" class="form-control" name="father_name_ar" wire:model="father_name_ar" placeholder="Full name" aria-label="First name">
                    @error('father_name_ar')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col">
                    <label for="defaultForm-father_name">{{__('Father Name Arabic')}}:</label>
                    <input type="text" class="form-control" name="father_name_en" wire:model="father_name_en" placeholder="Full name"  aria-label="Last name" dir="rtl">
                    @error('father_name_en')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>





            <div class="row mb-4">



                <div class="col">
                <label for="defaultForm-father_passport_id">{{__('Father Nationality')}}:</label>
                <select class="form-control mb-4" name="father_nationality_id" wire:model="father_nationality_id">
                    <option selected disabled>{{__("SELECT")}}</option>
                    @forelse($nationalities as $nationality)
                        <option value="{{$nationality->id}}">{{$nationality->name}}</option>
                    @empty
                        <option selected disabled>{{__("EMPTY Nationality")}}</option>
                    @endforelse
                </select>

                @error('father_nationality_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>






                <div class="col">
                <label for="defaultForm-father_national_id">{{__('Father National Id')}}:</label>
                <input type="text" name="father_national_id" wire:model="father_national_id"  class="form-control" id="defaultForm-father_national_id" >
                @error('father_national_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>



                <div class="col">
                <label for="defaultForm-father_passport_id">{{__('Father Passport Id')}}:</label>
                <input type="text" name="father_passport_id" wire:model="father_passport_id" class="form-control" id="defaultForm-father_passport_id" >
                @error('father_passport_id')


                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            </div>


            <div class="form-group mb-4">
                <label for="defaultForm-father_religion_id">{{__('Father Religion')}}:</label>

                <select class="form-control mb-4" name="father_religion_id" wire:model="father_religion_id">
                    <option selected disabled>{{__("SELECT")}}</option>
                    @forelse($religions as $religion)
                        <option value="{{$religion->id}}">{{$religion->name}}</option>
                    @empty
                        <option selected disabled>{{__("EMPTY Religion")}}</option>
                    @endforelse
                </select>

                @error('father_religion_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="defaultForm-father_type_blood_id">{{__('Father Type Blood')}}:</label>

                <select class="form-control mb-4" name="father_type_blood_id" wire:model="father_type_blood_id">
                    <option selected disabled>{{__("SELECT")}}</option>
                    @forelse($bloods as $blood)
                        <option value="{{$blood->id}}">{{$blood->name}}</option>
                    @empty
                        <option selected disabled>{{__("EMPTY Bloods")}}</option>
                    @endforelse
                </select>

                @error('father_type_blood_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="defaultForm-father_phone">{{__('Father Phone Number')}}:</label>
                <input type="tel" name="father_phone" wire:model="father_phone" class="form-control" id="defaultForm-father_phone" >
                @error('father_phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="defaultForm-father_job">{{__('Father Jop Tittle')}}:</label>
                <input type="text" name="father_job" wire:model="father_job" class="form-control" id="defaultForm-father_job" >
                @error('father_job')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group mb-4">
                <label for="defaultForm-father_address">{{__('Father Address')}}:</label>
                <input type="text" name="father_address" wire:model="father_address" class="form-control" id="defaultForm-father_address" >
                @error('father_address')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

        </form>

        <div class="button-action mt-5">
            <button class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
            <button class="btn btn-secondary btn-nxt" wire:click="fatherFormSubmit">Next</button>
        </div>



    @else
@endif
