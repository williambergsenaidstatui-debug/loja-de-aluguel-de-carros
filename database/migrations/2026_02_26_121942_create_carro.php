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
        Schema::create('carro', function (Blueprint $table) {
            $table->id();

            $table->text('modelo');
            $table->integer('ano');
            $table->text('cor');
            $table->text('placa')->unique();
            $table->text('dono');
            $table->decimal('valor', 10, 2);
            $table->integer('potencia');
            $table->text('fabricante');
            $table->text('tipo_gasolina');
            $table->text('sobre')->nullable();
            $table->text('img')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carro');
    }
};