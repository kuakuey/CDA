<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\LoginController as ControllersLoginController;
use Illuminate\Routing\RouteCollection;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', HomeController::class)->name('home');

Route::get('/quienes-somos', [HomeController::class, 'who'])->name('who');

Route::get('/login', loginController::class)->name('login');

Route::get('/dashboard', [loginController::class, 'iniciar'])->name('iniciar');

Route::post('/login-post', [loginController::class, 'store'])->name("storelogin");//enviar info en post

Route::get('/eventos', [DashboardController::class, 'eventos'])->name('eventos');

Route::post('/storeevento', [DashboardController::class, 'storeevent'])->name("storeevento");//enviar info en post

Route::get('/eventosup/{id}', [DashboardController::class, 'activeevent'])->name('activeevent');

Route::get('/eventosdown/{id}', [DashboardController::class, 'desevent'])->name('desevent');

Route::get('/delete/{id}', [DashboardController::class, 'eliminarev'])->name('eliminarev');


