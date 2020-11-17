<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaExternoDatosExtraTable extends Migration
{
    public function up()
    {
        Schema::create('empresa_externo_datos_extra', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key');
            $table->text('value');
            $table->unsignedInteger('externo_id');
            // Convencion
            $table->unsignedInteger('author_id');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            // Relaciones
        $table->foreign('externo_id')->references('id')->on('empresa_externo');
        });
    }

    public function down()
    {
        Schema::dropIfExists('empresa_externo_datos_extra');
    }
}
