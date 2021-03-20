<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todists', function (Blueprint $table) { 
            $table->id();          
            $table->string('id');            
            $table->string('description');            
            $table->string('fecha vencimineto');            
            $table->string('estado');            
            $table->string('fecha creación');                        
            $table->string('ultima fecha de modificación');
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
        Schema::dropIfExists('todists');
    }
}
