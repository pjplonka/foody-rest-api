<?php

namespace Database\Seeders;

use App\Models\Meal;
use App\Models\MealProduct;
use App\Models\Product;
use Illuminate\Database\Seeder;

class MealsSeeder extends Seeder
{
    public function run(): void
    {
        $this->nalesniki_na_slodko();
        $this->zupa_jarzynowa();
    }

    protected function nalesniki_na_slodko()
    {
        $meal = Meal::factory()->create([
            'name' => 'Naleśniki z serem na słodko',
            'slug' => 'nalesniki-z-serem-na-slodko',
        ]);

        MealProduct::factory()->create([
            'product_id' => Product::where('slug', 'mleko_3_2')->first(),
            'meal_id' => $meal->id,
            'amount' => 55,
        ]);

        MealProduct::factory()->create([
            'product_id' => Product::where('slug', 'maka_pszenna_tortowa')->first(),
            'meal_id' => $meal->id,
            'amount' => 50,
        ]);

        MealProduct::factory()->create([
            'product_id' => Product::where('slug', 'twarog-poltlusty')->first(),
            'meal_id' => $meal->id,
            'amount' => 200,
        ]);

        MealProduct::factory()->create([
            'product_id' => Product::where('slug', 'cukier')->first(),
            'meal_id' => $meal->id,
            'amount' => 25,
        ]);

        MealProduct::factory()->create([
            'product_id' => Product::where('slug', 'olej-rzapakowy')->first(),
            'meal_id' => $meal->id,
            'amount' => 10,
        ]);

        MealProduct::factory()->create([
            'product_id' => Product::where('slug', 'jajka')->first(),
            'meal_id' => $meal->id,
            'amount' => 50,
        ]);

        MealProduct::factory()->create([
            'product_id' => Product::where('slug', 'surowy-owoc')->first(),
            'meal_id' => $meal->id,
            'amount' => 1,
        ]);
    }

    protected function zupa_jarzynowa()
    {
        $meal = Meal::factory()->create([
            'name' => 'Zupa jarzynowa',
            'slug' => 'zupa-jarzynowa',
        ]);

        MealProduct::factory()->create([
            'product_id' => Product::where('slug', 'piers-z-kurczaka-bez-skory')->first(),
            'meal_id' => $meal->id,
            'amount' => 200,
        ]);

        MealProduct::factory()->create([
            'product_id' => Product::where('slug', 'ziemniaki')->first(),
            'meal_id' => $meal->id,
            'amount' => 200,
        ]);
    }
}
