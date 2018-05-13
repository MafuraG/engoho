<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderinputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderinputs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',250);
            $table->unsignedInteger('task_id');
            $table->foreign('task_id')
                        ->references('id')->on('tasks')
                        ->onDelete('cascade');  
                        
            $table->unsignedInteger('agroinput_id');
            $table->foreign('agroinput_id')
                        ->references('id')->on('agroinputs')
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
        Schema::dropIfExists('orderinputs');
    }
}
