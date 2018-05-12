<?php

use Illuminate\Database\Seeder;

class FarmRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('farmroles')->insert(
            [
                'name' => 'Farmer'
            ]            
        );

        DB::table('farmroles')->insert(
            [
                'name' => 'Buyer'
            ]            
        );

        DB::table('farmroles')->insert(
            [
                'name' => 'Worker'
            ]            
        );

        DB::table('farmroles')->insert(
            [
                'name' => 'Agrovet'
            ]            
        );

        DB::table('farmroles')->insert(
            [
                'name' => 'Agent'
            ]            
        );

    }
}
