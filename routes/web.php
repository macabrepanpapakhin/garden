<?php

use App\Http\Controllers\ExtraPageController;
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

Route::get('/', [ExtraPageController::class,'loadingData']);

Route::get('/login',[UserController::class,'index'])->middleware('guest');


Route::get("/greenish",[ExtraPageController::class,'greenish']);

Route::get("/register",[UserController::class,'register'])->middleware(['guest']);

Route::post("/register",[UserController::class,'store'])->middleware(['guest']);

Route::post('/login',[UserController::class,'login'])->middleware('guest');

Route::post("/logout",[UserController::class,'logout'])->middleware("auth");

Route::get('/paniers',[ExtraPageController::class,'allPaniers'])->middleware("auth");

Route::get("/profile/{username}",[UserController::class,'viewProfile']);

Route::put("/profile/{username}/update",[UserController::class,'update']);