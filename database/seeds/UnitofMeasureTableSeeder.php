<?php

use Illuminate\Database\Seeder;

class UnitofMeasureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unitofmeasures')->insert(
            [
                'name' => 'bags'
            ]            
        );

        DB::table('unitofmeasures')->insert(
            [
                'name' => 'kilograms'
            ]            
        );

        DB::table('unitofmeasures')->insert(
            [
                'name' => 'bales'
            ]            
        );

        DB::table('unitofmeasures')->insert(
            [
                'name' => 'litres'
            ]            
        );

        DB::table('unitofmeasures')->insert(
            [
                'name' => 'parcel'
            ]            
        );
    }
}
