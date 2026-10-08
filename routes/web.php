<?php

use App\Livewire\Ambientes\AmbientesCreate;
use App\Livewire\Ambientes\AmbientesEdit;
use App\Livewire\Ambientes\AmbientesIndex;
use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\Sensores\SensoresCreate;
use App\Livewire\Sensores\SensoresEdit;
use App\Livewire\Sensores\SensoresIndex;

Route::get('/', function () {return view('welcome');});

Route::get('/dashboard', Dashboard::class);

Route::get('/ambiente', AmbientesIndex::class)->name('ambiente.index');

Route::get('/ambiente/create', AmbientesCreate::class)->name('ambiente.create');

Route::get('/ambiente/edit/{id}', AmbientesEdit::class)->name('ambiente.edit');

Route::get('/sensor', SensoresIndex::class)->name('sensor.index');

Route::get('/sensor/create', SensoresCreate::class)->name('sensor.create');

Route::get('/sensor/edit/{id}', SensoresEdit::class)->name('sensor.edit');


