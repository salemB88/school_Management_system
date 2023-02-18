<?php

namespace Database\Seeders;

use App\Models\my_parent;
use App\Models\nationalities;
use App\Models\religion;
use App\Models\type_blood;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_parents')->delete();

        $parents=[
          [
              'email'=>'sloom.888@gmail.com',
              'password'=>'123456',
              'father_name'=>'salem',
              'father_national_id'=>'11107400416',
              'father_passport_id'=>'11107400416',
              'father_phone'=>'0548460359',
              'father_job'=>'Test',
              'father_nationality_id'=>nationalities::all()->random()->id,
              'father_religion_id'=>religion::all()->random()->id,
              'father_type_blood_id'=>type_blood::all()->random()->id,
              'father_address'=>'Test',

              'email'=>'sloom.888@gmail.com',
              'password'=>'123456',
              'mother_name'=>'salem',
              'mother_national_id'=>'11107400416',
              'mother_passport_id'=>'11107400416',
              'mother_phone'=>'0548460359',
              'mother_job'=>'Test',
              'mother_nationality_id'=>nationalities::all()->random()->id,
              'mother_religion_id'=>religion::all()->random()->id,
              'mother_type_blood_id'=>type_blood::all()->random()->id,
              'mother_address'=>'Test',


              ],
        ];

        foreach ($parents as $parent){
            my_parent::create($parent);
        }

    }
}
