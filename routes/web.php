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

route::get('/my_cart',[Homecontroller::class,'my_cart']);

route::get('/remove_cart/{id}',[Homecontroller::class,'remove_cart']);

route::post('/confirm_order',[Homecontroller::class,'confirm_order']);

route::get('/orders',[AdminController::class,'orders']);

route::get('/on_the_way/{id}',[AdminController::class,'on_the_way']);

route::get('/delivered/{id}',[AdminController::class,'delivered']);

route::get('/canceled/{id}',[AdminController::class,'canceled']);

route::post('/book_table',[Homecontroller::class,'book_table']);

route::get('/reservations',[AdminController::class,'reservations']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
