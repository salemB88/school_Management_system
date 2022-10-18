<?php

namespace App\Http\Livewire;

use App\Models\my_parent;
use App\Models\my_parent_attachment;
use App\Models\nationalities;
use App\Models\religion;
use App\Models\type_blood;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddParents extends Component
{
    use WithFileUploads;
    public $catchError,$updateMode = false,$showTable=true, $parentId;


    public $currentStep=1,
        $attachments= [],
$parent,

    // Father_INPUTS
$email, $password,
$father_name_ar,$father_name_en,
        $father_national_id, $father_type_blood_id,
$father_passport_id, $father_phone,
        $father_job, $father_nationality_id,
        $father_religion_id, $father_address,


    // Mother_INPUTS
        $mother_name_ar,$mother_name_en,
        $mother_national_id,$mother_type_blood_id,
$mother_passport_id, $mother_phone,
$mother_job,$mother_nationality_id,
        $mother_religion_id,$mother_address;

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [

            'father_national_id' => 'required|min:10|max:10|regex:/[0-9]{9}/',
            'father_passport_id' => 'min:10|max:10',
            'father_phone' => 'min:10|regex:/^[0-9]+$/',
            'mother_national_id' => 'required|string|min:10|max:10|regex:/[0-9]{9}/',
            'mother_passport_id' => 'min:10|max:10',
            'mother_phone' => 'min:10|regex:/^([0-9\s\-\+\(\)]*)$/',
            'attachments'=>'required|mimes:ppt,pptx,doc,docx,pdf,xls,xlsx|max:204800'
        ]);
    }
    public function render()
    {

        $nationalities=nationalities::all();
        $religions=religion::all();
        $bloods=type_blood::all();
        $parents=my_parent::all();

        return view('livewire.parent.add-parents',compact('nationalities','religions','bloods','parents'));

    }
    public function fatherFormSubmit(){

        $this->validate([
            'email' => 'required|unique:my_parents,email,'.$this->parentId,
            'father_name_en' => 'required',
            'father_name_ar' => 'required',
            'father_job' => 'required',
            'father_national_id' => 'required|unique:my_parents,father_national_id,'.$this->parentId,
            'father_passport_id' => 'required|unique:my_parents,father_passport_id,'.$this->parentId,
            'father_phone' => 'required|min:10|regex:/^([0-9\s\-\+\(\)]*)$/',
            'father_nationality_id' => 'required',
            'father_type_blood_id' => 'required',
            'father_religion_id' => 'required',
            'father_address' => 'required',
        ]);


        $this->currentStep = 2;




    }

    public function motherFormSubmit(){

        $this->validate([
            'mother_name_en' => 'required',
            'mother_name_ar' => 'required',
            'mother_job' => 'required',
            'mother_national_id' => 'required|unique:my_parents,mother_national_id,'.$this->parentId,
            'mother_passport_id' => 'required|unique:my_parents,mother_passport_id,'.$this->parentId,
            'mother_phone' => 'required|min:10|regex:/^([0-9\s\-\+\(\)]*)$/',
            'mother_nationality_id' => 'required',
            'mother_type_blood_id' => 'required',
            'mother_religion_id' => 'required',
            'mother_address' => 'required',
        ]);

        $this->currentStep = 3;

    }


