<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\BooksReturnController;
use App\Http\Controllers\BooksTablController;
use App\Http\Controllers\BooksTableTwoController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ReadersController;
use App\Http\Controllers\ReadersTicketController;


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
Route::get('/Autors',[AutorsController::Class,'index']);
Route::get('/Books',[BooksController::Class,'index']);
Route::get('/BooksReturn',[BooksReturnController::Class,'index']);
Route::get('/BooksTabl',[BooksTablController::Class,'index']);
Route::get('/BooksTableTwo',[BooksTableTwoController::Class,'index']);
Route::get('/Genre',[GenreController::Class,'index']);
Route::get('/Readers',[ReadersController::Class,'index']);
Route::get('/ReadersTicket',[ReadersTicketController::Class,'index']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('Autors')->group(function(){
    Route::get('/',[AutorsController::Class,'index']);
    Route::get('/{id}',[AutorsController::Class,'show']);
    Route::post('/',[AutorsController::Class,'store']);
    Route::delete('/{id}',[AutorsController::Class,'destroy']);
    Route::put('/',[AutorsController::Class,'update']);
});

Route::prefix('Books')->group(function(){
    Route::get('/',[BooksController::Class,'index']);
    Route::get('/{id}',[BooksController::Class,'show']);
    Route::post('/',[BooksController::Class,'store']);
    Route::delete('/{id}',[BooksController::Class,'destroy']);
    Route::put('/',[BooksController::Class,'update']);
});

Route::prefix('BooksReturn')->group(function(){
    Route::get('/',[BooksReturnController::Class,'index']);
    Route::get('/{id}',[BooksReturnController::Class,'show']);
    Route::post('/',[BooksReturnController::Class,'store']);
    Route::delete('/{id}',[BooksReturnController::Class,'destroy']);
    Route::put('/',[BooksReturnController::Class,'update']);
});

Route::prefix('BooksTabl')->group(function(){
    Route::get('/',[BooksTablController::Class,'index']);
    Route::get('/{id}',[BooksTablController::Class,'show']);
    Route::post('/',[BooksTablController::Class,'store']);
    Route::delete('/{id}',[BooksTablController::Class,'destroy']);
    Route::put('/',[BooksTablController::Class,'update']);
});

Route::prefix('BooksTableTwo')->group(function(){
    Route::get('/',[BooksTableTwoController::Class,'index']);
    Route::get('/{id}',[BooksTableTwoController::Class,'show']);
    Route::post('/',[BooksTableTwoController::Class,'store']);
    Route::delete('/{id}',[BooksTableTwoController::Class,'destroy']);
    Route::put('/',[BooksTableTwoController::Class,'update']);
});

Route::prefix('Genre')->group(function(){
    Route::get('/',[GenreController::Class,'index']);
    Route::get('/{id}',[GenreController::Class,'show']);
    Route::post('/',[GenreController::Class,'store']);
    Route::delete('/{id}',[GenreController::Class,'destroy']);
    Route::put('/',[GenreController::Class,'update']);
});

Route::prefix('Readers')->group(function(){
    Route::get('/',[ReadersController::Class,'index']);
    Route::get('/{id}',[ReadersController::Class,'show']);
    Route::post('/',[ReadersController::Class,'store']);
    Route::delete('/{id}',[ReadersController::Class,'destroy']);
    Route::put('/',[ReadersController::Class,'update']);
});