<?php

use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;

Route::get('/ping', fn () => response()->json(["pong" => true]));
Route::get('/wallets', [WalletController::class, 'index'])->name('wallet.index');
