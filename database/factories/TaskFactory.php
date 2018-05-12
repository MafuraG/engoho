<?php

use App\Model\Lot;
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

$factory->define(App\Model\Task::class, function (Faker $faker) {
    return [
        'name' => $faker->text,
        'detail' => $faker->paragraph,
        'lot_id' => function(){
            return Lot::all()->random();
        }
    ];
});
