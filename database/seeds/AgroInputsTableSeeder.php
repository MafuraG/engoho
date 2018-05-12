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
        DB::table('agroinputs')->insert(
            [
                'name' => 'Fertilizer Phosphate'
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Fertilizer Ammonia'
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Fertilizer Urea'
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Maize seeds'
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Chicken feed'
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Pesticide Maize '
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Vaccines for Cows '
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Chicken vaccines'
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Bean seeds'
            ]            
        );

        DB::table('agroinputs')->insert(
            [
                'name' => 'Jembe'
            ]            
        );
    }
}
