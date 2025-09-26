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

class MealProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function get(Meal $meal, MealProduct $mealProduct)
    {
        return $mealProduct;
    }

    public function store(Meal $meal, CreateProductMealRequest $request)
    {
        $model = new MealProduct(array_merge($request->all(), ['meal_id' => $meal->id, 'order' => 0]));

        $model->save();

        if (null !== $model->product->protein && null !== $model->product->carbs && null !== $model->product->fat) {
            $model->product->calories = (4 * $model->product->protein) + (4 * $model->product->carbs) + (9 * $model->product->fat);
        }

        $model->save();

        foreach (MealProduct::where('meal_id', $meal->id)->get() as $item) {
            $item->order = $item->order + 1;
            $item->save();
        }

        return $model;
    }

    public function update(Meal $meal, MealProduct $mealProduct, Request $request)
    {
        $mealProduct->update($request->all());

        $mealProduct->save();

        if (null !== $mealProduct->product->protein && null !== $mealProduct->product->carbs && null !== $mealProduct->product->fat) {
            $mealProduct->product->calories = (4 * $mealProduct->product->protein) + (4 * $mealProduct->product->carbs) + (9 * $mealProduct->product->fat);
        }

        $mealProduct->save();

        return $mealProduct;
    }

    public function delete(Meal $meal, MealProduct $mealProduct)
    {
        $mealProduct->delete();

        return response(null, 204);
    }

    public function reorder(Meal $meal, Request $request)
    {
        foreach ($request->all() as $item) {
            MealProduct::where('id', $item['id'])->update(['order' => $item['order']]);
        }
    }
}
