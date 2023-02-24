<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', \App\Http\Livewire\Index::class)->name('index');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', \App\Http\Livewire\Profile::class)->name('profile');
    Route::get('/message', \App\Http\Livewire\Message::class)->name('message');
    Route::get('/edit', \App\Http\Livewire\Edit::class)->name('edit');
    Route::get('/setting', \App\Http\Livewire\Setting::class)->name('setting');
    Route::get('/create/ads', \App\Http\Livewire\CreateAds::class)->name('create.ads');
    });

