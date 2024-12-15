<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Menambahkan kategori 'specials'
        Category::create([
            'name' => 'specials',
            'description' => 'Special menu category for special dishes',
        ]);
    }
}