//
//    public function attachmentSubmit(){
////dd($this->attachment);
////
////
////        $this->validate([
////            'attachment*'=>'required|mimes:ppt,pptx,doc,docx,pdf,xls,xlsx|max:204800'
////        ]);
//
//        $this->currentStep = 4;
//    }



    public function submitAddParent(){

        $parent= new my_parent();



        $parent->create([
            'email'=>$this->email,
            'password'=>Hash::make($this->password),
            'father_name'=>['ar'=>$this->father_name_ar, 'en'=>$this->father_name_en],
            'father_national_id'=>$this->father_national_id,
            'father_type_blood_id'=>$this->father_type_blood_id,
            'father_passport_id'=>$this->father_passport_id,
            'father_phone'=>$this->father_phone,
            'father_job'=>$this->father_job,
            'father_nationality_id'=>$this->father_nationality_id,
            'father_religion_id'=>$this->father_religion_id,
            'father_address'=>$this->father_address,
            'mother_name'=>['ar'=>$this->mother_name_ar, 'en'=>$this->mother_name_en],
            'mother_national_id'=>$this->mother_national_id,
            'mother_type_blood_id'=>$this->mother_type_blood_id,
            'mother_passport_id'=>$this->mother_passport_id,
            'mother_phone'=>$this->mother_phone,
            'mother_job'=>$this->mother_job,
            'mother_nationality_id'=>$this->mother_nationality_id,
            'mother_religion_id'=>$this->mother_religion_id,
            'mother_address'=>$this->mother_address,
            ]);

        if (isset($this->attachments)) {

            $files = $this->attachments;

            foreach ($files as $file) {
                $file_name = $file->getClientOriginalName();
                $parent_id =  $parent->id;
                $attachments = new my_parent_attachment();
                $attachments->name = $file_name;
                $attachments->my_parent_id = $parent->id;
                $attachments->save();
                $file->storeAs('public/parents/' . $parent_id, $file_name);
            }
        }




        session()->flash('success', __('Add Parent Information successful'));
        return redirect('/grade');
    }
    public function prevStep(){
        $this->currentStep--;
    }



    public function showAddForm(){

        $this->showTable=false;
//        $this->currentStep++;

//        $this->showForm=false;


    }


    public function showEditForm(){

        $this->showTable=false;


    }

    public function parentEdit($id)
    {
        $this->updateMode=true;
        $this->parent=my_parent::findOrFail($id);
        $this->parentId=$this->parent->id;

            $this->email=$this->parent->id;
        $this->password=$this->parent->password;
        $this->father_name_ar=$this->parent->getTranslation('father_name', 'ar');
        $this->father_name_en=$this->parent->getTranslation('father_name', 'en');
          $this->father_national_id=$this->parent->father_national_id;
        $this->father_type_blood_id=$this->parent->father_type_blood_id;
            $this->father_passport_id=$this->parent->father_passport_id;
        $this->father_phone=$this->parent->father_phone;
        $this->father_job=$this->parent->father_job;
        $this->father_nationality_id=$this->father_nationality_id;
        $this->father_religion_id=$this->parent->father_religion_id;
        $this->father_address=$this->parent->father_address;


//        $this->mother_name=$this->parent->mother_name;

        $this->mother_name_ar=$this->parent->getTranslation('mother_name', 'ar');
        $this->mother_name_en=$this->parent->getTranslation('mother_name', 'en');
        $this->mother_national_id=$this->parent->mother_national_id;
        $this->mother_type_blood_id=$this->parent->mother_type_blood_id;
        $this->mother_passport_id=$this->parent->mother_passport_id;
        $this->mother_phone=$this->parent->mother_phone;
        $this->mother_job=$this->parent->mother_job;
        $this->mother_nationality_id=$this->parent->mother_nationality_id;
        $this->mother_religion_id=$this->parent->mother_religion_id;
        $this->mother_address=$this->parent->mother_address;

        $this->showTable=false;

    }

    public function submitEditParent(){


        $this->parent->update([
            'email'=>$this->email,
            'password'=>Hash::make($this->password),
            'father_name'=>['ar'=>$this->father_name_ar, 'en'=>$this->father_name_en],
            'father_national_id'=>$this->father_national_id,
            'father_type_blood_id'=>$this->father_type_blood_id,
            'father_passport_id'=>$this->father_passport_id,
            'father_phone'=>$this->father_phone,
            'father_job'=>$this->father_job,
            'father_nationality_id'=>$this->father_nationality_id,
            'father_religion_id'=>$this->father_religion_id,
            'father_address'=>$this->father_address,
            'mother_name'=>['ar'=>$this->mother_name_ar, 'en'=>$this->mother_name_en],
            'mother_national_id'=>$this->mother_national_id,
            'mother_type_blood_id'=>$this->mother_type_blood_id,
            'mother_passport_id'=>$this->mother_passport_id,
            'mother_phone'=>$this->mother_phone,
            'mother_job'=>$this->mother_job,
            'mother_nationality_id'=>$this->mother_nationality_id,
            'mother_religion_id'=>$this->mother_religion_id,
            'mother_address'=>$this->mother_address,
        ]);

        if (isset($this->attachments)) {

            $files = $this->attachments;

            foreach ($files as $file) {
                $file_name = $file->getClientOriginalName();
                $parent_id = $this->parent->id;
                $attachments = new my_parent_attachment();
                $attachments->name = $file_name;
                $attachments->my_parent_id = $parent->id;
                $attachments->save();
                $file->storeAs('public/parents/' . $parent_id, $file_name);
            }
        }




        session()->flash('success', __('Update Parent Information successful'));
        return redirect('/parent');
    }


    public function parentDelete($id){
       $parent=my_parent::findOrFail($id);
       $parent->delete();
        session()->flash('success', __('Delete Parent Information successful'));
        return redirect('/parent');
    }

}
