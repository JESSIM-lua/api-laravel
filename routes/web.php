<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CitizenController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


// Route::get('/tojson', function () {
//     return view('toJson');
// });

Route::get('/tojson', [CitizenController::class, 'toJson'])->name('toJson');


use App\Http\Controllers\CityController;

Route::get('/cities', [CityController::class, 'getCitiesFromCountry']);

// Route::get('/cities/{code}', [CityController::class, 'deleteCity'])->name('deleteCity');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Routes accessibles uniquement aux CHIEFS
Route::middleware(['auth', 'role:chief'])->group(function () {
    Route::resource('citizens', CitizenController::class);
});

// Routes accessibles uniquement aux MEMBERS
Route::middleware(['auth', 'role:member'])->group(function () {
    Route::get('/citizens/create', [CitizenController::class, 'create'])->name('citizens.create');
    Route::post('/citizens', [CitizenController::class, 'store'])->name('citizens.store');
});

require __DIR__.'/auth.php';
