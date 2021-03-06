<?php
use App\Model\User;
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

$factory->define(App\Model\Farm::class, function (Faker $faker) {
    return [
        'name' => $faker->text,
        'address' => $faker->address,
        'user_id' => function(){
            return User::all()->random();
        }    
        
    ];
});
