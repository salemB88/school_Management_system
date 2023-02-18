<?php

namespace App\Repository;


use App\Models\Gender;
use App\Models\Section;
use App\Models\Specialization;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;

class TeacherRepository implements TeacherRepositoryInterface
{


    public function getTeacher()
    {
        // TODO: Implement getAllTeacher() method.

        $teacher = Teacher::all();

        return $teacher;
    }

    public function getSpecializations()
    {
        return Specialization::all();


    }

    public function getGenders()
    {

        return Gender::all();
    }

    public function getSections()
    {

        return Section::all()->where('status', 1);
    }

    public function storeTeacher($request)
    {

        try {

            $teacher = new Teacher();

            $teacher->name = ['ar' => $request->get('name_ar'), 'en' => $request->get('name_en')];
            $teacher->email = $request->get('email');
            $teacher->password = Hash::make($request->get('password'));
            $teacher->gender_id = $request->get('gender_id');
            $teacher->specialization_id = $request->get('specialization_id');
            $teacher->joining_date = $request->get('joining_date');
            $teacher->address = $request->get('address');
            $teacher->save();

            $teacher->sections()->sync($request->sections);


            session()->flash('success', __('Add Teacher successful'));
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function updateTeacher($request, $teacher)
    {


        try {


            $teacher->name = ['ar' => $request->get('name_ar'), 'en' => $request->get('name_en')];
            $teacher->email = $request->get('email');
            $teacher->password = Hash::make($request->get('password'));
            $teacher->gender_id = $request->get('gender_id');
            $teacher->specialization_id = $request->get('specialization_id');
            $teacher->joining_date = $request->get('joining_date');
            $teacher->address = $request->get('address');
            $teacher->save();
            $teacher->sections()->sync($request->sections);

            session()->flash('success', __('Update Teacher successful'));
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function deleteTeacher($teacher)
    {
        // TODO: Implement deleteTeacher() method.

        try {
            $teacher->delete();

            session()->flash('success', __('Delete Teacher successful'));
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
