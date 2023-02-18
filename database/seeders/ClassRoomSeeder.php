<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('class_rooms')->delete();

        $classRooms=[
            [
                'name'=>'Class Room 1',
                'grade_id'=>Grade::all()->random()->id,
                'description'=>'Class Room 1..........',
            ],

            [
                'name'=>'Class Room 2',
                'grade_id'=>Grade::all()->random()->id,
                'description'=>'Class Room 2..........',
            ],
        ];


        foreach ($classRooms as $classRoom){
            ClassRoom::create($classRoom);
        }
    }
}
