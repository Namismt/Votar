<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VotarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 
     */public function up()
    {
        Schema::create('votars', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->foreignId('roupa_id')->require('roupas');
        
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('votars');
}
}