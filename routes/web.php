<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about',function(){
//     // return view('about');
//     return "<h1>Welcome To About Page</H1>";
// });

Route::view('/contact','pages.contact');

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

Route::get('/about',function(){
    return view('pages.about');
    // return "<h1>Welcome To About Page</H1>";
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


Route::get('/home',function(){
    return view('pages.home');
});


// l-10

Route::prefix('l10')->group(function(){

    Route::get('/home',function(){
        return view('lec10.home');
    });
    
    Route::get('/about',function(){
        return view('lec10.about');
    });
    
    Route::get('/contact',function(){
        return view('lec10.contact');
    });
    
});

// l-11


Route::prefix('l11')->group(function(){

    Route::get('/',function(){
        return view('lec11.welcome');
    });

    Route::get('/test',function(){
        return view('lec11.test');
    });
});


// l-12

Route::prefix('l12')->group(function(){

    Route::get('/user',function(){
        // $users = ['user'=>'jhon deo'];
        // return view('lec12.user',$users);

        return view('lec12.user')
        ->with('user','jhon')
        ->with('city','nyc');

        // return view('lec12.user')->withUser('jhon')->withCity('nyc');
    }); 
});


// l13

// Route::prefix('l13')->group(function(){
//     Route::get('/',[PageController::class,'showHome'])->name('home'); 
//     Route::get('/blog',[PageController::class,'showBlog'])->name('blog'); 
//     Route::get('/user/{id}',[PageController::class,'showUser'])->name('users'); 
// });


Route::prefix('l13')->group(function(){
    Route::controller(PageController::class)->group(function(){ 
        Route::get('/','showHome')->name('home'); 
        Route::get('/blog','showBlog')->name('blog'); 
        Route::get('/user/{id}','showUser')->name('users'); 
        
    });

        Route::get('/test',TestController::class)->name('test'); 


});



