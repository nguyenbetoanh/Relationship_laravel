<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassITController;
use App\Http\Controllers\RelatinonshipController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("classIT", [ClassITController::class, 'index']);
Route::get("classIT/inputData", [ClassITController::class, 'inputData']);
Route::post("classIT/create", [ClassITController::class, 'create']);
Route::get("classIT/delete/{id}", [ClassITController::class, 'detroy']);
Route::get("classIT/update/{id}", [ClassITController::class, 'inputUpdate']);
Route::post("classIT/update/{id}", [ClassITController::class, 'update']);
Route::get("classIT/search/{key}", [ClassITController::class, 'findByKey']);

Route::prefix('relationship')->group(function(){
    Route::get('oneToOne',[RelatinonshipController::class,'oneToOne']);
    Route::get('oneToMany',[RelatinonshipController::class,'oneToMany']);
    Route::get('manyToMany',[RelatinonshipController::class,'manyToMany']);
});









