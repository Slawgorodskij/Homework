<?php

use App\Http\Controllers\HomeWorkController;
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

//Route::get('/home_work_task_1', [HomeWorkController::class, 'taskOne']);
Route::get('/home_work_task_2', [HomeWorkController::class, 'taskTwo']);
Route::get('/home_work_task_3', [HomeWorkController::class, 'taskThree']);
