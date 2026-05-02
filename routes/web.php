<?php

use App\Livewire\MentariPagiSpinner;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/spinner', MentariPagiSpinner::class)->name('mentari-pagi-spinner');
