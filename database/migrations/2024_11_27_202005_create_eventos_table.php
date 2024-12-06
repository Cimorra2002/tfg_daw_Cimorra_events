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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id('evento_id');
            $table->string('evento_nombre', 100);
            $table->date('evento_fecha');
            $table->time('evento_hora_inicio');
            $table->time('evento_hora_fin');
            $table->decimal('evento_precio', 8, 2);
            $table->string('evento_descripcion', 400);
            $table->unsignedBigInteger('localiz_id');
            $table->foreign('localiz_id')->references('localiz_id')->on('localizaciones')->onDelete('cascade');
            $table->string('evento_imagen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
