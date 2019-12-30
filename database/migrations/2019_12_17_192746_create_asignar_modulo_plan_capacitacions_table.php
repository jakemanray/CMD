<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignarModuloPlanCapacitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignar_modulo_plan_capacitacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('plan_capacitacion_id'); // Relación con plan_capacitacion
            $table->foreign('plan_capacitacion_id')->references('id')->on('plan_capacitacions');
            $table->unsignedBigInteger('modulo_capacitacion_id'); // Relación con modulo_capacitacion
            $table->foreign('modulo_capacitacion_id')->references('id')->on('modulo_capacitacions');
            $table->unsignedBigInteger('nivel_id'); // Relación con nivel
            $table->foreign('nivel_id')->references('id')->on('nivels');
            $table->unsignedBigInteger('user_id'); // Relación con usuario
            $table->foreign('user_id')->references('id')->on('users');
            $table->enum('modalidad',['PRESENCIAL','B-LEARNING','E-LEARNING']);
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
        Schema::dropIfExists('asignar_modulo_plan_capacitacions');
    }
}
