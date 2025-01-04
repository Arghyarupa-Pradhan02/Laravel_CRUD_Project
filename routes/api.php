<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('store-crud',[CrudController::class,'store'])->name('crudproject.store');
Route::post('update/{id}',[CrudController::class,'update'])->name('crudproject.update');
Route::get('delete/{id}',[CrudController::class,'destroy'])->name('crudproject.delete');