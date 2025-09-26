<?php

use App\Http\Controllers\MealsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::get('/products', [ProductController::class, 'index'])->name('products.index');
//Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
//Route::post('/products', [ProductController::class, 'store'])->name('products.store');
//Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
//Route::patch('/products/{product}', [ProductController::class, 'update'])->name('products.update');
//Route::delete('/products/{product}', [ProductController::class, 'delete'])->name('products.delete');
//
//Route::get('/meals', [MealsController::class, 'index'])->name('meals.index');
//Route::get('/meals/create', [MealsController::class, 'create'])->name('meals.create');
//Route::post('/meals', [MealsController::class, 'store'])->name('meals.store');
//Route::get('/meals/{meal}/edit', [MealsController::class, 'edit'])->name('meals.edit');
//Route::patch('/meals/{meal}', [MealsController::class, 'update'])->name('meals.update');
//Route::delete('/meals/{meal}', [MealsController::class, 'delete'])->name('meals.delete');

require __DIR__.'/auth.php';
