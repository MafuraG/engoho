<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Add product types to database
        DB::table('productypes')->insert(
            [
                'name' => 'Livestock'
            ]            
        );

        DB::table('productypes')->insert(
            [
                'name' => 'Produce'
            ]            
        );

        DB::table('productypes')->insert(
            [
                'name' => 'Crops'
            ]            
        );
        $livestock = DB::table('productypes')->where('name','Livestock');
        $crops = DB::table('producttypes')->where('name','Crops');
        $produce = DB::table('producttypes')->where('name','Produce');

        //unit of measure 
        DB::table('unitofmeasures')->insert(
            [
                'name' => 'bag'
            ]            
        );

        DB::table('unitofmeasures')->insert(
            [
                'name' => 'kilogram'
            ]            
        );

        DB::table('unitofmeasures')->insert(
            [
                'name' => 'bale'
            ]            
        );

        DB::table('unitofmeasures')->insert(
            [
                'name' => 'litre'
            ]            
        );

        DB::table('unitofmeasures')->insert(
            [
                'name' => 'head'
            ]            
        );

        DB::table('unitofmeasures')->insert(
            [
                'name' => 'dozen'
            ]            
        );

        $bags = DB::table('unitofmeasures')->where('name','bag')->first();
        $kilograms = DB::table('unitofmeasures')->where('name','kilogram')->first();
        $bales = DB::table('unitofmeasures')->where('name','bale')->first();
        $litres = DB::table('unitofmeasures')->where('name','litre')->first();
        $heads = DB::table('unitofmeasures')->where('name','head')->first();
        $dozens = DB::table('unitofmeasures')->where('name','dozen')->first();
        
        //Add the products themselves

        DB::table('products')->insert(
            [
                'name' => 'Chicken',
                'type_id' => $livestock->id,
                'unit_id' => $heads->id
            ]            
        );

        DB::table('products')->insert(
            [
                'name' => 'Chicken eggs',
                'type_id' => $produce->id,
                'unit_id' => $dozen->id
            ]            
        );

        DB::table('products')->insert(
            [
                'name' => 'Cow milk',
                'type_id' => $produce->id,
                'unit_id' => $litres->id
            ]            
        );


        DB::table('products')->insert(
            [
                'name' => 'Cows',
                'type_id' => $livestock->id,
                'unit_id' => $heads->id
            ]            
        );

        DB::table('products')->insert(
            [
                'name' => 'maize in bags',
                'type_id' => $crops->id,
                'unit_id' => $bags->id
            ]            
        );

        DB::table('products')->insert(
            [
                'name' => 'beans in bags',
                'type_id' => $crops->id,
                'unit_id' => $bags->id
            ]            
        );

    }
}
