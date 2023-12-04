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
