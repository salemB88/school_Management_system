<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use App\Models\Gender;
use App\Models\Grade;
use App\Models\my_parent;
use App\Models\nationalities;
use App\Models\Section;
use App\Models\Student;
use App\Models\type_blood;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students=[
            [
                'email'=>'sloom.888@gmail.com',
                'password'=>'123456',
                'name'=>['ar'=>'سالم', 'en'=>'salem'],
                'gender_id'=>Gender::all()->random()->id,
                'nationality_id'=>nationalities::all()->random()->id,
                'blood_id'=>type_blood::all()->random()->id,
                'birth_date'=>fake()->date,
                'grade_id'=>Grade::all()->random()->id,
                'classroom_id'=>ClassRoom::all()->random()->id,
                'section_id'=>Section::all()->random()->id,
                'parent_id'=>my_parent::all()->random()->id,
                'academic_year'=>fake()->date,
            ],
        ];


        foreach ($students as $student){
            Student::create($student);
        }
    }
}
