<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');  // ID autoincrementable
            $table->string('nombre');     // Nombre (tipo string en lugar de text por rendimiento)
            $table->string('email')->unique(); // Email único
            $table->timestampsTz();      // Crea los campos created_at y updated_at con zona horaria
            $table->softDeletesTz();       // deleted_at con zona horaria (Soft Delete)
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
