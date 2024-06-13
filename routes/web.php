<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class,'allStudents'])->name('home');
Route::get('/student/{id}', [StudentController::class,'singleStudent'])->name('view.student');
Route::get('/add', [StudentController::class,'addStudent']);
Route::get('/update', [StudentController::class,'updateStudent']);
// Route::get('/delete/{id}', [StudentController::class,'deleteStudent']);
Route::get('/student/{id}', [StudentController::class,'deleteStudent'])->name('delete.student');






// Route::get('/about', function () {
//     return view('posting');
// });

// Route::get('/about/{id?}/comment/{commentid?}', function (string $id = null, string $commentid = null) {
//     // return view('welcome');
//     return "<h1>The ID in the url is ". $id ." <h1>The ID in the url is ". $commentid ."</h1></h1>";
//     // return "<h1>The ID in the url is ". $commentid ."</h1>";

// });

Route::get('/about/{id?}', function (string $id = null) {
    // return view('welcome');
    return "<h1>The ID in the url is ". $id ."</h1>";
    // return "<h1>The ID in the url is ". $commentid ."</h1>";

})->whereAlpha('id');
