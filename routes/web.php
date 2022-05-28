<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

Route::get('/',[CrudController::class,'showData']);
Route::get('/form',[CrudController::class,'formData']);
Route::post('/store',[CrudController::class,'storeData']);

Route::get('/edit/{id}',[CrudController::class,'editData']);
Route::post('/update/{id}',[CrudController::class,'updateData']);

Route::get('/delete/{id}',[CrudController::class,'deleteData']);