<?php

namespace App\Repository;

use App\Models\Student;

interface StudentRepositoryInterface
{


    public function store($request);

    public function update($request, Student $student);

    public function getStudents();

    public function getGrades();

    public function getClassRooms();

    public function getGenders();

    public function getSections();

    public function getNationalities();

    public function getBloods();

    public function getParents();

    public function delete(Student $student);


}
