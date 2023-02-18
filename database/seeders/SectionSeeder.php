<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->delete();

        $sections = [
            [
                'name' => 'Section One',
                'status' => 1,
                'classRoom_id' => ClassRoom::all()->random()->id,
            ],

            [
                'name' => 'Section Two',
                'status' => 0,
                'classRoom_id' => ClassRoom::all()->random()->id,
            ],

        ];


        foreach ($sections as $section) {
            Section::create($section);
        }

    }
}
