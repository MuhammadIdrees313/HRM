<?php

use App\Livewire\Test\Test;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', Test::class);
