<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tipos', function (Blueprint $table) {
            $table->id();
            $table->string('designacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('tipos');
    }
}