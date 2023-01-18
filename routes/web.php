<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;
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


Route::get('api', [ApiController::class, 'index']);
Route::get('api/insert', [ApiController::class, 'insert']);
Route::post('api/store', [ApiController::class, 'store']);
Route::get('api/edit/{id}', [ApiController::class, 'edit']);
Route::get('api/update', [ApiController::class, 'update']);
Route::get('api/delete/{id}', [ApiController::class, 'delete']);