<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\JobPositionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

route::get('/users',[UserController::class,'index']);
route::get('/usersDetails/{id}',[UserController::class,'getUserDetails']);
route::post('/addUser',[UserController::class,'store']);
route::delete('/deleteUser',[UserController::class,'deleteUser']);
route::post('/updateUser/{id}',[UserController::class,'updateUser']);

// route::apiResource('/UserPosts',UserController::class);

// route::apiResource('/ProductPosts',ProductController::class);

// route::apiResource('/GroupPosts',GroupController::class);

// route::apiResource('/JobPosts',JobPositionController::class);


