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
        Schema::create('mensajes', function (Blueprint $table) {
            $table->bigIncrements('id');   // ID autoincrementable
            $table->unsignedBigInteger('conversacion_id'); // ID de la conversación (sin clave foránea)
            $table->string('remitente');   // Remitente
            $table->text('contenido');     // Contenido del mensaje
            $table->timestampsTz();        // created_at y updated_at con zona horaria
            $table->softDeletesTz();       // deleted_at con zona horaria (Soft Delete)

            // No definimos clave foránea aquí
        });
    }

    public function down()
    {
        Schema::dropIfExists('mensajes');
    }
};
