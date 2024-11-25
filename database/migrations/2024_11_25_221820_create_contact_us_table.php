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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id('contactanos_id');
            $table->string('contact_nombre', 50);
            $table->string('contact_apellido', 50);
            $table->string('contact_correo');
            $table->text('contact_mensaje');
            $table->foreignId('usu_id')->constrained('users');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};
