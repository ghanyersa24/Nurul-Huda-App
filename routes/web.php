<?php

use App\Livewire\MentariPagiSpinner;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/mentari-pagi-spinner', MentariPagiSpinner::class)->name('mentari-pagi-spinner');
