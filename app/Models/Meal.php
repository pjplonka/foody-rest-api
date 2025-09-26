<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property Collection $products
 */
class Meal extends Model
{
    /** @use HasFactory<\Database\Factories\MealFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function products(): HasMany
    {
        return $this->hasMany(MealProduct::class);
    }

    public function summary(): array
    {
        return array_map(fn ($elem) => round($elem, 1),[
            'price' => $this->products->map(fn (MealProduct $product) => $product->price())->sum(),
            'carbs' => $this->products->map(fn (MealProduct $product) => $product->carbs())->sum(),
            'fat' => $this->products->map(fn (MealProduct $product) => $product->fat())->sum(),
            'protein' => $this->products->map(fn (MealProduct $product) => $product->protein())->sum(),
            'sugar' => $this->products->map(fn (MealProduct $product) => $product->sugar())->sum(),
            'calories' => $this->products->map(fn (MealProduct $product) => $product->calories())->sum(),
        ]);
    }
}
