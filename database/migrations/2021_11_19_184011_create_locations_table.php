<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('street');            
            $table->string('suburb');
            $table->string('city');
            $table->string('country')->nullable();
            $table->string('state');
            $table->string('number_exterior')->nullable();
            $table->string('number_interior')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();	
            $table->string('opening_hours')->nullable();
            $table->string('closing_hours')->nullable();           
            $table->timestamps();
            $table->softDeletes();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
