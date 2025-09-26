<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\MealProduct;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class MealsController extends Controller
{
    public function index()
    {
        return Meal::all()->map(function (Meal  $meal)  {
            return [
                'id' => $meal->id,
                'name' => $meal->name,
                'products' => $meal->products->map(function(MealProduct $elem) {
                    return $elem->toArray();
                }),
                'summary' => $meal->summary()
            ];
        });
    }

    public function get(Meal $meal)
    {
        $products = MealProduct::where('meal_id', $meal->id)->orderBy('order')->get()->map(fn ($elem) => $elem->toArray());

        return [
            'id' => $meal->id,
            'name' => $meal->name,
            'products' => $products,
            'summary' => $meal->summary()
        ];
    }

    public function store(Request $request)
    {
        $model = new Meal($request->all());

        $model->slug = Str::slug($model->name);

        $model->save();

        return redirect()->route('meals.index');
    }

    public function update(Meal $meal, Request $request): RedirectResponse
    {
        $request->get('name');

        $meal->name = $request->get('name');
        $meal->price = $request->get('price');
        $meal->save();

        return Redirect::route('meals.index');
    }

    public function delete(Meal $meal): RedirectResponse
    {
        $meal->delete();

        return Redirect::route('meals.index');
    }
}
