<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome(){
        return view('lec13.welcome');
    }
    public function showUser(string $id){
        // return view('lec13.user',['id'=>$id]);
        return view('lec13.user',compact('id'));
    }
    public function showBlog(){
        return view('lec13.blog');
    }

}
