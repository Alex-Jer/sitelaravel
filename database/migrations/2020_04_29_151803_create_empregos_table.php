<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpregosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('empregos', function (Blueprint $table) {
            $table->id();
            $table->string('designacao');
            $table->text('descricao');
            $table->unsignedBigInteger('localidades_id');
            $table->unsignedBigInteger('empresas_id');
            $table->unsignedBigInteger('categorias_id');
            $table->unsignedBigInteger('tipos_id');
            $table->timestamps();

            $table->foreign('localidades_id')
                ->references('id')
                ->on('localidades')
                ->onDelete('cascade')
            ;

            $table->foreign('empresas_id')
                ->references('id')
                ->on('empresas')
                ->onDelete('cascade')
            ;

            $table->foreign('categorias_id')
                ->references('id')
                ->on('categorias')
                ->onDelete('cascade')
            ;

            $table->foreign('tipos_id')
                ->references('id')
                ->on('tipos')
                ->onDelete('cascade')
            ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('empregos');
    }
}