<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendis', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('apellidos');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('correo');
            $table->string('edad');

            $table->foreignId('id_ficha')
            ->nullable()
            ->constrained('fichas')
            ->cascadeOnUpdate()
            ->nullOnDelete();

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
        Schema::dropIfExists('aprendis');
    }
};
