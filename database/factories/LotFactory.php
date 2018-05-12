<?php

use App\Model\Farm;
use App\Model\Product;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Model\Lot::class, function (Faker $faker) {
    return [
        'name' => $faker->text,
        'detail' => $faker->paragraph,
        'active' => true,
        'farm_id' => function(){
            return Farm::all()->random();
        },
        'product_id' => function(){
            return Product::all()->random();
        }
    ];
});
