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
            $table->unsignedBigInteger('localidade_id');
            $table->unsignedBigInteger('empresa_id');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('tipo_id');
            $table->timestamps();

            $table->foreign('localidade_id')
                ->references('id')
                ->on('localidades')
                ->onDelete('cascade')
            ;

            $table->foreign('empresa_id')
                ->references('id')
                ->on('empresas')
                ->onDelete('cascade')
            ;

            $table->foreign('categoria_id')
                ->references('id')
                ->on('categorias')
                ->onDelete('cascade')
            ;

            $table->foreign('tipo_id')
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