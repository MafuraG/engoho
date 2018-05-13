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
                'unitofmeasure_id' => $bags->id
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Fertilizer Ammonia',
                'unitofmeasure_id' => $bags->id
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Fertilizer Urea',
                'unitofmeasure_id' => $bags->id
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Maize seeds',
                'unitofmeasure_id' => $bags->id
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Chicken feed',
                'unitofmeasure_id' => $bags->id
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Pesticide Maize ',
                'unitofmeasure_id' => $litres->id
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Vaccines for Cows ',
                'unitofmeasure_id' => $litres->id
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Chicken vaccines',
                'unitofmeasure_id' => $litres->id
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Bean seeds',
                'unitofmeasure_id' => $kilograms->id
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Jembe',
                'unitofmeasure_id' => $dozens->id
            ]            
        );
    }
}
