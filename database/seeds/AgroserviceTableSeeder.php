<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AgroserviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('agroservices')->insert(
            [
                'name' => 'Vaccination of chicken'
            ]            
        );

        DB::table('agroservices')->insert(
            [
                'name' => 'Vaccination of Cows'
            ]            
        );

        DB::table('agroservices')->insert(
            [
                'name' => 'Cleaning of chicken house'
            ]            
        );

        DB::table('agroservices')->insert(
            [
                'name' => 'Cleaning of cow house'
            ]            
        );

        DB::table('agroservices')->insert(
            [
                'name' => 'Preparing land for maize planting'
            ]            
        );

        DB::table('agroservices')->insert(
            [
                'name' => 'Weeding maize crop first round '
            ]            
        );

        DB::table('agroservices')->insert(
            [
                'name' => 'Weeding maize crop second round '
            ]            
        );

        DB::table('agroservices')->insert(
            [
                'name' => 'Harvesting maize'
            ]            
        );

        DB::table('agroservices')->insert(
            [
                'name' => 'Crop advisory from extension officer'
            ]            
        );

        DB::table('agroservices')->insert(
            [
                'name' => 'Running adverts for maize sale'
            ]            
        );


    }
}
