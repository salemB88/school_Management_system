


<div class="row">

@if($showTable)
    @include('livewire.parent.table')
@else
<div id="wizard_Default" class="col-lg-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4></h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <div class="bs-stepper stepper-form-one">
                <div class="bs-stepper-header" role="tablist">

                    <div class="step {{$currentStep ==1 ? 'active' : ' '}}" data-target="">
                        <button type="button" class="step-trigger" role="tab" >
                            <span class="bs-stepper-circle">1</span>
                            <span class="bs-stepper-label">Step One</span>
                        </button>
                    </div>
                    <div class="line"></div>
                    <div class="step {{$currentStep == 2 ? 'active ' : ' '}}" >
                        <button type="button" class="step-trigger" role="tab"  >
                            <span class="bs-stepper-circle">2</span>
                            <span class="bs-stepper-label">Step Two</span>
                        </button>
                    </div>
                    <div class="line"></div>
                    <div class="step {{$currentStep ==3 ? 'active' : ' '}}" data-target="#defaultStep-three">
                        <button type="button" class="step-trigger" role="tab"  >
                            <span class="bs-stepper-circle">3</span>
                            <span class="bs-stepper-label">
                                                        <span class="bs-stepper-title">Step Three</span>
                                                    </span>
                        </button>
                    </div>


                </div>


            </div>






            <div class="bs-stepper-content">
                @include('livewire.parent.table')
                @include('livewire.parent.father_form')
                @include('livewire.parent.mother_form')
                @include('livewire.parent.attachments_form')


            </div>


        </div>






    </div>
</div>

@endif
</div>
