<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('detail', 1000);
            $table->boolean('active');
            $table->unsignedInteger('farm_id');            
            $table->foreign('farm_id')
                        ->references('id')->on('farms')
                        ->onDelete('cascade');
            $table->unsignedInteger('product_id');            
            $table->foreign('product_id')
                        ->references('id')->on('products')
                        ->onDelete('cascade');            
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
        Schema::dropIfExists('lots');
    }
}
