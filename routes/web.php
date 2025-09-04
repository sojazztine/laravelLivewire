<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Todo\TodoCreate;
use App\Livewire\Todo\TodoIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/todo', TodoIndex::class)->name('todo.index');
    Route::get('/todo/create', TodoCreate::class)->name('todo.create');
    Route::get('/todo/{id}/edit', TodoCreate::class)->name('todo.edit');
});
require __DIR__.'/auth.php';
