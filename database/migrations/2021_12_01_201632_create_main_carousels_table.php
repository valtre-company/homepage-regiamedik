<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainCarouselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_carousels', function (Blueprint $table) {
            $table->id();         
            $table->string('title');                               
            $table->bigInteger('attachment_web_id');                    
            $table->bigInteger('attachment_mobile_id');                    
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
        Schema::dropIfExists('main_carousels');
    }
}
