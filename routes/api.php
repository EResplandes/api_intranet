<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticacaoController;

Route::prefix('autenticacao')->group(callback: function () {
    Route::controller(AutenticacaoController::class)->group(function () {
        Route::post('login', 'login');
        Route::post('logout', 'logout');
    });
});
