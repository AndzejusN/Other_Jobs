<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use \App\Models\Product;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(28)->state(new Sequence(
            ['name' => 'couscous', 'kcal' => 376, 'carb' => 77.4, 'protein' => 12.8, 'fat' => 0.6, 'group' => 1],
            ['name' => 'buckwheat', 'kcal' => 349, 'carb' => 69.3, 'protein' => 12.6, 'fat' => 3.1, 'group' => 1],
            ['name' => 'pasta', 'kcal' => 360, 'carb' => 74, 'protein' => 12, 'fat' => 2, 'group' => 1],
            ['name' => 'semolina', 'kcal' => 349, 'carb' => 75, 'protein' => 10, 'fat' => 1, 'group' => 1],
            ['name' => 'pearl barley', 'kcal' => 322, 'carb' => 63.2, 'protein' => 8.3, 'fat' => 0.3, 'group' => 1],
            ['name' => 'rice (wild)', 'kcal' => 357, 'carb' => 74.9, 'protein' => 14.7, 'fat' => 1.1, 'group' => 1],
            ['name' => 'bread (full grain)', 'kcal' => 245, 'carb' => 36, 'protein' => 11, 'fat' => 4.7, 'group' => 1],

            ['name' => 'orange', 'kcal' => 47, 'carb' => 11.7, 'protein' => 0.9, 'fat' => 0.1, 'group' => 2],
            ['name' => 'raspberry', 'kcal' => 38, 'carb' => 12, 'protein' => 1.2, 'fat' => 0.6, 'group' => 2],
            ['name' => 'banana', 'kcal' => 92, 'carb' => 23.4, 'protein' => 1, 'fat' => 0.4, 'group' => 2],
            ['name' => 'strawberry', 'kcal' => 30, 'carb' => 7, 'protein' => 0.6, 'fat' => 0.3, 'group' => 2],
            ['name' => 'blackberry', 'kcal' => 52, 'carb' => 12.7, 'protein' => 0.7, 'fat' => 0.3, 'group' => 2],
            ['name' => 'pear', 'kcal' => 52, 'carb' => 13.4, 'protein' => 0.4, 'fat' => 0.3, 'group' => 2],
            ['name' => 'apple', 'kcal' => 53, 'carb' => 13, 'protein' => 0.5, 'fat' => 0.5, 'group' => 2],

            ['name' => 'cucumber', 'kcal' => 11, 'carb' => 2.3, 'protein' => 0.8, 'fat' => 0.2, 'group' => 3],
            ['name' => 'aubergine', 'kcal' => 28, 'carb' => 6.6, 'protein' => 0.8, 'fat' => 0.2, 'group' => 3],
            ['name' => 'potato', 'kcal' => 82, 'carb' => 18, 'protein' => 2, 'fat' => 0, 'group' => 3],
            ['name' => 'humus', 'kcal' => 166, 'carb' => 14.2, 'protein' => 7.9, 'fat' => 9.6, 'group' => 3],
            ['name' => 'cabbage', 'kcal' => 22, 'carb' => 5.4, 'protein' => 1.5, 'fat' => 0.2, 'group' => 3],
            ['name' => 'corn', 'kcal' => 94, 'carb' => 19.8, 'protein' => 3.7, 'fat' => 1.6, 'group' => 3],
            ['name' => 'pumpkin', 'kcal' => 26, 'carb' => 6.5, 'protein' => 1, 'fat' => 0.1, 'group' => 3],

            ['name' => 'cashew nuts', 'kcal' => 585, 'carb' => 30.5, 'protein' => 15.8, 'fat' => 46.3, 'group' => 4],
            ['name' => 'walnuts', 'kcal' => 654, 'carb' => 13.7, 'protein' => 15.2, 'fat' => 65.2, 'group' => 4],
            ['name' => 'pine nuts', 'kcal' => 672, 'carb' => 13, 'protein' => 13.6, 'fat' => 68.4, 'group' => 4],
            ['name' => 'coconut', 'kcal' => 362, 'carb' => 15.2, 'protein' => 4.5, 'fat' => 35.3, 'group' => 4],
            ['name' => 'hazelnuts', 'kcal' => 658, 'carb' => 14.9, 'protein' => 17.6, 'fat' => 63.2, 'group' => 4],
            ['name' => 'almond nuts', 'kcal' => 575, 'carb' => 22, 'protein' => 21, 'fat' => 49, 'group' => 4],
            ['name' => 'peanuts', 'kcal' => 569, 'carb' => 19.2, 'protein' => 25.7, 'fat' => 46.1, 'group' => 4],
        ))->create();
    }
}
