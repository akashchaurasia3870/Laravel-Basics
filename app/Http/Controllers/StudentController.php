<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudent(){
        $students = DB::table('students')
                     ->select('students.*,cities.*')
                     ->join('cities','students.city_id','=','cities.id')
                     ->get();
        // return $students;
        return view('lec21.home',compact('students'));
    }

    public function whenMethod(){
        $condition = true;
        $students = DB::table('students')
                    ->when($condition,function($query){
                        $query->where('age','<',25);
                    },function($query){
                        $query->where('age','>',25);
                    })
                    ->get();
        return $students;
    }

    public function chunkMethod(){
        $condition = true;
        $students = DB::table('students')->orderBy('id')
                    ->chunk(10,function($students){
                        foreach($students as $student){
                            echo $student->name ."<br>";
                        }
                    });
        return $students;
    }

    public function rowSQLMethod(){
        $students = DB::select("select * from studets");
        // $students = DB::select("select * from studets where id = ?",[3]);
        // $students = DB::insert("insert into students (name,age,rollno) values(?,?,?)",['jhon',21,21]);
        // $students = DB::update("update students set email='jhon@jhon.com' where id = ?",[21]);
        // $students = DB::delete("delete from students where id = ?",[21]);
        return $students;
    }


}
