<?php

namespace App\Repository;

use App\Models\Student;

interface StudentRepositoryInterface
{


    public function storeStudent($request);

    public function updateStudent($request, Student $student);

    public function getStudents();

    public function getGrades();

    public function getClassRooms();

    public function getGenders();

    public function getSections();

    public function getNationalities();

    public function getBloods();

    public function getParents();


}
