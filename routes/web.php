<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\GuestPageController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProjectController;
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

Route::get('',[GuestPageController::class, 'index'])->name('home');

Route::post('login',[AuthenticatedSessionController::class, 'create'])->middleware('auth')->name('login');

Route::post('authenticate',[AuthenticatedSessionController::class, 'store'])->name('authenticate');

Route::get('logout',[AuthenticatedSessionController::class, 'logout'])->middleware('auth')->name('logout');




Route::get('admin-panel',[ProjectController::class,'index'])->middleware('auth')->name('admin-panel');

Route::get('project/create',[ProjectController::class,'create'])->middleware('auth')->name('create');

Route::post('project',[ProjectController::class,'store'])->middleware('auth')->name('store');

Route::get('/{project}/edit',[ProjectController::class,'edit'])->middleware('auth')->name('edit');

Route::put('project/{project}',[ProjectController::class,'update'])->middleware('auth')->name('update');

Route::delete('/{project}',[ProjectController::class,'destroy'])->middleware('auth')->name('delete');


Route::post('/hire-student', [MailController::class, 'hireStudent'])->name('hireStudent');


require __DIR__.'/auth.php';
