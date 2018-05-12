<?php

use Illuminate\Database\Seeder;

class ProductTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('productypes')->insert(
            [
                'name' => 'Livestock'
            ]            
        );

        DB::table('productypes')->insert(
            [
                'name' => 'Crops'
            ]            
        );
    }
}
