<?php

use App\Http\Controllers\DataAdministrasiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Models\DataAdministrasi;

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
Route::get('/forms/{id}/edit', [FormController::class, 'edit'])->name('form.edit');
Route::put('/forms/{id}/update', [FormController::class, 'update'])->name('form.update');


// Delete form
Route::delete('/forms/{id}', [FormController::class, 'destroy'])->name('forms.destroy');

Route::get('/forms/{id}/administrasi', [DataAdministrasiController::class, 'index'])->name('administrasi.index');
Route::post('/forms/{id}/administrasi/store', [DataAdministrasiController::class, 'store'])->name('administrasi.store');
Route::get('/forms/{id}/administrasi/edit', [DataAdministrasiController::class, 'edit'])->name('administrasi.edit');
Route::put('/forms/{id}/administrasi/update', [DataAdministrasiController::class, 'update'])->name('administrasi.update');

