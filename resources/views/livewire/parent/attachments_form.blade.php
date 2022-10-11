@if($currentStep==3)


    <div class="card bg-danger">
        <div class="card-body">

            <input type="file"


                   {{--                                       wire:model="attachments"--}}
                   {{--                   class="filepond file-upload-multiple"--}}


                   multiple
                   name="attachment"

                   wire:model="attachments"
                   data-allow-reorder="true"
                   data-max-file-size="3MB"
                   data-max-files="3">
            <div>
                <h5 class="card-title">{{__('Click To Complete Submit Forms')}}</h5>
                <button class="btn btn-primary mb-2 me-4" wire:click="submitForm"  >{{__('Submit')}}</button>

            </div>
@else
@endif























{{--@if($currentStep==3)--}}




{{--    <div class="multiple-file-upload">--}}
{{--        <label for="defaultForm-mother_name_en">{{__('Add Attachment')}}</label>--}}

{{--        <input type="file" multiple  name="attachment"--}}
{{--               class="filepond file-upload-multiple"--}}
{{--               name="filepond" wire:model="attachment"--}}
{{--               multiple--}}
{{--               data-allow-reorder="true"--}}
{{--               data-max-file-size="3MB"--}}
{{--               data-max-files="3">--}}
{{--        <div class="multiple-file-upload">--}}
{{--            <input type="file"--}}


{{--                   wire:model="attachments"--}}
{{--                   class="filepond file-upload-multiple"--}}


{{--                   multiple--}}
{{--                   name="attachment"--}}


{{--                   data-allow-reorder="true"--}}
{{--                   data-max-file-size="3MB"--}}
{{--                   data-max-files="3">--}}
{{--        </div>--}}


{{--        <input type="file" name="upload" wire:model="attachment">--}}
{{--        @error('upload') <span class="error">{{ $message }}</span> @enderror--}}
{{--        @error('attachment')--}}
{{--        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--        @enderror--}}
{{--    </div>--}}


{{--    <div class="button-action mt-5">--}}
{{--        <button class="btn btn-secondary btn-prev me-3" wire:click="prevStep">Prev</button>--}}
{{--        <button class="btn btn-secondary btn-nxt" wire:click="attachmentSubmit">Next</button>--}}




{{--    @else--}}
{{--@endif--}}
