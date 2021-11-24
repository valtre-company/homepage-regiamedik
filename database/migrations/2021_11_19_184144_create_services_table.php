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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description')->nullable();            
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description')->nullable();            
            $table->foreignId('category_id')->constrained()->onDelete('cascade');        
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('service_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();            
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
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');        
            $table->foreignId('service_type_id')->constrained('service_types')->onDelete('cascade');
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
        Schema::dropIfExists('sub_categories');        
        Schema::dropIfExists('categories');
        Schema::dropIfExists('service_types');
        Schema::dropIfExists('services');
    }
}
