<?php

namespace Database\Seeders;
use App\Models\new_student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class NewStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $json  = File::get(path:'database/json/new_student.json');

        $students = collect(json_decode($json));

        $students->each(function($student){
            new_student::create([
                'name'=>$student->name,
                'email'=>$student->email
            ]);
        });


        // $students = collect([
        //     [
        //         'name'=>'Akash',
        //         'email'=>'akash@akash.com'
        //     ],
        //     [
        //         'name'=>'Luffy',
        //         'email'=>'luffy@luffy.com'
        //     ],
        //     [
        //         'name'=>'Sanji',
        //         'email'=>'sanji@sanj.com'
        //     ],
        //     [
        //         'name'=>'Zoro',
        //         'email'=>'zoro@zoro.com'
        //     ],
        // ]);

        // $students->each(function($student){
        //     new_student::insert($student);
        // });
    }
}
