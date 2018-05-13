<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(FarmRolesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(AgroserviceTableSeeder::class);
        $this->call(AgroInputsTableSeeder::class);

        
        factory(App\Model\User::class,5) -> create();
        factory(App\Model\Farm::class,10) ->create();
        factory(App\Model\Lot::class,100) ->create();
        factory(App\Model\Farmsale::class,2000) ->create();
        factory(App\Model\Orderservice::class,1000) ->create();
        factory(App\Model\Orderinput::class,1000) ->create();
        factory(App\Model\Farmrole_User::class,25) ->create();
        
    }
}
