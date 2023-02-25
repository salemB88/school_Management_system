<?php

namespace App\Repository;


use App\Models\ClassRoom;
use App\Models\Gender;
use App\Models\Grade;
use App\Models\Image;
use App\Models\my_parent;
use App\Models\nationalities;
use App\Models\Section;
use App\Models\Specialization;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\type_blood;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class StudentRepository implements StudentRepositoryInterface
{

    public function getStudents()
    {
        return Student::all();
    }


    public function getClassRooms()
    {
        return ClassRoom::all('name', 'id');
    }

    public function getSections()
    {
        return ClassRoom::all('name', 'id');
    }

    public function getGenders()
    {
        return Gender::all();
    }

    public function getGrades()
    {
        return Grade::all('name', 'id');
    }


    public function getNationalities()
    {
        return nationalities::all();
    }

    public function getBloods()
    {
        return type_blood::all();
    }


    public function getParents()
    {
        return my_parent::all('id', 'father_name');
    }


    public function store($request)
    {


        DB::beginTransaction();

        try {

            $student = new Student();

            $student->name = ['ar' => $request->get('name_ar'), 'en' => $request->get('name_en')];
            $student->email = $request->get('email');
            $student->password = Hash::make($request->get('password'));
            $student->gender_id = $request->get('gender_id');
            $student->nationality_id = $request->get('nationality_id');
            $student->blood_id = $request->get('blood_id');
            $student->birth_date = $request->get('birth_date');
            $student->grade_id = $request->get('grade_id');
            $student->classroom_id = $request->get('classroom_id');
            $student->section_id = $request->get('section_id');
            $student->parent_id = $request->get('parent_id');
            $student->academic_year = $request->get('academic_year');
            $student->save();

            if ($request->hasfile('photos')) {

                foreach ($request->file('photos') as $photo) {

                    $name = $photo->getClientOriginalName();

                    $photo->storeAs('attachments/students/' . $student->id, $name, 'attachments_file');


                    //insert image to table image

                    Image::create([
                        'file_name' => $name,
                        'imageable_ids' => $student->id,
                        'imageable_type' => 'App\Models\Student',
                    ]);
                }
            }


            DB::commit();


            session()->flash('success', __('Add Student successful'));
        } catch (\Exception $e) {

            DB::rollback();

            return redirect()->back()->with(['error' => $e->getMessage()]);
        }


    }


    public function update($request, Student $student)
    {
        try {


            $student->name = ['ar' => $request->get('name_ar'), 'en' => $request->get('name_en')];
            $student->email = $request->get('email');
            $student->password = Hash::make($request->get('password'));
            $student->gender_id = $request->get('gender_id');
            $student->nationality_id = $request->get('nationality_id');
            $student->blood_id = $request->get('blood_id');
            $student->birth_date = $request->get('birth_date');
            $student->grade_id = $request->get('grade_id');
            $student->classroom_id = $request->get('classroom_id');
            $student->section_id = $request->get('section_id');
            $student->parent_id = $request->get('parent_id');
            $student->academic_year = $request->get('academic_year');
            $student->save();


            session()->flash('success', __('Update Student successful'));
        } catch (Exception $exception) {
            return redirect()->back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function delete(Student $student)


    {

        try {
            $student->delete();
            session()->flash('success', __('Delete Student successful'));

        } catch (Exception $exception) {
            return redirect()->back()->with(['error' => $exception->getMessage()]);

        }


    }


}
