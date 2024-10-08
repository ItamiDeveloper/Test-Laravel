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
        Schema::create('conversaciones', function (Blueprint $table) {
            $table->bigIncrements('id');   // ID autoincrementable
            $table->unsignedBigInteger('usuario_id'); // ID del usuario (sin clave foránea)
            $table->timestampsTz();        // created_at y updated_at con zona horaria
            $table->softDeletesTz();       // deleted_at con zona horaria (Soft Delete)

            // No definimos clave foránea aquí
        });
    }

    public function down()
    {
        Schema::dropIfExists('conversaciones');
    }
};
