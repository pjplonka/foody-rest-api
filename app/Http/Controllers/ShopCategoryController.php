<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShopCategoryRequest;
use App\Models\ShopCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShopCategoryController extends Controller
{
    public function index()
    {
        return ShopCategory::all();
    }

    public function get(ShopCategory $shopCategory)
    {
        return $shopCategory;
    }

    public function store(CreateShopCategoryRequest $request)
    {
        $model = new ShopCategory($request->all());
        $model->slug = Str::slug($model->name);

        $model->save();

        return $model;
    }

    public function update(ShopCategory $shopCategory, Request $request)
    {
        $shopCategory->update($request->all());

        return $shopCategory;
    }

    public function delete(ShopCategory $shopCategory)
    {
        $shopCategory->delete();
    }
}
