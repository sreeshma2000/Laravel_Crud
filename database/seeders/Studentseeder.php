<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class Studentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Student::create([
        //     'first_name'=>'sreeshma',
        //     'last_name'=>'T',
        //     'gender'=>'female',
        //     'qualifications'=>'PG'
        // ]);

        // Student::create([
        //     'first_name'=>'abhiram',
        //     'last_name'=>'M',
        //     'gender'=>'male',
        //     'qualifications'=>'degree'
        // ]);
        // DB::table('students')->insert([
        //     'first_name'=>'sreeshma',
        //     'last_name'=>'T',
        //     'gender'=>'female',
        //     'qualification'=>'PG'
        // ]);
        Student::factory()->count(5)->create();    
    }
}
