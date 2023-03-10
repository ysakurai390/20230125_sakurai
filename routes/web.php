<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\TodoController;

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

Route::get('/', [TodoController::class, 'index']);
Route::post('/todos/create', [TodoController::class, 'store']);
Route::post('/todos/update', [TodoController::class, 'update']);
Route::post('/todos/delete', [TodoController::class, 'destroy']);

