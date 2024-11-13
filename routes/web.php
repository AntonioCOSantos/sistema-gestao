<?php

use App\Http\Controllers\GrupoController;
use App\Http\Controllers\BandeiraController;
use App\Http\Controllers\UnidadeController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\AuditoriaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Autenticação
Auth::routes();

// Página inicial
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rotas de CRUD protegidas por autenticação
Route::middleware(['auth'])->group(function () {
    // Grupo Econômico
    Route::resource('grupos', GrupoController::class);

    // Bandeira
    Route::resource('bandeiras', BandeiraController::class);

    // Unidade
    Route::resource('unidades', UnidadeController::class);

    // Colaborador
    Route::resource('colaboradores', ColaboradorController::class);

    // Relatório de Colaboradores
    Route::get('relatorio/colaboradores', [RelatorioController::class, 'gerarRelatorio'])->name('relatorio.colaboradores');

    // Exportar Relatório de Colaboradores
    Route::get('relatorio/colaboradores/exportar', [RelatorioController::class, 'exportar'])->name('relatorio.colaboradores.exportar');

    // Auditoria
    //Route::get('auditoria', [AuditoriaController::class, 'index'])->name('auditoria.index');
});
