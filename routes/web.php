<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CrudController;

// use app\Models\Crudtable;

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


Route::get('/',[CrudController::class,'index'])->name('crudproject.index');
Route::get('/create',[CrudController::class,'create'])->name('crudproject.create');
Route::post('store-crud',[CrudController::class,'store'])->name('crudproject.store');
Route::get('view/{id}',[CrudController::class,'show'])->name('crudproject.view');
Route::get('edit/{id}',[CrudController::class,'edit'])->name('crudproject.edit');
Route::post('update/{id}',[CrudController::class,'update'])->name('crudproject.update');
Route::get('delete/{id}',[CrudController::class,'destroy'])->name('crudproject.delete');