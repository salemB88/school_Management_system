<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\StoreTeacherRequest;
use App\Models\Student;
use App\Repository\StudentRepositoryInterface;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $Student;

    public function __construct(StudentRepositoryInterface $Student)
    {
        $this->Student = $Student;
    }

    public function index()
    {
       $students=$this->Student->getStudents();

       return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genders=$this->Student->getGenders();
        $grades=$this->Student->getGrades();
        $classRooms=$this->Student->getClassRooms();
        $sections=$this->Student->getSections();
        $nationalities=$this->Student->getNationalities();
        $bloods=$this->Student->getBloods();
        $parents=$this->Student->getParents();
        return view('student.create',
            compact('genders','grades','classRooms','sections','nationalities','bloods','parents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest   $request)
    {
        $this->Student->storeStudent($request);

        return redirect('/student');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {

        $genders=$this->Student->getGenders();
        $grades=$this->Student->getGrades();
        $classRooms=$this->Student->getClassRooms();
        $sections=$this->Student->getSections();
        $nationalities=$this->Student->getNationalities();
        $bloods=$this->Student->getBloods();
        $parents=$this->Student->getParents();


        return view('student.edit',
            compact('student','genders','grades','classRooms','sections','nationalities','bloods','parents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $this->Student->updateStudent($request,$student);
        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $this->Student->deleteStudent($student);
        return redirect('/student');
    }
}
