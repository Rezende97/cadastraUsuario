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
        Schema::create('moradias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pessoa_id')->references('id')->on('pessoas');
            $table->string('rua', 255);
            $table->string('bairro', 255);
            $table->string('cep');
            $table->longText('complemento');        
            $table->string('estado', 255);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moradias');
    }
};
