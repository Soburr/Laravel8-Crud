<?php

use App\Mail\NewUserMail;
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

Route::get('/email', function(){
    return new NewUserMail ();
});

Route::view('/', 'welcome'); 
Route::middleware('auth')->group(function () {
    // Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::resource('student', 'App\Http\Controllers\StudentsController');  
});

Mail::to('test@gmail.com')->send(new NewUserMail);

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
