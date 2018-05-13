<?php
use App\Model\Farm;
use App\Model\Lot;
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

$factory->define(App\Model\Farmsale::class, function (Faker $faker) {
    $farm = Farm::all()->random();
    //echo "Farm name ".$farm->name;
    $lot = $farm->lots->random();
    return [
        'lot_id' => $lot->id,        
        'price' => $faker->numberBetween(10, 2000),
        'quantity' =>$faker->numberBetween(1,30)
    ];
});
