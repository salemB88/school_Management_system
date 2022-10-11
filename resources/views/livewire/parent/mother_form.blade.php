
@if($currentStep==2)








        <div class="row mb-4">
            <div class="col">
                <label for="defaultForm-mother_name_en">{{__('Mother Name English')}}:</label>
                <input type="text" class="form-control" name="mother_name_en" wire:model="mother_name_en" placeholder="Full name" aria-label="First name">
                @error('mother_name_en')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col">
                <label for="defaultForm-mother_name_ar">{{__('Mother Name Arabic')}}:</label>
                <input type="text" class="form-control" name="mother_name_ar" wire:model="mother_name_ar" placeholder="Full name"  aria-label="Last name" dir="rtl">
                @error('mother_name_ar')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>



        <div class="row mb-4">



            <div class="col">
                <label for="defaultForm-father_passport_id">{{__('Mother Nationality')}}:</label>
                <select class="form-control mb-4" name="mother_nationality_id" wire:model="mother_nationality_id">
                    <option selected disabled>{{__("SELECT")}}</option>
                    @forelse($nationalities as $nationality)
                        <option value="{{$nationality->id}}">{{$nationality->name}}</option>
                    @empty
                        <option selected disabled>{{__("EMPTY Nationality")}}</option>
                    @endforelse
                </select>

                @error('mother_nationality_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>






            <div class="col">
                <label for="defaultForm-father_national_id">{{__('Mother National Id')}}:</label>
                <input type="text" name="mother_national_id" wire:model="mother_national_id"  class="form-control" id="defaultForm-mother_national_id" >
                @error('mother_national_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>



            <div class="col">
                <label for="defaultForm-mother_passport_id">{{__('Mother Passport Id')}}:</label>
                <input type="text" name="mother_passport_id" wire:model="mother_passport_id" class="form-control" id="defaultForm-mother_passport_id" >
                @error('mother_passport_id')


                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>

        <div class="form-group mb-4">
            <label for="defaultForm-mother_religion_id">{{__('Mother Religion')}}:</label>

            <select class="form-control mb-4" name="mother_religion_id" wire:model="mother_religion_id">
                @forelse($religions as $religion)
                    <option value="{{$religion->id}}">{{$religion->name}}</option>
                @empty
                    <option selected disabled>{{__("EMPTY Religion")}}</option>
                @endforelse
            </select>

            @error('mother_religion_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group mb-4">
            <label for="defaultForm-mother_type_blood_id">{{__('Mother Type Blood')}}:</label>

            <select class="form-control mb-4" name="mother_type_blood_id" wire:model="mother_type_blood_id">
                @forelse($bloods as $blood)
                    <option value="{{$blood->id}}">{{$blood->name}}</option>
                @empty
                    <option selected disabled>{{__("EMPTY Bloods")}}</option>
                @endforelse
            </select>

            @error('mother_type_blood_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="defaultForm-mother_phone">{{__('Mother Phone Number')}}:</label>
            <input type="tel" name="mother_phone" wire:model="mother_phone" class="form-control" id="defaultForm-mother_phone" >
            @error('mother_phone')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="defaultForm-mother_job">{{__('Mother Jop Tittle')}}:</label>
            <input type="text" name="mother_job" wire:model="mother_job" class="form-control" id="defaultForm-mother_job" >
            @error('mother_job')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group mb-4">
            <label for="defaultForm-mother_address">{{__('Mother Address')}}:</label>
            <input type="text" name="mother_address" wire:model="mother_address" class="form-control" id="defaultForm-mother_address" >
            @error('mother_address')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>




    <div class="button-action mt-5">
        <button class="btn btn-secondary btn-prev me-3" wire:click="prevStep">Prev</button>
        <button class="btn btn-secondary btn-nxt" wire:click="motherFormSubmit">Next</button>
    </div>

    @else
@endif

