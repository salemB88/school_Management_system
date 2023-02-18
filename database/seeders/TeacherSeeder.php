<?php

namespace Database\Seeders;

use App\Models\Gender;
use App\Models\Specialization;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $teachers=[
            [
                'email'=>'sloom.888@gmail.com',
                'password'=>Hash::make('0548460359Ss'),
                'name'=>'salem',
                'specialization_id'=>Specialization::all()->random()->id,
                'gender_id'=> Gender::all()->random()->id,
                'joining_date'=> fake()->date,
                'address'=>fake()->address,
            ],
        ];

            foreach($teachers as $teacher){
                Teacher::create($teacher);
            }
    }


}
