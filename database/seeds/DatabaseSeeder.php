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
        echo "Users generated \r\n";
        factory(App\Model\Farm::class,10) ->create();
        echo "Farms generated \r\n";
        factory(App\Model\Lot::class,100) ->create();
        echo "Lots generated \r\n";
        factory(App\Model\Farmsale::class,2000) ->create();
        echo "Farmsales generated \r\n";
        factory(App\Model\Task::class,1000) ->create();
        echo "Tasks generated \r\n";
        factory(App\Model\Orderservice::class,1000) ->create();
        echo "Orderservices generated \r\n";
        factory(App\Model\Orderinput::class,1000) ->create();
        echo "Orderinputs generated \r\n";
        factory(App\Model\FarmroleUser::class,25) ->create();
        echo "Farmroles generated \r\n";
        
    }
}
