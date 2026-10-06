<?php

use App\Http\Controllers\RegistroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/registro', [RegistroController::class, 'store']);
Route::get('registro/valor', [RegistroController::class, 'getValor']);

use App\Livewire\Dashboard;

Route::get('/dashboard', Dashboard::class);




