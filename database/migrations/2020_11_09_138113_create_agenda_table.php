<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTable extends Migration
{
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cliente_id');
            $table->unsignedInteger('recurso_id');
            $table->unsignedInteger('responsable_id');
            $table->date('fecha');
            $table->dateTime('hora_inicio');
            $table->dateTime('hora_termino');
            $table->integer('valor');
            $table->enum('estado',['disponible','reservado','confirmado','cancelado']);
            // Convencion
            $table->integer('author_id');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            //Relaciones
            $table->foreign('cliente_id')->references('id')->on('empresa_externo');
            $table->foreign('recurso_id')->references('id')->on('agenda_recurso');
            $table->foreign('responsable_id')->references('id')->on('sistema_usuario');
        });
    }

    public function down()
    {
        Schema::dropIfExists('agenda');
    }
}
