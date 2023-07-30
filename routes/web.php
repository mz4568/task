<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
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



Route::get('/',[TaskController::class,'userAccount'])->name("userAccount");
Route::post('registration',[TaskController::class,'userRegistration'])->name("user.register");
Route::post('login',[TaskController::class,'userLogin'])->name("user.login");
Route::get('/user-dashboard',[TaskController::class,'userDashboard'])->name("user.dashboard");
Route::get('create-task',[TaskController::class,'userTask'])->name("create.task");
Route::post('store-task',[TaskController::class,'storeTask'])->name("storeTask");
Route::get('all-task',[TaskController::class,'allTask'])->name("all.task");
Route::get('edit-task/{id}',[TaskController::class,'editTask'])->name("edit.task");
Route::post('update-task/{id}',[TaskController::class,'updateTask'])->name("update.task");

Route::get('delete-task/{id}',[TaskController::class,'deleteTask'])->name("delete.task");

Route::get('/user-logOut',[TaskController::class,'userLogOut'])->name("userLogOut");
