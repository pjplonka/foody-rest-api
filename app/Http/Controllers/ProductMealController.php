<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductMealRequest;
use App\Http\Requests\CreateProductRequest;
use App\Models\Meal;
use App\Models\MealProduct;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class ProductMealController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function create(CreateProductRequest $request)
    {
        return Inertia::render('Products/Create');
    }

    public function store(Meal $meal, CreateProductMealRequest $request)
    {
        $model = new MealProduct($request->validated());

        $model->save();

        return $model;
    }

    public function edit(Product $product): Response
    {
        return Inertia::render('Products/Edit', [
            'item' => $product,
//            'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
//            'status' => session('status'),
        ]);
    }

    public function update(Product $product, Request $request): RedirectResponse
    {
        $request->get('name');

        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->save();

        return Redirect::route('products.index');
    }

    public function delete(Product $product): RedirectResponse
    {
        $product->delete();

        return Redirect::route('products.index');
    }
}
