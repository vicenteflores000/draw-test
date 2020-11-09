<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaRecursoTable extends Migration
{
    public function up()
    {
        Schema::create('agenda_recurso', function (Blueprint $table) {
            $table->increments('id');
            $table->morphs('modelo');
            // Convencion
            $table->integer('author_id');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('agenda_recurso');
    }
}
