<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\type_blood;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name'=>'sa',
            'email'=>'sloom.888@gmail.com',
            'password'=>Hash::make('6543223456'),
                ]);

$this->call(type_bloodSeeder::class);
$this->call(religionSeeder::class);
$this->call(nationalitieSeeder::class);
$this->call(SpecializationSeeder::class);
$this->call(GenderSeeder::class);
    }
}
