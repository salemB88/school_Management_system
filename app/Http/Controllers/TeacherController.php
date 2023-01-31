<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Repository\TeacherRepositoryInterface;
use App\Http\Requests\StoreTeacherRequest;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $Teacher;

    public function __construct(TeacherRepositoryInterface $Teacher)
    {
        $this->Teacher = $Teacher;
    }

    public function index()
    {


        $teachers = $this->Teacher->getTeacher();
        return view('teacher.teacher', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $specializations = $this->Teacher->getSpecializations();
        $genders = $this->Teacher->getGenders();
        $sections = $this->Teacher->getSections();
        return view('teacher.add', compact('specializations', 'genders', 'sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * //     * @param \Illuminate\Http\Request $request
     * //     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherRequest $request)
    {

        $this->Teacher->storeTeacher($request);
        return redirect('/teacher');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Teacher $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Teacher $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        $specializations = $this->Teacher->getSpecializations();
        $genders = $this->Teacher->getGenders();
        $sections = $this->Teacher->getSections();



  

        return view('teacher.edit', compact('teacher', 'specializations', 'genders', 'sections'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Teacher $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTeacherRequest $request, Teacher $teacher)
    {


        $this->Teacher->updateTeacher($request, $teacher);
        return redirect('/teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Teacher $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $this->Teacher->deleteTeacher($teacher);
        return redirect('/teacher');
    }
}
