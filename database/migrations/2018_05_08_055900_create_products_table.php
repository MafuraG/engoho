<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->unsignedInteger('productype_id');
            $table->foreign('productype_id')
                ->references('id')->on('productypes')
                ->onDelete('cascade');
            $table->unsignedInteger('unitofmeasure_id');  
            $table->foreign('unitofmeasure_id')
                ->references('id')->on('unitofmeasures')
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
        Schema::dropIfExists('products');
    }
}
