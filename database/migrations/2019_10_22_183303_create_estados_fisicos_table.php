<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosFisicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados_fisicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('peso',13,2);
            $table->decimal('estatura',13,2);
            $table->decimal('imc',13,2);
            $table->boolean('genero');
            $table->integer('edad');
            $table->decimal('peso_objetivo',13,2)->default(0);
            $table->decimal('peso_ideal',13,2)->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados_fisicos');
    }
}
