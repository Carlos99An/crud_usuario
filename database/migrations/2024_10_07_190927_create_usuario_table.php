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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id(); // ID del usuario
            $table->string('nombre_usuario')->unique(); // Nombre de usuario
            $table->string('nombres'); // Nombres
            $table->string('apellidos'); // Apellidos
            $table->string('correo_electronico')->unique(); // Correo electrónico
            $table->timestamps(); // Fechas de creación y modificación
            $table->softDeletes(); // Fecha de eliminación lógica
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
