<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatBotController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Middleware para  el usuario autenticado
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/chat', [ChatBotController::class, 'sendMessage']);
    Route::get('/conversations', [ChatBotController::class, 'getConversations']);
    Route::get('/conversations/{conversationId}/messages', [ChatBotController::class, 'getMessages']);
});
