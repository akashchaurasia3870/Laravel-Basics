<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about',function(){
//     // return view('about');
//     return "<h1>Welcome To About Page</H1>";
// });

Route::view('/contact','contact');

Route::get('/contact/admin',function(){
    return view('about');
});

Route::get('/user/{user_id?}/{user_name?}',function( $id=null,$name=null){
    if($id!=null && $name!=null){
        return "<h1>User ID : ".$id."</h1><br><h1>User Name : ".$name."</h1>";
    }else{
        return "<h1>NoDataFound</h1>";
    }
})->whereNumber('user_id')->whereAlpha('user_name');

Route::get('/about-us',function(){
    // return view('about');
    return "<h1>Welcome To About Page</H1>";
})->name('about');


Route::get('/first',function(){
    return view('first');
});

Route::get('/second',function(){
    return view('second');
});

Route::get('/third',function(){
    return view('third');
});

Route::redirect('/old-about','about-us',301);


Route::prefix('page')->group(function (){
    Route::get('/one',function(){
        return view('first');
    });
    
    Route::get('/two',function(){
        return view('second');
    });
    
    Route::get('/three',function(){
        return view('third');
    });
});

Route::fallback(function(){
    return "<h1>Page Not Found</h1>";
});
