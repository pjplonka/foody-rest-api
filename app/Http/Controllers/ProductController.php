<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function create(CreateProductRequest $request)
    {
        return Inertia::render('Products/Create');
    }

    public function get(Product $product)
    {
        return $product->toArray();
    }

    public function store(CreateProductRequest $request)
    {
//        $validated = $request->validate([
//            'title' => 'required|unique:posts|max:255',
//            'body' => 'required',
//        ]);

//        var_dump('custom_var_dump_821', $validated); exit;

//        var_dump('custom_var_dump_384', $request->validated()); exit;
        $model = new Product($request->all());
        $model->slug = Str::slug($model->name);

        if ($model->protein && $model->carbs && $model->fat) {
            $model->calories = (4 * $model->protein) + (4 * $model->carbs) + (9 * $model->fat);
        }

        $model->save();

        return $model;
    }

    public function update(Product $product, Request $request)
    {
        $product->update($request->all());

        if ($product->protein && $product->carbs && $product->fat) {
            $product->calories = (4 * $product->protein) + (4 * $product->carbs) + (9 * $product->fat);
            $product->save();
        }

        return $product;
    }

    public function delete(Product $product)
    {
        $product->delete();
    }
}
