<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\SubmissionController;
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

Route::get('/', function() {
    return view ('main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\MainPageController::class, 'index']) -> name ('main');

Route::get('details', [App\Http\Controllers\MainPageController::class, 'details']) -> name ('details');

// THis restrict the access to submission without login
Route::group(['middleware' => ['authstaff']], function () {
    // These to go to the create submission page
    Route::get('/submission', [App\Http\Controllers\SubmissionController::class, 'index']) -> name ('submission');
    Route::get('/submission/create', [App\Http\Controllers\SubmissionController::class, 'create']);
    Route::post('/submission/create', [App\Http\Controllers\SubmissionController::class, 'create'])->name('submission.create');

    // These two to edit & update submission
    Route::get('/submission/{ID}/edit', [App\Http\Controllers\SubmissionController::class, 'edit']);
    Route::put('/submission/{ID}/edit', [App\Http\Controllers\SubmissionController::class, 'update']);

    // This is to delete submission
    Route::delete('/submission/{Paper_ID}', [App\Http\Controllers\SubmissionController::class, 'destroy']);

});