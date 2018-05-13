<?php

use Illuminate\Database\Seeder;

class AgroInputsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $bags = DB::table('unitofmeasures')->where('name','bag')->first();
        $kilograms = DB::table('unitofmeasures')->where('name','kilogram')->first();
        $bales = DB::table('unitofmeasures')->where('name','bale')->first();
        $litres = DB::table('unitofmeasures')->where('name','litre')->first();
        $heads = DB::table('unitofmeasures')->where('name','head')->first();
        $dozens = DB::table('unitofmeasures')->where('name','dozen')->first();

        DB::table('agroinputs')->insert(
            [
                'name' => 'Fertilizer Phosphate',
                'unit_id' => $bags->id
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Fertilizer Ammonia',
                'unit_id' => $bags->id
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Fertilizer Urea',
                'unit_id' => $bags->id
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Maize seeds',
                'unit_id' => $bags->id
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Chicken feed',
                'unit_id' => $bags->id
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Pesticide Maize ',
                'unit_id' => $litres->id
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Vaccines for Cows ',
                'unit_id' => $litres->id
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Chicken vaccines',
                'unit_id' => $litres->id
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Bean seeds',
                'unit_id' => $kilograms->id
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Jembe',
                'unit_id' => $dozens->id
            ]            
        );
    }
}
