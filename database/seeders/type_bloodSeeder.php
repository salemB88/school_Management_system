<?php

namespace Database\Seeders;

use App\Models\type_blood;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class type_bloodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
DB::table('type_bloods')->delete();

        $bloods=['O-', 'O+', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-'];


        foreach($bloods as  $blood){
            type_blood::create(['Name' => $blood]);
        }
    }
}
