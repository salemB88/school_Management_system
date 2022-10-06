
<div id="wizard_Default" class="col-lg-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Default</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <div class="bs-stepper stepper-form-one">
                <div class="bs-stepper-header" role="tablist">
                    <div class="step {{$currentStep == 1 ? 'active' : ' '}}" data-target="#defaultStep-one">
                        <button type="button" class="step-trigger" role="tab" >
                            <span class="bs-stepper-circle">1</span>
                            <span class="bs-stepper-label">Step One</span>
                        </button>
                    </div>
                    <div class="line"></div>
                    <div class="step active {{$currentStep = 2 ? 'active' : ' '}}" data-target="#defaultStep-two">
                        <button type="button" class="step-trigger" role="tab"  >
                            <span class="bs-stepper-circle">2</span>
                            <span class="bs-stepper-label">Step Two</span>
                        </button>
                    </div>
                    <div class="line"></div>
                    <div class="step {{$currentStep == 3 ? 'active' : ' '}}" data-target="#defaultStep-three">
                        <button type="button" class="step-trigger" role="tab"  >
                            <span class="bs-stepper-circle">3</span>
                            <span class="bs-stepper-label">
                                                        <span class="bs-stepper-title">Step Three</span>
                                                    </span>
                        </button>
                    </div>
                </div>
                <div class="bs-stepper-content">
                    <div id="defaultStep-one" class="content" role="tabpanel">
                        <form>
                            <div class="form-group mb-4">
                                <label for="defaultForm-name">Name</label>
                                <input type="text" class="form-control" id="defaultForm-name" >
                            </div>
                        </form>

                        <div class="button-action mt-5">
                            <button class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
                            <button class="btn btn-secondary btn-nxt">Next</button>
                        </div>
                    </div>
                    <div id="defaultStep-two" class="content" role="tabpanel">
                        <form>
                            <div class="form-group mb-4">
                                <label for="defaultEmailAddress">Email Address</label>
                                <input type="email" class="form-control" id="defaultEmailAddress">
                            </div>
                        </form>

                        <div class="button-action mt-5">
                            <button class="btn btn-secondary btn-prev me-3">Prev</button>
                            <button class="btn btn-secondary btn-nxt">Next</button>
                        </div>
                    </div>
                    <div id="defaultStep-three" class="content" role="tabpanel" >
                        <form class="row g-3">
                            <div class="col-12">
                                <label for="defaultInputAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" id="defaultInputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="col-12">
                                <label for="defaultInputAddress2" class="form-label">Address 2</label>
                                <input type="text" class="form-control" id="defaultInputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="col-md-6">
                                <label for="defaultInputCity" class="form-label">City</label>
                                <input type="text" class="form-control" id="defaultInputCity">
                            </div>
                            <div class="col-md-4">
                                <label for="defaultInputState" class="form-label">State</label>
                                <select id="defaultInputState" class="form-select">
                                    <option selected="">Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="defaultInputZip" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="defaultInputZip">
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="defaultGridCheck">
                                    <label class="form-check-label" for="defaultGridCheck">
                                        Check me out
                                    </label>
                                </div>
                            </div>
                        </form>

                        <div class="button-action mt-3">
                            <button class="btn btn-secondary btn-prev me-3">Prev</button>
                            <button class="btn btn-success me-3">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
