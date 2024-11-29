<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuario_eventos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usu_id');
            $table->unsignedBigInteger('evento_id');

            // Definir las claves foráneas correctamente
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreign('evento_id')->references('evento_id')->on('eventos')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_eventos');
    }
};
