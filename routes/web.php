<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::controller(StudentController::class)->group(function () {
    Route::get('/', 'allStudents')->name('home');
    Route::get('/student/{id}', 'singleStudent')->name('view.student');
    Route::post('/add', 'addStudent')->name('addStudent');
    Route::get('/update', 'updateStudent');
    Route::get('/updatepage/{id}', 'updatePage')->name('update.page');
    Route::view('/newstudent', 'addStudent')->name('view.form');

    Route::get('/delete/{id}', 'deleteStudent')->name('delete.student');
});








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
