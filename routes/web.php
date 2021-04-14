<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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



Route::get('/', [StudentController::class, 'homePage'])->name('home_page');
Route::get('/show_all_students', [StudentController::class, 'showAllStudent'])->name('allStd');

Route::get('/add_new_students',[StudentController::class, 'addNewStudent'])->name('addStd');

Route::get('/editStudent/{id}',[StudentController::class, 'editStudent'])->name('editStd');
Route::post('/editStudent',[StudentController::class, 'updateStudent'])->name('updateStd');

Route::get('/singleStudent/{id}',[StudentController::class, 'singleStudent'])->name('details');
Route::get('/dltStudent/{id}',[StudentController::class, 'deleteStudent'])->name('dltStd');

Route::post('/add_new_students',[StudentController::class, 'createNewStudent'])->name('addSt');
