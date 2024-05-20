<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');

    // Buyers
    Route::get('/buyers', App\Livewire\Buyer\Index\Page::class)->name('buyers');
    Route::get('/buyers/create', App\Livewire\Buyer\Create\Page::class)->name('buyers.create');
    Route::get('/buyers/{buyer}/edit', App\Livewire\Buyer\Edit\Page::class)->name('buyers.edit');

    // Users
    Route::get('/users', App\Livewire\User\Index\Page::class)->name('users');
    Route::get('/users/create', App\Livewire\User\Create\Page::class)->name('users.create');
    Route::get('/users/{user}/edit', App\Livewire\User\Edit\Page::class)->name('users.edit');

    // Weather
    Route::get('/weather', App\Livewire\Weather\Index\Page::class)->name('weather.index');
});
