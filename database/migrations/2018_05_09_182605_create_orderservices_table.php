<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderservices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->unsignedInteger('task_id');
            $table->foreign('task_id')
                        ->references('id')->on('tasks')
                        ->onDelete('cascade');  

            $table->unsignedInteger('agroservice_id');
            $table->foreign('agroservice_id')
                        ->references('id')->on('agroservices')
                        ->onDelete('cascade');  
            $table->unsignedBigInteger('price');            
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
        Schema::dropIfExists('orderservices');
    }
}
