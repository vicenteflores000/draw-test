<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSistemaUsuarioTable extends Migration
{
    public function up()
    {
        Schema::create('sistema_usuario', function (Blueprint $table) {
            $table->increments('id');
            // Convencion
            $table->integer('author_id');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sistema_usuario');
    }
}
