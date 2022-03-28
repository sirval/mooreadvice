<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [TaskController::class, 'index'])->name('admin.index');
Route::get('/admin/{task}', [TaskController::class, 'show'])->name('admin.show');
Route::get('/admin/create/task', [TaskController::class, 'create'])->name('admin.create');
Route::post('/admin/create/task',[TaskController::class, 'store'])->name('admin.store');
Route::get('/admin/{task}/edit', [TaskController::class, 'edit'])->name('admin.edit');
Route::put('/admin/{task}/edit', [TaskController::class, 'update'])->name('admin.update');
Route::delete('/admin/delete/{task}', [TaskController::class, 'destroy'])->name('admin.destroy');