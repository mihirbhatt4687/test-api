<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
 


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


header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', [UserController::class, 'list']);

Route::get('/user/{id}', [UserController::class, 'show']);