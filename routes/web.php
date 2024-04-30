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