<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\WalletController;
use Illuminate\Support\Facades\Route;

Route::get('/ping', fn () => response()->json(["pong" => true]));

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/wallets', [WalletController::class, 'index'])->name('wallet.index');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
