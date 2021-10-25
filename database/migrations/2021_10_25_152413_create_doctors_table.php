<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('rut', 100)->nullable();
            $table->string('name_doctor', 100)->nullable();
            $table->string('apellido_doctor', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('direccion', 100)->nullable();
            $table->enum('especialidad', ['cirujano', 'pediatra','psiquiatra'])->nullable()->default('cirujano');
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
        Schema::dropIfExists('doctors');
    }
}
