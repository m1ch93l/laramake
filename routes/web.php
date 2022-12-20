<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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

// available routes
// Route::get();
// Route::post();
// Route::put();
// Route::patch();
// Route::delete();
// Route::options();

// // direct view page
// Route::get('/home', function () {
//     return 'hello hahhaha';
// });

// default view
Route::get('/', [StudentController::class, 'index']);

// request id of user
// Route::get('/user/{id}/{group}', function($id, $group){
//     return response($id.'-'.$group, 200);
// });

// routes to controller
Route::get('/users', [UserController::class, 'index']);
//call $id from controller, middleware auth means can't access spec page
Route::get('/user/{id}', [UserController::class, 'show']);

// students routes
Route::get('/students', [StudentController::class, 'index']);
