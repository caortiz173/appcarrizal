<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->bigIncrements('id_asistencia');
            $table->date('fecha');
            $table->string('hora',5);
            $table->string('num_fallas',2);
            $table->string('excusa',500);
            $table->unsignedBigInteger('id_est');
            $table->foreign('id_est')->references('id_estudiantes')->on('estudiantes');

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
        Schema::dropIfExists('asistencias');
    }
}
