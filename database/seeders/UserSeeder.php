<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

use App\Models\user;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/users.json');
        $users  = collect(json_decode($json));
        $users->each(function($user){
            user::create([
                'name'=>$user->name,
                'email'=>$user->email,
                'age'=>$user->age,
                'address'=>$user->address,
                'city'=>$user->city,
                'phone'=>$user->phone,
                'password'=>$user->password,
            ]);
        });
    }
}
