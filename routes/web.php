<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/student',[StudentController::class,'index'])->name('student.index');
Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
Route::post('/student/store',[StudentController::class,'store'])->name('student.store');
Route::get('/student/{student}/edit',[StudentController::class,'edit'])->name('student.edit');
Route::put('/student/{student}/update',[StudentController::class,'update'])->name('student.update');
Route::delete('/student/{student}/destroy',[StudentController::class,'destroy'])->name('student.destroy');