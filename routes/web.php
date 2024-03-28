<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
Route::get('/my_register', function () {
    return view('my_register');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //display student list
    Route::get('/added_students', [StudentController::class, 'display_students'])->name('student.added_students');
    Route::get('/student_form', [StudentController::class, 'show_stud_form'])->name('student.student_form');
    Route::post('/save_student_info', [StudentController::class, 'save_student_record']);
    Route::get('/edit_student_info/{id}', [StudentController::class, 'edit_stud_record'])->name('student.edit_stud_form');
    Route::put('/update_student_info/{id}', [StudentController::class, 'update_stud_record']);
    Route::delete('/delete_stud_record/{id}', [StudentController::class, 'delete_stud_record']);
    
    

});



require __DIR__.'/auth.php';
