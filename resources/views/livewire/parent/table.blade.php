
@if($showTable)
    <div>
        <button class="btn btn-secondary btn-nxt" wire:click="showAddForm">{{__('Add Form')}}</button>
    </div>


    <div class="row layout-top-spacing">


        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-8">
                <table id="zero-config" class="table table-striped dt-table-hover" style="width:100%">
                    <thead>
                    <tr>
                        <th>{{__('Father Name')}}</th>
                        <th>{{__('Father Phone')}}</th>
                        <th>{{__('Father National Id')}}</th>
                        <th>{{__('Mother Name')}}</th>
                        <th>{{__('Mother Phone')}}</th>
                        <th>{{__('Mother National Id')}}</th>
                        <th>{{__('Action')}}</th>

                    </tr>
                    </thead>
                    <tbody>

                    @forelse($parents as $parent)


                        <tr>

                            <td>{{$parent->father_name}}</td>
                            <td>{{$parent->father_phone}}</td>
                            <td>{{$parent->father_national_id}}</td>
                            <td>{{$parent->mother_name}}</td>
                            <td>{{$parent->mother_phone}}</td>
                            <td>{{$parent->mother_national_id}}</td>



                            <td class="text-center">
                                <div class="action-btns">
{{--                                    <a href="" class="action-btn btn-view bs-tooltip me-2"  wire:click="showEditForm">--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>--}}
{{--                                    </a>--}}
                                    <button class="btn btn-secondary btn-prev me-3" wire:click="parentEdit({{$parent->id}})">Edit</button>


                                    <button class="btn btn-secondary btn-prev me-3" wire:click="parentDelete({{$parent->id}})">Delete</button>

                                    </a>
                                </div>
                            </td>
                        </tr>

                    @empty

                    @endforelse

                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    </div>



@else
    @endif





