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
        Schema::create('cartoes', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('saldo');
            $table->string('validade');
            $table->foreignId('funcionario_id')->constrained()->cascadeOnDelete();
            $table->foreignId('operadora_id')->constrained()->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cartoes');
    }
};
