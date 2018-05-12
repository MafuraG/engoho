<?php

use App\Model\Task;
use App\Model\Agroservice;
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

$factory->define(App\Model\Orderservice::class, function (Faker $faker) {
    return [
        'name' => $faker->text,
        'task_id' => function(){
            return Task::all()->random();
        },
        'agroservice_id' => function(){
            return Agroservice::all()->random();
        },
        'price' => $faker->numberBetween(10,2000),
    ];
});
