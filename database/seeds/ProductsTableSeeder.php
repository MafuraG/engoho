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
        $livestock = DB::table('productypes')->where('name','Livestock')->first();
        $crops = DB::table('productypes')->where('name','Crops')->first();
        $produce = DB::table('productypes')->where('name','Produce')->first();
        //echo $livestock ;

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
                'productype_id' => $livestock->id,
                'unitofmeasure_id' => $heads->id
            ]            
        );

        DB::table('products')->insert(
            [
                'name' => 'Chicken eggs',
                'productype_id' => $produce->id,
                'unitofmeasure_id' => $dozens->id
            ]            
        );

        DB::table('products')->insert(
            [
                'name' => 'Cow milk',
                'productype_id' => $produce->id,
                'unitofmeasure_id' => $litres->id
            ]            
        );


        DB::table('products')->insert(
            [
                'name' => 'Cows',
                'productype_id' => $livestock->id,
                'unitofmeasure_id' => $heads->id
            ]            
        );

        DB::table('products')->insert(
            [
                'name' => 'maize in bags',
                'productype_id' => $crops->id,
                'unitofmeasure_id' => $bags->id
            ]            
        );

        DB::table('products')->insert(
            [
                'name' => 'beans in bags',
                'productype_id' => $crops->id,
                'unitofmeasure_id' => $bags->id
            ]            
        );

    }
}
