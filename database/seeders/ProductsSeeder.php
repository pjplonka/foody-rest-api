<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        // Mleko 3.2
        Product::factory()->create([
            'name' => 'Mleko 3,2% (Łaciate)',
            'slug' => 'mleko_3_2',
            'price' => 5,
            'protein' => 3.2,
            'carbs' => 4.7,
            'fat' => 3.2,
            'sugar' => 4.7,
            'calories' => 60,
        ]);
        // Mąka pszenna
        Product::factory()->create([
            'name' => 'Mąka pszenna tortowa',
            'slug' => 'maka_pszenna_tortowa',
            'price' => 5,
            'protein' => 10,
            'carbs' => 72,
            'fat' => 1,
            'sugar' => 2.4,
            'calories' => 341,
        ]);
        // Pierś z kurczaka bez skróry
        Product::factory()->create([
            'name' => 'Pierś z kurczaka bez skróry',
            'slug' => 'piers-z-kurczaka-bez-skory',
            'price' => 5,
            'protein' => 22.5,
            'carbs' => 0,
            'fat' => 4,
            'sugar' => 0,
            'calories' => 120,
        ]);
        // Twaróg półtłusty
        Product::factory()->create([
            'name' => 'Twaróg półtłusty',
            'slug' => 'twarog-poltlusty',
            'price' => 5,
            'protein' => 16,
            'carbs' => 3.8,
            'fat' => 4,
            'sugar' => 3.8,
            'calories' => 115,
        ]);
        // Cukier
        Product::factory()->create([
            'name' => 'Cukier',
            'slug' => 'cukier',
            'price' => 5,
            'protein' => 0,
            'carbs' => 100,
            'fat' => 0,
            'sugar' => 100,
            'calories' => 115,
        ]);
        // Jajka
        Product::factory()->create([
            'name' => 'Jajka',
            'slug' => 'jajka',
            'price' => 5,
            'protein' => 12.5,
            'fat' => 9.5,
            'carbs' => 0.5,
            'sugar' => 0.5,
            'calories' => 143,
        ]);
        // Olej rzepakowy
        Product::factory()->create([
            'name' => 'Olej rzepakowy',
            'slug' => 'olej-rzapakowy',
            'price' => 5,
            'protein' => 0,
            'fat' => 100,
            'carbs' => 0,
            'sugar' => 0,
            'calories' => 900,
        ]);
        // Surowy owoc
        Product::factory()->create([
            'name' => 'Surowy owoc',
            'slug' => 'surowy-owoc',
            'price' => 1,
            'protein' => 0,
            'fat' => 0,
            'carbs' => 0,
            'sugar' => 0,
            'calories' => 0,
        ]);
        // Ziemniaki
        Product::factory()->create([
            'name' => 'Ziemniaki',
            'slug' => 'ziemniaki',
            'price' => 1,
            'protein' => 2,
            'fat' => 0,
            'carbs' => 20,
            'sugar' => 0,
            'calories' => 75,
        ]);
    }
}
