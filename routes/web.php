<?php

use Illuminate\Support\Facades\Route;

use App\http\Controllers\Homecontroller;

use App\http\Controllers\AdminController;


route::get('/',[Homecontroller::class,'my_home']); 

route::get('/home',[Homecontroller::class,'index']); 

route::get('/add_food',[Admincontroller::class,'add_food']); 

route::post('/upload_food',[Admincontroller::class,'upload_food']); 



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
