<?php

use App\Http\Controllers\Admin\AttendeeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/categories/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
    Route::resource('categories', CategoryController::class);

    
    Route::get('/events/delete/{id}', [EventController::class, 'delete'])->name('events.delete');
    Route::resource('events', EventController::class);
    
    Route::get('/attendees/delete/{id}', [AttendeeController::class, 'delete'])->name('attendees.delete');
    Route::resource('attendees', AttendeeController::class);
    
});

require __DIR__.'/auth.php';
