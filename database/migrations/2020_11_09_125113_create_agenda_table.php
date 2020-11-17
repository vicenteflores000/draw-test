<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->integer('cliente_id');
            $table->integer('recurso_id');
            $table->integer('responsable_id');
            $table->date('fecha');
            $table->dateTime('hora_inicio');
            $table->dateTime('hora_termino');
            $table->integer('valor');
            $table->enum('estado',['disponible','reservado','confirmado','cancelado']);

            $table->foreign('cliente_id')->references('id')->on('empresa_externo');
            $table->foreign('recurso_id')->references('id')->on('agenda_recurso');
            $table->foreign('responsable_id')->references('id')->on('sistema_usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda');
    }
}
