<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\Category;

class MenuSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan menu untuk kategori 'specials'
        $category = Category::where('name', 'specials')->first();

        if ($category) {
            Menu::create([
                'category_id' => $category->id,
                'name' => 'Special Dish 1',
                'description' => 'Delicious dish 1',
                'price' => 10000,
            ]);

            Menu::create([
                'category_id' => $category->id,
                'name' => 'Special Dish 2',
                'description' => 'Delicious dish 2',
                'price' => 12000,
            ]);
        }
    }
}

