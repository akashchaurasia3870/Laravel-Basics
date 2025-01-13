<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){

        $users = DB::table('users')
        // ->select('name','email as user_email')
        ->get();

        // $users = DB::table('users')
        // ->pluck('name');

        // $users = DB::table('users')->where('id',2)->get();

        // $users = DB::table('users')->find(2);

        // $users = DB::table('users')
        // ->where([
        //     ['name','like','A%'],
        //     ['age','>','20'],
        // ])
        // ->orWhere([
        //     ['age','>','30']
        //     ])
        // ->get();

        // return $users ;
        // dump($users);

        return view('lec19.all_user',['data'=>$users]);
    }

    public function getUser(string $id){
        $user = DB::table('users')->find($id);
        return view('lec19.user',['data'=>$user]);
    }

    public function insertUser(){
        $user = DB::table('users')
                    // ->insert([
                    //     'name'=>'Akash',
                    //     'email'=>'Akash@Akash.com',
                    //     'city'=>'goa',
                    //     'age'=>'13',
                    //     'password'=>'13131313',
                    //     'phone'=>'131313131313',
                    //     'address'=>'abc,def,xyz',
                    //     'created_at'=>now(),
                    //     'updated_at'=>now(),
                    // ]);
                    // ->insertOrIgnore([
                    //     [
                    //     'name'=>'Akash',
                    //     'email'=>'Akash@Akash.com',
                    //     'city'=>'goa',
                    //     'age'=>'13',
                    //     'password'=>'13131313',
                    //     'phone'=>'131313131313',
                    //     'address'=>'abc,def,xyz',
                    //     'created_at'=>now(),
                    //     'updated_at'=>now(),
                    //     ]
                    // ]);
                    // ->upsert(
                    //         [
                    //             'name'=>'Akash',
                    //             'email'=>'Akash@Akash.com',
                    //             'city'=>'goa',
                    //             'age'=>'13',
                    //             'password'=>'13131313',
                    //             'phone'=>'131313131313',
                    //             'address'=>'abc,def,xyz',
                    //             'created_at'=>now(),
                    //             'updated_at'=>now(),
                    //         ],
                    //         ['name','email']
                    //     );
                    ->insertGetId(
                        [
                            'name'=>'Akash',
                            'email'=>'Akash@Akash.com',
                            'city'=>'goa',
                            'age'=>'13',
                            'password'=>'13131313',
                            'phone'=>'131313131313',
                            'address'=>'abc,def,xyz',
                            'created_at'=>now(),
                            'updated_at'=>now(),
                        ]
                    );
        if($user){
            echo "<h1>Data Added</h1>";
        }

    }

    public function updateUser(int $id){
       $user=  DB::table('users')
        ->where('id',$id)
        ->update([
            'address'=>'india, gujrat'
        ]);

        if($user){
            echo "<h1>Data Added</h1>";
        }else{
            echo dump($user);
        }
    }

    public function deleteUser(){
       $user =  DB::table('users')
        ->where('id',6)
        ->delete();

        if($user){
            echo "<h1>Data Delete</h1>";
        }
    }
}
