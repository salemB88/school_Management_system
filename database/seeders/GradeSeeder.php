<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('grades')->delete();

        $grades=[

            ['name'=> 'Grade One',
            'description'=>'Grade One',
                ],

            ['name'=> 'Grade Two',
                'description'=>'Grade Two',
            ],

        ];


        foreach ($grades as $grade){
            Grade::create($grade);
        }
    }
}
