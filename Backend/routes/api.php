<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\JobPositionController;
use App\Http\Controllers\auth\LoginUser;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SignInUser;
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
route::get('/usersDetails/{id}',[UserController::class,'show']);
route::post('/addUser',[UserController::class,'store']);
route::delete('/deleteUser/{id}',[UserController::class,'destroy']);
route::post('/updateUser/{id}',[UserController::class,'update']);

// route::apiResource('/UserPosts',UserController::class);

route::get('/groups',[GroupController::class,'index']);
route::get('/GroupsDetails/{id}',[GroupController::class,'show']);
route::post('/addGroup',[GroupController::class,'store']);
route::delete('/deleteGroup/{id}',[GroupController::class,'destroy']);
route::put('/updateGroup/{id}',[GroupController::class,'update']);

// route::apiResource('/GroupPosts',GroupController::class);

route::get('/posts',[JobPositionController::class,'index']);
route::get('/PostsDetails/{id}',[JobPositionController::class,'show']);
route::post('/addPost',[JobPositionController::class,'store']);
route::delete('/deletePost',[JobPositionController::class,'destroy']);
route::put('/updatePost/{id}',[JobPositionController::class,'update']);

// route::apiResource('/JobPosts',JobPositionController::class);

route::post('/auth',[SignInUser::class,'SignInUser']);


Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/chat/get-chats',[ChatController::class, 'getChats']);
    Route::post('/chat/create-chat',[ChatController::class, 'createChat']);
    Route::get('/chat/get-chat-by-id/{chat}',[ChatController::class, 'getChatById']);
    Route::post('/chat/send-text-message',[ChatController::class, 'sendTextMessage']);
    Route::post('/chat/search-user',[ChatController::class, 'searchUsers']);
    Route::get('/chat/message-status/{message}',[ChatController::class, 'messageStatus']);
});