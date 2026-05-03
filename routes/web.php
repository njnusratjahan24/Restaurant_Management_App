<?php

use Illuminate\Support\Facades\Route;

use App\http\Controllers\Homecontroller;

use App\http\Controllers\AdminController;


route::get('/',[Homecontroller::class,'my_home']); 

route::get('/home',[Homecontroller::class,'index']); 

route::get('/add_food',[AdminController::class,'add_food']); 

route::post('/upload_food',[AdminController::class,'upload_food']); 

route::get('/view_food',[AdminController::class,'view_food']); 

route::get('/delete_food/{id}',[AdminController::class,'delete_food']);

route::get('/update_food/{id}',[AdminController::class,'update_food']); 

route::post('/edit_food/{id}',[AdminController::class,'edit_food']); 

route::post('/add_cart/{id}',[Homecontroller::class,'add_cart']); 


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
