<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmroleUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmrole_users', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                        ->references('id')->on('users')
                        ->onDelete('cascade');  
            $table->unsignedInteger('farmrole_id');
            $table->foreign('farmrole_id')
                        ->references('id')->on('farmroles')
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
        Schema::dropIfExists('farmrole_users');
    }
}
