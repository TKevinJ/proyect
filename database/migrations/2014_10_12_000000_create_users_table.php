<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id'); //integer AUTOINCREMENT
            $table->string('name');   // varchar
            $table->string('email')->unique();  // varchar UNIQUE (unico)
            

            $table->string('password'); //varchar
            $table->rememberToken(); //almacena recordatorio
            $table->timestamps(); //marca de tiempo 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
