<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('genders')->delete();

        $genders=[
            ['en'=>'male' ,  'ar'=>'ذكر'],
            ['en'=>'female', 'ar'=>'انثى']
        ];

        foreach ($genders as $gender){
            Gender::create(['name'=>$gender]);
        }
    }
}
