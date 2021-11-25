<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/home', [App\Http\Controllers\StudentsController::class, 'index'])->name('home');
Route::get('student/create', [App\Http\Controllers\StudentsController::class, 'create']);
Route::post('student', [App\Http\Controllers\StudentsController::class, 'store']);
Route::get('student{student}/edit', [App\Http\Controllers\StudentsController::class, 'edit']);
Route::get('student{student}', [App\Http\Controllers\StudentsController::class, 'show']);
Route::put('student{student}', [App\Http\Controllers\StudentsController::class, 'update']);
Route::delete('student{student}', [App\Http\Controllers\StudentsController::class, 'destroy']);

require __DIR__.'/auth.php';
