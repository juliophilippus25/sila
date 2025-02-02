<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('layouts.content');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Show all forms
Route::get('/forms', [FormController::class, 'index'])->name('forms.index');

// Show form details
Route::get('/forms/{id}', [FormController::class, 'show'])->name('forms.show');

// Create form
Route::get('/forms/cr', [FormController::class, 'create'])->name('forms.create');
Route::post('/forms', [FormController::class, 'store'])->name('forms.store');

// Edit form
Route::get('/forms/{id}/edit', [FormController::class, 'edit'])->name('forms.edit');
Route::put('/forms/{id}', [FormController::class, 'update'])->name('forms.update');

// Delete form
Route::delete('/forms/{id}', [FormController::class, 'destroy'])->name('forms.destroy');
