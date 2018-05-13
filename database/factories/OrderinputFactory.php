<?php
use App\Model\Task;
use App\Model\Agroinput;
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

$factory->define(App\Model\Orderinput::class, function (Faker $faker) {
    return [
        'name' => $faker->text,
        'task_id' => function(){
            return Task::all()->random();
        },
        'agroinput_id' => function(){
            return Agroinput::all()->random();
        },
       'price' => $faker->numberBetween(100,1500),
       'quantity' => $faker->numberBetween(1,30)       
    ];
});
