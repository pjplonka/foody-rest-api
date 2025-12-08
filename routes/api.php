<?php

use App\Http\Controllers\MealProductController;
use App\Http\Controllers\MealsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopCategoryController;
use App\Http\Controllers\TodoController;
use App\Models\ShopCategory;
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

Route::middleware('api')->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::get('/products/{product}', [ProductController::class, 'get'])->name('products.get');
    Route::patch('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}', [ProductController::class, 'delete'])->name('products.delete');

    Route::get('/meals', [MealsController::class, 'index'])->name('meals.index');
    Route::get('/meals/{meal}', [MealsController::class, 'get'])->name('meals.get');
    Route::post('/meals', [MealsController::class, 'store'])->name('meals.store');
    Route::get('/meals/{meal}/edit', [MealsController::class, 'edit'])->name('meals.edit');
    Route::patch('/meals/{meal}', [MealsController::class, 'update'])->name('meals.update');
    Route::delete('/meals/{meal}', [MealsController::class, 'delete'])->name('meals.delete');

    Route::post('/meals/{meal}/products', [MealProductController::class, 'store'])->name('meal_product.store');
    Route::get('/meals/{meal}/products/{meal_product}', [MealProductController::class, 'get'])->name('meal_product.get');
    Route::patch('/meals/{meal}/products/{meal_product}', [MealProductController::class, 'update'])->name('meal_product.update');
    Route::delete('/meals/{meal}/products/{meal_product}', [MealProductController::class, 'delete'])->name('meal_product.delete');
    Route::patch('/meals/{meal}/reorder', [MealProductController::class, 'reorder'])->name('meal_product.reorder');

    Route::get('/shop-categories', [ShopCategoryController::class, 'index'])->name('shop_category.index');
    Route::post('/shop-categories', [ShopCategoryController::class, 'store'])->name('shop_category.store');
    Route::get('/shop-categories/{shop-category}', [ShopCategoryController::class, 'get'])->name('shop_category.get');
    Route::patch('/shop-categories/{shop-category}', [ShopCategoryController::class, 'update'])->name('shop_category.update');
    Route::delete('/shop-categories/{shop-category}', [ShopCategoryController::class, 'delete'])->name('shop_category.delete');

    Route::get('/todos', [TodoController::class, 'index'])->name('todo.index');
    Route::post('/todos', [TodoController::class, 'store'])->name('todo.store');
    Route::get('/todos/{todo}', [TodoController::class, 'get'])->name('todo.get');
    Route::patch('/todos/{todo}', [TodoController::class, 'update'])->name('todo.update');
    Route::delete('/todos/{todo}', [TodoController::class, 'delete'])->name('todo.delete');
});

require __DIR__.'/auth.php';
