<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
        Schema::create('services_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();            
            $table->timestamps();
            $table->softDeletes();
        });  
        
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
            $table->foreignId('service_type_id')->constrained('services_types');    
            $table->timestamps();
            $table->softDeletes();            
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description')->nullable();            
            $table->timestamps();
            $table->softDeletes();
        });
        
        Schema::create('services', function (Blueprint $table) {
            $table->id();            
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description')->nullable();            
            $table->decimal('min_price', 10, 2);    
            $table->decimal('max_price', 10, 2);
            $table->string('lead_time')->nullable();
            $table->foreignId('category_id')->constrained('categories')->nullable();
            $table->foreignId('service_type_id')->constrained('services_types')->onDelete('cascade');
            $table->timestamps();      
            $table->integer('created_by')->references('id')->on('users');
            $table->integer('updated_by')->references('id')->on('users');
            $table->integer('deleted_by')->references('id')->on('users')->nullable();
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
        Schema::dropIfExists('services_types');
        Schema::dropIfExists('locations');        
        Schema::dropIfExists('categories');
        Schema::dropIfExists('services');
    }
}
