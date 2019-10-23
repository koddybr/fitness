<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMacronutrientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('macronutrientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->decimal('peso',13,2)->default(0);
            $table->decimal('calorias',13,2)->default(0);
            $table->decimal('proteinas',13,2)->default(0);
            $table->decimal('carbohidratos',13,2)->default(0);
            $table->decimal('grasas',13,2)->default(0);
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
        Schema::dropIfExists('macronutrientes');
    }
}
