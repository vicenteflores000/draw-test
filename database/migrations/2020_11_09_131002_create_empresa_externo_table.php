<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaExternoTable extends Migration
{
    public function up()
    {
        Schema::create('empresa_externo', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('empresa_id');
            $table->string('rut')->unique();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('razon_social');
            $table->string('correo')->nullable()->unique();
            $table->string('celular')->nullable()->unique();
            $table->tinyInteger('es_cliente')->nullable();
            $table->tinyInteger('es_proveedor')->nullable();
            // Convencion
            $table->integer('author_id');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empresa_externo');
    }
}
