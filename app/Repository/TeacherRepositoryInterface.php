<?php
namespace App\Repository;

interface TeacherRepositoryInterface{

    //get all teacher
    public function getTeacher();

    public function getGenders();

    public function getSections();
 public function getSpecializations();
    public function storeTeacher($request);

    public function updateTeacher($request, $teacher);
    public function deleteTeacher($teacher);





}
