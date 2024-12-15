<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Menu;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
    return [
        'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
        'name' => $faker->word,
        'description' => $faker->sentence,
        'price' => $faker->numberBetween(10000, 100000),
    ];
});

