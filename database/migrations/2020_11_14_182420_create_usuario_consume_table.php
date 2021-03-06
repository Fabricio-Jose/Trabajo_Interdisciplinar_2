<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioConsumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_consume', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreignId('alimento_id')->references('id')->on('alimentos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->tinyInteger('tipo');
            $table->integer('cantidad');
            //$table->date('fecha');
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
        Schema::dropIfExists('usuario_consume');
    }
}
