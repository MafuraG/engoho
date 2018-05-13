<?php

use Faker\Generator as Faker;
use App\Model\Farmrole;
use App\Model\User;

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

$factory->define(App\Model\FarmroleUser::class, function (Faker $faker) {
    // $count = 0;
    // do{
        $farmrole = Farmrole::all()->random();
        $user = User::all()->random();

    //     $farmrole_user = DB::table('farmrole_user')
    //                             ->where('farmrole_id', $farmrole->id)
    //                             ->where('user_id', $user->id)
    //                             ->first();
    //     if (is_null($farmrole)){
        return [
            'farmrole_id'=> $farmrole->id,
            'user_id' => $user->id            
        ];
    //     }
    //     $count++;
    //     if ($count > 20) break;
    // }while (true); 
});
