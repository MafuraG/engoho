<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmsalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmsales', function (Blueprint $table) {
            $table->increments('id');           
            $table->unsignedInteger('lot_id');            
            $table->foreign('lot_id')
                        ->references('id')->on('lots')
                        ->onDelete('cascade');           
              
            $table->unsignedBigInteger('price'); 
            $table->unsignedInteger('quantity');                   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farmsales');
    }
}
