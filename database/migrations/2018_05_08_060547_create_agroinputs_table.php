<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgroinputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agroinputs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',250);
            $table->unsignedInteger('unit_id');  
            $table->foreign('unit_id')
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
        Schema::dropIfExists('agroinputs');
    }
}
