<?php

use App\Http\Controllers\RecursosHumanosController;
use App\Http\Controllers\TicketsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticacaoController;
use App\Http\Controllers\IntranetController;

Route::prefix('autenticacao')->group(callback: function () {
    Route::controller(AutenticacaoController::class)->group(function () {
        Route::post('login', 'login');
        Route::post('logout', 'logout');
    });
});

Route::prefix('intranet')->group(callback: function () {
    Route::controller(IntranetController::class)->group(function () {
        Route::get('infomacoes', 'infomacoesIntranet');
    });
});

Route::prefix('rh')->group(callback: function () {
    Route::controller(RecursosHumanosController::class)->group(function () {
    });
});

Route::prefix('tickets')->group(callback: function () {
    Route::controller(TicketsController::class)->group(function () {
    });
});

