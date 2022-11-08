<?php

use App\Http\Controllers\Auth\ReportesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerReportesController;




Route::get('/inicio', function () {
    return view('welcome');
});



//Grupo de rutas para protegerlas
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });


    Route::post('/dashboard', function () {

        return view('dashboard');
    })->name('dashboard');
    Route::get('reportar', [ReportesController::class, 'create'])
        ->name('reportar');
    Route::post('reportar', [ReportesController::class, 'store'])->name('reportar.store');

    Route::get('reportes', [VerReportesController::class, 'verReportes'])
        ->name('reportes');
});


require __DIR__ . '/auth.php';
